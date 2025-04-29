<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{asset('dashboard/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
{{--        <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--            <div class="image">--}}
{{--                <img src="{{asset('dashboard/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">--}}
{{--            </div>--}}
{{--            <div class="info">--}}
{{--                <a href="#" class="d-block">مينا وجيه</a>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column pr-0" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item {{ request()->is('*users*') ? 'active' : '' }}">
                    <a href="{{route('giver.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>المتبرعين</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('*users*') ? 'active' : '' }}">
                    <a href="{{route('donation.money.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>التبرعات المالية</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('*users*') ? 'active' : '' }}">
                    <a href="{{route('item.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>السلع</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('*users*') ? 'active' : '' }}">
                    <a href="{{route('donation.item.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>تبرعات السلع</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('*users*') ? 'active' : '' }}">
                    <a href="{{route('money.distribution.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>التوزيعات المالية</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
