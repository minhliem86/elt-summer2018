<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                ILA SUMMER 2018
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard </a>
            </li>
            <li class="nav-item ">
                <a href="{!! route('admin.promotion.index') !!}" class="nav-link {!! LP_lib::setActive('2','promotion') !!}"><i class="icon-drop"></i> Promotion</a>
            </li>
            <li class="nav-item ">
                <a href="{!! route('admin.testimonial.index') !!}" class="nav-link {!! LP_lib::setActive('2','testimonial') !!}"><i class="icon-drop"></i> Testimonial</a>
            </li>
            <li class="nav-item ">
                <a href="{!! route('admin.event.index') !!}" class="nav-link {!! LP_lib::setActive('2','event') !!}"><i class="icon-drop"></i> Event</a>
            </li>
            <li class="nav-item ">
                <a href="{!! route('admin.program.index') !!}" class="nav-link {!! LP_lib::setActive('2','program') !!}"><i class="icon-drop"></i> Program</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bell"></i> Notifications</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="notifications-alerts.html"><i class="icon-bell"></i> Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notifications-badge.html"><i class="icon-bell"></i> Badge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notifications-modals.html"><i class="icon-bell"></i> Modals</a>
                    </li>
                </ul>
            </li>
            <li class="divider"></li>

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>