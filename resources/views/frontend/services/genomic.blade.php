@extends('layouts.frontend')

@section('title', 'Genomic')

@section('content')
<x-frontend.page-title
    title="Genomic"
    :breadcrumbs="[['title' => 'Genomic']]"
/>

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
											<li class="post-active"><a href="{{ route('services.show', 'genomic') }}"> Genomic </a></li>
											<li><a href="{{ route('services.show', 'bacterial-analysis') }}"> Bacterial Analysis </a></li>
											<li><a href="{{ route('services.show', 'clinical-trial') }}"> Clinical Trial </a></li>
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
											<span class="pbmit-ads-decs">Schedule an appointment with our specialists for eye exams, vision correction and treatments.</span>
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
								<img src="{{ asset('frontend/images/service/service-single-01.jpg') }}" class="img-fluid w-100" alt="">
							</div>
							<div class="pbmit-entry-content">
								<div class="pbmit-custom-heading animation-style3">
									<h3 class="pbmit-title">Vision care experts for clearer tomorrow today</h3>
								</div>
								<p><span class="pbmit-drop-cap"><span class="pbmit-drop-cap-letter">W</span></span>ear protective eyewear to prevent eye injuries. You need eye protection when playing certain sports, working jobs such as factory work and construction, and doing repairs or projects in your home. as macular cataract and damage eyes are an important part of your health. Most people rely on their eyes to see and make sense of the world around them, but some eye diseases can lead to vision loss, so it is important to identify and treat eye diseases as early as possible. You should get your eyes checked as often as your health care.</p>
								<p>The provider recommends it, or if you have a new vision problems, and just as it is important to keep your body healthy, you also need to keep your eyes healthy.</p>
								<div class="row">
									<div class="col-md-6 col-lg-4">
										<div class="pbmit-ihbox-style-10">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
														<svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><circle cx="472" cy="171" r="40"></circle><circle cx="416" cy="317" r="15"></circle><circle cx="356" cy="317" r="15"></circle><path d="m472 241c-38.09 0-69.151-30.587-69.962-68.487-3.636-.334-7.316-.513-11.038-.513-66.168 0-120 53.832-120 120v115c0 57.897 47.103 105 105 105 27.57 0 50-22.43 50-50v-55.193c49.926-15.179 85-61.62 85-114.807 0-20.105-4.978-39.067-13.753-55.73-7.838 3.043-16.347 4.73-25.247 4.73zm-81-14c8.284 0 15 6.716 15 15s-6.716 15-15 15-15-6.716-15-15 6.716-15 15-15zm-34 200c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15zm59-65c-11.517 0-22.032-4.353-30-11.495-7.968 7.142-18.483 11.495-30 11.495-24.813 0-45-20.187-45-45s20.187-45 45-45c11.517 0 22.032 4.353 30 11.495 7.968-7.141 18.483-11.495 30-11.495 24.813 0 45 20.187 45 45s-20.187 45-45 45z"></path><circle cx="40" cy="171" r="40"></circle><circle cx="96" cy="317" r="15"></circle><circle cx="156" cy="317" r="15"></circle><path d="m121 172c-3.722 0-7.402.179-11.038.513-.811 37.9-31.872 68.487-69.962 68.487-8.9 0-17.409-1.687-25.247-4.73-8.775 16.663-13.753 35.625-13.753 55.73 0 53.187 35.074 99.628 85 114.807v55.193c0 27.57 22.43 50 50 50 57.897 0 105-47.103 105-105v-115c0-66.168-53.832-120-120-120zm0 55c8.284 0 15 6.716 15 15s-6.716 15-15 15-15-6.716-15-15 6.716-15 15-15zm34 200c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15zm1-65c-11.517 0-22.032-4.353-30-11.495-7.968 7.142-18.483 11.495-30 11.495-24.813 0-45-20.187-45-45s20.187-45 45-45c11.517 0 22.032 4.353 30 11.495 7.968-7.141 18.483-11.495 30-11.495 24.813 0 45 20.187 45 45s-20.187 45-45 45z"></path><path d="m286 60h63c8.284 0 15-6.716 15-15v-30c0-8.284-6.716-15-15-15h-108c-8.284 0-15 6.716-15 15v75h60z"></path><path d="m291.358 180c20.605-18.353 46.281-31.113 74.642-35.893v-9.107c0-8.284-6.716-15-15-15h-190c-8.284 0-15 6.716-15 15v9.107c28.361 4.78 54.037 17.54 74.642 35.893z"></path></g></svg>
													</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">Cutting-Edge <br> technology</h2>
												</div>
												<div class="pbmit-contents-wraper">
													<h2 class="pbmit-element-title">Cutting-Edge <br> technology</h2>
													<div class="pbmit-heading-desc">Experience advanced diagnostics  & treatment from licensed eye specialists</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4 mt-md-0 mt-4">
										<div class="pbmit-ihbox-style-10">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
														<svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
															<g>
																<path d="m156.412 175.001c10.458 10.145 29.247 24.999 49.588 24.999 20.336 0 39.121-14.848 49.587-25-10.466-10.152-29.251-25-49.587-25-20.338 0-39.122 14.849-49.588 25.001zm64.588-.001c0 8.284-6.716 15-15 15s-15-6.716-15-15 6.716-15 15-15 15 6.716 15 15z"></path>
																<path d="m497 0h-482c-8.284 0-15 6.716-15 15v380c0 8.284 6.716 15 15 15h158.084c-4.561-10.764-7.084-22.593-7.084-35 0-8.672 1.237-17.059 3.536-25h-54.536c-8.284 0-15-6.716-15-15 0-13.785-11.215-25-25-25-8.284 0-15-6.716-15-15v-180c0-8.284 6.716-15 15-15 13.785 0 25-11.215 25-25 0-8.284 6.716-15 15-15h282c8.284 0 15 6.716 15 15 0 13.785 11.215 25 25 25 8.284 0 15 6.716 15 15v180c0 8.284-6.716 15-15 15-13.785 0-25 11.215-25 25 0 8.284-6.716 15-15 15h-54.536c2.3 7.941 3.536 16.328 3.536 25 0 12.407-2.524 24.236-7.084 35h158.084c8.284 0 15-6.716 15-15v-380c0-8.284-6.716-15-15-15z"></path>
																<path d="m422 282.079v-154.158c-18.291-5.19-32.73-19.63-37.921-37.921h-256.158c-5.19 18.291-19.63 32.73-37.921 37.921v154.158c18.291 5.19 32.73 19.63 37.921 37.921h56.892c16.476-21.276 42.257-35 71.187-35s54.711 13.724 71.187 35h56.892c5.191-18.291 19.63-32.73 37.921-37.921zm-86-162.079h40c8.284 0 15 6.716 15 15s-6.716 15-15 15h-40c-8.284 0-15-6.716-15-15s6.716-15 15-15zm0 60h40c8.284 0 15 6.716 15 15s-6.716 15-15 15h-40c-8.284 0-15-6.716-15-15s6.716-15 15-15zm-211.808 4.251c-4.257-5.433-4.257-13.069 0-18.502 1.464-1.868 36.367-45.749 81.808-45.749s80.344 43.881 81.808 45.749c4.257 5.433 4.257 13.069 0 18.502-1.464 1.868-36.367 45.749-81.808 45.749s-80.344-43.881-81.808-45.749zm131.808 85.749c-8.284 0-15-6.716-15-15s6.716-15 15-15h120c8.284 0 15 6.716 15 15s-6.716 15-15 15z"></path>
																<path d="m256 315c-33.084 0-60 26.916-60 60s26.916 60 60 60 60-26.916 60-60-26.916-60-60-60zm0 75c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15z"></path>
																<path d="m216 455.606v41.394c0 5.766 3.306 11.021 8.502 13.52 5.197 2.497 11.365 1.797 15.868-1.807l15.63-12.504 15.63 12.504c2.712 2.17 6.027 3.287 9.372 3.287 2.208 0 4.43-.487 6.496-1.48 5.196-2.498 8.502-7.754 8.502-13.52v-41.394c-12.057 6.007-25.639 9.394-40 9.394s-27.943-3.387-40-9.394z"></path>
															</g>
														</svg>
													</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">Transparent <br> prices</h2>
												</div>
												<div class="pbmit-contents-wraper">
													<h2 class="pbmit-element-title">Transparent <br> prices</h2>
													<div class="pbmit-heading-desc">Get clear pricing on all eye exams, treatments, and procedures</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4 mt-lg-0 mt-4">
										<div class="pbmit-ihbox-style-10">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
														<svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><circle cx="321" cy="310" r="25"></circle><path d="m145.333 279.385c9.883-14.696 26.664-24.385 45.667-24.385 25.127 0 46.356 16.943 52.904 40h24.193c6.547-23.057 27.777-40 52.904-40 19.003 0 35.784 9.689 45.668 24.385l32.223-39.385h-285.783z"></path><circle cx="191" cy="310" r="25"></circle><path d="m321 365c-25.127 0-46.356-16.943-52.904-40h-24.193c-6.547 23.057-27.777 40-52.904 40-28.396 0-51.833-21.632-54.702-49.281l-45.297-55.364v86.645c0 90.981 74.019 165 165 165s165-74.019 165-165v-86.645l-45.298 55.364c-2.869 27.649-26.306 49.281-54.702 49.281zm-14.394 64.038c-13.952 13.952-32.279 20.928-50.606 20.928s-36.654-6.976-50.606-20.928c-5.858-5.857-5.858-15.355 0-21.213 5.858-5.857 15.356-5.857 21.213 0 16.208 16.207 42.579 16.207 58.787 0 5.858-5.858 15.354-5.858 21.213 0 5.857 5.858 5.857 15.356-.001 21.213z"></path><path d="m21 285v30c0 22.091 17.909 40 40 40v-110c-22.091 0-40 17.909-40 40z"></path><path d="m451 245v110c22.091 0 40-17.909 40-40v-30c0-22.091-17.909-40-40-40z"></path><path d="m451 215c14.808 0 28.547 4.635 39.869 12.511-1.865-59.963-26.084-116.066-68.699-158.681-44.385-44.386-103.399-68.83-166.17-68.83s-121.785 24.444-166.17 68.83c-42.615 42.616-66.834 98.718-68.699 158.681 11.322-7.876 25.061-12.511 39.869-12.511v-15c0-35.841 29.159-65 65-65h50.644c9.821-34.585 41.666-60 79.356-60s69.535 25.415 79.356 60h50.644c35.841 0 65 29.159 65 65z"></path><path d="m386 165h-47.856c-1.54 17.003-8.245 32.538-18.552 45h101.408v-10c0-19.299-15.701-35-35-35z"></path><path d="m126 165c-19.299 0-35 15.701-35 35v10h101.408c-10.307-12.462-17.012-27.997-18.552-45z"></path><path d="m308.5 157.5c0-28.949-23.552-52.5-52.5-52.5s-52.5 23.551-52.5 52.5 23.552 52.5 52.5 52.5 52.5-23.551 52.5-52.5zm-67.5 0c0-8.284 6.716-15 15-15s15 6.716 15 15-6.716 15-15 15-15-6.716-15-15z"></path></g></svg>
													</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">Highly qualified <br> doctor</h2>
												</div>
												<div class="pbmit-contents-wraper">
													<h2 class="pbmit-element-title">Highly qualified <br> doctor</h2>
													<div class="pbmit-heading-desc">Consult with an eye specialist trained in advanced surgery & emergency care.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row pbminfotech-gap-15px mt-4 pt-md-3 pb-xl-3 mb-xl-3">
									<div class="pbmit-miconheading-style-16 col-md-12">
										<div class="pbmit-ihbox-style-16">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-text-content">
													<span class="pbmit-ihbox-icon-type-text">1</span>
													<div class="pbmit-text-content-wrapper">
														<span class="pbmit-element-title">Treatment of eye conditions :</span>
														<span class="pbmit-heading-desc">Eye care involves diagnosing, treating various eye diseases, including infections.</span>
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
														<span class="pbmit-element-title">Medications :</span>
														<span class="pbmit-heading-desc">Eye drops, ointments, and other medications are used to treat various eye conditions.</span>
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
														<span class="pbmit-element-title">Consult an ophthalmologist : </span>
														<span class="pbmit-heading-desc">For comprehensive eye care, it's crucial to consult with an ophthalmologist.</span>
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
														<span class="pbmit-element-title">Surgery : </span>
														<span class="pbmit-heading-desc">Procedures, such as cataract surgery or laser vision correction, may be necessary to restore vision.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<p>We have the experience and expertise to deliver a wide range of eye care solutions tailored to diverse patient needs. Whether routine vision care or complex surgical treatments, our services are designed to meet varying expectations.</p>
								<div class="list-group-wrap">
									<ul class="list-group">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
											</span>
											<span class="pbmit-icon-list-text">Free vision test included</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
											</span>
											<span class="pbmit-icon-list-text">Affordable consultation fee available</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
											</span>
											<span class="pbmit-icon-list-text">Low-cost surgery options</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
											</span>
											<span class="pbmit-icon-list-text">Prescription glasses discount offered</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-ophtical-icon pbmit-ophtical-icon-check"></i>
											</span>
											<span class="pbmit-icon-list-text">24/7 emergency care accessible</span>
										</li>
									</ul>
								</div>
								<div class="pbmit-custom-heading animation-style3">
									<h3 class="pbmit-title">Have questions? talk to our eye specialist.</h3>
								</div>
								<div class="accordion" id="accordionExample1">
									<div class="accordion-item active" id="headingOne1">
										<h2 class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse"
												data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
													<span class="pbmit-accordion-title">
														Are your doctors specialized in retina, cornea, or glaucoma care?
													</span>
													<span class="pbmit-accordion-icon">
														<span class="pbmit-accordion-icon-opened">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
														</span>
														<span class="pbmit-accordion-icon-closed">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-up" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>
														</span>
													</span>
											</button>
										</h2>
										<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1"
											data-bs-parent="#accordionExample1">
											<div class="accordion-body">
												<p>Our expert doctors, nurses and allied health professionals manage patients with a  range of medical issues. Sun exposure can damage your eyes and raise.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo1">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
													<span class="pbmit-accordion-title">
														Do you offer advanced treatments like LASIK or cataract surgery?
													</span>
													<span class="pbmit-accordion-icon">
														<span class="pbmit-accordion-icon-opened">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
														</span>
														<span class="pbmit-accordion-icon-closed">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-up" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>
														</span>
													</span>
											</button>
										</h2>
										<div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
											data-bs-parent="#accordionExample1">
											<div class="accordion-body">
												<p>Our expert doctors, nurses and allied health professionals manage patients with a  range of medical issues. Sun exposure can damage your eyes and raise.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree1">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
													<span class="pbmit-accordion-title">
														Are pediatric eye checkups available at your facility?
													</span>
													<span class="pbmit-accordion-icon">
														<span class="pbmit-accordion-icon-opened">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
														</span>
														<span class="pbmit-accordion-icon-closed">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-up" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>
														</span>
													</span>
											</button>
										</h2>
										<div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
											data-bs-parent="#accordionExample1">
											<div class="accordion-body">
												<p>Our expert doctors, nurses and allied health professionals manage patients with a  range of medical issues. Sun exposure can damage your eyes and raise.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFour1">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
													<span class="pbmit-accordion-title">
														What technology or diagnostic tools do you use for eye exams?
													</span>
													<span class="pbmit-accordion-icon">
														<span class="pbmit-accordion-icon-opened">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
														</span>
														<span class="pbmit-accordion-icon-closed">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-up" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>
														</span>
													</span>
											</button>
										</h2>
										<div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1"
											data-bs-parent="#accordionExample1">
											<div class="accordion-body">
												<p>Our expert doctors, nurses and allied health professionals manage patients with a  range of medical issues. Sun exposure can damage your eyes and raise.</p>
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
@endsection
