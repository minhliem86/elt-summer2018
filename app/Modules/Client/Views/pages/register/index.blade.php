@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA Du Học, Hè 2018, Đăng ký du học hè">
    <meta name="description" content="Đăng ký tham gia du học hè 2018 cùng ILA Du Học">
@stop

@section("title", "ILA Du Học Hè 2018 - Đăng Ký")

@section("content")
    @include("Client::layouts.banner-demo")

    <section class="register">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="register-container" id="startForm">
                        <h2 class="title">ĐỂ ĐƯỢC HỖ TRỢ TƯ VẤN <span> VUI LÒNG HOÀN THÀNH BẢN THÔNG TIN DƯỚI ĐÂY</span></h2>
                        <div class="form-container each animate" data-animate="zoomInUp">
                            @if($errors->any())
                                <script>
                                    $(window).load(function () {
                                        $('html, body').animate({
                                            scrollTop:$('#startForm').offset().top - 120
                                        },1000)
                                    })
                                </script>
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            {!! Form::open(['route' => 'register.post','method' => 'POST', 'class' => 'form', 'id' => "form_register"]) !!}
                                <div class="form-group">
                                    <label for="fullname">Họ và Tên Học Viên</label>
                                    {!! Form::text('fullname',old('fullname'), ['class'=>'form-control', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại liên lạc</label>
                                    {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="program">Chương trình tham gia</label>
                                    {!! Form::select('program',[''=> '-- Chương Trình Học --'] + $program, old('program'), ['class'=>'form-control', 'required']) !!}
                                </div>
                                <div class="form-group row">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="program">Chọn Thành Phố</label>
                                                    {!! Form::select('city',[''=> '-- Thành Phố --'] + $city, old('city'), ['class'=>'form-control', 'required']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="program">Chọn Trung Tâm ILA</label>
                                                    <div class="load-center">
                                                        {!! Form::select('program',[''=> '-- Trung Tâm ILA --'],old('program'), ['class'=>'form-control', 'required', 'disabled']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group btn-container">
                                    <div class="wrap-btn">
                                        <input type="submit" class="btn-reg" id="submit-btn" name="btn-submit" value="Đăng ký ngay">
                                    </div>
                                </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("Client::layouts.why")
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/jsSLider/jcslider.css">
    <script src="{!! asset('public/assets/frontend')!!}/js/jsSLider/jquery.jcslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.jc-slider').jcSlider({
                animationIn     : "zoomIn",
                animationOut    : "zoomOut",
                stopOnHover     : true, // true by default
                loop            : true // true by default
            })
        })
    </script>
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/square.css">
    <link rel="stylesheet" href="{!! asset('public/assets/frontend')!!}/js/icheck/skins/square/orange.css">
    <script src="{!! asset('public/assets/frontend')!!}/js/icheck/icheck.min.js "></script>
    <script src="http://ila-duhoc.edu.vn/static/default/js/jquery.md5.js"></script>
    <script>
        $(document).ready(function(){
            $('select[name=city]').change(function(){
                var city_id = $(this).val();
                $.ajax({
                    url: '{!! route('register.loadCenter') !!}',
                    type: 'POST',
                    data: {_token: $('meta[name=csrf-token]').attr("content"), city_id: city_id},
                    success: function(rs){
                        $('.load-center').html(rs.data);
                    }
                })
            })
        })
    </script>
@stop
