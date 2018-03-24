@extends('Client::layouts.default')

@section('meta')
    <meta name="keywords" content="ILA Anh Văn Hè 2018, Tiếng Anh Hè 2018, Anh Văn Hè, Trại hè tiếng Anh đẳng cấp quốc tế">
    <meta name="description" content="Chương trình anh văn hè ILA 2018 - Trại hè tiếng Anh đẳng cấp quốc tế lần đầu tiên xuất hiện tại Việt Nam dành cho học viên từ 4-16 tuổi.">
    <meta property="og:image" content="{!! asset('public/assets/frontend/images/fb/fb-share-J.jpg') !!}" />
@stop

@section('title', 'Chương trình Anh Văn Hè 2018 - Super Juniors - Dành cho học viên từ 7-11 tuổi')

@section("content")
    @include("Client::layouts.banner-donkey")

    <section class="content-program-detail" id="jumpstart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-program-detail">XUẤT SẮC TIẾNG ANH</h2>
                    <div class="each-product-detail">
                        <div class="content-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Với việc nâng cao, rèn dũa tiếng Anh trong những trải nghiệm học tập và việc sử dụng ngôn ngữ trong các hoạt động của trại hè ILA 2018, các bạn học viên Super Juniors sẽ nâng cao khả năng hợp tác, thể hiện sự sáng tạo bằng nhiều cách khác nhau, và làm nên những điều thật tự hào.</p>
                                        <p>Các học viên tại ILA sẽ trở thành công dân toàn cầu với tư duy tích cực và tầm nhìn mở rộng, các em không chỉ xuất sắc tiếng Anh mà còn phát triển 6 kỹ năng vàng của thế kỷ 21: <b>Khả năng sáng tạo, tư duy phản biện, kỹ năng giao tiếp, kỹ năng hợp tác, khả năng tự hoàn thiện bản thân, kiến thức công nghệ.</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-event-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 visible-lg visible-md">
                                        <img src="{!! asset('public/assets/frontend/images/program/superjuniors/lophoc01.jpg') !!}" class="img-responsive" alt="XUẤT SẮC TIẾNG ANH">
                                    </div>
                                    <div class="col-md-4 visible-lg visible-md">
                                        <img src="{!! asset('public/assets/frontend/images/program/english/J-english.jpg') !!}" class="img-responsive" alt="XUẤT SẮC TIẾNG ANH">
                                    </div>
                                    <div class="col-md-4 ">
                                        <img src="{!! asset('public/assets/frontend/images/program/superjuniors/lophoc02.jpg') !!}" class="img-responsive" alt="XUẤT SẮC TIẾNG ANH">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-program-detail bg-yellow" id="superj">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-program-detail">VUI CHƠI KHÁM PHÁ</h2>
                    <div class="each-product-detail">
                        <div class="content-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Trại hè ILA 2018 như cột mốc đầu tiên trong hành trình khơi gợi đam mê tiếng Anh, nơi các bé được trò chuyện, vui chơi và suy nghĩ bằng tiếng Anh cả ngày với những hoạt động ngoại khoá cực vui được thiết kế bởi đội ngũ giáo viên đầy tâm huyết của ILA liên kết với các đối tác uy tín nhất.</p>
                                        {{--<p>Các bé sẽ được tham gia:</p>--}}
                                        {{--<p><b>- CLB Lego:</b> Rèn luyện kỹ năng hợp tác, khả năng tự hoàn thiện bản thân, khả năng sáng tạo, kỹ năng giao tiếp.</p>--}}
                                        {{--<p><b>- CLB Âm Nhạc:</b> Phát triển các kỹ năng về xã hội (tập trung, quyết tâm, tự tin, độc lập,vv..) và được phát huy tối đa về thể chất ( Sức mạnh cốt lõi, sự cân bằng, khả năng cảm thụ âm nhạ , sự linh hoạt trong chuyển động,vv..)</p>--}}
                                        {{--<p><b>- CLB Mỹ Thuật:</b> Tăng cường khả năng ghi nhớ và thấu hiểu, phát triển khả năng sáng tạo, khiếu thẩm mỹ ,vv..</p>--}}
                                        {{--<p><b>- CLB Bóng Đá (20%) và Bóng Rổ (80%):</b> Không chỉ được rèn luyện về thể chất, các bé được phát huy tối đa các kỹ năng đội nhóm, kỹ năng giải quyết vấn đề, đưa ra quyết đinh,kỹ năng hợp tác qua hai môn thể thao đề cao sức mạnh tập thể: Bóng đá và bóng rổ.</p>--}}
                                        {{--<p><b>- CLB Lập Trình:</b> Là bước đệm quan trọng cho các bé tiến vào thế giới công nghệ trong tương lai, kích thích sự phát triển của não bộ, khả năng tư duy phản biện, kỹ năng lập kế hoạch và làm giàu thêm vốn kiến thức về công nghệ.</p>--}}
                                        {{--<p><b>- Chuyến đi nông trại:</b> Hè vốn dĩ là khoảng thời gian để các em được khám phá thế giới, tìm kiếm những trải nghiệm lý thú không có ở trường lớp. Chuyến đi nông trại sẽ như một cuộc phiêu lưu khó quên, giúp các bé vận dụng những điều đã học vào thực tiễn.</p>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-event-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{!! asset('public/assets/frontend/images/program/superjuniors/lego.jpg') !!}" class="img-responsive" alt="CLB Lego">
                                        <h4>CLB LEGO</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{!! asset('public/assets/frontend/images/program/superjuniors/dance.jpg') !!}" class="img-responsive" alt="CLB âm nhạc">
                                        <h4>CLB ÂM NHẠC</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{!! asset('public/assets/frontend/images/program/superjuniors/mythuat.jpg') !!}" class="img-responsive" alt="CLB mỹ thuật">
                                        <h4>CLB Mỹ Thuật</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{!! asset('public/assets/frontend/images/program/superjuniors/football.jpg') !!}" class="img-responsive" alt="CLB bóng đá">
                                        <h4>CLB BÓNG ĐÁ</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{!! asset('public/assets/frontend/images/program/superjuniors/laptrinh.jpg') !!}" class="img-responsive" alt="CLB lập trình">
                                        <h4>CLB LẬP TRÌNH</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{!! asset('public/assets/frontend/images/program/superjuniors/nongtrai.jpg') !!}" class="img-responsive" alt="Chuyến đi nông trại">
                                        <h4>CHUYẾN ĐI NÔNG TRẠI</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-program-detail" id="smartteen">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-program-detail">SAN SẺ YÊU THƯƠNG</h2>
                    <div class="each-product-detail" id="smartteens">
                        <div class="content-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Không dừng lại ở một khóa học tiếng Anh, trại hè ILA 2018 ứng dụng mô hình giáo dục đẳng cấp quốc tế, kết hợp hoàn hảo trong việc phát triển về mọi mặt. Đặc biệt, việc ứng dụng những điều được học để giúp đỡ cho cộng đồng sẽ mang đến cho các em một “mùa hè lớn” ý nghĩa và thú vị.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-event-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{!! asset('public/assets/frontend/images/program/heart/K-heart.jpg') !!}" class="img-responsive" alt="SAN SẺ YÊU THƯƠNG">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{!! asset('public/assets/frontend/images/program/heart/J-heart.jpg') !!}" class="img-responsive" alt="SAN SẺ YÊU THƯƠNG">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{!! asset('public/assets/frontend/images/program/heart/S-heart.jpg') !!}" class="img-responsive" alt="SAN SẺ YÊU THƯƠNG">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="program">
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
    @include("Client::layouts.why")
    @include("Client::layouts.partner")
    <div id="loadModal"></div>
@stop

@section("script")
    <script src="{!! asset('public/assets/frontend/js/jquery-canvas-sparkles.js') !!}"></script>

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

            $('.wrap-inner-img img').sparkle({
                speed: 2,
                minSize: 5,
                maxSize:12,
                color: 'rainbow',
                count: 50
            })
            var timer;
            $(window).on("resize", function(){
                clearTimeout(timer);
                timer = setTimeout(function(){
                    $(".wrap-inner-img img").trigger("resize.sparkle");
                },200);
            });
        })
    </script>
@stop