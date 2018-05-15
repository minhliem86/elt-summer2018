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
                    <h2>TRẠI HÈ TIẾNG ANH ĐẲNG CẤP QUỐC TẾ CÓ GÌ ĐỘC ĐÁO?</h2>
                    <div class="des-welcome-container animate each" data-animate="fadeInUp" >
                        <div id="video-container">
                            <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="XYU4zkUP7Cg"></div>
                        </div>
                        <p class="description-welcome">8 tuần hè rực rỡ dành riêng cho trẻ từ <b>4 - 16 tuổi</b> lần đầu tiên tổ chức tại Việt Nam.</p>
                        <p class="description-welcome">3 chủ đề <b>San sẻ yêu thương, Cao thủ tiếng Anh, Xây dựng tính cách</b> cho con phát triển toàn diện về <b>Kiến Thức, Thể Chất và Nhân Cách</b> với những hoạt động ngoại khóa cực vui.</p>
                        <p class="description-welcome">Chương trình ĐỘC QUYỀN các đối tác chiến lược: học viện thể hình CaliKids, học viện sáng tạo công nghệ TEKY, LEGO education, SSA Sports, Global Art.</p>
                        <p class="description-welcome">Phát triển toàn diện tiếng Anh và <b>6 kỹ năng vàng:</b> Giao Tiếp, Hợp Tác, Sáng Tạo, Tư Duy Phản Biện, Công Nghệ và Tự Hoàn Thiện bản thân</p>
                        <p class="description-welcome"><b>Học mê say - Chơi thoả thích</b></p>
                        <p class="description-welcome"><b>Hè độc đáo cùng ILA Summer Camp</b></p>
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
                    <h2>LÀM SAO ĐỂ TÌM HIỂU THÊM VỀ TRẠI HÈ?</h2>
                    <div class="activation-content animate" data-animate="fadeInUp">
                        <p>Các chuyên gia ILA Summer Camp đang có mặt ở hệ thống <b>Trung tâm thương mại, Khu vui chơi trẻ em</b> và <b>Rạp chiếu phim</b> trên toàn quốc. </p>
                        <p>Ngay cuối tuần, gia đình sẽ được tư vấn chi tiết và trao đổi trực tiếp về <b>TRẠI HÈ TIẾNG ANH - ILA Summer Camp 2018.</b></p>
                        <p>Những hoạt động cực chất, cực đã sẽ đón chờ bé:</p>
                        <ul>
                            <li><b>Trò chơi Sáng tạo</b> phát huy trí thông minh</li>
                            <li><b>Hoạt động từ thiện</b> nuôi dưỡng lòng nhân ái và san sẻ yêu thương</li>
                        </ul>
                        <p>Học bổng lên đến <b>6,000,000đ</b> và hàng trăm phần quà thú vị đã sẵn sàng. </p>
                        <p><b>Chọn địa điểm gần nhất và khám phá mùa hè ILA nhé!</b></p>
                    </div>
                </div>
                <div class="wrap-activity animate" data-animate="fadeInUp">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-summer">
                        <li class="active"><a href="#hcm" data-toggle="tab" >TP. HCM</a></li>
                        <li><a href="#hn" data-toggle="tab">Hà Nội</a></li>
                        <li><a href="#other" data-toggle="tab">Các thành phố khác</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="hcm">
                            <table class="table table-activation table-activation-main table-triple" width="100%" cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Thời Gian</th>
                                        <th>Rạp Chiếu Phim</th>
                                        <th>Trung Tâm Thương Mại/ Khu Vui Chơi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data="Thời Gian">
                                            12-13/05/2018
                                        </td>
                                        <td data="Rạp Chiếu Phim">
                                            <p>Galaxy Nguyễn Du</p>
                                            <p>Galaxy Kinh Dương Vương</p>
                                        </td>
                                        <td data="Trung Tâm Thương Mại/ Khu Vui Chơi">
                                            <p>Công viên Thỏ Trắng Lê Thị Riêng</p>
                                            <p>KIZCiti Công viên Khánh Hội</p>
                                            <p>Tini World Nowzone</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data="Thời Gian">
                                            19-20/05/2018
                                        </td>
                                        <td data="Rạp Chiếu Phim">

                                        </td>
                                        <td data="Trung Tâm Thương Mại/ Khu Vui Chơi">
                                            <p>Mega Market Bình Phú</p>
                                            <p>Vivo City</p>
                                            <p>Lotte Quận 11</p>
                                            <p>Lotte Gò Vấp</p>
                                            <p>Tini World Bình Tân</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data="Thời Gian">
                                            26-27/05/2018
                                        </td>
                                        <td data="Rạp Chiếu Phim">
                                            <p>CGV Hoàng Văn Thụ</p>
                                        </td>
                                        <td data="Trung Tâm Thương Mại/ Khu Vui Chơi">
                                            <p>Vincom Cộng Hòa</p>
                                            <p>CGV Aeon Bình Tân</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="hn">
                            <table class="table table-activation table-activation-main table-triple" width="100%" cellpadding="0" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Thời Gian</th>
                                    <th>Rạp Chiếu Phim</th>
                                    <th>Trung Tâm Thương Mại/ Khu Vui Chơi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td data="Thời Gian">
                                        12-13/05/2018
                                    </td>
                                    <td data="Rạp Chiếu Phim">

                                    </td>
                                    <td data="Trung Tâm Thương Mại/ Khu Vui Chơi">
                                        <p>BigC Thăng Long</p>
                                        <p>CGV Artemis Hà Nội</p>
                                        <p>Mega Market Thăng Long</p>
                                        <p>Mega Market Hoàng Mai</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td data="Thời Gian">
                                        19-20/05/2018
                                    </td>
                                    <td data="Rạp Chiếu Phim">
                                        <p>Lotte Ba Đình</p>
                                    </td>
                                    <td data="Trung Tâm Thương Mại/ Khu Vui Chơi">
                                        <p>Vincom Royal City</p>
                                        <p>Vincom Times City</p>

                                    </td>
                                </tr>
                                <tr>
                                    <td data="Thời Gian">
                                        26-27/05/2018
                                    </td>
                                    <td data="Rạp Chiếu Phim">
                                        <p>CGV - Vincom Ba Triệu</p>
                                        <p>CGV - Vincom Nguyễn Chí Thanh</p>
                                    </td>
                                    <td data="Trung Tâm Thương Mại/ Khu Vui Chơi">
                                        <p>Phố đi bộ</p>
                                        <p>Mega Market Hà Đông</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="other">
                            <table class="table table-activation table-activation-other table-triple" width="100%" cellpadding="0" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Thời Gian</th>
                                    <th>Khu Vực</th>
                                    <th>Rạp Chiếu Phim</th>
                                    <th>Trung Tâm Thương Mại/ Khu Vui Chơi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td data="Thời Gian">
                                        12-13/05/2018
                                    </td>
                                    <td data="Khu Vực">
                                        <p>Hải Phòng</p>
                                        <p>Đồng Nai</p>
                                    </td>
                                    <td data="Rạp Chiếu Phim">

                                    </td>
                                    <td data="Trung Tâm Thương Mại/ Khu Vui Chơi">
                                        <p>Big C Hải Phòng</p>
                                        <p>Vincom Biên Hòa</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td data="Thời Gian">
                                        19-20/05/2018
                                    </td>
                                    <td data="Khu Vực">
                                        <p>Đà Nẵng</p>
                                        <p>Vũng Tàu</p>
                                    </td>
                                    <td data="Rạp Chiếu Phim">

                                    </td>
                                    <td data="Trung Tâm Thương Mại/ Khu Vui Chơi">
                                        <p>Vincom Đà Nẵng</p>
                                        <p>Lotte Vũng Tàu</p>

                                    </td>
                                </tr>
                                <tr>
                                    <td data="Thời Gian">
                                        26-27/05/2018
                                    </td>
                                    <td data="Khu Vực">
                                        <p>Cần Thơ</p>
                                        <p>Bình Dương</p>
                                    </td>
                                    <td data="Rạp Chiếu Phim">

                                    </td>
                                    <td data="Trung Tâm Thương Mại/ Khu Vui Chơi">
                                        <p>Lotte Cần Thơ</p>
                                        <p>Aeon Bình Dương</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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