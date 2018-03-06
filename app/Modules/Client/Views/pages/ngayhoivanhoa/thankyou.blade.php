@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA Du Học, Hè 2018, Đăng ký du học hè">
    <meta name="description" content="Đăng ký tham gia du học hè 2018 cùng ILA Du Học">
@stop

@section("title", "ILA Du Học Hè 2018 - Đăng ký thành công")

@section("content")
    @include("Client::layouts.banner_general")

    <section class="register thankyou bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="register-container" id="startForm">
                        <h2 class="title">CẢM ƠN BẠN ĐÃ ĐĂNG KÝ THÔNG TIN <span> ILA DU HỌC SẼ LIÊN LẠC VỚI BẠN TRONG THƠI GIAN SỚM NHẤT.</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("Client::layouts.why")
@stop

@section("script")
    <script defer>
        $(document).ready(function () {
            $('.banner-homepage .tp-banner').revolution({
                delay: 5000,
                startwidth: 1920,
                startheight: 700,
                hideThumbs: 10,
                navigationType: 'none'
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
    <!-- B5117_ILA_Success_19Jan2018 - Ads by Ambient Digital -->
<script type="text/javascript" src="https://media.adnetwork.vn/js/retargeting.js"></script>
<script type="text/javascript">
    try{
        AbdTracking.Retargeting({"id":1516359070});
    }catch(e){}
</script>
<noscript><img src="https://retg.adnetwork.vn/247/retargeting/id_1516359070/ " width="1" height="1" border="0" alt=""/></noscript>
<!-- B5117_ILA_Success_19Jan2018 - Ads by Ambient Digital -->
@stop
