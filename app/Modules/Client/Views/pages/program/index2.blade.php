@extends('Client::layouts.default')

@section("content")
    @include("Client::layouts.banner_general")
    <section class="general-program">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>CHƯƠNG TRÌNH HÈ 2018</h2>
                    <div class="content-program">
                        <div id="my-accordion" class="accordion-slider">
                            <div class="as-panels">
                                <div class="as-panel">
                                    <img class="as-background" src="{!! asset('public/assets/frontend/images/slider/banner-demo.png') !!}" class="img-responsive"/>
                                </div>
                                <div class="as-panel">
                                    <img class="as-background" src="{!! asset('public/assets/frontend/images/slider/banner-demo.png') !!}" class="img-responsive"/>
                                </div>
                                <div class="as-panel">
                                    <img class="as-background" src="{!! asset('public/assets/frontend/images/slider/banner-demo.png') !!}" class="img-responsive"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include("Client::layouts.product")
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend/js/accordition/css/accordion-slider.min.css') !!}">
    <script src="{!! asset('public/assets/frontend/js/accordition/js/jquery.accordionSlider.min.js') !!}"></script>
    <script>
        $(document).ready(function(){
            $('.banner-homepage .tp-banner').revolution({
                delay:5000,
                startwidth:1920,
                startheight:700,
                hideThumbs:10,
                navigationType:'none'
            })

            $('#my-accordion').accordionSlider({
                width: '100%',
                startPanel: 0,
                closePanelsOnMouseOut: false,
                shadow: false,
                panelDistance: 10,
                autoplay: false,
                mouseWheel: false,
                openPanelDuration: 2000,
                mouseDelay: 100
            })

        })
    </script>
@stop