@extends('Admin::layouts.default')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Program</strong>
                    <small>Create</small>
                </div>
                {!! Form::open(['route'=>'admin.program.store', 'class' =>'form']) !!}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Program</label>
                        <input type="text" name="name" class="form-control" id="event" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Sub Title</label>
                        <input type="text" name="subtitle" class="form-control"  placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {!! Form::textarea('description',old('description'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        {!! Form::textarea('content',old('content'), ['class' => 'form-control my-editor', 'rows' => 15]) !!}
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
    </script>
@stop
