<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', '')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon/favicon.ico') }}">

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="{{ asset('frontend/fonts/pbmit-ophtical-icon/pbmit_ophtical.css') }}">

    <!-- Frontend CSS Bundle (Bootstrap-based) -->
    @vite(['resources/css/frontend/frontend.css'])

    @stack('styles')
</head>
<body class="@yield('body_class')">

    <!-- Page Wrapper -->
    <div class="page-wrapper" id="page">

        <!-- Header -->
        <x-frontend.header />

        <!-- Main Content -->
        <div class="page-content">
            @yield('content')
        </div>
        <!-- page content End -->

        <!-- Footer -->
        <x-frontend.footer />

    </div>
    <!-- page wrapper End -->

    <!-- Search Box -->
    <div class="pbmit-header-search-form">
        <div class="pbmit-search-overlay"></div>
        <div class="pbmit-header-search-form-wrapper">
            <div class="pbmit-search-close">
                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
                    <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                    <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                </svg>
            </div>
            <form class="search-form" action="{{ route('home') }}" method="GET">
                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                <button type="submit" class="search-submit" title="Search"></button>
                <div class="pbmit-search-line"></div>
            </form>
        </div>
    </div>
    <!-- Search Box End -->

    <!-- Scroll To Top -->
    <div class="pbmit-backtotop">
        <div class="pbmit-arrow">
            <i class="pbmit-base-icon-up-open-big"></i>
        </div>
        <div class="pbmit-hover-arrow">
            <i class="pbmit-base-icon-up-open-big"></i>
        </div>
    </div>
    <!-- Scroll To Top End -->

    <!-- Frontend JS Scripts -->
    <!-- jQuery (must load first) -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- jQuery Plugins -->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/js/numinate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <!-- GSAP -->
    <script src="{{ asset('frontend/js/gsap.js') }}"></script>
    <script src="{{ asset('frontend/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('frontend/js/SplitText.js') }}"></script>
    <script src="{{ asset('frontend/js/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('frontend/js/gsap-animation.js') }}"></script>
    <!-- Form Validation -->
    <script src="{{ asset('frontend/js/jquery-validate/jquery.validate.min.js') }}"></script>
    <!-- Custom Scripts (must load last) -->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>

    @stack('scripts')
</body>
</html>
