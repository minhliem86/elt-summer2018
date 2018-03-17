@extends('Admin::layouts.default')

@section('link')
    <button class="btn btn-primary" onclick="submitForm();">Save</button>
@stop

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Event</strong>
                    <small>Create</small>
                </div>
                {!! Form::open(['route'=>'admin.event.store', 'class' =>'form']) !!}
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="event" placeholder="Enter Title">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="text" name="start_date" class="form-control datepicker_start" id="event" placeholder="Enter Start Date">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="text" name="end_date" class="form-control datepicker_end" id="event" placeholder="Enter Start Date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {!! Form::textarea('description',old('description'),['class'=>'form-control my-editor', 'rows'=>15]) !!}
                    </div>

                    <div class="form-group">
                        <label >General Image:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-outline-secondary text-secondary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="hidden" name="img_url">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                    </div>
                    <!--/.row-->

                </div>
                <div class="card-footer">
                    <a class="btn btn-sm btn-warning text-white" href="{!! url()->previous() !!}"><i class="fa fa-caret-left"></i> Cancel</a>
                    <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-dot-circle-o"></i> Save</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('public')}}/vendor/laravel-filemanager/js/lfm.js"></script>
    <script src="{{asset('public/assets/admin/js/script.js')}}"></script>

    <link rel="stylesheet" href="{!! asset('public/assets/admin/js/plugins/datetimepicker/bootstrap-datetimepicker.min.css') !!}">
    <script src="{!! asset('public/assets/admin/js/plugins/datetimepicker/bootstrap-datetimepicker.min.js') !!}"></script>

    <script>
        const url = "{{url('/')}}"
        init_tinymce(url);
        // BUTTON ALONE
        init_btnImage(url,'#lfm');

        $(document).ready(function(){
            var date_start = $('.datepicker_start').datetimepicker({
//                endDate: '0d',
                format: 'dd/mm/yyyy hh:ii',
                autoclose: true,
            }).on('changeDate', function(e){
                $('.datepicker_end').datetimepicker({
                    format: 'dd/mm/yyyy hh:ii',
                    startDate: e.date,
                    autoclose: true
                })
            });
        })
    </script>
@stop
