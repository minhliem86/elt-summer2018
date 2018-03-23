@extends("Client::layouts.default")

@section('meta')
    <meta name="keywords" content="ILA Anh Văn Hè 2018, Tiếng Anh Hè 2018, Anh Văn Hè, Trại hè tiếng Anh đẳng cấp quốc tế">
    <meta name="description" content="Chương trình anh văn hè ILA 2018 - Trại hè tiếng Anh đẳng cấp quốc tế lần đầu tiên xuất hiện tại Việt Nam dành cho học viên từ 4-16 tuổi.">
    <meta property="og:image" content="{!! asset('public/assets/frontend/images/fb/fb-share-S.jpg') !!}" />
@stop

@section('title', 'Chương trình Anh Văn Hè 2018')

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
    @include("Client::layouts.banner-donkey")
    <!-- **************** Wellcome ****************-->
    <section class="wellcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>TRẠI HÈ TIẾNG ANH ĐẲNG CẤP QUỐC TẾ</h2>
                    <div class="des-welcome-container">
                        <p class="description-welcome">ILA tự hào giới thiệu trại hè tiếng Anh đẳng cấp quốc tế lần đầu tiên xuất hiện tại Việt Nam dành cho học viên từ 4-16 tuổi.</p>
                        <p class="description-welcome">Đây là chương trình đươc xây dựng bằng tất cả tâm huyết của các chuyên gia giáo dục đẳng cấp quốc tế, đội ngũ quản lý học vụ giàu lòng yêu trẻ nhằm mang đến một mùa hè tuyệt vời, phát triển toàn diện: giáo dục kiến thức, giáo dục thể chất và giáo dục nhân cách.</p>
                        <p class="descriotion-welcome">Chương trình được thiết kế đặc biệt nhằm tập trung phát triển toàn diện tiếng Anh song song với 6 kỹ năng vàng: giao tiếp, hợp tác, sáng tạo, tư duy phản biện, kiến thức công nghệ và tự hoàn thiện bản thân nhưng vẫn tràn ngập niềm vui tuổi thơ với bạn bè đồng trang lứa.</p>
                    </div>

                    <div class="welcome-container">
                        @if(!$mobile->isMobile())
                        <div class="flex-container mobile-flex">
                            <div class="each-kv">
                                <div class="each-welcome" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                                    <div class="img-shadow-container" >
                                        <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/frame-selling-point.png)">
                                            <p class="title title-inner-section title-welcome" >CAO THỦ<span>TIẾNG ANH</span></p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="each-kv">
                                <div class="each-welcome" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                                    <div class="img-shadow-container" >
                                        <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/frame-selling-point.png)">
                                            <p class="title title-inner-section title-welcome" >XÂY DỰNG<span>TÍNH CÁCH</span></p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="each-kv">
                                <div class="each-welcome" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                                    <div class="img-shadow-container" >
                                        <span class="img-load" style="background-image:url({!!asset('public/assets/frontend') !!}/images/keypoint/frame-selling-point.png)">
                                            <p class="title title-inner-section title-welcome" >SAN SẺ<span>YÊU THƯƠNG</span></p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="flex-container">
                            <div class="each-kv">
                                <div class="each-welcome" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                                    <img src="{!!asset('public/assets/frontend') !!}/images/keypoint/caothutienganh.png" class="img-responsive" alt="8 tuần - Cao Thủ Tiếng Anh">
                                </div>
                            </div>
                            <div class="each-kv">
                                <div class="each-welcome" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.3s">
                                    <img src="{!!asset('public/assets/frontend') !!}/images/keypoint/xaydungtinhcach.png" class="img-responsive" alt="8 tuần - Xây Dựng Tính Cách">
                                </div>
                            </div>
                            <div class="each-kv">
                                <div class="each-welcome" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                                    <img src="{!!asset('public/assets/frontend') !!}/images/keypoint/sanseyeuthuong.png" class="img-responsive" alt="8 tuần - San Sẻ Yêu Thương">
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="program no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-button text-center">
                        <a href="{!! route('register') !!}" class="btn btn-reg">ĐĂNG KÝ NGAY</a>
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
                                @if(!$testimonial->isEmpty())
                                    @foreach($testimonial->chunk(2) as $item_chunk)
                                    <div class="row">
                                        @foreach($item_chunk as $item_testi)
                                        <div class="col-sm-6">
                                            <div class="each-testi each animate" data-animate="zoomIn">
                                                <img src="{!! asset('public/upload/'.$item_testi->img_avatar) !!}" class="img-responsive img-inner-section" alt="">
                                                <div class="content">
                                                    <h4 class="author">{!! $item_testi->title !!}</h4>
                                                    <p class="desc">{!!$item_testi->content !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END-->

    @include("Client::layouts.why")

    @include("Client::layouts.partner")
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend') !!}/js/video/plyr.css">
    <script src="{!! asset('public/assets/frontend') !!}/js/video/plyr.js"></script>

    <!--SLICK-->
    <link rel="stylesheet" href="{!! asset('public/assets/frontend/js/slick')!!}/slick.css">
    <script src="{!! asset('public/assets/frontend/js/slick')!!}/slick.min.js"></script>

    <script>
        $(document).ready(function(){

            /*SLICK*/
            $('.slider-partner').slick({
                slidesToShow: 5,
                slidesToScroll: 1
            })
        })
    </script>
@stop