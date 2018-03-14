<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                ILA SUMMER 2018
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route('admin.dashboard') !!}" class="{!! LP_lib::setActive('2','dashboard') !!} nav-link"><i class="icon-speedometer"></i> Dashboard </a>
            </li>
            <li class="nav-item ">
                <a href="{!! route('admin.testimonial.index') !!}" class="nav-link {!! LP_lib::setActive('2','testimonial') !!}"><i class="icon-drop"></i> Testimonials</a>
            </li>
            <li class="nav-item ">
                <a href="{!! route('admin.event.index') !!}" class="nav-link {!! LP_lib::setActive('2','event') !!}"><i class="icon-drop"></i> Events</a>
            </li>
            <li class="nav-item ">
                <a href="{!! route('admin.program.index') !!}" class="nav-link {!! LP_lib::setActive('2','program') !!}"><i class="icon-drop"></i> Programs</a>
            </li>
            <li class="divider"></li>

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>