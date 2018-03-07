@extends("Client::layouts.default")

@section("content")
    @include("Client::layouts.banner_general")
    <section class="facebook">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="each-fb">

                    </div>
                </div>
            </div>
        </div>
    </section>
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
        })
    </script>
@stop