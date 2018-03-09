@extends("Client::layouts.default")

@section("meta")
    <meta name="keywords" content="ILA, ILA Du Học, Du Học Hè 2018, ILA Du Học Hè 2018, Hè 2018">
    <meta name="description" content="ILA Du học hè 2018 với 4 giá trị cốt lõi: Phiêu lưu, Tự lập, Trải nghiệm, Trưởng thành. Là bước tiền trạm cho du học dài hạn thành công">
@stop

@section("content")
    {{--<div id="preloader">--}}
        {{--<div class="sgv-container">--}}
            {{--<div id="my-logo"></div>--}}
            {{--<p id="loading-img">--}}
                {{--<img src="{!!asset('public') !!}/assets/frontend/images/gif-load.gif" alt="Loading">--}}
            {{--</p>--}}
            {{--<script>--}}
                {{--if(!Cookies.get('firsttime')){--}}
                    {{--renderSVG("my-logo","loading-img");--}}
                    {{--HidePreLoader("preloader");--}}
                    {{--Cookies.set("firsttime",1,{expires: 43200});--}}
                {{--}else{--}}
                    {{--$("#preloader").remove();--}}
                {{--}--}}
            {{--</script>--}}
        {{--</div>--}}
    {{--</div>--}}
    @include("Client::layouts.banner-demo")
    <!-- **************** Wellcome ****************-->
    <section class="wellcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>CHÀO MỪNG ĐẾN VỚI<span> TRẠI HÈ TIẾNG ANH ĐẲNG CẤP QUỐC TẾ 2018</span></h2>
                    <div class="welcome-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/morongtamnhin.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">8 TUẦN <span>XUẤT SẮC TIẾNG ANH</span></p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.3s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/renluyen.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">8 TUẦN <span>VUI CHƠI KHÁM PHÁ</span></p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/gapgo-giaoluu.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">8 TUẦN <span>SAN SẺ YÊU THƯƠNG</span></p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.4s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/thunghiem.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">8 TUẦN <span>GIÁO DỤC TOÀN DIỆN</span></p>
                                    </div>
                                </div>
                                <div class="col-md-15">
                                    <div class="each-welcome each animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.5s">
                                        <div class="img-shadow-container" >
                                            <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/trainghiem.png)"></span>
                                        </div>
                                        <p class="title title-inner-section">HỌC BỔNG <span>GIÁ TRỊ</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT -->
    @include("Client::layouts.product")

    <!--TESTIMONIAL-->
    <section class="testi">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-container">
                        <h2>CHIA SẺ TRẢI NGHIỆM</h2>
                        <div class="testi-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="each-testi each animate" data-animate="zoomIn">
                                            <img src="{!!asset('public/assets/frontend/images/layouts/540x355.png') !!}" class="img-responsive img-inner-section" alt="">
                                            <div class="content">
                                                <h4 class="author">HOÀNG NAM ANH</h4>
                                                <p class="desc">“Chuyến du học hè tại Anh đã giúp mình có thêm nhiều bạn mới, có nhiều trải nghiệm trong cuộc sống và tự tin hơn trong giao tiếp bằng tiếng Anh. Mình đã được tham quan rất nhiều điểm đến thú vị tại Anh, trong đó, Cầu tháp London là nơi mà mình thích nhất”</p>
                                                <a href="" class="btn btn-yl">Đọc thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="each-testi each animate" data-animate="zoomIn">
                                            <img src="{!!asset('public/assets/frontend/images/layouts/540x355.png') !!}" class="img-responsive img-inner-section" alt="">
                                            <div class="content">
                                                <h4 class="author">HOÀNG NAM ANH</h4>
                                                <p class="desc">“Chuyến du học hè tại Anh đã giúp mình có thêm nhiều bạn mới, có nhiều trải nghiệm trong cuộc sống và tự tin hơn trong giao tiếp bằng tiếng Anh. Mình đã được tham quan rất nhiều điểm đến thú vị tại Anh, trong đó, Cầu tháp London là nơi mà mình thích nhất”</p>
                                                <a href="" class="btn btn-yl">Đọc thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="each-testi each animate" data-animate="zoomIn">
                                            <img src="{!!asset('public/assets/frontend/images/layouts/540x355.png') !!}" class="img-responsive img-inner-section" alt="">
                                            <div class="content">
                                                <h4 class="author">HOÀNG NAM ANH</h4>
                                                <p class="desc">“Chuyến du học hè tại Anh đã giúp mình có thêm nhiều bạn mới, có nhiều trải nghiệm trong cuộc sống và tự tin hơn trong giao tiếp bằng tiếng Anh. Mình đã được tham quan rất nhiều điểm đến thú vị tại Anh, trong đó, Cầu tháp London là nơi mà mình thích nhất”</p>
                                                <a href="" class="btn btn-yl">Đọc thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="each-testi each animate" data-animate="zoomIn">
                                            <img src="{!!asset('public/assets/frontend/images/layouts/540x355.png') !!}" class="img-responsive img-inner-section" alt="">
                                            <div class="content">
                                                <h4 class="author">HOÀNG NAM ANH</h4>
                                                <p class="desc">“Chuyến du học hè tại Anh đã giúp mình có thêm nhiều bạn mới, có nhiều trải nghiệm trong cuộc sống và tự tin hơn trong giao tiếp bằng tiếng Anh. Mình đã được tham quan rất nhiều điểm đến thú vị tại Anh, trong đó, Cầu tháp London là nơi mà mình thích nhất”</p>
                                                <a href="" class="btn btn-yl">Đọc thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END-->

    @include("Client::layouts.why")
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend') !!}/js/video/plyr.css">
    <script src="{!! asset('public/assets/frontend') !!}/js/video/plyr.js"></script>

    <!--LAYER SLIDER-->
    <link rel="stylesheet" href="{!! asset('public/assets/frontend/js') !!}/fractionslider/css/fractionslider.css" type="text/css">
    <script src="{!! asset('public/assets/frontend/js') !!}/fractionslider/jquery.fractionslider.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.banner-homepage .tp-banner').revolution({
                delay:5000,
                startwidth:1920,
                startheight:700,
                hideThumbs:10,
                navigationType:'none'
            })

            /*INITIAL VIDEO*/
            plyr.setup();

            $('#banner-demo').fractionSlider({
                'fullWidth': 			true,
                'responsive': 			true,
                'dimensions': 			"1920,700",
            })
        })
    </script>
@stop