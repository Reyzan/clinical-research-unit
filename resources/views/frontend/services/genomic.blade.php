@extends('layouts.frontend')

@section('title', 'Genomic')

@section('meta_description', 'Advanced genomic sequencing and analysis services at CRU RSCM. Whole genome sequencing, targeted panels, variant analysis, and pharmacogenomics supporting precision medicine research and personalized healthcare in Indonesia.')

@section('meta_keywords', 'genomic sequencing, DNA analysis, genetic testing, whole genome sequencing, targeted sequencing, variant analysis, pharmacogenomics, precision medicine, genetic counseling Indonesia, NGS services')

@section('og_title', 'Advanced Genomic Sequencing Services - Clinical Research Unit RSCM')

@section('og_description', 'Cutting-edge genomic sequencing and analysis capabilities driving precision medicine research. From whole genome sequencing to targeted panels and pharmacogenomics.')

@section('og_image', asset('frontend/images/og/genomic-og.png'))

@section('og_type', 'article')

@section('canonical_url', route('services.show', 'genomic'))

@section('content')
    <x-frontend.page-title title="Genomic" :breadcrumbs="[['title' => 'Genomic']]" />
    <!-- Page Content -->
    <div class="page-content">
        <!-- Service Details -->
        <section class="site-content service-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 service-left-col sidebar">
                        <aside class="service-sidebar">
                            <aside class="widget post-list">
                                <h2 class="widget-title">All services</h2>
                                <div class="all-post-list">
                                    <ul>
                                        <li><a href="{{ route('services.show', 'biobank') }}"> Biobank </a></li>
                                        <li class="post-active"><a href="{{ route('services.show', 'genomic') }}"> Genomic
                                            </a></li>
                                        <li><a href="{{ route('services.show', 'clinical-trial') }}"> Clinical Trial </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="widget pbmit-service-ad">
                                <div class="textwidget">
                                    <div class="pbmit-service-ads">
                                        <div class="pbmit-ads-icon">
                                            <i class="pbmit-base-icon-phone-1"></i>
                                        </div>
                                        <h4 class="pbmit-ads-heading">Looking for trusted<br>eye care?</h4>
                                        <span class="pbmit-ads-decs">Schedule an appointment with our specialists for eye
                                            exams, vision correction and treatments.</span>
                                        <h3 class="pbmit-ads-call">
                                            <a href="tel:+0(123)456-789">+0(123)456-789</a>
                                        </h3>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget pbmit-download-info">
                                <h2 class="widget-title">Clinic profile</h2>
                                <div class="textwidget">
                                    <div class="pbmit-download">
                                        <div class="pbmit-item-download">
                                            <a href="#" target="_blank" rel="noopener">
                                                <div class="pbmit-download-content">
                                                    <div class="pbmit-download-wrap">
                                                        <i class="pbmit-base-icon-doc-file"></i>
                                                        <h3 class="pbmit-download-title">Policy Brochures</h3>
                                                    </div>
                                                    <span class="pbmit-download-item">
                                                        <i class="pbmit-download-icon pbmit-base-icon-download"></i>
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="pbmit-item-download">
                                            <a href="#" target="_blank" rel="noopener">
                                                <div class="pbmit-download-content">
                                                    <div class="pbmit-download-wrap">
                                                        <i class="pbmit-base-icon-pdf-file"></i>
                                                        <h3 class="pbmit-download-title">Terms & Conditions</h3>
                                                    </div>
                                                    <span class="pbmit-download-item">
                                                        <i class="pbmit-download-icon pbmit-base-icon-download"></i>
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </aside>
                    </div>
                    <div class="col-md-9 service-right-col">
                        <div class="pbmit-service-feature-image">
                            <div class="swiper-slider" data-autoplay="true" data-loop="true" data-allow-touch="true"
                                data-arrows="false" data-columns="1" data-margin="0" data-effect="slide" data-speed="150">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/service/genomic-1.png') }}"
                                            class="img-fluid w-100" alt="Genomic Services Image 1" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/service/genomic-2.png') }}"
                                            class="img-fluid w-100" alt="Genomic Services Image 2" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/service/genomic-3.png') }}"
                                            class="img-fluid w-100" alt="Genomic Services Image 3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-entry-content">

                            <div class="pbmit-custom-heading animation-style3">
                                <h3 class="pbmit-title">Genomic Services for Precision Care & Faster Clinical Decisions</h3>
                            </div>
                            <p>
                                <span class="pbmit-drop-cap"><span class="pbmit-drop-cap-letter">G</span></span>
                                enomics turns complex genetic information into actionable insights for clinicians,
                                researchers,
                                and patients.
                                Our Genomic Services support <strong>precision medicine</strong> by helping identify
                                inherited
                                risk, optimize drug response,
                                and personalize lifestyle and prevention strategies—so decisions are smarter, safer, and
                                more
                                cost-effective.
                            </p>
                            <p class="mb-4">
                                From targeted clinical panels to comprehensive interpretation, our workflow is designed for
                                <strong>clinical-grade quality</strong>, <strong>clear reporting</strong>, and
                                <strong>responsible data governance</strong>.
                                If you are managing a clinical trial, developing a registry, or improving patient outcomes,
                                we
                                are ready to support your program end-to-end.
                            </p>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="pbmit-ihbox-style-10">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                    <svg class="w-64 h-64" viewBox="0 0 24 24" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 2C12.5523 2 13 2.44772 13 3C13 3.55228 12.5523 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 11.4477 20.4477 11 21 11C21.5523 11 22 11.4477 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12 6C12.5523 6 13 6.44772 13 7C13 7.55228 12.5523 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16C14.2091 16 16 14.2091 16 12C16 11.4477 16.4477 11 17 11C17.5523 11 18 11.4477 18 12C18 15.3137 15.3137 18 12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6ZM18.5713 2.10059C18.8474 2.1006 19.0712 2.32449 19.0713 2.60059V4.42969C19.0716 4.70553 19.2954 4.92866 19.5713 4.92871H21.3994C21.6754 4.92871 21.8992 5.15275 21.8994 5.42871V6.34375L20.0107 8.23242C19.6358 8.60719 19.1268 8.81824 18.5967 8.81836H16.5967L12.707 12.707C12.3165 13.0974 11.6835 13.0975 11.293 12.707C10.9027 12.3165 10.9026 11.6834 11.293 11.293L15.1826 7.4043V5.4043C15.1826 4.87411 15.3928 4.36526 15.7676 3.99023L17.6572 2.10059H18.5713Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">Clinical-Grade<br>Accuracy</h2>
                                            </div>
                                            <div class="pbmit-contents-wraper">
                                                <h2 class="pbmit-element-title">Clinical-Grade<br>Accuracy</h2>
                                                <div class="pbmit-heading-desc">
                                                    Robust lab workflow, clear reporting, and quality-focused processing to
                                                    support clinical decisions.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mt-md-0 mt-4">
                                    <div class="pbmit-ihbox-style-10">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                    <svg class="w-64 h-64" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"
                                                            style="fill: #fff;"></path>
                                                        <path
                                                            d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"
                                                            style="fill: #fff;"></path>
                                                        <path d="M9 17v-5" style="fill: #fff;"></path>
                                                        <path d="M12 17v-1" style="fill: #fff;"></path>
                                                        <path d="M15 17v-3" style="fill: #fff;"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">Actionable<br>Reports</h2>
                                            </div>
                                            <div class="pbmit-contents-wraper">
                                                <h2 class="pbmit-element-title">Actionable<br>Reports</h2>
                                                <div class="pbmit-heading-desc">
                                                    Designed to be understood quickly—focused on what clinicians and
                                                    programs
                                                    need to do next.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mt-lg-0 mt-4">
                                    <div class="pbmit-ihbox-style-10">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                    {{-- keep your svg --}}
                                                    <svg class="w-64 h-64" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56">
                                                        </path>
                                                        <path
                                                            d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">Privacy &<br>Governance</h2>
                                            </div>
                                            <div class="pbmit-contents-wraper">
                                                <h2 class="pbmit-element-title">Privacy &<br>Governance</h2>
                                                <div class="pbmit-heading-desc">
                                                    Responsible handling of sensitive genomic data to support clinical and
                                                    research needs.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Portfolio Start -->
                            <section class="portfolio-one my-5">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-9 left-col full-width-1200">
                                            <div class="swiper-slider pbmit-column-four" data-autoplay="true"
                                                data-loop="true" data-allow-touch="true" data-dots="false"
                                                data-arrows="false" data-columns="2" data-margin="20"
                                                data-effect="slide">
                                                <div class="swiper-wrapper">
                                                    <!-- Slide1 -->
                                                    <article class="pbmit-portfolio-style-1 swiper-slide">
                                                        <div class="pbminfotech-post-content">
                                                            <div class="pbmit-featured-img-wrapper">
                                                                <div class="pbmit-featured-wrapper">
                                                                    <img src="{{ asset('frontend/images/service/genomic-equipments/dynamag-2-magnetic.png') }}"
                                                                        class="img-fluid" alt="Dynamag-2 Magnetic">
                                                                </div>
                                                            </div>
                                                            <div class="pbminfotech-box-content">
                                                                <div class="pbminfotech-box-content-inner">
                                                                    <div class="pbmit-port-cat">
                                                                        <a href="javascript:void(0)"
                                                                            rel="tag">Facility</a>
                                                                    </div>
                                                                    <h3 class="pbmit-portfolio-title">
                                                                        <a href="javascript:void(0)">Dynamag-2
                                                                            Magnetic</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <!-- Slide2 -->
                                                    <article class="pbmit-portfolio-style-1 swiper-slide">
                                                        <div class="pbminfotech-post-content">
                                                            <div class="pbmit-featured-img-wrapper">
                                                                <div class="pbmit-featured-wrapper">
                                                                    <img src="{{ asset('frontend/images/service/genomic-equipments/gridion.png') }}"
                                                                        class="img-fluid" alt="GridION">
                                                                </div>
                                                            </div>
                                                            <div class="pbminfotech-box-content">
                                                                <div class="pbminfotech-box-content-inner">
                                                                    <div class="pbmit-port-cat">
                                                                        <a href="javascript:void(0)"
                                                                            rel="tag">Facility</a>
                                                                    </div>
                                                                    <h3 class="pbmit-portfolio-title">
                                                                        <a href="javascript:void(0)">GridION</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <!-- Slide3 -->
                                                    <article class="pbmit-portfolio-style-1 swiper-slide">
                                                        <div class="pbminfotech-post-content">
                                                            <div class="pbmit-featured-img-wrapper">
                                                                <div class="pbmit-featured-wrapper">
                                                                    <img src="{{ asset('frontend/images/service/genomic-equipments/hula-mixer.png') }}"
                                                                        class="img-fluid" alt="Hula Mixer">
                                                                </div>
                                                            </div>
                                                            <div class="pbminfotech-box-content">
                                                                <div class="pbminfotech-box-content-inner">
                                                                    <div class="pbmit-port-cat">
                                                                        <a href="javascript:void(0)"
                                                                            rel="tag">Facility</a>
                                                                    </div>
                                                                    <h3 class="pbmit-portfolio-title">
                                                                        <a href="javascript:void(0)">Hula
                                                                            Mixer</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <!-- Slide4 -->
                                                    <article class="pbmit-portfolio-style-1 swiper-slide">
                                                        <div class="pbminfotech-post-content">
                                                            <div class="pbmit-featured-img-wrapper">
                                                                <div class="pbmit-featured-wrapper">
                                                                    <img src="{{ asset('frontend/images/service/genomic-equipments/nanodrop-spectrophotometer.png') }}"
                                                                        class="img-fluid"
                                                                        alt="NanoDrop Spectrophotometer">
                                                                </div>
                                                            </div>
                                                            <div class="pbminfotech-box-content">
                                                                <div class="pbminfotech-box-content-inner">
                                                                    <div class="pbmit-port-cat">
                                                                        <a href="javascript:void(0)"
                                                                            rel="tag">Facility</a>
                                                                    </div>
                                                                    <h3 class="pbmit-portfolio-title">
                                                                        <a href="javascript:void(0)">NanoDrop
                                                                            Spectrophotometer</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <!-- Slide5 -->
                                                    <article class="pbmit-portfolio-style-1 swiper-slide">
                                                        <div class="pbminfotech-post-content">
                                                            <div class="pbmit-featured-img-wrapper">
                                                                <div class="pbmit-featured-wrapper">
                                                                    <img src="{{ asset('frontend/images/service/genomic-equipments/qubit.png') }}"
                                                                        class="img-fluid" alt="Qubit">
                                                                </div>
                                                            </div>
                                                            <div class="pbminfotech-box-content">
                                                                <div class="pbminfotech-box-content-inner">
                                                                    <div class="pbmit-port-cat">
                                                                        <a href="javascript:void(0)"
                                                                            rel="tag">Facility</a>
                                                                    </div>
                                                                    <h3 class="pbmit-portfolio-title">
                                                                        <a href="javascript:void(0)">Qubit</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <!-- Slide6 -->
                                                    <article class="pbmit-portfolio-style-1 swiper-slide">
                                                        <div class="pbminfotech-post-content">
                                                            <div class="pbmit-featured-img-wrapper">
                                                                <div class="pbmit-featured-wrapper">
                                                                    <img src="{{ asset('frontend/images/service/genomic-equipments/thermal-cycler.png') }}"
                                                                        class="img-fluid" alt="Thermal Cycler">
                                                                </div>
                                                            </div>
                                                            <div class="pbminfotech-box-content">
                                                                <div class="pbminfotech-box-content-inner">
                                                                    <div class="pbmit-port-cat">
                                                                        <a href="javascript:void(0)"
                                                                            rel="tag">Facility</a>
                                                                    </div>
                                                                    <h3 class="pbmit-portfolio-title">
                                                                        <a href="javascript:void(0)">Thermal
                                                                            Cycler</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 right-col full-width-1200">
                                            <div class="portfolio-one-heading pbmit-bg-color-secondary">
                                                <div class="pbmit-heading-subheading text-center animation-style2">
                                                    <h2 class="pbmit-title">Our Facilities</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Portfolio End -->

                            <div class="mt-5">

                                <!-- Navigation Tabs -->
                                <div class="text-center">
                                    <div class="custom-genomic-nav-container">
                                        <ul class="nav nav-pills custom-genomic-nav-pills" id="genomicTabs"
                                            role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="tab-fh" data-bs-toggle="pill"
                                                    data-bs-target="#pane-fh" type="button" role="tab">
                                                    Familial Hypercholesterolemia
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="tab-pharm" data-bs-toggle="pill"
                                                    data-bs-target="#pane-pharm" type="button" role="tab">
                                                    Pharmacogenomics
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="tab-nutri" data-bs-toggle="pill"
                                                    data-bs-target="#pane-nutri" type="button" role="tab">
                                                    Nutrigenomics
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="tab-mody" data-bs-toggle="pill"
                                                    data-bs-target="#pane-mody" type="button" role="tab">
                                                    MODY / Diabetes
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Tab Content -->
                                <div class="tab-content" id="genomicTabsContent">
                                    {{-- FH --}}
                                    <div class="tab-pane fade show active" id="pane-fh" role="tabpanel"
                                        aria-labelledby="tab-fh">
                                        <div class="row g-0 genomic-content-card">
                                            <div class="col-lg-6 genomic-image-col">
                                                <div class="genomic-image-bg"
                                                    style="background-image: url('{{ asset('frontend/images/service/hypercholesterolemia.png') }}');">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 genomic-info-col">
                                                <div class="genomic-info-bg-decor"></div>
                                                <div class="genomic-subtitle">GENOMIC PANEL</div>
                                                <h2 class="genomic-title">Familial Hypercholesterolemia (FH)</h2>
                                                <p class="genomic-desc">
                                                    Detect inherited high LDL risk before complications happen. FH is an
                                                    inherited condition that can lead to very high LDL and early
                                                    cardiovascular
                                                    events.
                                                </p>
                                                <div class="genomic-list">
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">LDL cholesterol ≥ 190 mg/dL in
                                                            adults
                                                        </div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">LDL remains above target despite
                                                            standard lipid therapy</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Family history of premature heart
                                                            attack
                                                            or early coronary disease</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">A known FH diagnosis in close
                                                            relatives
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Pharmacogenomics --}}
                                    <div class="tab-pane fade" id="pane-pharm" role="tabpanel"
                                        aria-labelledby="tab-pharm">
                                        <div class="row g-0 genomic-content-card">
                                            <div class="col-lg-6 genomic-image-col">
                                                <div class="genomic-image-bg"
                                                    style="background-image: url('{{ asset('frontend/images/service/pharmacogenomics.png') }}');">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 genomic-info-col">
                                                <div class="genomic-info-bg-decor"></div>
                                                <div class="genomic-subtitle">GENOMIC PANEL</div>
                                                <h2 class="genomic-title">Pharmacogenomics</h2>
                                                <p class="genomic-desc">
                                                    Choose the right medication & dose based on genetics. Predict how an
                                                    individual metabolizes and responds to medicines to reduce adverse
                                                    effects.
                                                </p>
                                                <div class="genomic-list">
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text"><strong>Common Genes:</strong>
                                                            CYP2C19,
                                                            CYP2C9, CYP2D6, SLCO1B1</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Safer dosing guidance & reduced
                                                            adverse
                                                            reactions</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Better therapy selection for
                                                            long-term
                                                            treatment</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Faster time-to-control for high-risk
                                                            medications</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Nutrigenomics --}}
                                    <div class="tab-pane fade" id="pane-nutri" role="tabpanel"
                                        aria-labelledby="tab-nutri">
                                        <div class="row g-0 genomic-content-card">
                                            <div class="col-lg-6 genomic-image-col">
                                                <div class="genomic-image-bg"
                                                    style="background-image: url('{{ asset('frontend/images/service/nutrigenomic.png') }}');">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 genomic-info-col">
                                                <div class="genomic-info-bg-decor"></div>
                                                <div class="genomic-subtitle">GENOMIC PANEL</div>
                                                <h2 class="genomic-title">Nutrigenomics</h2>
                                                <p class="genomic-desc">
                                                    Personalize nutrition beyond “one-size-fits-all”. Explore how genetic
                                                    variations influence dietary responses and nutrient metabolism.
                                                </p>
                                                <div class="genomic-list">
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Taste perception & food response
                                                            (caffeine, lactose, gluten)</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Nutrient metabolism (vitamin
                                                            B-complex,
                                                            antioxidants, iron)</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Detailed lifestyle recommendations
                                                        </div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Plans for weight management and
                                                            long-term prevention</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- MODY --}}
                                    <div class="tab-pane fade" id="pane-mody" role="tabpanel"
                                        aria-labelledby="tab-mody">
                                        <div class="row g-0 genomic-content-card">
                                            <div class="col-lg-6 genomic-image-col">
                                                <div class="genomic-image-bg"
                                                    style="background-image: url('{{ asset('frontend/images/service/mody-diabetes.png') }}');">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 genomic-info-col">
                                                <div class="genomic-info-bg-decor"></div>
                                                <div class="genomic-subtitle">GENOMIC PANEL</div>
                                                <h2 class="genomic-title">MODY (Monogenic Diabetes)</h2>
                                                <p class="genomic-desc">
                                                    Confirm monogenic diabetes to unlock the right therapy. MODY is often
                                                    misclassified as type 1 or type 2, but requires different management.
                                                </p>
                                                <div class="genomic-list">
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Accurate diagnosis distinguishing
                                                            from
                                                            Type 1/Type 2</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Effective response to specific oral
                                                            therapies</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Economical alternative to insulin in
                                                            selected cases</div>
                                                    </div>
                                                    <div class="genomic-list-item">
                                                        <div class="genomic-list-icon"><i class="fa fa-check"></i></div>
                                                        <div class="genomic-list-text">Improved long-term management
                                                            strategy
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Details End -->
    </div>
    <!-- Page Content End -->

    @push('scripts')
        <script>
            // Faster autoplay for genomic service carousel
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    const genomicCarousel = document.querySelector('.service-right-col .swiper-slider');
                    if (genomicCarousel && genomicCarousel.swiper) {
                        genomicCarousel.swiper.params.autoplay.delay = 1000;
                        genomicCarousel.swiper.autoplay.stop();
                        genomicCarousel.swiper.autoplay.start();
                    }
                }, 500);
            });
        </script>
    @endpush
@endsection
