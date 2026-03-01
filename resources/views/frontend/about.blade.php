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
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="512" height="512" fill="currentColor">
                                                                <path d="M288 0H160 128C110.3 0 96 14.3 96 32s14.3 32 32 32V196.8c0 11.8-3.3 23.5-9.5 33.5L10.3 406.2C3.6 417.2 0 429.7 0 442.6C0 480.9 31.1 512 69.4 512H378.6c38.3 0 69.4-31.1 69.4-69.4c0-12.8-3.6-25.4-10.3-36.4L329.5 230.4c-6.2-10.1-9.5-21.7-9.5-33.5V64c17.7 0 32-14.3 32-32s-14.3-32-32-32H288zM192 196.8V64h64V196.8c0 23.7 6.6 46.9 19 67.1L309.5 320h-171L173 263.9c12.4-20.2 19-43.4 19-67.1z"/>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="512" height="512" fill="currentColor">
                                                                <path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"/>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="512" height="512" fill="currentColor">
                                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c1.8 0 3.5-.2 5.3-.5c-76.3-55.1-99.8-141-103.1-200.2c-16.1-4.8-33.1-7.3-50.7-7.3H178.3zm308.8-78.3l-120 48C358 277.4 352 286.2 352 296c0 63.3 25.9 168.8 134.8 214.2c5.9 2.5 12.6 2.5 18.5 0C614.1 464.8 640 359.3 640 296c0-9.8-6-18.6-15.1-22.3l-120-48c-5.7-2.3-12.1-2.3-17.8 0zM591.4 312c-3.9 50.7-27.2 116.7-95.4 149.7V273.8L591.4 312z"/>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="512" height="512" fill="currentColor">
                                                    <path d="M0 64C0 46.3 14.3 32 32 32H88h48 56c17.7 0 32 14.3 32 32s-14.3 32-32 32V400c0 44.2-35.8 80-80 80s-80-35.8-80-80V96C14.3 96 0 81.7 0 64zM136 96H88V256h48V96zM288 64c0-17.7 14.3-32 32-32h56 48 56c17.7 0 32 14.3 32 32s-14.3 32-32 32V400c0 44.2-35.8 80-80 80s-80-35.8-80-80V96c-17.7 0-32-14.3-32-32zM424 96H376V256h48V96z"/>
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
                                                <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione-monotone" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M48.669 2L46.21 4.088l.671.779l-2.454 2.091l-.674-.782l-24.577 20.881l.71.823l-2.438 3.015l3.986 4.616l3.367-1.929l.71.824l5.696-4.839a8.485 8.485 0 0 0 3.208 2.035c.321.113.649.2.979.273c.213 2.3.248 4.752-.129 7.109a11.646 11.646 0 0 0-1.744-.147c-5.189.039-9.58 3.434-11.059 8.113l-.006.021l-1.332 3.828l-1.273-1.271c-4.638-4.632-3.471-8.209-2.648-9.655l3.315 3.312l2.821-2.818L11.814 28.87L9 31.682l3.592 3.588c-1.548 2.206-5.675 9.528 1.578 16.771l4.84 4.835L17.227 62h32.584l-5.228-15.027l-.007-.021a11.546 11.546 0 0 0-3.009-4.83c1.271-3.924 1.272-8.068.772-11.748a8.393 8.393 0 0 0 2.887-3.9a8.35 8.35 0 0 0-.346-6.432a8.638 8.638 0 0 0-.832-1.384l6.036-5.128l-.67-.777l2.454-2.094l.675.783L55 9.352L48.669 2M21.76 33.595l-2.357-2.731l1.242-1.537l2.83 3.287l-1.715.981m-9.945-3.312l10.109 10.084l-.938.937l-10.111-10.08l.94-.941m21.706 26.571c-3.583 0-6.484-2.879-6.484-6.434s2.901-6.436 6.484-6.436c3.58 0 6.483 2.881 6.483 6.436s-2.903 6.434-6.483 6.434m9.821-31.049c-.934 2.639-3.426 4.285-6.091 4.285c-.72 0-1.452-.12-2.17-.373c-3.378-1.193-5.153-4.873-3.968-8.225c.933-2.637 3.422-4.284 6.086-4.285c.721 0 1.455.121 2.174.375c3.376 1.189 5.152 4.875 3.969 8.223m5.094-14.191l-3.029-3.519l2.454-2.092l3.03 3.518l-2.455 2.093" fill="#007a7f"></path><ellipse transform="rotate(-70.518 37.228 23.651)" cx="37.226" cy="23.65" rx="3.219" ry="3.243" fill="#007a7f"></ellipse><ellipse cx="33.521" cy="50.419" rx="3.244" ry="3.218" fill="#007a7f"></ellipse></g></svg>
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
