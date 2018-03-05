@extends('Admin::layouts.default')

@section('content')
    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissable">
            <p>{{Session::get('error')}}</p>
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable">
            <p>{{Session::get('success')}}</p>
        </div>
    @endif
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="wrap-title">
                            <strong>Event</strong>
                        </div>
                        <div class="wrap-control">
                            {{Html::link(route('admin.event.create'),'Add New',['class'=>'btn btn-primary btn-sm'])}}
                            <button type="button" class="btn btn-danger btn-sm" id="btn-remove-all">Remove All Selected</button>
                            <button type="button" class="btn btn-warning btn-sm text-white" id="btn-updateOrder">Update Order</button>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped table-sm">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="20%"><i class="glyphicon glyphicon-search"></i> Title</th>
                                <th width="10%">Start Date</th>
                                <th width="10%">End Date</th>
                                <th width="15%">&nbsp;</th>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- DATA TABLE -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/js/plugins/datatables/jquery.dataTables.min.css">
    <script src="{{asset('/public/assets/admin')}}/js/plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- ALERTIFY -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/js/plugins/alertify/alertify.css">
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/js/plugins/alertify/bootstrap.min.css">
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/js/plugins/alertify/alertify.js"></script>
    <script>
        $(document).ready(function(){

            hideAlert('.alert');
            // REMOVE ALL
            var table = $('table').DataTable({
                processing: true,
                serverSide: true,
                ajax:{
                    url:  '{!! route('admin.event.getData') !!}',
                    data: function(d){
                        d.name = $('input[type="search"]').val();
                    }
                },
                columns: [
                    {data: 'id', name: 'id', 'orderable': false},
                    {data: 'title', title: 'Title'},
                    {data: 'start', title: 'Start Date'},
                    {data: 'end', name: 'End Date'},
                    {data: 'action', name: 'action', 'orderable': false}
                ],
                initComplete: function(){
                    var table_api = this.api();
                    var data = [];
                    var data_order = {};
                    $('#btn-remove-all').click( function () {
                        var rows = table_api.rows('.selected').data();
                        rows.each(function(index, e){
                            data.push(index.id);
                        })
                        alertify.confirm('You can not undo this action. Are you sure ?', function(e){
                            if(e){
                                $.ajax({
                                    'url':"{!!route('admin.event.deleteAll')!!}",
                                    'data' : {arr: data},
                                    'type': "POST",
                                    'success':function(result){
                                        if(result.msg = 'ok'){
                                            table.rows('.selected').remove();
                                            table.draw();
                                            alertify.success('Xóa dữ liệu thành công');
                                            location.reload();
                                        }
                                    }
                                });
                            }
                        })
                    })
                }
            });
            /*SELECT ROW*/
            $('table tbody').on('click','tr',function(){
                $(this).toggleClass('selected');
            })

        });
        function confirm_remove(a){
            alertify.confirm('You can not undo this action. Are you sure ?', function(e){
                if(e){
                    a.parentElement.submit();
                }
            });
        }

        function hideAlert(a){
            setTimeout(function(){
                $(a).fadeOut();
            },2000)
        }

    </script>
@stop
