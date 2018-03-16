@if(!$mobile->isMobile())
<section class="banner clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="wrap-banner" style="overflow: hidden">
                <div class="owl-carousel owl-theme">
                    <!-- ITEM-->
                    <div>
                        <div class="donkey-content">
                            <div class="donkey-image">
                                <img data-src="{!! asset('public/assets/frontend/images/slider/banner-uocmo.jpg') !!}" class="owl-lazy" />
                            </div>
                        </div>
                    </div>

                    <!-- ITEM -->
                    <div>
                        <div class="donkey-content">
                            <div class="donkey-image">
                                <img data-src="{!! asset('public/assets/frontend/images/slider/banner-niemvui.jpg') !!}" class="owl-lazy" />
                            </div>
                        </div>
                    </div>

                    <!-- ITEM -->
                    <div>
                        <div class="donkey-content">
                            <div class="donkey-image">
                                <img data-src="{!! asset('public/assets/frontend/images/slider/banner-traitim.jpg') !!}" class="owl-lazy" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="banner clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="wrap-banner" style="overflow: hidden">
                <div class="owl-carousel owl-theme">
                    <!-- ITEM-->
                    <div>
                        <div class="donkey-content">
                            <div class="donkey-image">
                                <img data-src="{!! asset('public/assets/frontend/images/slider/banner-mobile-uocmo.png') !!}" class="owl-lazy" />
                            </div>
                        </div>
                    </div>

                    <!-- ITEM -->
                    <div>
                        <div class="donkey-content">
                            <div class="donkey-image">
                                <img data-src="{!! asset('public/assets/frontend/images/slider/banner-mobile-niemvui.png') !!}" class="owl-lazy" />
                            </div>
                        </div>
                    </div>

                    <!-- ITEM -->
                    <div>
                        <div class="donkey-content">
                            <div class="donkey-image">
                                <img data-src="{!! asset('public/assets/frontend/images/slider/banner-mobile-traitim.png') !!}" class="owl-lazy" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif