@extends('layouts.frontend')

@section('title', 'Clinical Trial')

@section('meta_description', 'Professional clinical trial management and coordination services at CRU RSCM. From study design and regulatory compliance to patient recruitment, data management, and quality assurance for medical research excellence.')

@section('meta_keywords', 'clinical trial services, research trial management, clinical study coordination, GCP compliance, patient recruitment, trial monitoring, regulatory affairs, data management, clinical research CRO Indonesia')

@section('og_title', 'Clinical Trial Management Services - Clinical Research Unit RSCM')

@section('og_description', 'Comprehensive clinical trial services ensuring research excellence, regulatory compliance, and ethical patient care throughout the research lifecycle.')

@section('og_image', asset('frontend/images/og/clinical-trial-og.png'))

@section('og_type', 'article')

@section('canonical_url', route('services.show', 'clinical-trial'))

@section('content')
    <x-frontend.page-title title="Clinical Trial" :breadcrumbs="[['title' => 'Clinical Trial']]" />

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
                                        <li><a href="{{ route('services.show', 'genomic') }}"> Genomic </a></li>
                                        <li class="post-active"><a href="{{ route('services.show', 'clinical-trial') }}">
                                                Clinical Trial </a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="widget pbmit-service-ad">
                                <div class="textwidget">
                                    <div class="pbmit-service-ads">
                                        <div class="pbmit-ads-icon">
                                            <i class="pbmit-base-icon-phone-1"></i>
                                        </div>
                                        <h4 class="pbmit-ads-heading">Ready to launch<br>your study?</h4>
                                        <span class="pbmit-ads-decs">
                                            Talk to our Clinical Research Unit (CRU) team for feasibility, startup planning,
                                            and operational support.
                                        </span>
                                        <h3 class="pbmit-ads-call">
                                            <a href="{{ route('contact') }}">Contact CRU Team</a>
                                        </h3>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget pbmit-download-info">
                                <h2 class="widget-title">Downloads</h2>
                                <div class="textwidget">
                                    <div class="pbmit-download">
                                        <div class="pbmit-item-download">
                                            <a href="#" target="_blank" rel="noopener">
                                                <div class="pbmit-download-content">
                                                    <div class="pbmit-download-wrap">
                                                        <i class="pbmit-base-icon-doc-file"></i>
                                                        <h3 class="pbmit-download-title">CRU Capability Deck</h3>
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
                                                        <h3 class="pbmit-download-title">Study Startup Checklist</h3>
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
                            <div class="swiper-slider" data-autoplay="false" data-loop="true" data-allow-touch="true"
                                data-arrows="true" data-columns="1" data-margin="0" data-effect="slide" data-speed="150">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <video src="{{ asset('frontend/videos/service/clinical-trials.mp4') }}"
                                            class="img-fluid w-100" style="object-fit: cover; aspect-ratio: 16/9;" alt="Clinical Trial Video" loop muted autoplay playsinline></video>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/service/clinical-trial-1.png') }}"
                                            class="img-fluid w-100" style="object-fit: cover; aspect-ratio: 16/9;" alt="Clinical Trial Image 1" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/service/clinical-trial-2.png') }}"
                                            class="img-fluid w-100" style="object-fit: cover; aspect-ratio: 16/9;" alt="Clinical Trial Image 2" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/service/clinical-trial-3.png') }}"
                                            class="img-fluid w-100" style="object-fit: cover; aspect-ratio: 16/9;" alt="Clinical Trial Image 3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-entry-content">
                            <div class="pbmit-custom-heading animation-style3">
                                <h3 class="pbmit-title">Accelerate Your Clinical Trial with a Trusted Academic Hospital
                                    Partner</h3>
                            </div>
                            <p><span class="pbmit-drop-cap"><span class="pbmit-drop-cap-letter">B</span></span>ring your
                                study to life with the Clinical Research Unit (CRU) at RSUPN Dr. Cipto Mangunkusumo (RSCM).
                                We support end-to-end clinical research execution — from feasibility and start-up to
                                conduct, monitoring readiness,
                                and close-out — powered by experienced investigators and hospital-wide clinical expertise.
                            </p>
                            <p>Whether you are running an investigator-initiated study or a multi-center program,
                                our team is built to deliver <strong>quality, speed, and regulatory confidence</strong>
                                while keeping your study
                                participant-first and data-driven.</p>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="pbmit-ihbox-style-10">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                    <svg class="w-64 h-64" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" style="fill: none;"></path>
                                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" style="fill: none;"></path>
                                                        <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" style="fill: none;"></path>
                                                        <path d="M6 9l12 0"></path>
                                                        <path d="M6 12l3 0"></path>
                                                        <path d="M6 15l2 0"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">GCP-Ready<br>Operations</h2>
                                            </div>
                                            <div class="pbmit-contents-wraper">
                                                <h2 class="pbmit-element-title">GCP-Ready<br>Operations</h2>
                                                <div class="pbmit-heading-desc">Standardized processes, trained teams, and
                                                    documentation discipline to protect quality and timelines.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mt-md-0 mt-4">
                                    <div class="pbmit-ihbox-style-10">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                    <svg class="w-64 h-64" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M20 20H16V23H20V20Z" fill="currentColor"></path>
                                                        <path d="M16 25H20V28H16V25Z" fill="currentColor"></path>
                                                        <path d="M20 30H16V33H20V30Z" fill="currentColor"></path>
                                                        <path d="M22 20H26V23H22V20Z" fill="currentColor"></path>
                                                        <path d="M26 25H22V28H26V25Z" fill="currentColor"></path>
                                                        <path d="M22 30H26V33H22V30Z" fill="currentColor"></path>
                                                        <path d="M32 20H28V23H32V20Z" fill="currentColor"></path>
                                                        <path d="M28 25H32V28H28V25Z" fill="currentColor"></path>
                                                        <path d="M32 30H28V33H32V30Z" fill="currentColor"></path>
                                                        <path d="M25 15V12H28V10H25V7H23V10H20V12H23V15H25Z" fill="currentColor"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17 6C17 4.89543 17.8954 4 19 4H29C30.1046 4 31 4.89543 31 6H39V8H37V42H39C39.5523 42 40 42.4477 40 43C40 43.5523 39.5523 44 39 44H9C8.44772 44 8 43.5523 8 43C8 42.4477 8.44772 42 9 42H11V8H10V6L17 6ZM17 11L13 11V42H17V38H16V36H32V38H31V42H35V11H31V16C31 17.1046 30.1046 18 29 18H19C17.8954 18 17 17.1046 17 16V11ZM17 9L13 9V8H17V9ZM19 6H29V16H19V6ZM23 42H19V38H23V42ZM29 42V38H25V42H29ZM35 9V8H31V9H35Z" fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">Hospital-Wide<br>Clinical Depth</h2>
                                            </div>
                                            <div class="pbmit-contents-wraper">
                                                <h2 class="pbmit-element-title">Hospital-Wide<br>Clinical Depth</h2>
                                                <div class="pbmit-heading-desc">Multi-specialty expertise from neonatal to
                                                    geriatrics — enabling complex protocols and diverse populations.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mt-lg-0 mt-4">
                                    <div class="pbmit-ihbox-style-10">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                    <svg class="w-64 h-64" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path d="M7.5 9C7.25691 9 7.02733 9.05783 6.82425 9.16047C7.63539 9.36097 8.37558 9.74148 9 10.2572V10H12.5C12.7761 10 13 10.2239 13 10.5V12H10.4003C10.5622 12.3168 10.6944 12.6514 10.793 13H13V14.5C13 14.7761 12.7761 15 12.5 15H10.9776C10.9466 15.3434 10.8841 15.6777 10.793 16H12.5C13.3284 16 14 15.3284 14 14.5V10.5C14 9.67157 13.3284 9 12.5 9H7.5ZM4 9.20703C4.32228 9.11588 4.65659 9.05337 5 9.02242V4C5 3.44772 5.44772 3 6 3H10V6.5C10 7.32843 10.6716 8 11.5 8H15V16C15 16.5523 14.5523 17 14 17H10.4003C10.2174 17.3578 9.99647 17.6929 9.74284 18H14C15.1046 18 16 17.1046 16 16V7.41421C16 7.01639 15.842 6.63486 15.5607 6.35355L11.6464 2.43934C11.3651 2.15804 10.9836 2 10.5858 2H6C4.89543 2 4 2.89543 4 4V9.20703ZM14.7929 7H11.5C11.2239 7 11 6.77614 11 6.5V3.20711L14.7929 7ZM10 14.5C10 16.9853 7.98528 19 5.5 19C3.01472 19 1 16.9853 1 14.5C1 12.0147 3.01472 10 5.5 10C7.98528 10 10 12.0147 10 14.5ZM7.85355 12.6464C7.65829 12.4512 7.34171 12.4512 7.14645 12.6464L4.5 15.2929L3.85355 14.6464C3.65829 14.4512 3.34171 14.4512 3.14645 14.6464C2.95118 14.8417 2.95118 15.1583 3.14645 15.3536L4.14645 16.3536C4.34171 16.5488 4.65829 16.5488 4.85355 16.3536L7.85355 13.3536C8.04882 13.1583 8.04882 12.8417 7.85355 12.6464Z" fill="currentColor"></path></svg>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">Audit & Regulatory<br>Confidence</h2>
                                            </div>
                                            <div class="pbmit-contents-wraper">
                                                <h2 class="pbmit-element-title">Audit & Regulatory<br>Confidence</h2>
                                                <div class="pbmit-heading-desc">Experienced in external audits and
                                                    regulatory expectations — keeping your trial inspection-ready.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 align-items-center">
                                <div class="col-lg-12">
                                    <div class="pbmit-custom-heading animation-style3">
                                        <h3 class="pbmit-title">Real Capacity to Deliver — Not Just Promises</h3>
                                    </div>

                                    <p>
                                        Our clinical trial ecosystem is backed by strong human resources, high patient
                                        volume,
                                        and cross-department collaboration — helping sponsors and investigators run studies
                                        efficiently.
                                    </p>

                                    <div class="list-group-wrap">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text"><strong>400+</strong> GCP-certified
                                                    investigators and research staff</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text"><strong>200+</strong> total clinical
                                                    trial projects supported</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                                </span>
                                                <span class="pbmit-icon-list-text"><strong>50,000+</strong> outpatient
                                                    visits enabling recruitment potential</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <p class="mt-3 mb-0">
                                        <strong>What you gain by running trials at RSCM:</strong><br>
                                        access to diverse ethnicity and diagnoses, comprehensive hospital facilities,
                                        trained study teams,
                                        and a track record of meeting stringent audit and regulatory expectations.
                                    </p>
                                </div>
                            </div>
                            {{-- SECTION: ECOSYSTEM / HOW WE WORK (IMAGE 2) --}}
                            <div class="row mt-5 align-items-center">
                                <div class="col-lg-5">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('frontend/images/clinical-trial/clinical-trial-ecosystem.png') }}"
                                        alt="Clinical Trial Ecosystem: Database, Trial, Facility">
                                </div>

                                <div class="col-lg-7 mt-4 mt-lg-0">
                                    <div class="pbmit-custom-heading animation-style3">
                                        <h3 class="pbmit-title">One Integrated Ecosystem: Facility, Database, and Study
                                            Execution</h3>
                                    </div>

                                    <p>
                                        CRU is designed as a central hub where trial execution meets clinical reality.
                                        We connect the right clinic departments, research infrastructure, and operational
                                        workflows —
                                        so your study runs smoothly from first patient in to database lock.
                                    </p>

                                    <div class="row pbminfotech-gap-15px mt-3">
                                        <div class="pbmit-miconheading-style-16 col-md-12">
                                            <div class="pbmit-ihbox-style-16">
                                                <div class="pbmit-ihbox-box">
                                                    <div class="pbmit-text-content">
                                                        <span class="pbmit-ihbox-icon-type-text">1</span>
                                                        <div class="pbmit-text-content-wrapper">
                                                            <span class="pbmit-element-title">Feasibility & Start-up</span>
                                                            <span class="pbmit-heading-desc">Protocol review, resource
                                                                planning, timelines, and startup coordination.</span>
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
                                                            <span class="pbmit-element-title">Study Conduct & Recruitment
                                                                Support</span>
                                                            <span class="pbmit-heading-desc">Site coordination, scheduling,
                                                                and collaboration across specialties for patient
                                                                access.</span>
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
                                                            <span class="pbmit-element-title">Quality, Documentation, and
                                                                Audit Readiness</span>
                                                            <span class="pbmit-heading-desc">Process discipline that helps
                                                                maintain consistency, traceability, and inspection
                                                                readiness.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <a href="{{ route('contact') }}" class="pbmit-btn pbmit-btn-hover-black">
                                            Request Feasibility Discussion
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- FAQ --}}
                            <div class="pbmit-custom-heading animation-style3 mt-5">
                                <h3 class="pbmit-title">Frequently Asked Questions</h3>
                            </div>

                            <div class="accordion" id="accordionExample1">

                                <div class="accordion-item active" id="headingOne1">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne1" aria-expanded="true"
                                            aria-controls="collapseOne1">
                                            <span class="pbmit-accordion-title">
                                                What types of studies can CRU support?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne1" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            <p>
                                                We support a wide range of clinical research, including interventional and
                                                observational studies,
                                                across multiple specialties. Share your protocol outline — we’ll advise on
                                                feasibility and site readiness.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                            aria-expanded="false" aria-controls="collapseTwo1">
                                            <span class="pbmit-accordion-title">
                                                Can you help accelerate study start-up and execution?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo1" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            <p>
                                                Yes. Our team can support planning, stakeholder coordination, and
                                                operational workflows
                                                to reduce friction and improve timeline predictability.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                            aria-expanded="false" aria-controls="collapseThree1">
                                            <span class="pbmit-accordion-title">
                                                What makes RSCM strong for recruitment?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree1" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            <p>
                                                RSCM serves a broad population with diverse diagnoses and clinical pathways,
                                                enabling access to varied study populations and specialty care networks.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour1"
                                            aria-expanded="false" aria-controls="collapseFour1">
                                            <span class="pbmit-accordion-title">
                                                How do we start a collaboration?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseFour1" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour1" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            <p>
                                                Send your brief protocol synopsis and target timelines. We can schedule a
                                                feasibility discussion,
                                                align stakeholders, and map next steps for study initiation.
                                            </p>
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
            // Manual mode - no autoplay needed
            // Navigation buttons are enabled via data-arrows="true"
        </script>
    @endpush
@endsection
