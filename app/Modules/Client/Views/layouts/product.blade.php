<section class="discover bg-yellow">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="m-haft">CHƯƠNG TRÌNH HÈ 2018</h2>
                <div class="discover-container">
                    <div class="container-fluid">
                        <div class="row">
                            @if(!$program->isEmpty())
                                @foreach($program as $item_program)
                                    <div class="col-md-4">
                                        <a href="{!! url('/chuong-trinh/'.$item_program->slug) !!}">
                                        <div class="each-product animate" data-animate="fadeInLeft" data-delay="0.1s" >
                                            <img src="{!! asset('public/upload/'.$item_program->img_url) !!}" class="img-fluid" />
                                            {{--<div class="mask"></div>--}}
                                            {{--<div class="content">--}}
                                                {{--<h3 class="visible-sm visible-xs">{!! $item_program->name !!}</h3>--}}
                                                {{--<p class="subtitle visible-sm visible-xs">{!! $item_program->subtitle !!}</p>--}}
                                                {{--<p>{!! $item_program->description !!}</p>--}}
                                                {{--<a href="{!! route('program.detail', $item_program->slug) !!}" class="info">Xem Thêm</a>--}}
                                            {{--</div>--}}
                                            <h3>{!! $item_program->subtitle !!}</h3>
                                            {{--<p>{!! $item_program->subtitle !!}</p>--}}
                                            <div class="wrap-button small-size text-center">
                                                <a href="{!! route('register') !!}" class="btn btn-reg">ĐĂNG KÝ NGAY</a>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
