<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets/admin/assets/') }}" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/fonts/remixicon/remixicon.css') }}" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/libs/node-waves/node-waves.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/admin/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/admin/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('Admin.layouts.partials.sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->


                @include('Admin.layouts.partials.nav')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                @yield('content')
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('assets/admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/vendor/js/menu.js') }}"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('assets/admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('assets/admin/assets/js/dashboards-analytics.js') }}"></script>

        <!-- Place this tag before closing body tag for github widget button. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
