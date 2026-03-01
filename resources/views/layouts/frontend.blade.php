<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @php
        $siteUrl = config('app.url');
        $siteName = config('app.name');
        $defaultOgImage = asset('frontend/images/og/cru-default.png');
        $currentUrl = url()->current();
    @endphp

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Clinical Research Unit') - {{ $siteName }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Clinical Research Unit (CRU) RSCM pioneers precision medicine and genomic research in Indonesia. National hub for metabolic disease research, biobank services, and clinical trials.')">
    <meta name="keywords" content="@yield('meta_keywords', 'clinical research unit, genomic research, precision medicine, biobank, metabolic disease, RSCM, Indonesian genomics, genetic research, personalized medicine, clinical trials')">
    <meta name="author" content="Clinical Research Unit - RSCM">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical_url', $currentUrl)">

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="@yield('og_title', 'Clinical Research Unit RSCM - Pioneering Precision Medicine in Indonesia')">
    <meta property="og:description" content="@yield('og_description', 'Clinical Research Unit (CRU) RSCM pioneers precision medicine and genomic research in Indonesia. National hub for metabolic disease research, biobank services, and clinical trials.')">
    <meta property="og:url" content="@yield('og_url', $currentUrl)">
    <meta property="og:image" content="@yield('og_image', $defaultOgImage)">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="@yield('og_locale', 'en_US')">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="@yield('twitter_card', 'summary_large_image')">
    <meta name="twitter:title" content="@yield('twitter_title', 'Clinical Research Unit RSCM - Pioneering Precision Medicine in Indonesia')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Clinical Research Unit (CRU) RSCM pioneers precision medicine and genomic research in Indonesia. National hub for metabolic disease research.')">
    <meta name="twitter:image" content="@yield('twitter_image', $defaultOgImage)">

    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#F59E0B">
    <meta name="format-detection" content="telephone=no">

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
                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163"
                    viewBox="0 0 26.163 26.163">
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
