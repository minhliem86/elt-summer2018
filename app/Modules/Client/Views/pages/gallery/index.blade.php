@extends('Client::layouts.default')

@section("meta")
    <meta name="keywords" content="ILA Anh Văn Hè 2018, Tiếng Anh Hè 2018, Anh Văn Hè, Trại hè tiếng Anh đẳng cấp quốc tế">
    <meta name="description" content="Chương trình anh văn hè ILA 2018 - Trại hè tiếng Anh đẳng cấp quốc tế lần đầu tiên xuất hiện tại Việt Nam dành cho học viên từ 4-16 tuổi.">
    <meta property="og:image" content="{!! asset('public/assets/frontend/images/fb/fb-share-S.jpg') !!}" />
@stop

@section('title', 'Chương trình Anh Văn Hè 2018 - Thư Viện')


@section("content")
    @include("Client::layouts.banner-donkey")
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thư viện Hình Ảnh</h2>
                    <div class="gallery-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <a data-fancybox="gallery" href="{!! asset('public/assets/frontend/images/program/jumpstart/dance.jpg') !!}"><img src="{!! asset('public/assets/frontend/images/program/jumpstart/dance.jpg') !!}"></a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="gallery" href="{!! asset('public/assets/frontend/images/program/jumpstart/dance.jpg') !!}"><img src="{!! asset('public/assets/frontend/images/program/jumpstart/dance.jpg') !!}"></a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="gallery" href="{!! asset('public/assets/frontend/images/program/jumpstart/dance.jpg') !!}"><img src="{!! asset('public/assets/frontend/images/program/jumpstart/dance.jpg') !!}"></a>
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
    <link rel="stylesheet" href="{!! asset('public/assets/frontend/js/fancybox/jquery.fancybox.min.css') !!}">
    <script src="{!! asset('public/assets/frontend/js/fancybox/jquery.fancybox.min.js') !!}"></script>
    <script>
        $(document).ready(function(){
            $("[data-fancybox]").fancybox({

            });
        })
    </script>
@stop