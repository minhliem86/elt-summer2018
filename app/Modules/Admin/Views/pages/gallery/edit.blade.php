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
                {{Form::model($inst, ['route'=>['admin.event.update',$inst->id], 'method'=>'put', 'files'=>true ])}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="center">Chọn Trung Tâm</label>
                        {!! Form::select('center_id', [''=>'Chọn Trung Tâm']+ $center, old('center_id'), ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="testimonial">Title</label>
                        {!!  Form::text('title',old('title'), ['class'=>'form-control', 'placeholder'=>'Promotion Name'])!!}
                    </div>

                    <div class="form-group">
                        <label for="description">Content</label>
                        {!! Form::textarea('description',old('description'),['class'=>'form-control my-editor', 'rows'=>15]) !!}
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                {!! Form::text('start_date', Carbon\Carbon::parse($inst->start)->format('d/m/Y H:i'), ['class'=>'form-control datepicker_start', 'placeholder'=>'Enter Start Date']) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                {!! Form::text('end_date', Carbon\Carbon::parse($inst->end)->format('d/m/Y H:i'), ['class'=>'form-control datepicker_end', 'placeholder'=>'Enter End Date']) !!}
                            </div>
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

    <link rel="stylesheet" href="{!! asset('public/assets/admin/js/plugins/datetimepicker/bootstrap-datetimepicker.min.css') !!}">
    <script src="{!! asset('public/assets/admin/js/plugins/datetimepicker/bootstrap-datetimepicker.min.js') !!}"></script>

    <script>
        const url = "{{url('/')}}"
        init_tinymce(url);
        // BUTTON ALONE
        init_btnImage(url,'#lfm');
        // SUBMIT FORM
        // $(document).ready(function(){
        //     $('radio[name="status"]').change(function(){
        //
        //     })
        // })
        $(document).on('change', 'input[name=status]', function(){
            if($(this).prop('checked')){
                $(this).val(1);
            }else{
                $(this).val(0);
            }
        })
        $(document).ready(function(){
            $('.datepicker_end').datetimepicker({
                startDate: '{!! date($inst->start)!!}',
                format: 'dd/mm/yyyy hh:ii',
            });
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
