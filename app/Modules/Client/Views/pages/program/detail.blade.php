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
                        {{--<div class="container-fluid">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-7">--}}
                                    {{--<div class="wrap-img each animate" data-animate="slideInLeft">--}}
                                        {{--<div class="wrap-inner-img">--}}
                                            {{--<img src="{!! asset('public/assets/frontend/images/program/JS.png') !!}" class="img-responsive" alt="">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-5">--}}
                                    {{--<div class="wrap-content each animate" data-animate="slideInRight">--}}
                                        {{--<h4 class="title-program"></h4>--}}
                                        {{--<p>When the c-beam walks for nowhere, all space suits examine extraterrestrial, calm aliens. When the anchor screams for port degas, all corsairs mark swashbuckling, real lasses.Roast eight bok choys, peanut butter, and vodka in a large wok over medium heat, cook for a dozen minutes and garnish with some chicken lard.This honor has only been acquired by a delighted phenomenan.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-7 col-md-push-5">--}}
                                    {{--<div class="wrap-img each animate" data-animate="slideInRight">--}}
                                        {{--<div class="wrap-inner-img right-img">--}}
                                            {{--<img src="{!! asset('public/assets/frontend/images/program/JS.png') !!}" class="img-responsive" alt="">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-5 col-md-pull-7">--}}
                                    {{--<div class="wrap-content each animate" data-animate="slideInLeft">--}}
                                        {{--<h4 class="title-program"></h4>--}}
                                        {{--<p>When the c-beam walks for nowhere, all space suits examine extraterrestrial, calm aliens. When the anchor screams for port degas, all corsairs mark swashbuckling, real lasses.Roast eight bok choys, peanut butter, and vodka in a large wok over medium heat, cook for a dozen minutes and garnish with some chicken lard.This honor has only been acquired by a delighted phenomenan.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-7">--}}
                                    {{--<div class="wrap-img each animate" data-animate="slideInLeft">--}}
                                        {{--<div class="wrap-inner-img">--}}
                                            {{--<img src="{!! asset('public/assets/frontend/images/program/JS.png') !!}" class="img-responsive" alt="">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-5">--}}
                                    {{--<div class="wrap-content each animate" data-animate="slideInRight">--}}
                                        {{--<h4 class="title-program"></h4>--}}
                                        {{--<p>When the c-beam walks for nowhere, all space suits examine extraterrestrial, calm aliens. When the anchor screams for port degas, all corsairs mark swashbuckling, real lasses.Roast eight bok choys, peanut butter, and vodka in a large wok over medium heat, cook for a dozen minutes and garnish with some chicken lard.This honor has only been acquired by a delighted phenomenan.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
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