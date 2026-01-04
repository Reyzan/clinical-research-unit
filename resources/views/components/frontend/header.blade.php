<!-- Header Main Area -->
<header class="site-header pbmit-header-style-1" id="masthead">
    <div class="pbmit-sticky-header pbmit-header-sticky-yes"></div>
    <div class="pbmit-main-header-area pbmit-infostack-header animation animated fadeIn">

        <!-- Pre-header -->
        <x-frontend.preheader />

        <!-- Main Header -->
        <div class="pbmit-main-header-area">
            <div class="container-fluid">
                <div class="pbmit-header-content d-flex align-items-center justify-content-between pbmit-bg-color-light">

                    <!-- Logo -->
                    <div class="pbmit-logo-area">
                        <div class="site-branding">
                            <h1 class="site-title">
                                <a href="{{ route('home') }}">
                                    <img class="logo-img" src="{{ asset('frontend/images/logo/logo-cru.png') }}" alt="{{ config('app.name') }}">
                                </a>
                            </h1>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <x-frontend.navigation />

                    <!-- Right Box - Search & Call -->
                    <div class="pbmit-right-box d-flex align-items-center">
                        <div class="pbmit-header-search-btn">
                            <a href="#" title="Search">
                                <i class="pbmit-base-icon-search-1"></i>
                            </a>
                        </div>
                        <div class="pbmit-ihbox-style-19">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                        <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <g>
                                                    <path d="m392.6 508.1c-27.2-1.8-65.5-11.2-102.9-24.6-131.9-47.2-260.6-173-288-349-4.9-31.3.2-59.9 24-83.2 7.9-7.8 15-16.5 22.8-24.4 29.3-30.1 72-30.9 102.3-1.9 9.6 9.2 19.4 18.2 28.7 27.6 26.6 26.9 27.7 68.3 2.5 96.5-7.3 8.1-15 15.8-22.7 23.5-8.4 8.4-18.9 13.2-30.1 16.8-13.9 4.3-16.5 10.2-10.1 23.4 39.9 83.5 102.3 143.6 187.2 180.3 11.4 4.9 16.6 2.7 21.2-8.6 10-24.7 28.4-42.7 49.5-57.3 23.9-16.5 58.1-12.8 80.8 6.7 12.4 10.7 24.3 22 35.5 33.8 25.3 26.7 25 68.4-.1 95.5-3.5 3.8-7.2 7.6-10.6 11.5-20.5 23.8-46.3 34.9-90 33.4z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-heading-desc">Contact Us</div>
                                    <h2 class="pbmit-element-title">
                                        <a href="tel:021-80675489">
                                            <span class="pbmit-btn-wrapper">
                                                <span class="pbmit-button-render" data-text="021-80675489">
                                                    <span>021-80675489</span>
                                                </span>
                                            </span>
                                        </a>
                                    </h2>
                                </div>
                                <a class="pbmit-link" href="tel:021-80675489" title="Go to 021-80675489"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</header>
<!-- Header Main Area End -->
