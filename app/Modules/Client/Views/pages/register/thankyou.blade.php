@extends("Client::layouts.default")

@section("meta")

@stop

@section("content")
    @include("Client::layouts.banner-donkey")

    <section class="register thankyou">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="register-container" id="startForm">
                        <h2 class="title">CẢM ƠN BẠN ĐÃ ĐĂNG KÝ THÔNG TIN <span> ILA SẼ LIÊN LẠC VỚI BẠN TRONG THỜI GIAN SỚM NHẤT.</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("Client::layouts.why")
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend/js/jsSlider')!!}/jcslider.css">
    <script src="{!! asset('public/assets/frontend/js/jsSlider')!!}/jquery.jcslider.js"></script>
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
    <script>
        $(document).ready(function () {
            $('input.radio-city, input.radio-quocgia').iCheck({
                radioClass: 'iradio_square-orange',
            });
        })
        $(window).load(function () {
            $('html, body').animate({
                scrollTop:$('#startForm').offset().top - 120
            },1000)
        })
    </script>
@stop

@section('tracking_code')

@stop