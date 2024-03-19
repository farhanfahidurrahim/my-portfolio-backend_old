<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('backend.layouts.head')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Navbar -->
    @include('backend.layouts.navbar')
    <!-- END: Navbar -->

    <!-- BEGIN: Sidebar Menu-->
    @include('backend.layouts.sidebar')
    <!-- END: Sidebar Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <!-- BEGIN: Customizer-->
    @include('backend.layouts.customizer')
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <div class="buy-now"><a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger">Buy
            Now</a>

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
                2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio"
                    target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights
                    Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i
                    data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: JS Script-->
    @include('backend.layouts.jsscript')
</body>
<!-- END: Body-->

</html>
