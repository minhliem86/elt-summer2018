@extends("Client::layouts.default")

@section('meta')
    <meta name="keywords" content="ILA Anh Văn Hè 2018, Tiếng Anh Hè 2018, Anh Văn Hè, Trại hè tiếng Anh đẳng cấp quốc tế">
    <meta name="description" content="Chương trình anh văn hè ILA 2018 - Trại hè tiếng Anh đẳng cấp quốc tế lần đầu tiên xuất hiện tại Việt Nam dành cho học viên từ 4-16 tuổi.">
    <meta property="og:image" content="{!! asset('public/assets/frontend/images/fb/fb-share-S.jpg') !!}" />
@stop

@section('title', 'Chương trình Anh Văn Hè 2018 - Thư Viện Hình Ảnh')


@section("content")
    @include("Client::layouts.banner-donkey")

    <section class="gallery-content">
        <div class="container">
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
    </section>

    @include("Client::layouts.why")
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend/js/jsSlider')!!}/jcslider.css">
    <script src="{!! asset('public/assets/frontend/js/jsSlider')!!}/jquery.jcslider.js"></script>
    <script>
        $(document).ready(function(){
            $('.jc-slider').jcSlider({
                animationIn     : "zoomIn",
                animationOut    : "zoomOut",
                stopOnHover     : true, // true by default
                loop            : true // true by default
            })
        })
    </script>

@stop
