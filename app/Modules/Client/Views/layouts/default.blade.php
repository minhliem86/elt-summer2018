<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{!!asset('public') !!}/favicon.ico">
    @yield('meta')
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <title>@yield('title','ILA Summer 2018 - Trại Hè Tiếng Anh Đẳng Cấp Quốc Tế')</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
    <script src="{!!asset('public') !!}/assets/frontend/js/jquery-2.1.1.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/common.js"   ></script>
    {{--<script async>--}}
        {{--function renderSVG(sgvID, loadingID){--}}
            {{--new Vivus(sgvID, {duration: 250, file: "{!!asset('public') !!}/assets/frontend/images/duhoc.svg", start: 'autostart', dashGap: 2, forceRender: true });--}}
            {{--setInterval(function () {--}}
                {{--$("#"+loadingID).css({'opacity' : 1})--}}
            {{--},3000);--}}
        {{--}--}}
    {{--</script>--}}
    <!-- Custom Css -->
    <link rel="stylesheet" href="{!!asset('public') !!}/assets/frontend/css/swiper.min.css">
    <link rel="stylesheet" href="{!!asset('public') !!}/assets/frontend/css/animate.min.css">
    <link href="{!!asset('public') !!}/assets/frontend/css/style.min.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/reponsive.min.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/custom-lp.min.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/duhoche2018.css" rel="stylesheet">
    <link href="{!!asset('public') !!}/assets/frontend/css/elt-summer2018.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-60129748-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-60129748-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TR9TFK7');</script>
    <!-- End Google Tag Manager -->

    @yield('tracking_code')

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TR9TFK7"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="osc-summer">
        <div class="container-fluid">
            <div class="row">
                <article class="container-fluid">
                    <div class="row home">
                        @include('Client::layouts.header')
                        @yield('content')
                        @include("Client::layouts.footer")
                    </div>
                </article>
            </div>
        </div>
        {{--<a href="tel:19006965" class="ic-phone"><img src="{!!asset('public') !!}/assets/frontend/images/ic-phone.png" class="img-responsive" alt="Hotline"></a>--}}
    </div> <!-- end osc-summer-->

    <script src="{!!asset('public') !!}/assets/frontend/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/jquery.validate.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/swiper.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/jquery.sticky.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/scrolla.jquery.min.js"></script>
    <script src="{!!asset('public') !!}/assets/frontend/js/customScript.js"></script>
    <!-- DONKEY -->
    {{--<link rel="stylesheet" href="{!! asset('public/assets/frontend/js/donkey')!!}/css/oswald.css">--}}
    {{--<link rel="stylesheet" href="{!! asset('public/assets/frontend/js/donkey')!!}/css/owl.carousel.min.css">--}}
    {{--<link rel="stylesheet" href="{!! asset('public/assets/frontend/js/donkey')!!}/css/owl.theme.default.min.css">--}}
    {{--<link href="{!! asset('public/assets/frontend/js/donkey')!!}/css/jquery.donkey.min.css" rel="stylesheet" />--}}


    {{--<script src="{!! asset('public/assets/frontend/js/donkey')!!}/js/owl.carousel.min.js"></script>--}}
    {{--<script src="{!! asset('public/assets/frontend/js/donkey')!!}/js/jquery.donkey.min.js"></script>--}}

    <!-- REVOLUTION -->
    <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/frontend/js/revslider') !!}/css/settings.css" media="screen" />

    <script type="text/javascript" src="{!! asset('public/assets/frontend/js/revslider') !!}/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="{!! asset('public/assets/frontend/js/revslider') !!}/js/jquery.themepunch.revolution.min.js"></script>


    @yield("script")
    <script>
        $(document).ready(function(){
//            $('.wrap-banner').donkey({
//                autoplay:true,
//                nav:true,
//                lazyLoad:true,
//                animation:false,
//                animateOut: 'slideOutRight',
//                animateIn: 'fadeInLeftBig',
//                smartSpeed:800,
//                autoplayTimeout:6000,
//                center:true,
//            })
            $('#slider-rev').show().revolution({
                sliderLayout: 'auto',
                startwidth:1920,
                startheight:500,
                startWithSlide:0,
                responsiveLevels: [1500, 1366],
                gridwidth:[1800, 1500],
                gridheight:[500, 450],
            })
            $('#slider-rev-mobile').show().revolution({
                sliderLayout: 'auto',
                startwidth:800,
                startheight:500,
                startWithSlide:0,
                responsiveLevels: [800, 480],
                gridwidth:[800, 650],
                gridheight:[500, 400],
            })

        })
    </script>
</body>
</html>