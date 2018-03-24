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
                                    <div class="each-program-col">
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/dream.jpg') !!}" class="img-responsive" alt="Cao Thủ Tiếng Anh">
                                        <div class="each-content-program">
                                            <h3 class="title-progam">Cao Thủ Tiếng Anh</h3>
                                            <p class="content-program">
                                                Trại hè tiếng Anh ILA 2018 với phương pháp học tư duy thế kỷ 21 được nghiên cứu và phát triển bằng tâm huyết của những chuyên gia giáo dục đẳng cấp quốc tế sẽ đánh thức khả năng ngoại ngữ của các bạn nhỏ và nâng cao 6 kỹ năng vàng: Khả năng sáng tạo, tư duy phản biện, kỹ năng giao tiếp, kỹ năng hợp tác, khả năng tự hoàn thiện bản thân, kiến thức công nghệ.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="each-program-col">
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/fun.jpg') !!}" class="img-responsive" alt="Xây Dựng Tính Cách">
                                        <div class="each-content-program">
                                            <h3 class="title-progam">Xây Dựng Tính Cách</h3>
                                            <p class="content-program">
                                                Vượt ngoài khuôn khổ lớp học thông thường, trại hè ILA 2018 tạo nên nguồn cảm hứng giúp các em vượt qua rào cản ngôn ngữ, thoải mái trò chuyện, vui chơi và suy nghĩ bằng tiếng Anh cả ngày thông qua những hoạt động ngoại khóa bổ ích được thiết kế bởi ILA liên kết với đối tác UY TÍN NHẤT: Học viện thể hình Cali Kids, học viện sáng tạo công nghệ Teky, LEGO Education, SSA Sports, Global Art giúp trẻ phát triển năng khiếu toàn diện với những hoạt động cực vui.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="each-program-col">
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/heart.jpg') !!}" class="img-responsive" alt="San Sẻ Yêu Thương">
                                        <div class="each-content-program">
                                            <h3 class="title-progam">San Sẻ Yêu Thương</h3>
                                            <p class="content-program">
                                                Không dừng lại ở một khóa học tiếng Anh, trại hè ILA 2018 ứng dụng mô hình giáo dục đẳng cấp quốc tế, kết hợp hoàn hảo trong việc phát triển về mọi mặt. Đặc biệt, ứng dụng những điều được học để giúp đỡ cho cộng đồng sẽ mang đến cho các em một "mùa hè lớn" ý nghĩa và thú vị.
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