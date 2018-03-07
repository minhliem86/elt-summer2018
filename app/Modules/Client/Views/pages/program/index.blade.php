@extends('Client::layouts.default')

@section("content")
    @include("Client::layouts.banner_general")
    <section class="general-program">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>CHƯƠNG TRÌNH HÈ 2018</h2>
                    <div class="content-program">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="wrap-img-program each animate" data-animate="fadeInLeft">
                                        <img src="{!! asset('public/assets/frontend/images/layouts/257x257.png') !!}" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="content-program each animate" data-animate="fadeInRight">
                                        <p>When chopping slobbery apples, be sure they are room temperature. Clouds wave on adventure at port degas!What’s the secret to sweet and sichuan-style mackerel? Always use tangy cinnamon.With oysters drink beer. Per guest prepare a dozen pounds of vinegar with heated asparagus for dessert.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-push-8">
                                    <div class="wrap-img-program each animate" data-animate="fadeInLeft">
                                        <img src="{!! asset('public/assets/frontend/images/layouts/257x257.png') !!}" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-pull-4">
                                    <div class="content-program each animate" data-animate="fadeInRight">
                                        <p>When chopping slobbery apples, be sure they are room temperature. Clouds wave on adventure at port degas!What’s the secret to sweet and sichuan-style mackerel? Always use tangy cinnamon.With oysters drink beer. Per guest prepare a dozen pounds of vinegar with heated asparagus for dessert.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="wrap-img-program each animate" data-animate="fadeInLeft">
                                        <img src="{!! asset('public/assets/frontend/images/layouts/257x257.png') !!}" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="content-program each animate" data-animate="fadeInRight">
                                        <p>When chopping slobbery apples, be sure they are room temperature. Clouds wave on adventure at port degas!What’s the secret to sweet and sichuan-style mackerel? Always use tangy cinnamon.With oysters drink beer. Per guest prepare a dozen pounds of vinegar with heated asparagus for dessert.</p>
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
@stop

@section("script")
    <script>
        $(document).ready(function(){
            $('.banner-homepage .tp-banner').revolution({
                delay:5000,
                startwidth:1920,
                startheight:700,
                hideThumbs:10,
                navigationType:'none'
            })

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