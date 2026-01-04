@extends('layouts.frontend')

@section('title', 'Appointment')

@section('content')
<x-frontend.page-title
    title="Appointment"
    :breadcrumbs="[['title' => 'Appointment']]"
/>

<div class="page-content">  

			<!-- Info Start -->
			<section class="section-xxl">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="info-box-area pbmit-bg-color-global animation animated fadeIn">
								<div class="row">
									<div class="col-md-12 col-xl-6">
										<div class="pbmit-ihbox-style-20">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
														<svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m415.762 183.611-70-60c-3.507-3.007-8.203-4.23-12.731-3.314-4.528.914-8.381 3.863-10.447 7.995-15.948 31.895-48.006 51.708-83.666 51.708h-92.918c-30.327 0-55 24.673-55 55v112c0 46.302 19.179 88.203 50 118.198v-101.5c-9.059-6.332-15-16.832-15-28.698v-50c0-19.299 15.701-35 35-35h50c19.299 0 35 15.701 35 35v50c0 11.866-5.941 22.365-15 28.698v146.411c8.155 1.245 16.503 1.891 25 1.891 90.981 0 165-74.019 165-165v-152c0-4.379-1.914-8.539-5.238-11.389zm-89.762 166.389c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z"></path><circle cx="326" cy="305" r="15"></circle><path d="m211 280h-50c-2.757 0-5 2.243-5 5v50c0 2.757 2.243 5 5 5h50c2.757 0 5-2.243 5-5v-50c0-2.757-2.243-5-5-5z"></path><path d="m171 370h30v142h-30z"></path><path d="m21 275v30c0 22.091 17.909 40 40 40v-110c-22.091 0-40 17.909-40 40z"></path><path d="m316 0h-129.01c-32.656 0-61.478 20.698-72.477 50.624-52.515 5.738-93.513 50.358-93.513 104.376v62.604c11.348-7.932 25.135-12.604 40-12.604h5.484c12.154-32.106 43.205-55 79.516-55h92.918c24.223 0 46-13.459 56.833-35.124 6.241-12.482 17.665-21.225 31.344-23.986 2.918-.59 5.919-.891 8.908-.891 10.734 0 21.135 3.849 29.286 10.837l69.998 59.998c9.985 8.559 15.713 21.013 15.713 34.166v10c14.865 0 28.652 4.672 40 12.604v-42.604c0-96.495-78.504-175-175-175z"></path><path d="m451 235v110c22.091 0 40-17.909 40-40v-30c0-22.091-17.909-40-40-40z"></path></g></svg>
													</div>
												</div>
												<h2 class="pbmit-element-title">See our pricing packages</h2>
												<div class="pbmit-heading-desc">Explore our affordable pricing. Call anytime to learn about our affordable packages.</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-xl-6 pbmit-col">
										<div class="info-image">
											<img src="{{ asset(\'frontend/images/demo-2/pricing-box-01.png\') }}" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box-area pbmit-bg-color-secondary mt-md-0 mt-3 animation animated fadeIn">
								<div class="row g-0">
									<div class="col-md-12 col-xl-6">
										<div class="pbmit-ihbox-style-20">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
														<svg aria-hidden="true" class="e-font-icon-svg e-fas-comment-dots" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg>
													</div>
												</div>
												<h2 class="pbmit-element-title">Talk to our eye specialist.</h2>
												<div class="pbmit-heading-desc">Call us 24/7 with any emergency or to schedule an appointment & check your health.</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-xl-6 pbmit-col">
										<div class="info-image">
											<img src="{{ asset(\'frontend/images/demo-2/pricing-box-02.png\') }}" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- Info End -->

			<!-- Appointment Start --> 
			<section class="section-lgb">
				<div class="container">
					<div class="contact-form-box">
						<div class="tween-effect-wrap-left">
							<div class="pbmit-ele-tween-effect pbmit-tween-image pbmit-tween-effect-style-1">
								<div class="pbmit-tween-effect" data-x-start="0" data-x-end="8" data-y-start="0" data-y-end="40" data-scale-x-start="1" data-scale-x-end=" 1" data-skew-x-start=" 0deg" data-skew-x-end="0deg" data-skew-y-start=" 0deg" data-skew-y-end=" 0deg" data-rotate-x-start="0" data-rotate-x-end="0">
									<img src="{{ asset(\'frontend/images/bg/contact-circle-1.png\') }}" class="img-fluid" alt="">
								</div>
							</div>
						</div>
						<div class="contact-form-wrap">
							<div class="pbmit-heading-subheading text-center animation-style3">
								<div class="pbmit-icon">
									<i class="pbmit-ophtical-icon pbmit-ophtical-icon-medical-report"></i>
								</div>
								<h2 class="pbmit-title">Reserve ophtical clinic slot</h2>
								<div class="pbmit-heading-desc">
									Call us 24/7 with any emergency or to schedule an appointment & check your health.
								</div>
							</div>
							<form class="contact-form" method="post" id="contact-form" action="send.php">
								<div class="row">
									<div class="col-md-6 col-gl-4">
										<input type="text" class="form-control" placeholder="Full Name *" name="name" required>
									</div>
									<div class="col-md-6 col-gl-4">
										<input type="tel" class="form-control" placeholder="Phone Number *" name="phone" required>
									</div>
									<div class="col-md-6 col-gl-4">
										<input class="form-control" type="date" name="date" required>
									</div>
									<div class="col-md-6 col-gl-4">
										<select class="form-select" name="select1" required>
											<option value="">Select Time</option>
											<option value="9:00 am">9:00 am</option>
											<option value="9:30 am">9:30 am</option>
											<option value="10:00 am">10:00 am</option>
											<option value="10:30 am">10:30 am</option>
											<option value="11:00 am">11:00 am</option>
											<option value="11:30 am">11:30 am</option>
											<option value="12:00 pm">12:00 pm</option>
											<option value="12:30 pm">12:30 pm</option>
											<option value="01:00 pm">01:00 pm</option>
											<option value="01:30 pm">01:30 pm</option>
											<option value="02:00 pm">02:00 pm</option>
											<option value="02:30 pm">02:30 pm</option>
											<option value="03:00 pm">03:00 pm</option>
											<option value="03:30 pm">03:30 pm</option>
											<option value="04:00 pm">04:00 pm</option>
											<option value="04:30 pm">04:30 pm</option>
											<option value="05:00 pm">05:00 pm</option>
											<option value="05:30 pm">05:30 pm</option>
											<option value="06:00 pm">06:00 pm</option>
											<option value="06:30 pm">06:30 pm</option>
										</select>
									</div>
									<div class="col-md-6 col-gl-4">
										<select class="form-select" name="select2" required>
											<option value="">Select Treatment</option>
											<option value="Cataract Surgery">Cataract Surgery</option>
											<option value="Oculoplasty">Oculoplasty</option>
											<option value="Myopia Control">Myopia Control</option>
											<option value="Vitreoretinal">Vitreoretinal</option>
											<option value="Cataract & Refractive">Cataract & Refractive</option>
										</select>
									</div>
									<div class="col-md-6 col-gl-4">
										<select class="form-select" name="select3" required>
											<option value="">Select Doctor</option>
											<option value="Dr. John Harris">Dr. John Harris</option>
											<option value="Dr. Myles Evader">Dr. Myles Evader</option>
											<option value="Dr. Bryson Tiller">Dr. Bryson Tiller</option>
											<option value="Dr. Jacob Moore">Dr. Jacob Moore</option>
										</select>
									</div>
									<div class="col-md-12">
										<textarea cols="40" rows="10" placeholder="Message" class="form-control" name="message" required></textarea>
									</div>
									<div class="col-md-12 text-center mt-md-4 mt-3">
										<button class="pbmit-btn secondary">
											<span class="pbmit-button-content-wrapper">
												<span class="pbmit-button-text-wrap">
													<span class="pbmit-button-text" data-text="Request An Appointment">
														<span>Request An Appointment</span>
													</span>
												</span>
												<span class="pbmit-button-icon">
													<svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="m21.706 12.708-7 7a1 1 0 0 1 -1.414-1.414l5.294-5.294h-15.586a1 1 0 0 1 0-2h15.586l-5.293-5.293a1 1 0 0 1 1.414-1.414l7 7a1 1 0 0 1 0 1.416z" fill="rgb(0,0,0)"></path></svg>
												</span>
											</span>
											<span class="form-btn-loader d-none">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100"><circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="40" cy="50"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate></circle><circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="100" cy="50"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate></circle><circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="160" cy="50"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate></circle></svg>
											</span>
										</button>
										<div class="col-md-12 col-lg-12 message-status mt-2"></div>
									</div>
								</div>
							</form>
						</div>
						<div class="tween-effect-wrap-right">
							<div class="pbmit-ele-tween-effect pbmit-tween-image pbmit-tween-effect-style-1">
								<div class="pbmit-tween-effect" data-x-start="0" data-x-end="8" data-y-start="0" data-y-end="-40" data-scale-x-start="1" data-scale-x-end=" 1" data-skew-x-start=" 0deg" data-skew-x-end="0deg" data-skew-y-start=" 0deg" data-skew-y-end=" 0deg" data-rotate-x-start="0" data-rotate-x-end="0">
									<img src="{{ asset(\'frontend/images/bg/contact-circle-2.png\') }}" class="img-fluid" alt="contact-circle-2">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Appointment end --> 

		</div>
@endsection
