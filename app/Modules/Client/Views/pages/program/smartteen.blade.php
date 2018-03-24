@extends('Client::layouts.default')

@section('meta')
    <meta name="keywords" content="ILA Anh Văn Hè 2018, Tiếng Anh Hè 2018, Anh Văn Hè, Trại hè tiếng Anh đẳng cấp quốc tế">
    <meta name="description" content="Chương trình anh văn hè ILA 2018 - Trại hè tiếng Anh đẳng cấp quốc tế lần đầu tiên xuất hiện tại Việt Nam dành cho học viên từ 4-16 tuổi.">
    <meta property="og:image" content="{!! asset('public/assets/frontend/images/fb/fb-share-K.jpg') !!}" />
@stop

@section('title', 'Chương trình Anh Văn Hè 2018 - Smart Teens - Dành cho học viên từ 11-16 tuổi')

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
                                        <p>Tại trại hè tiếng Anh ILA 2018, học viên Smart Teens sẽ được thực hành những kỹ năng cần thiết để thành công trong một môi trường học tiếng Anh chuyên nghiệp để trở thành công dân toàn cầu: Khả năng sáng tạo, tư duy phản biện, kỹ năng giao tiếp, kỹ năng hợp tác, khả năng tự hoàn thiện bản thân, kiến thức công nghệ.</p>
                                        <p>Phương pháp học tập và làm việc nhóm cũng như các hoạt động hè thú vị & ý nghĩa sẽ giúp các bạn Smart Teens sẽ trở nên tự tin, dễ dàng hòa nhập và sẵn sàng đối mặt với nhửng thử thách trong tương lai với thái độ tích cực và tầm nhìn rộng mở.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-event-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{!! asset('public/assets/frontend/images/program/smartteen/lophoc01.jpg') !!}" class="img-responsive" alt="XUẤT SẮC TIẾNG ANH">
                                    </div>
                                    <div class="col-md-4 visible-lg visible-md">
                                        <img src="{!! asset('public/assets/frontend/images/program/smartteen/lophoc02.jpg') !!}" class="img-responsive" alt="XUẤT SẮC TIẾNG ANH">
                                    </div>
                                    <div class="col-md-4 visible-lg visible-md">
                                        <img src="{!! asset('public/assets/frontend/images/program/smartteen/lophoc03.jpg') !!}" class="img-responsive" alt="XUẤT SẮC TIẾNG ANH">
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
                    <div class="each-product-detail ">
                        <div class="content-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Hè vốn dĩ là khoảng thời gian để các em được khám phá thế giới, tìm kiếm những trải nghiệm lý thú không có ở trường lớp.</p>
                                        {{--<p>Các bé sẽ được tham gia:</p>--}}
                                        {{--<p><b>- CLB Bóng Đá (20%) và Bóng Rổ (80%):</b> Không chỉ được rèn luyện về thể chất, các bé được phát huy tối đa các kỹ năng đội nhóm, kỹ năng giải quyết vấn đề, đưa ra quyết đinh,kỹ năng hợp tác qua hai môn thể thao đề cao sức mạnh tập thể: Bóng đá và bóng rổ.</p>--}}
                                        {{--<p><b>- CLB Lập Trình:</b> Là bước đệm quan trọng cho các bé tiến vào thế giới công nghệ trong tương lai, kích thích sự phát triển của não bộ, khả năng tư duy phản biện, kỹ năng lập kế hoạch và làm giàu thêm vốn kiến thức về công nghệ</p>--}}
                                        {{--<p><b>- Cuộc thi Nhiếp Ảnh:</b></p>--}}
                                        {{--<ul>--}}
                                            {{--<li>Gắn kết học sinh vào một cuộc thi sẽ thúc đẩy tối đa khả năng sáng tạo của học viên</li>--}}
                                            {{--<li>Thúc đẩy việc làm việc theo nhóm trong một môi trường vui vẻ, tích cực</li>--}}
                                            {{--<li>Thúc đẩy khái niệm cạnh tranh lành mạnh và khen thưởng cho học viên vì những nỗ lực của các bé</li>--}}
                                        {{--</ul>--}}
                                        {{--<p><b>- Chuyến đi dã ngoại:</b></p>--}}
                                        {{--<ul>--}}
                                            {{--<li>Các bé sẽ được dành cả một ngày làm việc nhóm và vui chơi trong một môi trường thoải mái, 100 % giao tiếp và suy nghĩ bằng Tiếng Anh.</li>--}}
                                            {{--<li>Các kỹ năng mềm bên ngoài lớp học được vận dụng một cách tự nhiên nhất.</li>--}}
                                            {{--<li>Đối với cuộc thi ảnh, học viên sẽ gửi những bức ảnh cảm hứng mà họ đã chụp vào ngày này để tăng cơ hội chiến thắng trong cuộc thi.</li>--}}
                                        {{--</ul>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-event-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{!! asset('public/assets/frontend/images/program/smartteen/football.jpg') !!}" class="img-responsive" alt="Xây Dựng Tính Cách">
                                        <h4>CLB BÓNG ĐÁ</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{!! asset('public/assets/frontend/images/program/smartteen/laptrinh.jpg') !!}" class="img-responsive" alt="Xây Dựng Tính Cách">
                                        <h4>CLB LẬP TRÌNH</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{!! asset('public/assets/frontend/images/program/smartteen/nhiepanh.jpg') !!}" class="img-responsive" alt="Xây Dựng Tính Cách">
                                        <h4>CLB NHIẾP ẢNH</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{!! asset('public/assets/frontend/images/program/smartteen/dangoai.jpg') !!}" class="img-responsive" alt="Xây Dựng Tính Cách">
                                        <h4>CHUYẾN ĐI DÃ NGOẠI</h4>
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
                                        <p>Rèn dũa trí tuệ, thể chất và lòng nhân ái kết hợp trong môi trường 100% tiếng Anh, giúp các bé phát triển tối ưu ngay sau 2 tháng chính là món quà không chỉ bổ ích, ý nghĩa mà còn đầy tính nhân văn mà ILA muốn mang đến cho các bạn nhỏ trong mùa hè này.</p>
                                        <p>Khuyến khích sinh viên hợp tác và thực hành các kỹ năng mềm của mình bằng tiếng Anh để tạo ra một dự án lớp học vui nhộn với trách nhiệm giải trình công khai.</p>
                                        <p>Gây quỹ gây cho thanh thiếu niên không chỉ giúp học viên sáng tạo và tự tin mà còn giúp học viên xây dựng kỹ năng đàm phán tạo nền tảng vững chắc cho những dự án “thực thụ" trong tương lai.</p>
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