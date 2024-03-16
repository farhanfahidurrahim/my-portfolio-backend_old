<!doctype html>
<html lang="en">

<head>
    <title>:: Portfolio :: Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fontawesome-free/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet"
        href="{{ asset('backend') }}/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/morrisjs/morris.min.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/color_skins.css">
    <style>
        .icon-menu:before {
            display: none !important
        }

        ;
    </style>
</head>

<body class="theme-blue">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('backend') }}/assets/images/loading.svg" width="48"
                    height="48" alt="Lucid">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->

    <div id="wrapper">

        <!-- Navbar Start-->
        @include('backend.layouts.header')
        <!-- Navbar End-->

        <!-- Sidebar Start-->
        @include('backend.layouts.sidebar')
        <!-- Sidebar End-->

        @yield('content')


    </div>

    <!-- Javascript -->
    <script src="{{ asset('backend') }}/assets/bundles/libscripts.bundle.js"></script>
    <script src="{{ asset('backend') }}/assets/bundles/vendorscripts.bundle.js"></script>
    <script src="{{ asset('backend') }}/assets/bundles/datatablescripts.bundle.js"></script>

    <script src="{{ asset('backend') }}/assets/bundles/jvectormap.bundle.js"></script>
    <script src="{{ asset('backend') }}/assets/bundles/morrisscripts.bundle.js"></script>
    <script src="{{ asset('backend') }}/assets/bundles/knob.bundle.js"></script>
    <script src="{{ asset('backend') }}/assets/bundles/mainscripts.bundle.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/ui/sortable-nestable.js"></script>
    <script src="{{ asset('backend') }}/assets/js/index.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {!! Toastr::message() !!}

</body>

</html>
