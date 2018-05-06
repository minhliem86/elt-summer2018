@extends('Admin::layouts.default')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Testimonial</strong>
                    <small>Edit</small>
                </div>
                {{Form::model($inst, ['route'=>['admin.gallery.update',$inst->id], 'method'=>'put', 'files'=>true ])}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        {!! Form::text('title', old('title'), ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label >General Image:</label>
                        <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-outline-secondary text-secondary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                            {{Form::hidden('img_url',old('img_url'), ['class'=>'form-control', 'id'=>'thumbnail' ])}}
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;" src="{{asset('public/upload/'.$inst->img_url)}}">
                    </div>
                    <div class="form-row">
                        <div class="col-2">
                            <div class="form-group">
                                <div class="">
                                    <label for="status">Status</label>
                                </div>
                                <label class="switch switch-icon switch-success-outline">
                                    <input type="checkbox" name="status" class="switch-input" value="{!! $inst->status ? 1 : 0 !!}" {!! $inst->status ? "checked" : null  !!} data-id="{!! $inst->id !!}">
                                    <span class="switch-label" data-on="" data-off=""></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <label for="order">Order</label>
                                {!! Form::text('order', old('order'), ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <!--/.row-->

                    <div class="form-group">
                        <label>Photo in Gallery</label>
                        <div class="photo-container">
                            <input type="file" name="thumb-input[]" id="thumb-input" multiple >
                        </div>
                    </div>

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

    <!-- ALERTIFY -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/js/plugins/alertify/alertify.css">
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/js/plugins/alertify/bootstrap.min.css">
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/js/plugins/alertify/alertify.js"></script>

    <link rel="stylesheet" href="{!! asset('public/assets/admin/js/plugins/datetimepicker/bootstrap-datetimepicker.min.css') !!}">
    <script src="{!! asset('public/assets/admin/js/plugins/datetimepicker/bootstrap-datetimepicker.min.js') !!}"></script>

    <!--BT Upload-->
    <link rel="stylesheet" href="{!!asset('/public/assets/admin')!!}/js/plugins/bootstrap-input/css/fileinput.min.css">
    <script src="{!!asset('/public/assets/admin')!!}/js/plugins/bootstrap-input/js/plugins/sortable.min.js"></script>
    <script src="{!!asset('/public/assets/admin')!!}/js/plugins/bootstrap-input/js/plugins/purify.min.js"></script>
    <script src="{!!asset('/public/assets/admin')!!}/js/plugins/bootstrap-input/js/fileinput.min.js"></script>

    <script>
        const url = "{{url('/')}}"
        init_tinymce(url);
        // BUTTON ALONE
        init_btnImage(url,'#lfm');
        $(document).on('change', 'input[name=status]', function(){
            if($(this).prop('checked')){
                $(this).val(1);
            }else{
                $(this).val(0);
            }
        })
        $(document).ready(function(){
            $("#thumb-input").fileinput({
                uploadUrl: "{!!route('admin.product.store')!!}", // server upload action
                uploadAsync: false,
                showUpload: false,
                showCancel: false,
                showCaption: false,
                dropZoneEnabled : true,
                showBrowse: false,
                overwriteInitial: false,
                browseOnZoneClick: true,
                fileActionSettings:{
                    showUpload : false,
                    showZoom: false,
                    showDrag: false,
                    showDownload: false,
                    removeIcon: '<i class="fa fa-trash text-danger"></i>',
                },
                initialPreview: [
                    @foreach($inst->photos as $photo)
                    "{!!asset($photo->thumb_url)!!}",
                    @endforeach
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: [
                    @foreach($inst->photos as $item_photo)
                    {'url': '{!! route("admin.gallery.AjaxRemovePhoto") !!}', key: "{!! $item_photo->id !!}", caption: "{!! $item_photo->filename !!}"},
                    @endforeach
                ],
                layoutTemplates: {
                    progress: '<div class="kv-upload-progress hidden"></div>'
                },
            });
        })

        function removePhoto(e, id){
            $.ajax({
                url: '{!!route("admin.gallery.AjaxRemovePhoto")!!}',
                type: 'POST',
                data:{id_photo: id, _token:$('meta[name="csrf-token"]').attr('content')},
                success:function(data){
                    if(!data.error){
                        e.parentNode.parentNode.parentNode.remove();
                    }
                }
            })
        }
        function updatePhoto(e, id){
            var value = e.parentNode.previousElementSibling.childNodes[1].value;
            $.ajax({
                url: '{!!route("admin.gallery.AjaxUpdatePhoto")!!}',
                type: 'POST',
                data:{id_photo: id, value: value, _token:$('meta[name="csrf-token"]').attr('content')},
                success:function(data){
                    if(!data.error){
                        alertify.success('Cập nhật thay đổi.');
                    }
                }
            })
        }
    </script>
@stop
