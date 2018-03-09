@extends('Client::layouts.default')

@section("content")
    @include("Client::layouts.banner_general")

    <section class="program">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{!! $detail->name !!}</h2>
                    <div class="wrap-content-program">
                        {!! $detail->content !!}

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("Client::layouts.why")
    <div id="loadModal"></div>
@stop

@section("script")
    <script src="{!! asset('public/assets/frontend/js/jquery-canvas-sparkles.js') !!}"></script>
    <script>
        $(document).ready(function(){
            $('.banner-homepage .tp-banner').revolution({
                delay:5000,
                startwidth:1920,
                startheight:700,
                hideThumbs:10,
                navigationType:'none'
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