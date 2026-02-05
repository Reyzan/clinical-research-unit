@extends('layouts.frontend')

@section('title', 'About Us')

@section('meta_description', 'Learn about Clinical Research Unit RSCM, Indonesia\'s national hub for metabolic disease research. Discover our vision for personalized healthcare, cutting-edge genomic research, and commitment to ethical precision medicine since 2022.')

@section('meta_keywords', 'about CRU RSCM, clinical research unit history, metabolic disease hub Indonesia, genomic science center, BGSI Indonesia, precision medicine vision, biomedical research ethics, translational research Indonesia')

@section('og_title', 'About Clinical Research Unit RSCM - National Metabolic Disease Hub')

@section('og_description', 'Designated by Indonesia\'s Ministry of Health as the national hub for metabolic disease research. Pioneering precision medicine through genomics, biobank, and clinical innovation.')

@section('og_image', asset('frontend/images/about/pioneering.png'))

@section('canonical_url', route('about'))

@section('content')
    <x-frontend.page-title title="About Us" :breadcrumbs="[['title' => 'About Us']]" />

    <!-- Page Content -->
    <div class="page-content">

        <!-- About Start -->
        <section class="about-section-three">
            <div class="container">
                <div class="tween-effect-wrap">
                    <div class="pbmit-ele-tween-effect pbmit-tween-image pbmit-tween-effect-style-1">
                        <div class="pbmit-tween-effect" data-x-start="0" data-x-end="8" data-y-start="-30" data-y-end="30"
                            data-scale-x-start="1" data-scale-x-end=" 1" data-skew-x-start=" 0deg" data-skew-x-end="0deg"
                            data-skew-y-start=" 0deg" data-skew-y-end=" 0deg" data-rotate-x-start="0" data-rotate-x-end="0">
                            <img src="{{ asset('frontend/images/demo-3/about-pattern-01.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-12 col-xl-5">
                        <div class="pbmit-heading-subheading animation-style3">
                            <h4 class="pbmit-subtitle">Since 2022</h4>
                            <h2 class="pbmit-title">Clinical Research Unit (CRU) RSCM - Pioneering the Future of Precision Medicine</h2>
                            <div class="pbmit-heading-desc">
                                For decades, the "one-size-fits-all" medical approach has been the standard, but we know that every patient is unique. At CRU RSCM, we are leading a revolutionary shift toward precision medicine, where every diagnosis, therapy, and prevention strategy is tailored to each individual's genetic profile and unique characteristics.
                            </div>
                        </div>
                        <ul class="list-group style-2">
                            <li class="list-group-item">
                                <span class="pbmit-icon-list-icon">
                                    <i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                </span>
                                <span class="pbmit-icon-list-text">Cutting-edge genomic research</span>
                            </li>
                            <li class="list-group-item">
                                <span class="pbmit-icon-list-icon">
                                    <i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                </span>
                                <span class="pbmit-icon-list-text">Strategic biobank for medical discovery</span>
                            </li>
                            <li class="list-group-item">
                                <span class="pbmit-icon-list-icon">
                                    <i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                </span>
                                <span class="pbmit-icon-list-text">Innovative precision medicine services</span>
                            </li>
                        </ul>
                        <div class="pbminfotech-ele-fid-style-2">
                            <div class="pbmit-fld-contents">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                        <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                            width="512" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="m0 197v300c0 8.284 6.716 15 15 15h31v-330h-31c-8.284 0-15 6.716-15 15z">
                                                </path>
                                                <path
                                                    d="m497 182h-31v330h31c8.284 0 15-6.716 15-15v-300c0-8.284-6.716-15-15-15z">
                                                </path>
                                                <path
                                                    d="m151 180h210c8.284 0 15-6.716 15-15v-150c0-8.284-6.716-15-15-15h-210c-8.284 0-15 6.716-15 15v150c0 8.284 6.716 15 15 15zm23.192-99.251c1.464-1.868 36.367-45.749 81.808-45.749s80.344 43.881 81.808 45.749c4.257 5.433 4.257 13.069 0 18.502-1.464 1.868-36.367 45.749-81.808 45.749s-80.344-43.881-81.808-45.749c-4.256-5.433-4.256-13.069 0-18.502z">
                                                </path>
                                                <path
                                                    d="m305.587 90c-10.466-10.152-29.251-25-49.587-25-20.337 0-39.122 14.849-49.588 25.001 10.459 10.145 29.247 24.999 49.588 24.999 20.336 0 39.121-14.848 49.587-25zm-64.587 0c0-8.284 6.716-15 15-15s15 6.716 15 15-6.716 15-15 15-15-6.716-15-15z">
                                                </path>
                                                <path
                                                    d="m421 120h-15v45c0 24.813-20.187 45-45 45h-210c-24.813 0-45-20.187-45-45v-45h-15c-8.284 0-15 6.716-15 15v377h65v-120h-5c-8.284 0-15-6.716-15-15v-60c0-8.284 6.716-15 15-15h240c8.284 0 15 6.716 15 15v60c0 8.284-6.716 15-15 15h-5v120h65v-377c0-8.284-6.716-15-15-15zm-115 151h-100c-8.284 0-15-6.716-15-15s6.716-15 15-15h100c8.284 0 15 6.716 15 15s-6.716 15-15 15z">
                                                </path>
                                                <path d="m271 392h70v120h-70z"></path>
                                                <path d="m151 332h210v30h-210z"></path>
                                                <path d="m171 392h70v120h-70z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pbmit-contents-box">
                                    <h3 class="pbmit-fid-title">Years pioneering<br>
                                        precision medicine.
                                    </h3>
                                    <h4 class="pbmit-fid-counter">
                                        <span class="pbmit-fid-before"></span>
                                        <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                            data-from="0" data-to="3" data-interval="1" data-before=""
                                            data-before-style="" data-after="" data-after-style="">3</span>
                                        <span class="pbmit-fid"><span>+</span></span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-7">
                        <div class="about-three-right-box">
                            <div class="text-xl-end text-center">
                                <img src="{{ asset('frontend/images/about/pioneering.png') }}" class="rounded-20 img-fluid"
                                    alt="">
                            </div>
                            <div class="about-eye-glass-img">
                                <div class="pbmit-ele-tween-effect pbmit-tween-image pbmit-tween-effect-style-1">
                                    <div class="pbmit-tween-effect" data-x-start="0" data-x-end="0" data-y-start="-80"
                                        data-y-end="30" data-scale-x-start="1" data-scale-x-end=" 1"
                                        data-skew-x-start=" 0deg" data-skew-x-end="0deg" data-skew-y-start=" 0deg"
                                        data-skew-y-end=" 0deg" data-rotate-x-start="0" data-rotate-x-end="0"
                                        style="transform: translate(0%, 12.6433%) scale(1) skew(0deg, 0deg) rotate(0deg);">
                                        <img src="{{ asset('frontend/images/about/pipette.png') }}"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-bg-color-secondary ihbox-style-9-wrap">
                                <div class="swiper-slider" data-autoplay="false" data-loop="true" data-allow-touch="true"
                                    data-dots="true" data-arrows="false" data-columns="1" data-margin="30"
                                    data-effect="slide">
                                    <div class="swiper-wrapper">
                                        <!-- Slide1 -->
                                        <article class="pbmit-miconheading-style-9 swiper-slide">
                                            <div class="pbmit-ihbox-style-9">
                                                <div class="pbmit-ihbox-box">
                                                    <div class="pbmit-ihbox-icon">
                                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                            <svg enable-background="new 0 0 512 512" height="512"
                                                                viewBox="0 0 512 512" width="512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <g>
                                                                        <circle cx="256" cy="256.073" r="15" />
                                                                        <path
                                                                            d="m347.826 186.923c14.54 19.259 23.174 43.214 23.174 69.15 0 25.956-8.648 49.928-23.208 69.196 58.294-19.518 104.372-52.213 125.828-69.202-11.781-9.346-30.958-23.422-55.373-37.363-18.901-10.794-42.984-22.615-70.421-31.781z" />
                                                                        <path
                                                                            d="m38.379 256.08c11.78 9.345 30.956 23.42 55.374 37.363 18.901 10.793 42.985 22.614 70.421 31.78-14.54-19.259-23.174-43.214-23.174-69.15 0-25.956 8.648-49.928 23.208-69.196-58.293 19.518-104.371 52.213-125.829 69.203z" />
                                                                        <path
                                                                            d="m256 171.073c-46.869 0-85 38.131-85 85s38.131 85 85 85 85-38.131 85-85-38.131-85-85-85zm0 130c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z" />
                                                                    </g>
                                                                    <g>
                                                                        <path
                                                                            d="m507.196 267.075c-1.152 1.068-28.741 26.455-73.324 52.012-41.372 23.716-105.815 51.986-177.872 51.986-39.772 0-102.916-9.02-177.872-51.986-44.583-25.557-72.172-50.944-73.324-52.012-3.063-2.839-4.804-6.826-4.804-11.002 0 11.265 3.93 22.165 11.107 30.848 13.02 15.752 32.861 37.865 57.994 60.134 27.214 24.112 55.014 43.375 82.628 57.252 35.242 17.713 70.324 26.693 104.271 26.693s69.029-8.98 104.272-26.693c27.614-13.877 55.413-33.14 82.628-57.252 25.133-22.269 44.974-44.382 57.994-60.134 7.176-8.683 11.106-19.583 11.106-30.848 0 4.176-1.741 8.163-4.804 11.002z" />
                                                                        <path
                                                                            d="m500.893 225.079c-13.02-15.752-32.861-37.865-57.994-60.134-27.214-24.112-55.014-43.375-82.628-57.252-35.242-17.713-70.324-26.693-104.271-26.693s-69.029 8.98-104.272 26.693c-27.614 13.877-55.413 33.14-82.628 57.252-25.133 22.269-44.974 44.382-57.994 60.134-7.176 8.683-11.106 19.583-11.106 30.848v.146c0-4.176 1.741-8.163 4.804-11.002 1.152-1.068 28.741-26.455 73.324-52.012 41.372-23.715 105.815-51.986 177.872-51.986 39.772 0 102.916 9.02 177.872 51.986 44.583 25.557 72.172 50.943 73.324 52.012 3.063 2.839 4.804 6.826 4.804 11.002v-.146c0-11.265-3.93-22.165-11.107-30.848z" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="pbmit-ihbox-contents">
                                                        <h2 class="pbmit-element-title">
                                                            Our Vision
                                                        </h2>
                                                        <div class="pbmit-heading-desc">To create personalized healthcare where every diagnosis, therapy, and prevention strategy is specifically tailored to each individual's genetic profile, fundamentally improving healthcare services for every patient.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Slide2 -->
                                        <article class="pbmit-miconheading-style-9 swiper-slide">
                                            <div class="pbmit-ihbox-style-9">
                                                <div class="pbmit-ihbox-box">
                                                    <div class="pbmit-ihbox-icon">
                                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                            <svg enable-background="new 0 0 512 512" height="512"
                                                                viewBox="0 0 512 512" width="512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <circle cx="472" cy="171" r="40"></circle>
                                                                    <circle cx="416" cy="317" r="15"></circle>
                                                                    <circle cx="356" cy="317" r="15"></circle>
                                                                    <path
                                                                        d="m472 241c-38.09 0-69.151-30.587-69.962-68.487-3.636-.334-7.316-.513-11.038-.513-66.168 0-120 53.832-120 120v115c0 57.897 47.103 105 105 105 27.57 0 50-22.43 50-50v-55.193c49.926-15.179 85-61.62 85-114.807 0-20.105-4.978-39.067-13.753-55.73-7.838 3.043-16.347 4.73-25.247 4.73zm-81-14c8.284 0 15 6.716 15 15s-6.716 15-15 15-15-6.716-15-15 6.716-15 15-15zm-34 200c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15zm59-65c-11.517 0-22.032-4.353-30-11.495-7.968 7.142-18.483 11.495-30 11.495-24.813 0-45-20.187-45-45s20.187-45 45-45c11.517 0 22.032 4.353 30 11.495 7.968-7.141 18.483-11.495 30-11.495 24.813 0 45 20.187 45 45s-20.187 45-45 45z">
                                                                    </path>
                                                                    <circle cx="40" cy="171" r="40"></circle>
                                                                    <circle cx="96" cy="317" r="15"></circle>
                                                                    <circle cx="156" cy="317" r="15"></circle>
                                                                    <path
                                                                        d="m121 172c-3.722 0-7.402.179-11.038.513-.811 37.9-31.872 68.487-69.962 68.487-8.9 0-17.409-1.687-25.247-4.73-8.775 16.663-13.753 35.625-13.753 55.73 0 53.187 35.074 99.628 85 114.807v55.193c0 27.57 22.43 50 50 50 57.897 0 105-47.103 105-105v-115c0-66.168-53.832-120-120-120zm0 55c8.284 0 15 6.716 15 15s-6.716 15-15 15-15-6.716-15-15 6.716-15 15-15zm34 200c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15zm1-65c-11.517 0-22.032-4.353-30-11.495-7.968 7.142-18.483 11.495-30 11.495-24.813 0-45-20.187-45-45s20.187-45 45-45c11.517 0 22.032 4.353 30 11.495 7.968-7.141 18.483-11.495 30-11.495 24.813 0 45 20.187 45 45s-20.187 45-45 45z">
                                                                    </path>
                                                                    <path
                                                                        d="m286 60h63c8.284 0 15-6.716 15-15v-30c0-8.284-6.716-15-15-15h-108c-8.284 0-15 6.716-15 15v75h60z">
                                                                    </path>
                                                                    <path
                                                                        d="m291.358 180c20.605-18.353 46.281-31.113 74.642-35.893v-9.107c0-8.284-6.716-15-15-15h-190c-8.284 0-15 6.716-15 15v9.107c28.361 4.78 54.037 17.54 74.642 35.893z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="pbmit-ihbox-contents">
                                                        <h2 class="pbmit-element-title">
                                                            Our Mission
                                                        </h2>
                                                        <div class="pbmit-heading-desc">Bridging advanced genomic research and patient care through an integrated innovation engine: cutting-edge research, strategic biobank, and innovative clinical services that bring real benefits directly to patients.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Slide3 -->
                                        <article class="pbmit-miconheading-style-9 swiper-slide">
                                            <div class="pbmit-ihbox-style-9">
                                                <div class="pbmit-ihbox-box">
                                                    <div class="pbmit-ihbox-icon">
                                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                            <svg enable-background="new 0 0 512 512" height="512"
                                                                viewBox="0 0 512 512" width="512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m64.425 60.672c2.179-17.486 17.11-30.672 34.731-30.672h25.844c8.284 0 15-6.716 15-15s-6.716-15-15-15h-25.844c-32.724 0-60.454 24.489-64.501 56.962l-29.22 234.489c10.444-3.912 20.946-7.247 31.483-10.039z">
                                                                        </path>
                                                                        <path
                                                                            d="m477.345 56.962c-4.047-32.473-31.777-56.962-64.501-56.962h-25.844c-8.284 0-15 6.716-15 15s6.716 15 15 15h25.844c17.621 0 32.553 13.186 34.731 30.672l27.507 220.739c10.537 2.792 21.039 6.127 31.483 10.039z">
                                                                        </path>
                                                                    </g>
                                                                    <path
                                                                        d="m502.571 322.073c-70.053-28.021-141.09-28.021-211.143 0-5.694 2.278-9.428 7.793-9.428 13.927v32.023c-17.194-8.063-34.806-8.063-52 0v-32.023c0-6.134-3.734-11.649-9.429-13.927-70.053-28.021-141.09-28.021-211.143 0-5.694 2.278-9.428 7.793-9.428 13.927v81c0 52.383 42.617 95 95 95h40c52.383 0 95-42.617 95-95v-13.394c17.992-15.351 34.008-15.351 52 0v13.394c0 52.383 42.617 95 95 95h40c52.383 0 95-42.617 95-95v-81c0-6.134-3.734-11.649-9.429-13.927zm-302.571 94.927c0 35.841-29.159 65-65 65h-40c-35.841 0-65-29.159-65-65v-70.654c28.318-10.188 56.864-15.346 85-15.346s56.682 5.158 85 15.346zm282 0c0 35.841-29.159 65-65 65h-40c-35.841 0-65-29.159-65-65v-70.654c28.318-10.188 56.864-15.346 85-15.346s56.682 5.158 85 15.346z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="pbmit-ihbox-contents">
                                                        <h2 class="pbmit-element-title">
                                                            Our Commitment
                                                        </h2>
                                                        <div class="pbmit-heading-desc">Built on unwavering commitment to ethics, data confidentiality, and patient welfare. We maintain highest standards through informed consent, data anonymization, physical security, and strict ethical oversight.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        {{-- <!-- Static Box Start --> 
		<section class="section-lgb pbmit-element-static-box-style-2">
			<div class="container">
				<div class="pbmit-heading-subheading text-center animation-style3">
					<h4 class="pbmit-subtitle">How It work</h4>
					<h2 class="pbmit-title">Follow up for regular checkups.</h2>
					<div class="pbmit-heading-desc">
						Maintain healthy vision with routine eye exams. Early detection of issues<br> ensures effective treatment and long-term eye health.
					</div>
				</div>
				<div class="row">
					<div class="swiper-static-slide-nav col-md-12 col-lg-7">
						<ul class="pbmit-hover-inner">
							<li class="pbmit-title-wrapper">
								<div class="pbmit-static-responsive-img">
									<img src="{{ asset('frontend/images/demo-3/static-box/static-box-1.jpg') }}" alt="Fill in our medical application">										
								</div>
								<div class="pbmit-content-box">
									<div class="pbmit-number-wrapper">
										<div class="pbmit-box-number">1</div>
									</div>
									<div class="pbmit-content-inner">
										<h4 class="pbmit-static-box-title">Fill in our medical application</h4>
										<div class="pbmit-static-box-desc">Start your journey to better vision by completing our simple medical application. It helps us understand your needs.</div>
									</div>
								</div>
							</li>
							<li class="pbmit-title-wrapper">
								<div class="pbmit-static-responsive-img">
									<img src="{{ asset('frontend/images/demo-3/static-box/static-box-2.jpg') }}" alt="Review your family medical history">										
								</div>
								<div class="pbmit-content-box">
									<div class="pbmit-number-wrapper">
										<div class="pbmit-box-number">2</div>
									</div>
									<div class="pbmit-content-inner">
										<h4 class="pbmit-static-box-title">Review your family medical history</h4>
										<div class="pbmit-static-box-desc">Understanding your family’s eye history helps us detect hereditary conditions early and treat for long-term vision care.</div>
									</div>
								</div>
							</li>
							<li class="pbmit-title-wrapper">
								<div class="pbmit-static-responsive-img">
									<img src="{{ asset('frontend/images/demo-3/static-box/static-box-3.jpg') }}" alt="Choose between our care programs">										
								</div>
								<div class="pbmit-content-box">
									<div class="pbmit-number-wrapper">
										<div class="pbmit-box-number">3</div>
									</div>
									<div class="pbmit-content-inner">
										<h4 class="pbmit-static-box-title">Choose between our care programs</h4>
										<div class="pbmit-static-box-desc">Select from personalized plans designed for all ages and conditions—whether for routine checkups, surgery, or vision correction.</div>
									</div>
								</div>
							</li>
							<li class="pbmit-title-wrapper">
								<div class="pbmit-static-responsive-img">
									<img src="{{ asset('frontend/images/demo-3/static-box/static-box-4.jpg') }}" alt="Introduce to highly qualified doctors">										
								</div>
								<div class="pbmit-content-box">
									<div class="pbmit-number-wrapper">
										<div class="pbmit-box-number">4</div>
									</div>
									<div class="pbmit-content-inner">
										<h4 class="pbmit-static-box-title">Introduce to highly qualified doctors</h4>
										<div class="pbmit-static-box-desc">Our expert doctors, nurses and allied health professionals manage patients with a  range of medical issues.</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="swiper-static-slide-images col-md-12 col-lg-5">
						<div class="swiper-slider pbmit-static-image">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="{{ asset('frontend/images/demo-3/static-box/static-box-1.jpg') }}" class="img-fluid" alt="Fill in our medical application">										
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('frontend/images/demo-3/static-box/static-box-2.jpg') }}" class="img-fluid" alt="Review your family medical history">										
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('frontend/images/demo-3/static-box/static-box-3.jpg') }}" class="img-fluid" alt="Choose between our care programs">										
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('frontend/images/demo-3/static-box/static-box-4.jpg') }}" class="img-fluid" alt="Introduce to highly qualified doctors">										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Static Box End --> --}}

        <!-- History Start -->
        <section class="pbmit-element-timeline-style-1 history-section pbmit-bg-color-secondary">
            <div class="container-fluid p-0">
                <div class="pbmit-heading-subheading text-center animation-style3">
                    <h4 class="pbmit-subtitle">OUR HISTORY</h4>
                    <h2 class="pbmit-title">Our Journey in Clinical Research</h2>
                </div>
                <div class="swiper-slider pbmit-timeline-style-1" data-allow-touch="true" data-autoplay="true"
                    data-loop="false" data-dots="false" data-arrows="false" data-columns="4" data-margin="30"
                    data-effect="slide">
                    <div class="swiper-wrapper">
                        <div class="pbmit-timeline-wrapper swiper-slide pbmit-slide-even">
                            <div class="pbmit-same-height steps-media pbmit-feature-image">
                                <img src="{{ asset('frontend/images/history/bgsi-established.png') }}"
                                    class="img-fluid" alt="2022">
                            </div>
                            <div class="steps-dot">
                                <i class="steps-dot-line"></i>
                                <span class="dot"></span>
                            </div>
                            <div class="pbmit-same-height steps-content_wrap">
                                <p class="pbmit-timeline-year">2022</p>
                                <h3 class="pbmit-timeline-title">BGSI Establishment</h3>
                                <p class="pbmit-timeline-desc">The Indonesian Ministry of Health established the Indonesian Genomic Science Center (BGSI).</p>
                            </div>
                        </div>
                        <div class="pbmit-timeline-wrapper swiper-slide">
                            <div class="pbmit-same-height steps-media pbmit-feature-image">
                                <img src="{{ asset('frontend/images/history/national-hub-appointment.png') }}"
                                    class="img-fluid" alt="National Hub Appointment">
                            </div>
                            <div class="steps-dot">
                                <i class="steps-dot-line"></i>
                                <span class="dot"></span>
                            </div>
                            <div class="pbmit-same-height steps-content_wrap">
                                <p class="pbmit-timeline-year">2022</p>
                                <h3 class="pbmit-timeline-title">National Hub Appointment</h3>
                                <p class="pbmit-timeline-desc">The MoH issued an official decree appointing Cipto Mangunkusumo Hospital (RSCM) as the national Hub for Metabolic Diseases.</p>
                            </div>
                        </div>
                        <div class="pbmit-timeline-wrapper swiper-slide pbmit-slide-even">
                            <div class="pbmit-same-height steps-media pbmit-feature-image">
                                <img src="{{ asset('frontend/images/history/ilptkp-formation.png') }}"
                                    class="img-fluid" alt="ILPTKP">
                            </div>
                            <div class="steps-dot">
                                <i class="steps-dot-line"></i>
                                <span class="dot"></span>
                            </div>
                            <div class="pbmit-same-height steps-content_wrap">
                                <p class="pbmit-timeline-year">2023</p>
                                <h3 class="pbmit-timeline-title">ILPTKP Formation</h3>
                                <p class="pbmit-timeline-desc">In response, RSCM established the Translational Research and Precision Medicine Laboratory Unit (ILPTKP) to carry out activities under the Metabolic Disease Hub.</p>
                            </div>
                        </div>
                        <div class="pbmit-timeline-wrapper swiper-slide">
                            <div class="pbmit-same-height steps-media pbmit-feature-image">
                                <img src="{{ asset('frontend/images/history/cru-transformation.png') }}"
                                    class="img-fluid" alt="CRU">
                            </div>
                            <div class="steps-dot">
                                <i class="steps-dot-line"></i>
                                <span class="dot"></span>
                            </div>
                            <div class="pbmit-same-height steps-content_wrap">
                                <p class="pbmit-timeline-year">2024</p>
                                <h3 class="pbmit-timeline-title">CRU Transformation</h3>
                                <p class="pbmit-timeline-desc">ILPTKP was later renamed to the Clinical Research Unit (CRU).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- History End -->

        <!-- Why Choose Start -->
        <section class="animation animated fadeIn why-choose-sec-two my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-xl-4 half-width-1366-to-1025">
                        <div class="pbmit-heading-subheading animation-style3">
                            <h4 class="pbmit-subtitle">Our Research</h4>
                            <h2 class="pbmit-title">Cutting-edge Genomic Research</h2>
                            <div class="pbmit-heading-desc">
                                As the national metabolic disease hub designated by the Ministry of Health, our research focuses on Indonesia's most pressing health challenges using advanced genomic technologies and precision medicine approaches.
                            </div>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="pbmit-icon-list-icon">
                                    <i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                </span>
                                <span class="pbmit-icon-list-text">Youth diabetes genetic factors research</span>
                            </li>
                            <li class="list-group-item">
                                <span class="pbmit-icon-list-icon">
                                    <i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                </span>
                                <span class="pbmit-icon-list-text">Familial hypercholesterolemia screening</span>
                            </li>
                            <li class="list-group-item">
                                <span class="pbmit-icon-list-icon">
                                    <i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                </span>
                                <span class="pbmit-icon-list-text">Pharmacogenomics for personalized therapy</span>
                            </li>
                            <li class="list-group-item">
                                <span class="pbmit-icon-list-icon">
                                    <i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
                                </span>
                                <span class="pbmit-icon-list-text">Indonesian population genomics study</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-xl-4 half-width-1366-to-1025">
                        <div class="why-choose-two-center-box">
                            <div class="about-img">
                                <img src="{{ asset('frontend/images/about/our-research.png') }}" alt>
                            </div>
                            <div class="pbmit-main-round-wrap">
                                <div class="pbmit-main-round">
                                    <div class="pbmit-dot-round">
                                        <span></span><span></span>
                                    </div>
                                    <div class="pbmit-main-round-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 full-width-1366">
                        <div class="why-choose-two-right-box pbmit-bg-color-light">
                            <div class="fid-style-4-wrap">
                                <div class="pbminfotech-ele-fid-style-4">
                                    <div class="pbmit-fld-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                <svg enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <circle cx="472" cy="171" r="40"></circle>
                                                        <circle cx="416" cy="317" r="15"></circle>
                                                        <circle cx="356" cy="317" r="15"></circle>
                                                        <path
                                                            d="m472 241c-38.09 0-69.151-30.587-69.962-68.487-3.636-.334-7.316-.513-11.038-.513-66.168 0-120 53.832-120 120v115c0 57.897 47.103 105 105 105 27.57 0 50-22.43 50-50v-55.193c49.926-15.179 85-61.62 85-114.807 0-20.105-4.978-39.067-13.753-55.73-7.838 3.043-16.347 4.73-25.247 4.73zm-81-14c8.284 0 15 6.716 15 15s-6.716 15-15 15-15-6.716-15-15 6.716-15 15-15zm-34 200c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15zm59-65c-11.517 0-22.032-4.353-30-11.495-7.968 7.142-18.483 11.495-30 11.495-24.813 0-45-20.187-45-45s20.187-45 45-45c11.517 0 22.032 4.353 30 11.495 7.968-7.141 18.483-11.495 30-11.495 24.813 0 45 20.187 45 45s-20.187 45-45 45z">
                                                        </path>
                                                        <circle cx="40" cy="171" r="40"></circle>
                                                        <circle cx="96" cy="317" r="15"></circle>
                                                        <circle cx="156" cy="317" r="15"></circle>
                                                        <path
                                                            d="m121 172c-3.722 0-7.402.179-11.038.513-.811 37.9-31.872 68.487-69.962 68.487-8.9 0-17.409-1.687-25.247-4.73-8.775 16.663-13.753 35.625-13.753 55.73 0 53.187 35.074 99.628 85 114.807v55.193c0 27.57 22.43 50 50 50 57.897 0 105-47.103 105-105v-115c0-66.168-53.832-120-120-120zm0 55c8.284 0 15 6.716 15 15s-6.716 15-15 15-15-6.716-15-15 6.716-15 15-15zm34 200c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15zm1-65c-11.517 0-22.032-4.353-30-11.495-7.968 7.142-18.483 11.495-30 11.495-24.813 0-45-20.187-45-45s20.187-45 45-45c11.517 0 22.032 4.353 30 11.495 7.968-7.141 18.483-11.495 30-11.495 24.813 0 45 20.187 45 45s-20.187 45-45 45z">
                                                        </path>
                                                        <path
                                                            d="m286 60h63c8.284 0 15-6.716 15-15v-30c0-8.284-6.716-15-15-15h-108c-8.284 0-15 6.716-15 15v75h60z">
                                                        </path>
                                                        <path
                                                            d="m291.358 180c20.605-18.353 46.281-31.113 74.642-35.893v-9.107c0-8.284-6.716-15-15-15h-190c-8.284 0-15 6.716-15 15v9.107c28.361 4.78 54.037 17.54 74.642 35.893z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pbmit-contents-box">
                                            <h4 class="pbmit-fid-counter">
                                                <span class="pbmit-fid-before"></span>
                                                <span class="pbmit-number-rotate numinate"
                                                    data-appear-animation="animateDigits" data-from="0" data-to="100"
                                                    data-interval="10" data-before="" data-before-style=""
                                                    data-after="" data-after-style="">100</span>
                                                <span class="pbmit-fid"><span>%</span></span>
                                            </h4>
                                            <h3 class="pbmit-fid-title">Ethical compliance and patient privacy protection</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fid-style-4-wrap">
                                <div class="pbminfotech-ele-fid-style-4">
                                    <div class="pbmit-fld-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                <svg enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="m415.762 183.611-70-60c-3.507-3.007-8.203-4.23-12.731-3.314-4.528.914-8.381 3.863-10.447 7.995-15.948 31.895-48.006 51.708-83.666 51.708h-92.918c-30.327 0-55 24.673-55 55v112c0 46.302 19.179 88.203 50 118.198v-101.5c-9.059-6.332-15-16.832-15-28.698v-50c0-19.299 15.701-35 35-35h50c19.299 0 35 15.701 35 35v50c0 11.866-5.941 22.365-15 28.698v146.411c8.155 1.245 16.503 1.891 25 1.891 90.981 0 165-74.019 165-165v-152c0-4.379-1.914-8.539-5.238-11.389zm-89.762 166.389c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z">
                                                        </path>
                                                        <circle cx="326" cy="305" r="15"></circle>
                                                        <path
                                                            d="m211 280h-50c-2.757 0-5 2.243-5 5v50c0 2.757 2.243 5 5 5h50c2.757 0 5-2.243 5-5v-50c0-2.757-2.243-5-5-5z">
                                                        </path>
                                                        <path d="m171 370h30v142h-30z"></path>
                                                        <path
                                                            d="m21 275v30c0 22.091 17.909 40 40 40v-110c-22.091 0-40 17.909-40 40z">
                                                        </path>
                                                        <path
                                                            d="m316 0h-129.01c-32.656 0-61.478 20.698-72.477 50.624-52.515 5.738-93.513 50.358-93.513 104.376v62.604c11.348-7.932 25.135-12.604 40-12.604h5.484c12.154-32.106 43.205-55 79.516-55h92.918c24.223 0 46-13.459 56.833-35.124 6.241-12.482 17.665-21.225 31.344-23.986 2.918-.59 5.919-.891 8.908-.891 10.734 0 21.135 3.849 29.286 10.837l69.998 59.998c9.985 8.559 15.713 21.013 15.713 34.166v10c14.865 0 28.652 4.672 40 12.604v-42.604c0-96.495-78.504-175-175-175z">
                                                        </path>
                                                        <path
                                                            d="m451 235v110c22.091 0 40-17.909 40-40v-30c0-22.091-17.909-40-40-40z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pbmit-contents-box">
                                            <h4 class="pbmit-fid-counter">
                                                <span class="pbmit-fid-before"></span>
                                                <span class="pbmit-number-rotate numinate"
                                                    data-appear-animation="animateDigits" data-from="0" data-to="1000"
                                                    data-interval="10" data-before="" data-before-style=""
                                                    data-after="" data-after-style="">1000</span>
                                                <span class="pbmit-fid"><span>+</span></span>
                                            </h4>
                                            <h3 class="pbmit-fid-title">Biobank samples advancing medical research.</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fid-style-4-wrap">
                                <div class="pbminfotech-ele-fid-style-4">
                                    <div class="pbmit-fld-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                <svg enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="m156.412 175.001c10.458 10.145 29.247 24.999 49.588 24.999 20.336 0 39.121-14.848 49.587-25-10.466-10.152-29.251-25-49.587-25-20.338 0-39.122 14.849-49.588 25.001zm64.588-.001c0 8.284-6.716 15-15 15s-15-6.716-15-15 6.716-15 15-15 15 6.716 15 15z">
                                                        </path>
                                                        <path
                                                            d="m497 0h-482c-8.284 0-15 6.716-15 15v380c0 8.284 6.716 15 15 15h158.084c-4.561-10.764-7.084-22.593-7.084-35 0-8.672 1.237-17.059 3.536-25h-54.536c-8.284 0-15-6.716-15-15 0-13.785-11.215-25-25-25-8.284 0-15-6.716-15-15v-180c0-8.284 6.716-15 15-15 13.785 0 25-11.215 25-25 0-8.284 6.716-15 15-15h282c8.284 0 15 6.716 15 15 0 13.785 11.215 25 25 25 8.284 0 15 6.716 15 15v180c0 8.284-6.716 15-15 15-13.785 0-25 11.215-25 25 0 8.284-6.716 15-15 15h-54.536c2.3 7.941 3.536 16.328 3.536 25 0 12.407-2.524 24.236-7.084 35h158.084c8.284 0 15-6.716 15-15v-380c0-8.284-6.716-15-15-15z">
                                                        </path>
                                                        <path
                                                            d="m422 282.079v-154.158c-18.291-5.19-32.73-19.63-37.921-37.921h-256.158c-5.19 18.291-19.63 32.73-37.921 37.921v154.158c18.291 5.19 32.73 19.63 37.921 37.921h56.892c16.476-21.276 42.257-35 71.187-35s54.711 13.724 71.187 35h56.892c5.191-18.291 19.63-32.73 37.921-37.921zm-86-162.079h40c8.284 0 15 6.716 15 15s-6.716 15-15 15h-40c-8.284 0-15-6.716-15-15s6.716-15 15-15zm0 60h40c8.284 0 15 6.716 15 15s-6.716 15-15 15h-40c-8.284 0-15-6.716-15-15s6.716-15 15-15zm-211.808 4.251c-4.257-5.433-4.257-13.069 0-18.502 1.464-1.868 36.367-45.749 81.808-45.749s80.344 43.881 81.808 45.749c4.257 5.433 4.257 13.069 0 18.502-1.464 1.868-36.367 45.749-81.808 45.749s-80.344-43.881-81.808-45.749zm131.808 85.749c-8.284 0-15-6.716-15-15s6.716-15 15-15h120c8.284 0 15 6.716 15 15s-6.716 15-15 15z">
                                                        </path>
                                                        <path
                                                            d="m256 315c-33.084 0-60 26.916-60 60s26.916 60 60 60 60-26.916 60-60-26.916-60-60-60zm0 75c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15z">
                                                        </path>
                                                        <path
                                                            d="m216 455.606v41.394c0 5.766 3.306 11.021 8.502 13.52 5.197 2.497 11.365 1.797 15.868-1.807l15.63-12.504 15.63 12.504c2.712 2.17 6.027 3.287 9.372 3.287 2.208 0 4.43-.487 6.496-1.48 5.196-2.498 8.502-7.754 8.502-13.52v-41.394c-12.057 6.007-25.639 9.394-40 9.394s-27.943-3.387-40-9.394z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pbmit-contents-box">
                                            <h4 class="pbmit-fid-counter">
                                                <span class="pbmit-fid-before"></span>
                                                <span class="pbmit-number-rotate numinate"
                                                    data-appear-animation="animateDigits" data-from="0" data-to="3"
                                                    data-interval="1" data-before="" data-before-style=""
                                                    data-after="" data-after-style="">3</span>
                                                <span class="pbmit-fid"><span></span></span>
                                            </h4>
                                            <h3 class="pbmit-fid-title">Main research pillars: <br> Genomics, Biobank, Clinical Trials</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pbmit-bottom-text text-center mt-xl-5 mt-4">
                    <span>Join Us</span> in advancing Indonesia's healthcare future <a href="{{ route('contact') }}">Contact
                        Us</a>
                </div>
            </div>
        </section>
        <!-- Why Choose end -->
    </div>
    <!-- Page Content End -->
@endsection
