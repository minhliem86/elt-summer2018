@extends('Client::layouts.default')

@section('meata')

@stop

@section("content")
    @include("Client::layouts.banner-donkey")
    <section class="general-program">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>CHƯƠNG TRÌNH HÈ 2018</h2>
                    <div class="content-program-container">
                        <div class="container-fluid">
                            <div class="row each-program align-items-center">
                                <div class="col-md-5">
                                    <div class="wrap-img-program " data-animate="fadeInLeft">
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/dream.jpg') !!}" class="img-responsive" alt="Cao Thủ Tiếng Anh">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="content-program " data-animate="fadeInRight">
                                        <p>Trại hè tiếng Anh ILA 2018 với phương pháp học tư duy thế kỷ 21 được nghiên cứu và phát triển bằng tâm huyết của những chuyên gia giáo dục đẳng cấp quốc tế sẽ đánh thức khả năng ngoại ngữ của các bạn nhỏ và nâng cao 6 kỹ năng vàng: <b>Khả năng sáng tạo, tư duy phản biện, kỹ năng giao tiếp, kỹ năng hợp tác, khả năng tự hoàn thiện bản thân, kiến thức công nghệ.</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row each-program align-items-center">
                                <div class="col-md-5 col-md-push-7">
                                    <div class="wrap-img-program " data-animate="fadeInLeft">
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/fun.jpg') !!}" class="img-responsive" alt="Xây Dựng Tính Cách">
                                    </div>
                                </div>
                                <div class="col-md-7 col-md-pull-5">
                                    <div class="content-program " data-animate="fadeInRight">
                                        <p>Vượt ngoài khuôn khổ lớp học thông thường, trại hè ILA 2018 tạo nên nguồn cảm hứng giúp các em vượt qua rào cản ngôn ngữ, thoải mái trò chuyện, vui chơi và suy nghĩ bằng tiếng Anh cả ngày thông qua những hoạt động ngoại khóa bổ ích được thiết kế bởi ILA liên kết với đối tác UY TÍN NHẤT: Học viện thể hình Cali Kids, học viện sáng tạo công nghệ Teky, LEGO Education, SSA Sports, Global Art giúp trẻ phát triển năng khiếu toàn diện với những hoạt động cực vui.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row each-program align-items-center">
                                <div class="col-md-5">
                                    <div class="wrap-img-program " data-animate="fadeInLeft">
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/heart.jpg') !!}" class="img-responsive" alt="San Sẻ Yêu Thương">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="content-program " data-animate="fadeInRight">
                                        <p>Không dừng lại ở một khóa học tiếng Anh, trại hè ILA 2018 ứng dụng mô hình giáo dục đẳng cấp quốc tế, kết hợp hoàn hảo trong việc phát triển về mọi mặt. Đặc biệt, ứng dụng những điều được học để giúp đỡ cho cộng đồng sẽ mang đến cho các em một "mùa hè lớn" ý nghĩa và thú vị.</p>
                                    </div>
                                </div>
                            </div>

                            {{--<div class="row each-program align-items-center">--}}
                                {{--<div class="col-md-5 col-md-push-8">--}}
                                    {{--<div class="wrap-img-program " data-animate="fadeInLeft">--}}
                                        {{--<img src="{!! asset('public/assets/frontend/images/keypoint/giaoductoandien.png') !!}" class="img-responsive" alt="Giáo Dục Toàn Diện">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-7 col-md-pull-4">--}}
                                    {{--<div class="content-program " data-animate="fadeInRight">--}}
                                        {{--<p>Rèn giũa trí tuệ, thể chất và lòng nhân ái kết hợp trong môi trường 100% tiếng Anh, giúp trẻ phát triển toàn diện ngay trong 2 tháng chính là món quà không chỉ bổ ích, ý nghĩa mà còn đầy tính nhân văn mà ILA muốn mang đến cho các bạn nhỏ trong mùa hè này.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

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
                                        <img src="{!! asset('public/assets/frontend/images/keypoint/dream.jpg') !!}" class="img-responsive" alt="Cao Thủ Tiếng Anh">
                                        <div class="each-content-program">
                                            <h3 class="title-progam">Cao Thủ Tiếng Anh</h3>
                                            <p class="content-program">
                                                Trại hè tiếng Anh ILA 2018 với phương pháp học tư duy thế kỷ 21 được nghiên cứu và phát triển bằng tâm huyết của những chuyên gia giáo dục đẳng cấp quốc tế sẽ đánh thức khả năng ngoại ngữ của các bạn nhỏ và nâng cao 6 kỹ năng vàng: Khả năng sáng tạo, tư duy phản biện, kỹ năng giao tiếp, kỹ năng hợp tác, khả năng tự hoàn thiện bản thân, kiến thức công nghệ.
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
                <h2>HOẠT ĐỘNG HÈ 2018</h2>
                <div class="col">
                    <div class="action-container animate" data-animate="fadeInUp">
                        <h4>Mỗi ngày hè tại ILA sẽ là một ngày vui bất tận!</h4>
                        <div class="each-product each animate" data-animate="zoomInLeft" >
                            <div class="badge-wrapper">
                                <span class="bg"></span>
                                <h3 class="title-action">Dành cho học viên từ 4-7 tuổi</h3>
                            </div>
                            <div class="content-each">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li>CLB âm nhạc</li>
                                                <li>CLB mỹ thuật</li>
                                                <li>CLB Lego</li>
                                                <li>CLB dự án công đồng</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li>Chuyến đi nông trại</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="each-product each animate" data-animate="zoomInLeft" >
                            <div class="badge-wrapper">
                                <span class="bg"></span>
                                <h3 class="title-action">Dành cho học viên từ 7-11 tuổi</h3>
                            </div>
                            <div class="content-each">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li>CLB âm nhạc/ mỹ thuật</li>
                                                <li>CLB bóng rổ</li>
                                                <li>CLB Lego</li>
                                                <li>CLB lập trình</li>
                                                <li>CLB dự án công đồng</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li>Chuyến đi nông trại</li>
                                                <li>Giải liên minh bóng đá ILA Star <br class="hidden-sm"> V-league</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="each-product each animate" data-animate="zoomInLeft" >
                            <div class="badge-wrapper">
                                <span class="bg"></span>
                                <h3 class="title-action">Dành cho học viên từ 11-16 tuổi</h3>
                            </div>
                            <div class="content-each">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-md-8">
                                            <ul>
                                                <li>CLB dự án công đồng</li>
                                                <li>CLB bóng rổ</li>
                                                <li>CLB lập trình</li>
                                                <li>CLB nhiếp ảnh</li>
                                                <li>CLB chuyến đi dã ngoại</li>
                                                <li>Giải liên minh bóng đá ILA Star V-league</li>
                                            </ul>
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