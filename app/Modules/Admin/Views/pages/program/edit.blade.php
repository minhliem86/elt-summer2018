@extends('Admin::layouts.default')

@section('link')
    {{Html::link(url()->previous(), 'Cancel', ['class'=>'btn btn-danger'])}}
    <button class="btn btn-primary" onclick="submitForm();">Save Changes</button>
@stop

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Testimonial</strong>
                    <small>Edit</small>
                </div>
                {{Form::model($inst, ['route'=>['admin.program.update',$inst->id], 'method'=>'put', 'files'=>true ])}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Program</label>
                        {!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {!! Form::textarea('description',old('description'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        {!! Form::textarea('content',old('content'), ['class' => 'form-control my-editor', 'rows' => 15]) !!}
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

    <!-- ALERTIFY -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/js/plugins/alertify/alertify.css">
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/js/plugins/alertify/bootstrap.min.css">
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/js/plugins/alertify/alertify.js"></script>

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
    </script>
@stop
