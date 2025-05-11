<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{asset('dashboard/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column pr-0" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item {{ request()->is('institutions') || request()->is('institutions/*') ? 'active' : '' }}">
                    <a href="{{route('institution.index')}}" class="nav-link">
                        <img src="{{asset('assets/imgs/icons/arrow.png')}}" class="aside-list-icon">
                        <p>المؤسسات</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('givers') || request()->is('givers/*') ? 'active' : '' }}">
                    <a href="{{route('giver.index')}}" class="nav-link">
                        <img src="{{asset('assets/imgs/icons/arrow.png')}}" class="aside-list-icon">
                        <p>المتبرعين</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('items') || request()->is('items/*') ? 'active' : '' }}">
                    <a href="{{route('item.index')}}" class="nav-link">
                        <img src="{{asset('assets/imgs/icons/arrow.png')}}" class="aside-list-icon">
                        <p> مخزن السلع</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('money-donations') || request()->is('money-donations/*') ? 'active' : '' }}">
                    <a href="{{route('donation.money.index')}}" class="nav-link">
                        <img src="{{asset('assets/imgs/icons/arrow.png')}}" class="aside-list-icon">
                        <p>التبرعات المالية</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('items-donations') || request()->is('items-donations/*') ? 'active' : '' }}">
                    <a href="{{route('donation.item.index')}}" class="nav-link">
                        <img src="{{asset('assets/imgs/icons/arrow.png')}}" class="aside-list-icon">
                        <p>تبرعات السلع</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('money-distribution') || request()->is('money-distribution/*') ? 'active' : '' }}">
                    <a href="{{route('money.distribution.index')}}" class="nav-link">
                        <img src="{{asset('assets/imgs/icons/arrow.png')}}" class="aside-list-icon">
                        <p>التوزيعات المالية</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('item-distribution') || request()->is('item-distribution/*') ? 'active' : '' }}">
                    <a href="{{route('item.distribution.index')}}" class="nav-link">
                        <img src="{{asset('assets/imgs/icons/arrow.png')}}" class="aside-list-icon">
                        <p>توزيعات السلع</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
