@extends('layouts.frontend')

@section('title', 'Our Doctors')

@section('content')
<x-frontend.page-title
    title="Our Doctors"
    :breadcrumbs="[['title' => 'Our Doctors']]"
/>

<!-- Page Content -->
        <div class="page-content"> 

			<!-- Our Doctor Start --> 
			<section class="section-md">
				<div class="container">
					<div class="row pbmit-element-posts-wrapper">
						<article class="pbmit-team-style-1 col-md-6 col-lg-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset(\'frontend/images/team/team-01.jpg\') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('doctors.show', 'doctor-slug') }}" title="Go to Dr. Jane Smith"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('doctors.show', 'doctor-slug') }}">Dr. Jane Smith</a>
										</h3>
										<div class="pbminfotech-box-team-position">Orthoptist</div>
									</div>
									<div class="pbmit-short-description">
										We combine professional eye care with the latest fashion trends in eyewear. Our experienced optometrists and friendly staff are dedicated to helping you vision and find eyewear that suits your style and budget.
										<br>
										<br>
										Routine eye exams are essential for maintaining clear vision & detecting early signs of eye conditions. Our optometrists advanced diagnostic equipment to assess your vision and eye health. We offer specialized eye exams for children to catch and treat vision issues early.			
									</div>
									<div class="pbmit-team-social-links">
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
											<li class="pbmit-social-li pbmit-social-instagram">
												<a href="https://www.instagram.com/" title="Instagram" target="_blank">
													<span><i class="pbmit-base-icon-instagram"></i></span>
												</a>
											</li>
											<li class="pbmit-social-li pbmit-social-youtube">
												<a href="https://www.youtube.com/" title="Youtube" target="_blank">
													<span><i class="pbmit-base-icon-youtube-play"></i></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset(\'frontend/images/team/team-02.jpg\') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('doctors.show', 'doctor-slug') }}" title="Go to Dr. Mike Davis"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('doctors.show', 'doctor-slug') }}">Dr. Mike Davis</a>
										</h3>
										<div class="pbminfotech-box-team-position">Neuro-Ophthalmologist</div>
									</div>
									<div class="pbmit-short-description">
										We combine professional eye care with the latest fashion trends in eyewear. Our experienced optometrists and friendly staff are dedicated to helping you vision and find eyewear that suits your style and budget.
										<br>
										<br>
										Routine eye exams are essential for maintaining clear vision & detecting early signs of eye conditions. Our optometrists advanced diagnostic equipment to assess your vision and eye health. We offer specialized eye exams for children to catch and treat vision issues early.			
									</div>
									<div class="pbmit-team-social-links">
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
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset(\'frontend/images/team/team-03.jpg\') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('doctors.show', 'doctor-slug') }}" title="Go to Dr. Jamie Oliver"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('doctors.show', 'doctor-slug') }}">Dr. Jamie Oliver</a>
										</h3>
										<div class="pbminfotech-box-team-position">Orthoptist</div>
									</div>
									<div class="pbmit-short-description">
										We combine professional eye care with the latest fashion trends in eyewear. Our experienced optometrists and friendly staff are dedicated to helping you vision and find eyewear that suits your style and budget.
										<br>
										<br>
										Routine eye exams are essential for maintaining clear vision & detecting early signs of eye conditions. Our optometrists advanced diagnostic equipment to assess your vision and eye health. We offer specialized eye exams for children to catch and treat vision issues early.			
									</div>
									<div class="pbmit-team-social-links">
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
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset(\'frontend/images/team/team-04.jpg\') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('doctors.show', 'doctor-slug') }}" title="Go to Dr. Clare Smyth"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('doctors.show', 'doctor-slug') }}">Dr. Clare Smyth</a>
										</h3>
										<div class="pbminfotech-box-team-position">Optometrist</div>
									</div>
									<div class="pbmit-short-description">
										We combine professional eye care with the latest fashion trends in eyewear. Our experienced optometrists and friendly staff are dedicated to helping you vision and find eyewear that suits your style and budget.
										<br>
										<br>
										Routine eye exams are essential for maintaining clear vision & detecting early signs of eye conditions. Our optometrists advanced diagnostic equipment to assess your vision and eye health. We offer specialized eye exams for children to catch and treat vision issues early.			
									</div>
									<div class="pbmit-team-social-links">
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
											<li class="pbmit-social-li pbmit-social-youtube">
												<a href="https://www.youtube.com/" title="Youtube" target="_blank">
													<span><i class="pbmit-base-icon-youtube-play"></i></span>
												</a>
											</li>
											<li class="pbmit-social-li pbmit-social-whatsapp">
												<a href="https://www.whatsapp.com/" title="Whatsapp" target="_blank">
													<span><i class="pbmit-base-icon-whatsapp"></i></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset(\'frontend/images/team/team-05.jpg\') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('doctors.show', 'doctor-slug') }}" title="Go to Dr. John Harris"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('doctors.show', 'doctor-slug') }}">Dr. John Harris</a>
										</h3>
										<div class="pbminfotech-box-team-position">Ophthalmologist</div>
									</div>
									<div class="pbmit-short-description">
										We combine professional eye care with the latest fashion trends in eyewear. Our experienced optometrists and friendly staff are dedicated to helping you vision and find eyewear that suits your style and budget.
										<br>
										<br>
										Routine eye exams are essential for maintaining clear vision & detecting early signs of eye conditions. Our optometrists advanced diagnostic equipment to assess your vision and eye health. We offer specialized eye exams for children to catch and treat vision issues early.			
									</div>
									<div class="pbmit-team-social-links">
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
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset(\'frontend/images/team/team-06.jpg\') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('doctors.show', 'doctor-slug') }}" title="Go to Dr. Myles Evader"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('doctors.show', 'doctor-slug') }}">Dr. Myles Evader</a>
										</h3>
										<div class="pbminfotech-box-team-position">Ocular Surgeon</div>
									</div>
									<div class="pbmit-short-description">
										We combine professional eye care with the latest fashion trends in eyewear. Our experienced optometrists and friendly staff are dedicated to helping you vision and find eyewear that suits your style and budget.
										<br>
										<br>
										Routine eye exams are essential for maintaining clear vision & detecting early signs of eye conditions. Our optometrists advanced diagnostic equipment to assess your vision and eye health. We offer specialized eye exams for children to catch and treat vision issues early.			
									</div>
									<div class="pbmit-team-social-links">
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
											<li class="pbmit-social-li pbmit-social-youtube">
												<a href="https://www.youtube.com/" title="Youtube" target="_blank">
													<span><i class="pbmit-base-icon-youtube-play"></i></span>
												</a>
											</li>
											<li class="pbmit-social-li pbmit-social-pinterest">
												<a href="https://www.pinterest.com/" title="Pinterest" target="_blank">
													<span><i class="pbmit-base-icon-pinterest"></i></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section>
			<!-- Our Doctor End --> 

        </div>
        <!-- Page Content End -->
@endsection
