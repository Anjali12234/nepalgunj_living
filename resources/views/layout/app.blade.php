<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nepalgunj Living') }}</title>


    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/backend/vendors/images/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/backend/vendors/images/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/backend/vendors/images/favicon-16x16.png') }}" />
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/styles/icon-font.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/styles/style.css') }}" />

    @vite('resources/js/app.js')
</head>

<body>
    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="{{ asset('assets/backend/vendors/images/deskapp-logo.svg') }}" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div> --}}
    @include('sweetalert::alert')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')

    <div class="main-container">
        <div class="pd-ltr-20">

           @yield('container')
            @include('admin.partials.footer')
        </div>
    </div>
    @stack('script')
    <!-- js -->
    <script src="{{ asset('assets/backend/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('assets/backend/src/plugins/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/scripts/dashboard.js') }}"></script>


</body>

</html>
