<section class="discover bg-lightwhite">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="m-haft">SẢN PHẨM HÈ 2018</h2>
                <div class="discover-container">
                    <div class="container-fluid">
                        <div class="row">
                            @if(!$program->isEmpty())
                                @foreach($program as $item_program)
                                    <div class="col-md-4">
                                        <div class="each-product " data-animate="fadeInLeft" data-delay="0.1s" >
                                            <img src="{!! asset('public/upload/'.$item_program->img_url) !!}" class="img-fluid" />
                                            <div class="mask"></div>
                                            <div class="content">
                                                <h3 class="visible-sm visible-xs">{!! $item_program->name !!}</h3>
                                                <p class="subtitle visible-sm visible-xs">{!! $item_program->subtitle !!}</p>
                                                <p>{!! $item_program->description !!}</p>
                                                <a href="{!! route('program.detail', $item_program->slug) !!}" class="info">Xem Thêm</a>
                                            </div>
                                            <h3 class="hidden-sm hidden-xs">{!! $item_program->name !!}</h3>
                                            <p class="subtitle hidden-sm hidden-xs">{!! $item_program->subtitle !!}</p>
                                        </div>
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