<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.dashboard.src.head-links')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    {{--Header--}}
    @include('dashboard.partials.header')
    {{--Header--}}

    {{--Aside--}}
    @include('dashboard.partials.aside')
    {{--Aside--}}

    {{--Main Content--}}
    <div class="content-wrapper">
        <div class="content-header">
            @yield('breadcrumb')
            @yield('content')
        </div>
    </div>
    {{--Main Content--}}

    {{--Footer--}}
    @include('dashboard.partials.footer')
    {{--Footer--}}
</div>
@include('layouts.dashboard.src.js-scripts')
@yield('scripts')
</body>
</html>

