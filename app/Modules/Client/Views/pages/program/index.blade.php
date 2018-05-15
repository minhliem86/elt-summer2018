@extends('Client::layouts.default')

@section('meta')
    <meta name="keywords" content="ILA Anh Văn Hè 2018, Tiếng Anh Hè 2018, Anh Văn Hè, Trại hè tiếng Anh đẳng cấp quốc tế">
    <meta name="description" content="Chương trình anh văn hè ILA 2018 - Trại hè tiếng Anh đẳng cấp quốc tế lần đầu tiên xuất hiện tại Việt Nam dành cho học viên từ 4-16 tuổi.">
    <meta property="og:image" content="{!! asset('public/assets/frontend/images/fb/fb-share-S.jpg') !!}" />
@stop

@section('title', 'Chương trình Anh Văn Hè 2018 - Chương trình Hè')

@section("content")
    @include("Client::layouts.banner-donkey")
    <section class="general-program">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>CHƯƠNG TRÌNH HÈ 2018</h2>
                    <div class="content-program-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="each-program-col animate" data-animate="fadeInUp" data-delay="0.2s">
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/fun.jpg') !!}" class="img-responsive" alt="Chơi Độc Đáo">
                                        <div class="each-content-program">
                                            <h3 class="title-progam">Chơi Độc Đáo</h3>
                                            <p class="content-program">
                                                Mùa Hè - khoảng thời gian lý tưởng để con trẻ <b>tự do trải nghiệm ngoài khuôn viên trường học,</b> tránh xa các thiết bị điện tử hàng ngày, còn công thức hoàn hảo nào hơn khi kết hợp học ngoại ngữ song song các <b>hoạt động ngoại khoá cực vui</b> được liên kết với các đối tác UY TÍN NHẤT: Cali Kids,Teky, LEGO Education, SSA Sports, Global Art.

                                            </p>
                                            <p class="content-program">
                                                <b>Học mê say, chơi thoả thích, hè độc đáo cùng ILA Summer Camp.</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="each-program-col animate" data-animate="fadeInUp" data-delay="0.3s">
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/heart.jpg') !!}" class="img-responsive" alt="Nghỉ Khác Biệt">
                                        <div class="each-content-program">
                                            <h3 class="title-progam">Nghỉ Khác Biệt</h3>
                                            <p class="content-program">
                                                Tạm biệt nỗi lo về ngoại ngữ thay vào đó là những giờ học thú vị, ứng dụng <b>mô hình giáo dục đẳng cấp quốc tế,</b> kết hợp hoàn hảo trong việc <b>phát triển toàn diện,</b> trại hè ILA sẽ đánh thức khả năng ngoại ngữ của các bạn nhỏ và nâng cao 6 kỹ năng vàng thế kỷ 21.
                                            </p>

                                            <p class="content-program">
                                                <b>Vượt trội hơn, khác biệt hơn sau 8 tuần hè chinh phục đỉnh cao ngoại ngữ ngập tràn hứng khởi.</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="each-program-col animate" data-animate="fadeInUp" data-delay="0.4s">
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/dream.jpg') !!}" class="img-responsive" alt="Mơ Rực Rỡ">
                                        <div class="each-content-program">
                                            <h3 class="title-progam">Mơ Rực Rỡ</h3>
                                            <p class="content-program">
                                                Kết hợp hoàn hảo trong việc phát triển về mọi mặt, đặc biệt <b>ứng dụng những điều được học</b> để giúp đỡ cho cộng đồng bằng những chương trình mang tính nhân văn qua đó <b>vun đắp lòng nhân ái</b> - mảnh ghép quan trọng trong việc <b>hoàn thiện bản thân</b> sẽ mang đến cho các em một "mùa hè lớn" ý nghĩa và thú vị.
                                            </p>
                                            <p class="content-program">
                                                <b>“Giấc mơ hè” của con sẽ càng thêm <b>rực rỡ</b> và đáng nhớ.</b>
                                            </p>
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
    @include("Client::layouts.product")

    <section class="action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Mỗi ngày hè tại ILA sẽ là một ngày vui bất tận!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="flex-container">
                        <div class="col">
                            <div class="inner">
                                <img src="{!! asset('public/assets/frontend/images/program/jumpstart/lego.jpg') !!}" class="img-responsive" alt="CLB Lego">
                                <div class="title-wrapper">
                                    <h4>CLB Lego</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inner">
                                <img src="{!! asset('public/assets/frontend/images/program/jumpstart/mythuat.jpg') !!}" class="img-responsive" alt="CLB Mỹ Thuật">
                                <div class="title-wrapper">
                                    <h4>CLB Mỹ Thuật</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inner">
                                <img src="{!! asset('public/assets/frontend/images/program/jumpstart/dance.jpg') !!}" class="img-responsive" alt="CLB Âm Nhạc">
                                <div class="title-wrapper">
                                    <h4>CLB Âm Nhạc</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inner">
                                <img src="{!! asset('public/assets/frontend/images/program/jumpstart/nongtrai.jpg') !!}" class="img-responsive" alt="Chuyến đi nông trại">
                                <div class="title-wrapper">
                                    <h4>Chuyến đi nông trại </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-container">
                        <div class="col">
                            <div class="inner">
                                <img src="{!! asset('public/assets/frontend/images/program/superjuniors/football.jpg') !!}" class="img-responsive" alt="CLB Bóng Đá">
                                <div class="title-wrapper">
                                    <h4>CLB Bóng đá</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inner">
                                <img src="{!! asset('public/assets/frontend/images/program/superjuniors/laptrinh.jpg') !!}" class="img-responsive" alt="CLB Lập Trình">
                                <div class="title-wrapper">
                                    <h4>CLB Lập Trình</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inner">
                                <img src="{!! asset('public/assets/frontend/images/program/smartteen/nhiepanh.jpg') !!}" class="img-responsive" alt="CLB Nhiếp Ảnh">
                                <div class="title-wrapper">
                                    <h4>CLB Nhiếp Ảnh</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inner">
                                <img src="{!! asset('public/assets/frontend/images/program/smartteen/dangoai.jpg') !!}" class="img-responsive" alt="Chuyến đi dã ngoại">
                                <div class="title-wrapper">
                                    <h4>Chuyến đi dã ngoại </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section("script")

    <script>
        $(document).ready(function(){
            $('.each-img').click(function () {
                if($('.program-container').hasClass('clicked-container')){
                    $('.program-container').removeClass('clicked-container');
                    $('.main-content-absolute').removeClass('clicked-main-content');
                }else{
                    $('.program-container').addClass('clicked-container');
                    $('.main-content-absolute').addClass('clicked-main-content');
                }
            })
        })
    </script>
@stop