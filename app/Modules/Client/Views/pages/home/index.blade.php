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
                    <h2>TRẠI HÈ TIẾNG ANH 2018 CÓ GÌ ĐỘC ĐÁO?</h2>
                    <div class="des-welcome-container">
                        <div id="video-container">
                            <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="XYU4zkUP7Cg"></div>
                        </div>
                        <p class="description-welcome">Con sẽ được tận hưởng một mùa hè rực rỡ và phấn khởi với <b>TRẠI HÈ TIẾNG ANH ĐẲNG CẤP QUỐC TẾ</b> với ILA.</p>
                        <p class="description-welcome">Chương trình độc đáo cho trẻ từ 4-16 tuổi lần đầu tiên tổ chức tại Việt Nam. </p>
                        <p class="description-welcome">Bé sẽ trải nghiệm một mùa hè tuyệt vời để phát triển toàn diện về Kiến Thức, Thể Chất và Nhân Cách qua hoạt động ngoại khóa cực vui.</p>
                        <p class="description-welcome"><b>Học mê say, chơi thoả thích, hè độc đáo cùng ILA Summer Camp</b></p>
                    </div>
                    <div class="wrap-button text-center">
                        <a href="{!! route('register') !!}" class="btn btn-reg">ĐĂNG KÝ NGAY</a>
                    </div>

                    <div class="welcome-container" style="display:none">
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

    <section class="activation">
        <div class="container">
            <div class="col-md-12">
                <div class="activation-warpper">
                    <h2>Giới thiệu hoạt động activation</h2>
                    <div class="activation-content">
                        <p>ILA mang đến cơ hội trải nghiệm Trại hè Tiếng Anh cho gia đình bạn ngay hôm nay!</p>
                        <p>Gia đình sẽ được tư vấn chi tiết và trao đổi trực tiếp về <b>TRẠI HÈ TIẾNG ANH - ILA Summer Camp</b> với các chuyên gia của ILA </p>
                        <p>Bé sẽ trải nghiệm các hoạt động cực chất: </p>
                        <ul>
                            <li>Trò chơi Sáng tạo phát huy trí thông minh</li>
                            <li>Hoạt động từ thiện bồi đắp và nuôi dưỡng lòng nhân ái và san sẻ yêu thương của bé</li>
                        </ul>
                        <p>Học bổng lên đến <b>6,000,000đ</b> và hàng trăm phần quà thú vị đang chờ đón bạn.</p>
                        <p><b>Trải nghiệm ngay!</b></p>
                    </div>
                </div>
                <div class="wrap-activity">
                    
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
                        <h2>THƯ VIỆN HÌNH ẢNH</h2>
                        <div class="gallery-content">
                            <div class="container-fluid">
                                <div class="row">
                                    @if(!$galleries->isEmpty())
                                        @foreach($galleries as $gallery)
                                        <div class="col-sm-4">
                                            <div class="each-gallery">
                                                <a href="{!! route('gallery.index', $gallery->slug) !!}"><img src="{!! asset('public/upload/'.$gallery->img_url) !!}" class="img-responsive" alt="{!! $gallery->title !!}"></a>
                                                <div class="mask"></div>
                                                <div class="link-ic"><a href="{!! route('gallery.index', $gallery->slug) !!}"><i class="fa fa-link"></i></a></div>
                                                <h4><a href="{!! route('gallery.index', $gallery->slug) !!}">{!! $gallery->title !!}</a></h4>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
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

    @include("Client::layouts.partner")
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend') !!}/js/video/plyr.css">
    <script src="{!! asset('public/assets/frontend') !!}/js/video/plyr.min.js"></script>

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

            const player = new Plyr('#player');
        })
    </script>
@stop