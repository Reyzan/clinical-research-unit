@extends('layouts.frontend')

@section('title', 'Biobank')

@section('meta_description', 'Professional biobank services at CRU RSCM: sample processing, DNA isolation, long-term storage at -86°C, quality control, and specimen management. Supporting 2,000+ subjects with 40,000+ tubes across multiple specimen types.')

@section('meta_keywords', 'biobank services, sample processing, DNA isolation, specimen storage, cold chain storage, plasma processing, serum separation, buffy coat extraction, research biobank Indonesia, sample management')

@section('og_title', 'Professional Biobank Services - Clinical Research Unit RSCM')

@section('og_description', 'Comprehensive biobank services with state-of-the-art cold storage, professional sample processing, and quality-controlled specimen management supporting clinical research excellence.')

@section('og_image', asset('frontend/images/og/biobank-og.png'))

@section('og_type', 'article')

@section('canonical_url', route('services.show', 'biobank'))

@section('content')
<x-frontend.page-title title="Biobank" :breadcrumbs="[['title' => 'Biobank']]" />

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
                                    <li class="post-active">
                                        <a href="{{ route('services.show', 'biobank') }}">
                                            Biobank
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'genomic') }}">
                                            Genomic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'clinical-trial') }}">
                                            Clinical Trial
                                        </a>
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
                                    <h4 class="pbmit-ads-heading">
                                        Looking for trusted<br />eye care?
                                    </h4>
                                    <span class="pbmit-ads-decs">Schedule an appointment with our specialists for
                                        eye exams, vision correction and treatments.</span>
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
                                                    <h3 class="pbmit-download-title">
                                                        Policy Brochures
                                                    </h3>
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
                                                    <h3 class="pbmit-download-title">
                                                        Terms & Conditions
                                                    </h3>
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
                                    <img src="{{ asset('frontend/images/service/biobank-1.png') }}"
                                        class="img-fluid w-100" alt="Biobank Facility Image 1" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/images/service/biobank-2.png') }}"
                                        class="img-fluid w-100" alt="Biobank Facility Image 2" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/images/service/biobank-3.png') }}"
                                        class="img-fluid w-100" alt="Biobank Facility Image 3" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pbmit-custom-heading animation-style3">
                        <h3 class="pbmit-title">Processing & Biobank Services</h3>
                    </div>

                        <p>
                            <span class="pbmit-drop-cap"><span class="pbmit-drop-cap-letter">B</span></span>
                            <strong>iobank CRU RSCM</strong> is built to help research
                            teams move faster with confidence—by delivering
                            <strong>high-quality biological specimens</strong>,
                            standardized processing, and secure long-term storage. From
                            blood derivatives (plasma/serum/buffy coat) to urine and
                            specialty samples, we provide an organized, traceable, and
                            compliant pathway for your clinical and translational
                            research.
                        </p>

                        <p>
                            Established as part of Indonesia’s national
                            <strong>Biomedical and Genome Science Initiative (BGSi)</strong>, Biobank CRU RSCM supports
                            the development of genomics
                            and personalized medicine by ensuring specimens are handled
                            with <strong>consistent quality</strong>, protected by
                            <strong>strong privacy safeguards</strong>, and made
                            accessible to <strong>authorized researchers</strong>.
                        </p>

                        <!-- HERO VISUAL (facility/hero image) -->
                        <div class="pbmit-service-feature-image mb-4">
                            <img src="{{ asset('frontend/images/biobank/biobank-facility.jpg') }}"
                                class="img-fluid w-100" alt="Biobank CRU RSCM Facility" />
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="pbmit-ihbox-style-10">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-temperature-snow">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 13.5a4 4 0 1 0 4 0v-8.5a2 2 0 1 0 -4 0v8.5"
                                                        style="fill: white" />
                                                    <path d="M4 9h4" />
                                                    <path d="M14.75 4l1 2h2.25" />
                                                    <path d="M17 4l-3 5l2 3" />
                                                    <path d="M20.25 10l-1.25 2l1.25 2" />
                                                    <path d="M22 12h-6l-2 3" />
                                                    <path d="M18 18h-2.25l-1 2" />
                                                    <path d="M17 20l-3 -5h-1" />
                                                    <path d="M12 9l2.088 .008" />
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Cold-Chain <br />
                                                Capacity
                                            </h2>
                                        </div>

                                        <div class="pbmit-contents-wraper">
                                            <h2 class="pbmit-element-title">
                                                Cold-Chain <br />
                                                Capacity
                                            </h2>
                                            <div class="pbmit-heading-desc">
                                                Ultra-low freezers (-86°C), -20°C storage,
                                                refrigerators, and Liquid N2 supply
                                                supported by monitoring & backup power.
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-shield-check">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M11.998 2l.118 .007l.059 .008l.061 .013l.111 .034a.993 .993 0 0 1 .217 .112l.104 .082l.255 .218a11 11 0 0 0 7.189 2.537l.342 -.01a1 1 0 0 1 1.005 .717a13 13 0 0 1 -9.208 16.25a1 1 0 0 1 -.502 0a13 13 0 0 1 -9.209 -16.25a1 1 0 0 1 1.005 -.717a11 11 0 0 0 7.531 -2.527l.263 -.225l.096 -.075a.993 .993 0 0 1 .217 -.112l.112 -.034a.97 .97 0 0 1 .119 -.021l.115 -.007zm3.71 7.293a1 1 0 0 0 -1.415 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" />
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Quality & <br />
                                                Compliance
                                            </h2>
                                        </div>

                                        <div class="pbmit-contents-wraper">
                                            <h2 class="pbmit-element-title">
                                                Quality & <br />
                                                Compliance
                                            </h2>
                                            <div class="pbmit-heading-desc">
                                                Standardized workflows and traceability with audit-ready operations for
                                                high-integrity research.
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
                                                <svg class="w-64 h-64" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 32 32" fill="currentColor">
                                                    <defs></defs>
                                                    <circle cx="16" cy="29" r="2"></circle>
                                                    <path
                                                        d="m22.5,30h-2.5v-2h2.5c3.0327,0,5.5-2.4673,5.5-5.5,0-2.5634-1.7395-4.7644-4.23-5.3528l.46-1.9465c3.3972.8026,5.77,3.8042,5.77,7.2993,0,4.1355-3.3645,7.5-7.5,7.5Z">
                                                    </path>
                                                    <path
                                                        d="m20.4141,14.5859l-3-3c-.3774-.3779-.8799-.5859-1.4141-.5859s-1.0366.208-1.4143.5859l-2.9998,3c-.3899.3896-.5859.9019-.5859,1.4141s.196,1.0244.5859,1.4141l2.9998,3c.3777.3779.8801.5859,1.4143.5859s1.0366-.208,1.4141-.5859l3-3c.3899-.3896.5859-.9019.5859-1.4141s-.196-1.0244-.5859-1.4141Zm-4.4141,4.4141l-3-3,3-3,2.9998,3-2.9998,3Z">
                                                    </path>
                                                    <circle cx="16" cy="3" r="2"></circle>
                                                    <path
                                                        d="m7.77,16.7993c-3.3972-.8026-5.77-3.8042-5.77-7.2993C2,5.3645,5.3645,2,9.5,2h2.5v2h-2.5c-3.0327,0-5.5,2.4673-5.5,5.5,0,2.5634,1.7395,4.7645,4.23,5.3528l-.46,1.9465Z">
                                                    </path>
                                                    <rect id="_Transparent_Rectangle_"
                                                        data-name="&amp;lt;Transparent Rectangle&amp;gt;"
                                                        class="cls-1" width="32" height="32"
                                                        style="fill: none"></rect>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                End-to-End <br />
                                                Processing
                                            </h2>
                                        </div>

                                        <div class="pbmit-contents-wraper">
                                            <h2 class="pbmit-element-title">
                                                End-to-End <br />
                                                Processing
                                            </h2>
                                            <div class="pbmit-heading-desc">
                                                Integrated biobank workflow: collection, aliquoting, QC checks,
                                                electrophoresis, and secure storage.
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
                                                                <img src="{{ asset('frontend/images/service/biobank-equipments/centrifuge-refrigerated.png') }}"
                                                                    class="img-fluid" alt="Centrifuge Refrigerated">
                                                            </div>
                                                        </div>
                                                        <div class="pbminfotech-box-content">
                                                            <div class="pbminfotech-box-content-inner">
                                                                <div class="pbmit-port-cat">
                                                                    <a href="javascript:void(0)"
                                                                        rel="tag">Facility</a>
                                                                </div>
                                                                <h3 class="pbmit-portfolio-title">
                                                                    <a href="javascript:void(0)">Centrifuge
                                                                        Refrigerated</a>
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
                                                                <img src="{{ asset('frontend/images/service/biobank-equipments/cryoplus-nitrogen-tank.png') }}"
                                                                    class="img-fluid" alt="CryoPlus Nitrogen Tank">
                                                            </div>
                                                        </div>
                                                        <div class="pbminfotech-box-content">
                                                            <div class="pbminfotech-box-content-inner">
                                                                <div class="pbmit-port-cat">
                                                                    <a href="javascript:void(0)"
                                                                        rel="tag">Facility</a>
                                                                </div>
                                                                <h3 class="pbmit-portfolio-title">
                                                                    <a href="javascript:void(0)">CryoPlus Nitrogen Tank</a>
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
                                                                <img src="{{ asset('frontend/images/service/biobank-equipments/freezer-(-20).png') }}"
                                                                    class="img-fluid" alt="Freezer -20°C">
                                                            </div>
                                                        </div>
                                                        <div class="pbminfotech-box-content">
                                                            <div class="pbminfotech-box-content-inner">
                                                                <div class="pbmit-port-cat">
                                                                    <a href="javascript:void(0)"
                                                                        rel="tag">Facility</a>
                                                                </div>
                                                                <h3 class="pbmit-portfolio-title">
                                                                    <a href="javascript:void(0)">Freezer
                                                                        -20°C</a>
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
                                                                <img src="{{ asset('frontend/images/service/biobank-equipments/freezer-(-80).png') }}"
                                                                    class="img-fluid"
                                                                    alt="Freezer -80°C">
                                                            </div>
                                                        </div>
                                                        <div class="pbminfotech-box-content">
                                                            <div class="pbminfotech-box-content-inner">
                                                                <div class="pbmit-port-cat">
                                                                    <a href="javascript:void(0)"
                                                                        rel="tag">Facility</a>
                                                                </div>
                                                                <h3 class="pbmit-portfolio-title">
                                                                    <a href="javascript:void(0)">Freezer
                                                                        -80°C</a>
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
                                                                <img src="{{ asset('frontend/images/service/biobank-equipments/nanodrop-spectrophotometer.png') }}"
                                                                    class="img-fluid" alt="NanoDrop Spectrophotometer">
                                                            </div>
                                                        </div>
                                                        <div class="pbminfotech-box-content">
                                                            <div class="pbminfotech-box-content-inner">
                                                                <div class="pbmit-port-cat">
                                                                    <a href="javascript:void(0)"
                                                                        rel="tag">Facility</a>
                                                                </div>
                                                                <h3 class="pbmit-portfolio-title">
                                                                    <a href="javascript:void(0)">NanoDrop Spectrophotometer</a>
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
                                                                <img src="{{ asset('frontend/images/service/biobank-equipments/qubit.png') }}"
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
                                                <!-- Slide7 -->
                                                <article class="pbmit-portfolio-style-1 swiper-slide">
                                                    <div class="pbminfotech-post-content">
                                                        <div class="pbmit-featured-img-wrapper">
                                                            <div class="pbmit-featured-wrapper">
                                                                <img src="{{ asset('frontend/images/service/biobank-equipments/refrigerator.png') }}"
                                                                    class="img-fluid" alt="Refrigerator">
                                                            </div>
                                                        </div>
                                                        <div class="pbminfotech-box-content">
                                                            <div class="pbminfotech-box-content-inner">
                                                                <div class="pbmit-port-cat">
                                                                    <a href="javascript:void(0)"
                                                                        rel="tag">Facility</a>
                                                                </div>
                                                                <h3 class="pbmit-portfolio-title">
                                                                    <a href="javascript:void(0)">Refrigerator</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Slide8 -->
                                                <article class="pbmit-portfolio-style-1 swiper-slide">
                                                    <div class="pbminfotech-post-content">
                                                        <div class="pbmit-featured-img-wrapper">
                                                            <div class="pbmit-featured-wrapper">
                                                                <img src="{{ asset('frontend/images/service/biobank-equipments/thermal-cycler.png') }}"
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

                        <!-- PROOF / SCALE + VISUALS -->
                        <div class="row mt-4 pt-md-3 pb-xl-3 mb-xl-3">
                            <div class="col-lg-12">
                                <div class="pbmit-custom-heading animation-style3">
                                    <h3 class="pbmit-title">Scale You Can Rely On</h3>
                                </div>
                                <p>
                                    Built for operational consistency and research
                                    impact, our biobank supports thousands of subjects
                                    and high-volume specimens, helping teams reduce
                                    variability, protect data, and accelerate project
                                    timelines.
                                </p>

                                <div class="list-group-wrap">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <span class="pbmit-icon-list-icon"><i aria-hidden="true"
                                                    class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i></span>
                                            <span class="pbmit-icon-list-text"><strong>2,000+ subjects</strong> curated
                                                in
                                                our sample ecosystem</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pbmit-icon-list-icon"><i aria-hidden="true"
                                                    class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i></span>
                                            <span class="pbmit-icon-list-text"><strong>40,000+ tubes</strong> managed
                                                across multiple specimen types</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pbmit-icon-list-icon"><i aria-hidden="true"
                                                    class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i></span>
                                            <span class="pbmit-icon-list-text">Diverse ethnic representation with
                                                samples from
                                                <strong>6+ major Indonesian ethnic groups</strong></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- SERVICES / PRICING -->
                        <div class="pbmit-custom-heading animation-style3">
                            <h3 class="pbmit-title">Biobank Services & Pricing</h3>
                        </div>
                        <p>
                            Transparent, tiered service options allow your team to
                            choose the right turnaround and service level. For
                            institutional projects, bundled packages and long-term
                            storage plans can be arranged.
                        </p>

                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">
                                <thead>
                                    <tr>
                                        <th style="min-width: 60px">No.</th>
                                        <th style="min-width: 320px">Service</th>
                                        <th>Regular</th>
                                        <th>VIP B</th>
                                        <th>VIP A</th>
                                        <th>VVIP C</th>
                                        <th>VVIP B</th>
                                        <th>VVIP A</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Blood sample collection</td>
                                        <td>39,000</td>
                                        <td>49,000</td>
                                        <td>54,000</td>
                                        <td>60,000</td>
                                        <td>66,000</td>
                                        <td>73,000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            Sample processing & biobanking (aliquot plasma,
                                            serum, buffy coat)
                                        </td>
                                        <td>99,000</td>
                                        <td>124,000</td>
                                        <td>137,000</td>
                                        <td>151,000</td>
                                        <td>167,000</td>
                                        <td>184,000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>DNA isolation</td>
                                        <td>293,000</td>
                                        <td>367,000</td>
                                        <td>404,000</td>
                                        <td>445,000</td>
                                        <td>490,000</td>
                                        <td>539,000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>DNA quantification (Qubit)</td>
                                        <td>79,000</td>
                                        <td>99,000</td>
                                        <td>109,000</td>
                                        <td>120,000</td>
                                        <td>132,000</td>
                                        <td>146,000</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>DNA QC (Nanodrop)</td>
                                        <td>7,000</td>
                                        <td>9,000</td>
                                        <td>10,000</td>
                                        <td>11,000</td>
                                        <td>13,000</td>
                                        <td>15,000</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Fragment analysis (electrophoresis)</td>
                                        <td>46,000</td>
                                        <td>58,000</td>
                                        <td>64,000</td>
                                        <td>71,000</td>
                                        <td>79,000</td>
                                        <td>87,000</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Research sample storage (per box)</td>
                                        <td>451,000</td>
                                        <td>564,000</td>
                                        <td>621,000</td>
                                        <td>684,000</td>
                                        <td>753,000</td>
                                        <td>829,000</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Research biobank plan (per box)</td>
                                        <td>508,000</td>
                                        <td>635,000</td>
                                        <td>699,000</td>
                                        <td>769,000</td>
                                        <td>846,000</td>
                                        <td>931,000</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Biobank service package (per box)</td>
                                        <td>188,000</td>
                                        <td>235,000</td>
                                        <td>259,000</td>
                                        <td>285,000</td>
                                        <td>314,000</td>
                                        <td>346,000</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            Consultation for sample collection & storage
                                        </td>
                                        <td colspan="6">Available upon request</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- KEY ADVANTAGES -->
                        <div class="pbmit-custom-heading animation-style3">
                            <h3 class="pbmit-title">
                                Why Research Teams Choose Biobank CRU RSCM
                            </h3>
                        </div>

                        <div class="row pbminfotech-gap-15px mt-4 pt-md-3 pb-xl-3 mb-xl-3">
                            <div class="pbmit-miconheading-style-16 col-md-12">
                                <div class="pbmit-ihbox-style-16">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-text-content">
                                            <span class="pbmit-ihbox-icon-type-text">1</span>
                                            <div class="pbmit-text-content-wrapper">
                                                <span class="pbmit-element-title">Reliable facilities &
                                                    infrastructure</span>
                                                <span class="pbmit-heading-desc">Purpose-built storage and monitored
                                                    cold-chain with backup readiness.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pbmit-miconheading-style-16 col-md-12">
                                <div class="pbmit-ihbox-style-16">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-text-content">
                                            <span class="pbmit-ihbox-icon-type-text">2</span>
                                            <div class="pbmit-text-content-wrapper">
                                                <span class="pbmit-element-title">Quality standards & regulatory
                                                    alignment</span>
                                                <span class="pbmit-heading-desc">Structured workflows to support
                                                    audits,
                                                    reproducibility, and credibility.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pbmit-miconheading-style-16 col-md-12">
                                <div class="pbmit-ihbox-style-16">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-text-content">
                                            <span class="pbmit-ihbox-icon-type-text">3</span>
                                            <div class="pbmit-text-content-wrapper">
                                                <span class="pbmit-element-title">Research & innovation
                                                    enablement</span>
                                                <span class="pbmit-heading-desc">From specimen preparation to
                                                    processing
                                                    and basic analysis support—faster project
                                                    execution.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pbmit-miconheading-style-16 col-md-12">
                                <div class="pbmit-ihbox-style-16">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-text-content">
                                            <span class="pbmit-ihbox-icon-type-text">4</span>
                                            <div class="pbmit-text-content-wrapper">
                                                <span class="pbmit-element-title">Data security &
                                                    confidentiality</span>
                                                <span class="pbmit-heading-desc">Controlled access, privacy safeguards,
                                                    and secure handling of donor
                                                    information.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pbmit-miconheading-style-16 col-md-12">
                                <div class="pbmit-ihbox-style-16">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-text-content">
                                            <span class="pbmit-ihbox-icon-type-text">5</span>
                                            <div class="pbmit-text-content-wrapper">
                                                <span class="pbmit-element-title">Multiple specimen types</span>
                                                <span class="pbmit-heading-desc">Blood derivatives, urine, specialty
                                                    samples, and genetic material
                                                    support.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pbmit-miconheading-style-16 col-md-12">
                                <div class="pbmit-ihbox-style-16">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-text-content">
                                            <span class="pbmit-ihbox-icon-type-text">6</span>
                                            <div class="pbmit-text-content-wrapper">
                                                <span class="pbmit-element-title">Easy access for authorized
                                                    researchers</span>
                                                <span class="pbmit-heading-desc">Organized cataloging and retrieval
                                                    workflows to reduce delays and
                                                    bottlenecks.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pbmit-miconheading-style-16 col-md-12">
                                <div class="pbmit-ihbox-style-16">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-text-content">
                                            <span class="pbmit-ihbox-icon-type-text">7</span>
                                            <div class="pbmit-text-content-wrapper">
                                                <span class="pbmit-element-title">Education & training</span>
                                                <span class="pbmit-heading-desc">Build team capability through
                                                    knowledge-sharing and standardized best
                                                    practices.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ -->
                        <div class="pbmit-custom-heading animation-style3 mt-4">
                            <h3 class="pbmit-title">
                                Questions? Here are quick answers.
                            </h3>
                        </div>

                        <div class="accordion" id="accordionExample1">
                            <div class="accordion-item active" id="headingOne1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne1" aria-expanded="true"
                                        aria-controls="collapseOne1">
                                        <span class="pbmit-accordion-title">What specimen types can you process and
                                            store?</span>
                                        <span class="pbmit-accordion-icon">
                                            <span class="pbmit-accordion-icon-opened">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-down"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="pbmit-accordion-icon-closed">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-up"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseOne1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p>
                                            We support blood derivatives
                                            (plasma/serum/buffy coat), urine, and specialty
                                            specimens—including genetic material workflows.
                                            If you have a unique protocol requirement, we
                                            can align processing and storage conditions to
                                            your study needs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo1">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                        aria-expanded="false" aria-controls="collapseTwo1">
                                        <span class="pbmit-accordion-title">How do you ensure quality and consistency
                                            across samples?</span>
                                        <span class="pbmit-accordion-icon">
                                            <span class="pbmit-accordion-icon-opened">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-down"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="pbmit-accordion-icon-closed">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-up"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseTwo1" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p>
                                            We implement standardized handling and
                                            processing steps, cold-chain monitoring,
                                            controlled access, and documentation to reduce
                                            variability. Optional QC steps include
                                            Qubit/Nanodrop and electrophoresis depending on
                                            your workflow.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree1">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                        aria-expanded="false" aria-controls="collapseThree1">
                                        <span class="pbmit-accordion-title">Can you support long-term storage and
                                            retrieval for multi-year studies?</span>
                                        <span class="pbmit-accordion-icon">
                                            <span class="pbmit-accordion-icon-opened">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-down"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="pbmit-accordion-icon-closed">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-up"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseThree1" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p>
                                            Yes. We offer storage per box and biobank plan
                                            options designed for longitudinal research.
                                            Retrieval is managed through controlled access
                                            workflows to keep your study organized and
                                            secure.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour1">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour1"
                                        aria-expanded="false" aria-controls="collapseFour1">
                                        <span class="pbmit-accordion-title">How do we start a collaboration with
                                            Biobank
                                            CRU RSCM?</span>
                                        <span class="pbmit-accordion-icon">
                                            <span class="pbmit-accordion-icon-opened">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-down"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="pbmit-accordion-icon-closed">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-up"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseFour1" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour1" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p>
                                            Send us your study overview (specimen type,
                                            estimated volume, timeline, and required
                                            processing/QC). Our team will recommend a
                                            workflow, service tier, and storage plan—then
                                            align documentation and scheduling for
                                            execution.
                                        </p>
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
        // Faster autoplay for biobank service carousel
        document.addEventListener('DOMContentLoaded', function() {
            // Wait for Swiper to initialize, then update autoplay delay
            setTimeout(function() {
                const biobankCarousel = document.querySelector('.service-right-col .swiper-slider');
                if (biobankCarousel && biobankCarousel.swiper) {
                    biobankCarousel.swiper.params.autoplay.delay = 1000; // 3 seconds instead of 5.5
                    biobankCarousel.swiper.autoplay.stop();
                    biobankCarousel.swiper.autoplay.start();
                }
            }, 500);
        });
    </script>
@endpush
@endsection
