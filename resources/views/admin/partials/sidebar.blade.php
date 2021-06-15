<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">

        <ul class="app-menu">
                <li><a class="app-menu__item {{ request()->routeIs('listclassindex') ? 'active' : '' }}"
                                href="{{ route('listclassindex') }}"><i class="app-menu__icon fa fa-list"></i><span
                                        class="app-menu__label">List Class</span></a></li>
                <li><a class="app-menu__item {{ request()->routeIs('admin.instructor.list') ? 'active' : '' }}"
                                href="{{ route('admin.instructor.list') }}"><i
                                        class="app-menu__icon fa fa-id-badge"></i><span class="app-menu__label">List
                                        Instructor</span></a></li>
                <li><a class="app-menu__item {{ request()->routeIs('admin.peserta.list') ? 'active' : '' }}"
                                href="{{ route('admin.peserta.list') }}"><i class="app-menu__icon fa fa-users"></i><span
                                        class="app-menu__label">List Peserta</span></a></li>
                <li><a class="app-menu__item {{ request()->routeIs('admin.category.list') ? 'active' : '' }}"
                                href="{{ route('admin.category.list') }}"><i
                                        class="app-menu__icon bx bxs-category"></i><span class="app-menu__label">List
                                        Category</span></a></li>
                <li><a class="app-menu__item {{ request()->routeIs('admin.order.list') ? 'active' : '' }}"
                                href="{{ route('admin.order.list') }}"><i
                                        class="app-menu__icon fa fa-line-chart"></i><span class="app-menu__label">Order
                                        List</span></a></li>

        </ul>
</aside>