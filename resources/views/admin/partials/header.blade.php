<header class="app-header">
    <a class="app-header__logo" href="{{ route('listclassindex') }}">Skilldemy</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                <span class="text-capitalize mr-2">{{ Auth::user()->name }}</span><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="fa fa-sign-out fa-lg"></i>
                        Logout</a></li>
            </ul>
        </li>
    </ul>
</header>
