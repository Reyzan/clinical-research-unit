@extends('layouts.frontend')

@section('title', 'FAQ')

@section('meta_description', 'Frequently asked questions about Clinical Research Unit RSCM services, biobank procedures, genomic testing, clinical trials, sample storage, and precision medicine research. Get answers to common inquiries.')

@section('meta_keywords', 'FAQ, biobank questions, clinical trial information, genomic testing FAQ, sample storage questions, precision medicine FAQ, research participation, genetic testing information')

@section('og_title', 'Frequently Asked Questions - Clinical Research Unit RSCM')

@section('og_description', 'Common questions about CRU RSCM\'s biobank services, genomic testing, clinical trials, and precision medicine research programs answered by our experts.')

@section('og_image', asset('frontend/images/og/faq-og.png'))

@section('canonical_url', route('faq'))

@section('content')
<x-frontend.page-title
    title="Faq"
    :breadcrumbs="[['title' => 'Faq']]"
/>

<!-- Page Content -->
        <div class="page-content">

            <!-- Faq Start -->
            <section class="section-xl">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-xl-3 pbmit-sticky-column">
							<div class="faq-sticky-heading">
								<h2 class="pbmit-title"><a href="#general">General Questions</a></h2>
								<h2 class="pbmit-title"><a href="#common">Common Query</a></h2>
								<h2 class="pbmit-title"><a href="#asked">Asked Query?</a></h2>
							</div>
						</div>
						<div class="col-md-12 col-xl-9">
							<div id="general" class="mb-5 pb-2">
								<div class="pbmit-heading-subheading animation-style3">
									<h4 class="pbmit-subtitle">Faq</h4>
									<h2 class="pbmit-title">General Questions</h2>
									<div class="pbmit-heading-desc">You will find answers to about our various Laboratory work and Lab's service and more. Please feel <br> free to contact us if you don't get your question's answer in below.</div>
								</div>
								<div class="accordion" id="accordionExample">
									<div class="accordion-item active">
										<h2 class="accordion-header" id="headingOne">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												<span class="pbmit-accordion-title">
													How often should I get my eyes checked? 
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
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
											data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<span class="pbmit-accordion-title">
													Do I need a referral to see an eye specialist? 
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
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" 
										data-bs-parent="#accordionExample">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<span class="pbmit-accordion-title">
													What are common signs of vision problems?
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
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" 
										data-bs-parent="#accordionExample">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>                         
									</div>   
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingfour">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
												<span class="pbmit-accordion-title">
													Are eye exams covered by insurance? 
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
										<div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" 
										data-bs-parent="#accordionExample">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>                         
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingfive">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
												<span class="pbmit-accordion-title">
													What should I bring to my appointment?
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
										<div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" 
										data-bs-parent="#accordionExample">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>                         
									</div>             
								</div>
							</div>
							<div id="common" class="mb-5 pb-2">
								<div class="pbmit-heading-subheading animation-style3">
									<h4 class="pbmit-subtitle">Query</h4>
									<h2 class="pbmit-title">Common Query</h2>
									<div class="pbmit-heading-desc">You will find answers to about our various Laboratory work and Lab's service and more. Please feel <br> free to contact us if you don't get your question's answer in below.</div>
								</div>
								<div class="accordion" id="accordionExample1">
									<div class="accordion-item active">
										<h2 class="accordion-header" id="heading1">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
												<span class="pbmit-accordion-title">
													Do you treat both adults and children? 
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
										<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample1">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="heading2">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
											data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
												<span class="pbmit-accordion-title">
													How often should I have my eyes examined?  
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
										<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" 
										data-bs-parent="#accordionExample1">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="heading3">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
												<span class="pbmit-accordion-title">
													Are eye exams covered by insurance?
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
										<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" 
										data-bs-parent="#accordionExample1">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>                         
									</div>   
									<div class="accordion-item">
										<h2 class="accordion-header" id="heading4">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
												<span class="pbmit-accordion-title">
													Is LASIK surgery available at your hospital? 
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
										<div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" 
										data-bs-parent="#accordionExample1">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>                         
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="heading5">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
												<span class="pbmit-accordion-title">
													What should I bring to my appointment?
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
										<div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" 
										data-bs-parent="#accordionExample1">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>                         
									</div>             
								</div>
							</div>
							<div id="asked">
								<div class="pbmit-heading-subheading animation-style3">
									<h4 class="pbmit-subtitle">Got A Query?</h4>
									<h2 class="pbmit-title">We’ve got a solution</h2>
									<div class="pbmit-heading-desc">You will find answers to about our various Laboratory work and Lab's service and more. Please feel <br> free to contact us if you don't get your question's answer in below.</div>
								</div>
								<div class="accordion" id="accordionExample2">
									<div class="accordion-item active">
										<h2 class="accordion-header" id="heading01">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
												<span class="pbmit-accordion-title">
													How often should I have my eyes examined?
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
										<div id="collapse01" class="accordion-collapse collapse show" aria-labelledby="heading01" data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="heading02">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
											data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
												<span class="pbmit-accordion-title">
													What are common signs of vision problems? 
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
										<div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02" 
										data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="heading03">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
												<span class="pbmit-accordion-title">
													What should I bring to my appointment?
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
										<div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03" 
										data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>                         
									</div>   
									<div class="accordion-item">
										<h2 class="accordion-header" id="heading04">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
												<span class="pbmit-accordion-title">
													Do you treat both adults and children?
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
										<div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04" 
										data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>                         
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="heading05">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
											data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
												<span class="pbmit-accordion-title">
													Are eye exams covered by insurance?
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
										<div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05" 
										data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												Our expert doctors, nurses and allied health professionals manage patients with a range of medical issues. Sun exposure can damage your eyes and raise.											
											</div>
										</div>                         
									</div>             
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- Faq End -->

			<!-- Awards Highlight Start --> 
            <section class="award-highlight-section px-5">
				<div class="container-fluid p-0">
					<div class="row g-0">
						<div class="col-md-12 col-xl-8">
							<div class="left-area pbmit-bg-color-light">
								<div class="row pbminfotech-gap-10px">
									<article class="pbmit-miconheading-style-3 col-md-6 col-lg-4">
										<div class="pbmit-ihbox-style-3">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
														<img src="{{ asset(\'frontend/images/demo-3/aword/aword-img-01.png\') }}" alt="">
													</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">
														Best vision hospital <br>in New-York
													</h2>
												</div>
											</div>
										</div>
									</article>
									<article class="pbmit-miconheading-style-3 col-md-6 col-lg-4">
										<div class="pbmit-ihbox-style-3">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
														<img src="{{ asset(\'frontend/images/demo-3/aword/aword-img-02.png\') }}" alt="">
													</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">
														Most trustworthy <br>award hospital
													</h2>
												</div>
											</div>
										</div>
									</article>
									<article class="pbmit-miconheading-style-3 col-md-6 col-lg-4">
										<div class="pbmit-ihbox-style-3">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
														<img src="{{ asset(\'frontend/images/demo-3/aword/aword-img-03.png\') }}" alt="">
													</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">
														Eye care provider <br>of the year
													</h2>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-4">
							<div class="right-area pbmit-bg-color-secondary">
								<div class="pbmit-custom-heading text-xl-end text-center animation-style3">
									<h2 class="pbmit-title"><span class="pbmit-global-color"> 10+</span> awards<br> winning opthical <br>care</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
            </section>
            <!-- Awards Highlight End -->

			<!-- Blog start -->
			<section class="section-xxl">
				<div class="container">
					<div class="pbmit-heading-subheading text-center animation-style3">
						<h4 class="pbmit-subtitle">Read Our Blog</h4>
						<h2 class="pbmit-title">Recently news & blogs</h2>
						<div class="pbmit-heading-desc">
							Read the latest news about medicos as well as medical news around the world.
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-5 col-xl-6 pbmit-blog-group-left">
							<article class="pbmit-blog-style-3">
								<div class="post-item">
									<div class="pbminfotech-box-content">
										<div class="pbmit-featured-container">
											<div class="pbmit-featured-container-inner">
												<div class="pbmit-meta-category-wrapper pbmit-meta-line">
													<span class="pbmit-meta-category">
														<a href="blog-classic.html" rel="category tag">Eye Treatment</a>
													</span>
												</div>
												<div class="pbmit-featured-img-wrapper">
													<div class="pbmit-featured-wrapper">
														<img src="{{ asset(\'frontend/images/demo-1/blog/blog-img-01.jpg\') }}" class="img-fluid" alt="">
													</div>
												</div>
												<a class="pbmit-link" href="blog-single-detail.html" title="Go to Children’s eye care: what parents need to know"></a>
											</div>
											<div class="pbmit-meta-wraper-inner">
												<div class="pbmit-meta-wraper">
													<div class="pbmit-meta-date-wrapper pbmit-meta-line">
														<span class="pbmit-meta-icon">
															<i class="pbmit-base-icon-calendar-silhouette"></i>
														</span>03 Thu 2025					
													</div>
													<div class="pbmit-meta-author pbmit-meta-line">
														<span class="pbmit-meta-icon">
															<i class="pbmit-base-icon-user-1"></i>
														</span>by 
														<span class="pbmit-post-author">
															<a href="blog-classic.html" title="Posted by ophticalpbm" rel="author">ophticalpbm</a>
														</span>
													</div>
												</div>
												<h3 class="pbmit-post-title">
													<a href="blog-single-detail.html">Children’s eye care: what parents need to know</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
						<div class="col-md-12 col-lg-7 col-xl-6 pbmit-blog-group-right">
							<div class="row">
								<article class="pbmit-blog-style-3 col-md-12">
									<div class="post-item">
										<div class="pbminfotech-box-content">
											<div class="pbmit-featured-container">
												<div class="pbmit-featured-container-inner">
													<div class="pbmit-meta-category-wrapper pbmit-meta-line">
														<span class="pbmit-meta-category">
															<a href="blog-classic.html" rel="category tag">Contact Lens</a>
														</span>
													</div>
													<div class="pbmit-featured-img-wrapper">
														<div class="pbmit-featured-wrapper">
															<img src="{{ asset(\'frontend/images/demo-1/blog/blog-img-02.jpg\') }}" class="img-fluid" alt="">
														</div>
													</div>
													<a class="pbmit-link" href="blog-single-detail.html" title="Go to Common signs you might need new glasses or contacts"></a>
												</div>
												<div class="pbmit-meta-wraper-inner">
													<div class="pbmit-meta-wraper">
														<div class="pbmit-meta-date-wrapper pbmit-meta-line">
															<span class="pbmit-meta-icon">
																<i class="pbmit-base-icon-calendar-silhouette"></i>
															</span>03 Thu 2025					
														</div>
														<div class="pbmit-meta-author pbmit-meta-line">
															<span class="pbmit-meta-icon">
																<i class="pbmit-base-icon-user-1"></i>
															</span>by 
															<span class="pbmit-post-author">
																<a href="blog-classic.html" title="Posted by ophticalpbm" rel="author">ophticalpbm</a>
															</span>
														</div>
													</div>
													<h3 class="pbmit-post-title">
														<a href="blog-single-detail.html">Common signs you might need new glasses or contacts</a>
													</h3>
												</div>
											</div>
										</div>
									</div>
								</article>
								<article class="pbmit-blog-style-3 col-md-12">
									<div class="post-item">
										<div class="pbminfotech-box-content">
											<div class="pbmit-featured-container">
												<div class="pbmit-featured-container-inner">
													<div class="pbmit-meta-category-wrapper pbmit-meta-line">
														<span class="pbmit-meta-category">
															<a href="blog-classic.html" rel="category tag">Insight</a>
														</span>
													</div>
													<div class="pbmit-featured-img-wrapper">
														<div class="pbmit-featured-wrapper">
															<img src="{{ asset(\'frontend/images/demo-1/blog/blog-img-03.jpg\') }}" class="img-fluid" alt="">
														</div>
													</div>
													<a class="pbmit-link" href="blog-single-detail.html" title="Go to Why children need annual eye exams more than adults?"></a>
												</div>
												<div class="pbmit-meta-wraper-inner">
													<div class="pbmit-meta-wraper">
														<div class="pbmit-meta-date-wrapper pbmit-meta-line">
															<span class="pbmit-meta-icon">
																<i class="pbmit-base-icon-calendar-silhouette"></i>
															</span>03 Thu 2025					
														</div>
														<div class="pbmit-meta-author pbmit-meta-line">
															<span class="pbmit-meta-icon">
																<i class="pbmit-base-icon-user-1"></i>
															</span>by 
															<span class="pbmit-post-author">
																<a href="blog-classic.html" title="Posted by ophticalpbm" rel="author">ophticalpbm</a>
															</span>
														</div>
													</div>
													<h3 class="pbmit-post-title">
														<a href="blog-single-detail.html">Why children need annual eye exams more than adults?</a>
													</h3>
												</div>
											</div>
										</div>
									</div>
								</article>
								<article class="pbmit-blog-style-3 col-md-12">
									<div class="post-item">
										<div class="pbminfotech-box-content">
											<div class="pbmit-featured-container">
												<div class="pbmit-featured-container-inner">
													<div class="pbmit-meta-category-wrapper pbmit-meta-line">
														<span class="pbmit-meta-category">
															<a href="blog-classic.html" rel="category tag">Glaucoma</a>
														</span>
													</div>
													<div class="pbmit-featured-img-wrapper">
														<div class="pbmit-featured-wrapper">
															<img src="{{ asset(\'frontend/images/demo-1/blog/blog-img-04.jpg\') }}" class="img-fluid" alt="">
														</div>
													</div>
													<a class="pbmit-link" href="blog-single-detail.html" title="Go to Best eye treatment options for common eye problems"></a>
												</div>
												<div class="pbmit-meta-wraper-inner">
													<div class="pbmit-meta-wraper">
														<div class="pbmit-meta-date-wrapper pbmit-meta-line">
															<span class="pbmit-meta-icon">
																<i class="pbmit-base-icon-calendar-silhouette"></i>
															</span>03 Thu 2025					
														</div>
														<div class="pbmit-meta-author pbmit-meta-line">
															<span class="pbmit-meta-icon">
																<i class="pbmit-base-icon-user-1"></i>
															</span>by 
															<span class="pbmit-post-author">
																<a href="blog-classic.html" title="Posted by ophticalpbm" rel="author">ophticalpbm</a>
															</span>
														</div>
													</div>
													<h3 class="pbmit-post-title">
														<a href="blog-single-detail.html">Best eye treatment options for common eye problems</a>
													</h3>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Blog End -->

        </div>
        <!-- Page Content End -->
@endsection
