@extends('layouts.frontend')

@section('title', 'Dr. Mike Davis')

@section('content')
<x-frontend.page-title
    title="Dr. Mike Davis"
    :breadcrumbs="[['title' => 'Dr. Mike Davis']]"
/>

<!-- Page Content -->
		<div class="page-content">

			<!-- Doctor Detail -->
			<section class="site-content">
				<div class="container">
					<div class="pbmit-team-single">
						<div class="pbmit-team-single-info">
							<div class="row">
								<div class="col-md-12 col-lg-6 pbmit-team-detail-wrapper">
									<div class="pbmit-team-image-wrapper">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="{{ asset(\'frontend/images/team/team-single-01.jpg\') }}" class="img-fluid" alt="">
											</div>
										</div>
										<div class="pbmit-team-member-rating">
											<ul>
												<li>4.8</li>
												<li>67 reviews</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6 pbmit-team-detail">
									<div class="pbmit-team-des">
										<div class="pbmit-team-summary">
											<h2 class="pbmit-team-title">Dr. Mike Davis</h2>
											<span class="pbmit-team-designation">Neuro-Ophthalmologist</span>	
										</div>
										<div class="pbmit-short-description">
											We combine professional eye care with the latest fashion trends in eyewear. Our experienced optometrists and friendly staff are dedicated to helping you vision and find eyewear that suits your style and budget.<br><br>Routine eye exams are essential for maintaining clear vision & detecting early signs of eye conditions. Our optometrists advanced diagnostic equipment to assess your vision and eye health. We offer specialized eye exams for children to catch and treat vision issues early.									
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="pbmit-team-social-wrap">
													<ul class="pbmit-social-links pbmit-team-social-links">
														<li class="pbmit-social-li pbmit-social-facebook">
															<a href="https://www.facebook.com/" title="Facebook" target="_blank">
																<span><i class="pbmit-base-icon-facebook-logo"></i></span>
															</a>
														</li>
														<li class="pbmit-social-li pbmit-social-twitter">
															<a href="https://www.twitter.com/" title="Twitter" target="_blank">
																<span><i class="pbmit-base-icon-twitter-2"></i></span>
															</a>
														</li>
														<li class="pbmit-social-li pbmit-social-linkedin">
															<a href="https://www.linkedin.com/" title="LinkedIn" target="_blank">
																<span><i class="pbmit-base-icon-linkedin-logo"></i></span>
															</a>
														</li>
														<li class="pbmit-social-li pbmit-social-instagram">
															<a href="https://www.instagram.com/" title="Instagram" target="_blank">
																<span><i class="pbmit-base-icon-instagram"></i></span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="pbmit-team-author-signature">
													<div class="pbmit-team-signature-img">
														<img src="{{ asset(\'frontend/images/team/team-signature.png\') }}" alt="Dr. Mike Davis">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 full-width-1200">
								<div class="pbmit-team-info-left">
									<div class="pbmit-info-teammember-content">
										<h4 class="mb-3">Personal Information</h4>
										<ul class="pbmit-team-info-content pbmit-single-team-info">
											<li><span>Phone Number :</span> + (123) 1800-567-8990</li>
											<li><span>Email Address :</span> <a href="mailto:admin@example.com">admin@example.com </a></li>
											<li><span>Location :</span> Los Angele German, 1230 Bariasl</li>
											<li><span>Nationality :</span> German</li>
											<li><span>Language :</span> French/English</li>
											<li><span>Speciality :</span> Orthoptist &amp; Vision Therapist</li>
										</ul>
									</div>
									<div class="pbmit-entry-content">
										<div class="pbmit-custom-heading animation-style3">
											<h4 class="pbmit-title">Professional skills</h4>
										</div>
										<p>A skilled eye doctor combines precision, patience, a deep understanding of ocular health. From diagnosing common vision issues to managing complex eye diseases, a professional ophthalmologist brings years of clinical training and surgical experience, strong communication skills, and exceptional attention to detail.</p>
										<div class="progressbar-area">
											<div class="progressbar">
												<span class="progress-label">Microsurgical procedures</span>
												<div class="progress progress-lg progress-percent-bg">
													<div class="progress-bar aos-init" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"></div>
													<span class="progress-percent">80%</span>
												</div>
											</div>
											<div class="progressbar">
												<span class="progress-label">Comprehensive eye examination</span>
												<div class="progress progress-lg progress-percent-bg">
													<div class="progress-bar aos-init" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%"></div>
													<span class="progress-percent">85%</span>
												</div>
											</div>
											<div class="progressbar">
												<span class="progress-label">Diagnosis of  eye conditions</span>
												<div class="progress progress-lg progress-percent-bg">
													<div class="progress-bar aos-init" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width:63%"></div>
													<span class="progress-percent">63%</span>
												</div>
											</div>
											<div class="progressbar">
												<span class="progress-label">Laser treatment expertise</span>
												<div class="progress progress-lg progress-percent-bg">
													<div class="progress-bar aos-init" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100" style="width:53%"></div>
													<span class="progress-percent">53%</span>
												</div>
											</div>
										</div>
										<p class="pbmit-desc">We have been delivering trusted eye care and surgical excellence for <span class="pbmit-global-color">over 10 years,</span> with deep expertise in advanced procedures.</p>
										<div class="row pbminfotech-gap-25px">
											<div class="pbmit-miconheading-style-16 col-md-12">
												<div class="pbmit-ihbox-style-16">
													<div class="pbmit-ihbox-box">
														<div class="pbmit-text-content">
															<span class="pbmit-ihbox-icon-type-text">1</span>		
															<div class="pbmit-text-content-wrapper">
																<span class="pbmit-element-title">Medical school</span>			
																<span class="pbmit-heading-desc">was completed with a rigorous focus on ophthalmic sciences, building a strong foundation in eye anatomy, disease mechanisms, and patient care.</span>		
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
																<span class="pbmit-element-title">Research in reproductive medicine</span>			
																<span class="pbmit-heading-desc">was conducted during early clinical training, offering hands-on experience in  patient interaction and academic projects.</span>		
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
																<span class="pbmit-element-title">Master / residency in oculoplastics</span>			
																<span class="pbmit-heading-desc">provided in-depth surgical training in eyelid reconstruction,  orbital surgeries, and tear duct procedures delivered with precision, and advanced technique.</span>		
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="ihbox-style-15-area">
											<div class="pbmit-custom-heading pb-xl-3 animation-style3">
												<h4 class="pbmit-title">Award and honors</h4>
											</div>
											<article class="pbmit-miconheading-style-15">
												<div class="pbmit-ihbox pbmit-ihbox-style-15">
													<div class="pbmit-ihbox-box">
														<h2 class="pbmit-element-title">
															2022 : Excellence in ophthalmic care award
														</h2>
														<div class="pbmit-heading-desc">Recognized for outstanding dedication to patient-centered eye care and clinical excellence in diagnostics and treatment.
															Presented by the National Ophthalmology Council during Annual Conference.
														</div>
													</div>
												</div>
											</article>
											<article class="pbmit-miconheading-style-15">
												<div class="pbmit-ihbox pbmit-ihbox-style-15">
													<div class="pbmit-ihbox-box">
														<h2 class="pbmit-element-title">
															2022 : Excellence in ophthalmic care award
														</h2>
														<div class="pbmit-heading-desc">Recognized for outstanding dedication to patient-centered eye care and clinical excellence in diagnostics and treatment.
															Presented by the National Ophthalmology Council during Annual Conference.
														</div>
													</div>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 right-col full-width-1200">
								<div class="testimonial-area pbmit-bg-color-secondary">
									<div class="swiper-slider" data-autoplay="true" data-loop="true" data-allow-touch="true"  data-dots="false" data-arrows="false" data-columns="1" data-margin="30" data-effect="slide">				
										<div class="swiper-wrapper">
										<!-- Slide1 -->
										<article class="pbmit-testimonial-style-1 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-featured-img-wrapper">
													<div class="pbmit-featured-wrapper">
														<img src="{{ asset(\'frontend/images/demo-2/testimonial/testimonial-img-01.jpg\') }}" class="img-fluid" alt="">
													</div>
												</div>
												<div class="pbminfotech-box-desc">
													<blockquote class="pbminfotech-testimonial-text">
														<p>&#8220;I love this eye hospital—not only did they offer the care and attention I needed, but the range of advanced treatments and personal service was outstanding. Absolutely worth it. I highly recommend them to anyone looking for expert eye care with a compassionate touch.&#8221;</p>
													</blockquote>
												</div>
												<div class="pbminfotech-box-author">
													<div class="pbmit-auther-title-wrapper">
														<h3 class="pbminfotech-box-title">Naomi Violet</h3>
														<div class="pbminfotech-box-star-ratings">
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
														</div>
													</div>
													<div class="pbminfotech-testimonial-detail">President, southern behavioural services</div>
												</div>
											</div>
										</article>
										<!-- Slide2 -->
										<article class="pbmit-testimonial-style-1 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-featured-img-wrapper">
													<div class="pbmit-featured-wrapper">
														<img src="{{ asset(\'frontend/images/demo-2/testimonial/testimonial-img-02.jpg\') }}" class="img-fluid" alt="">
													</div>
												</div>
												<div class="pbminfotech-box-desc">
													<blockquote class="pbminfotech-testimonial-text">
														<p>“I had an incredible experience here. From front desk to the surgeons, everything was smooth and professional. The technology they use is top-notch, and care I received was beyond my expectations. The staff truly care about your comfort, and always care for you.”</p>
													</blockquote>
												</div>
												<div class="pbminfotech-box-author">
													<div class="pbmit-auther-title-wrapper">
														<h3 class="pbminfotech-box-title">Alex Zander</h3>
														<div class="pbminfotech-box-star-ratings">
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
														</div>
													</div>
													<div class="pbminfotech-testimonial-detail">General manager of taj skyline</div>
												</div>
											</div>
										</article>
										<!-- Slide3 -->
										<article class="pbmit-testimonial-style-1 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-featured-img-wrapper">
													<div class="pbmit-featured-wrapper">
														<img src="{{ asset(\'frontend/images/demo-2/testimonial/testimonial-img-03.jpg\') }}" class="img-fluid" alt="">
													</div>
												</div>
												<div class="pbminfotech-box-desc">
													<blockquote class="pbminfotech-testimonial-text">
														<p>“This hospital has everything I needed—from thorough exams to laser treatment—under one roof. The team explained every step, and the entire process was stress-free. They made a scary process feel completely manageable. I’ve never felt so confident in my vision care.”</p>
													</blockquote>
												</div>
												<div class="pbminfotech-box-author">
													<div class="pbmit-auther-title-wrapper">
														<h3 class="pbminfotech-box-title">Adeline Wood</h3>
														<div class="pbminfotech-box-star-ratings">
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
														</div>
													</div>
													<div class="pbminfotech-testimonial-detail">Working as a assistant professor</div>
												</div>
											</div>
										</article>
										<!-- Slide4 -->
										<article class="pbmit-testimonial-style-1 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-featured-img-wrapper">
													<div class="pbmit-featured-wrapper">
														<img src="{{ asset(\'frontend/images/demo-2/testimonial/testimonial-img-04.jpg\') }}" class="img-fluid" alt="">
													</div>
												</div>
												<div class="pbminfotech-box-desc">
													<blockquote class="pbminfotech-testimonial-text">
														<p>“I was nervous before my cataract surgery, but the doctors here made me feel completely at ease. The results were life-changing & follow-up care was just as excellent as the procedure itself. They were patient, kind, and incredibly skilled. I feel like I have a new pair of eyes!”</p>
													</blockquote>
												</div>
												<div class="pbminfotech-box-author">
													<div class="pbmit-auther-title-wrapper">
														<h3 class="pbminfotech-box-title">Anna Briggs</h3>
														<div class="pbminfotech-box-star-ratings">
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
														</div>
													</div>
													<div class="pbminfotech-testimonial-detail">Adviser of constituent assembly</div>
												</div>
											</div>
										</article>
										<!-- Slide5 -->
										<article class="pbmit-testimonial-style-1 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-featured-img-wrapper">
													<div class="pbmit-featured-wrapper">
														<img src="{{ asset(\'frontend/images/demo-2/testimonial/testimonial-img-05.jpg\') }}" class="img-fluid" alt="">
													</div>
												</div>
												<div class="pbminfotech-box-desc">
													<blockquote class="pbminfotech-testimonial-text">
														<p>“Outstanding care and a wonderful team! I came in for a second opinion and stayed for treatment. They truly listen and offer solutions that are tailored to your individual vision needs. Their attention to detail and empathy stood out. I trust them fully with my eye health”</p>
													</blockquote>
												</div>
												<div class="pbminfotech-box-author">
													<div class="pbmit-auther-title-wrapper">
														<h3 class="pbminfotech-box-title">Martin Bailey</h3>
														<div class="pbminfotech-box-star-ratings">
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star"></i>
														</div>
													</div>
													<div class="pbminfotech-testimonial-detail">Founder & CEO of Ophtical fiber</div>
												</div>
											</div>
										</article>
										<!-- Slide6 -->
										<article class="pbmit-testimonial-style-1 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-featured-img-wrapper">
													<div class="pbmit-featured-wrapper">
														<img src="{{ asset(\'frontend/images/demo-2/testimonial/testimonial-img-06.jpg\') }}" class="img-fluid" alt="">
													</div>
												</div>
												<div class="pbminfotech-box-desc">
													<blockquote class="pbminfotech-testimonial-text">
														<p>“I couldn’t be more impressed. The staff is friendly, the doctors are incredibly knowledgeable, and the clinic is modern and well-equipped. I received treatment that exceeded my expectations. They made me feel welcome from day one. I’m grateful to doctors and staff.”</p>
													</blockquote>
												</div>
												<div class="pbminfotech-box-author">
													<div class="pbmit-auther-title-wrapper">
														<h3 class="pbminfotech-box-title">Hazel Jenkins</h3>
														<div class="pbminfotech-box-star-ratings">
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
															<i class="pbmit-base-icon-pointed-star pbmit-active"></i>
														</div>
													</div>
													<div class="pbminfotech-testimonial-detail">Security supervisor in the UK</div>
												</div>
											</div>
										</article>
										</div>
									</div>
								</div>
								<div class="pbmit-bg-color-light form-area">
									<div class="pbmit-custom-heading animation-style3">
										<h5 class="pbmit-title">How can we help you?</h5>
									</div>
									<form class="contact-form" method="post" id="contact-form" action="send.php">
										<div class="row">
											<div class="col-md-12">
												<input type="text" class="form-control" placeholder="Full Name *" name="name" required>
											</div>
											<div class="col-md-12">
												<input type="tel" class="form-control" placeholder="Phone Number *" name="phone" required>
											</div>
											<div class="col-md-12">
												<textarea cols="40" rows="10" placeholder="Comment*" class="form-control" name="message" required></textarea>
											</div>
											<div class="col-md-12 text-center">
												<button class="pbmit-btn secondary">
													<span class="pbmit-button-content-wrapper">
														<span class="pbmit-button-text-wrap">
															<span class="pbmit-button-text" data-text="Send Message">
																<span>Send Message</span>
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
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Doctor Detail end -->

		</div>
		<!-- Page Content End -->
@endsection
