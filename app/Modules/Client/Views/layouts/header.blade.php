<header class="bg-yellow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="logo-flex clearfix">
                    <div class="logo-box">
                        <a href="{!! route('homepage') !!}">
                            <img class="img-responsive" src="{!!asset('public/assets/frontend') !!}/images/logo-ila.png" alt="ILA">
                        </a>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="topmenu clearfix">
                    <nav class=" navbar-default navbar-right" role="navigation">
                        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
                            <ul class="nav navbar-nav">
                                <li class="{!! LP_lib::setActive(1,'') !!}"><a href="{!! route('homepage') !!}">TRANG CHỦ</a></li>

                                <li class="dropdown {!! LP_lib::setActive(1,'chuong-trinh') !!} ">
                                    <a href="{!! route('program.index') !!}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">CHƯƠNG TRÌNH <span class="caret"></span></a>
                                    <div class="dropdown-menu">
                                        <ul class="list-dropdown-menu">
                                            <li><a href="{!! route('program.index') !!}">TỔNG QUAN CHƯƠNG TRÌNH HÈ</a></li>
                                            @if(!$program->isEmpty())
                                                @foreach($program as $item_program)
                                                    <li><a href="{!! route('program.detail', $item_program->slug) !!}">{!! $item_program->name !!}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                                <li class="{!! LP_lib::setActive(1,'su-kien') !!}"><a href="{!! route('event.index') !!}">SỰ KIỆN</a></li>
                                {{--<li class="{!! LP_lib::setActive(1,'facebook') !!}"><a href="{!! route('facebook.index') !!}">FACEBOOK</a></li>--}}
                                <li class="{!! LP_lib::setActive(1,'dang-ky') !!}"><a href="{!! route('register') !!}"><b>ĐĂNG KÝ</b></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>