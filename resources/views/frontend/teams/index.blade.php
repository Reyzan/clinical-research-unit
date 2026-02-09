@extends('layouts.frontend')

@section('title', 'Our Teams')

@section('meta_description', 'Meet the expert research team at Clinical Research Unit RSCM. Our multidisciplinary scientists, geneticists, and clinicians lead Indonesia\'s precision medicine and genomic research initiatives with over 15 years combined expertise.')

@section('meta_keywords', 'CRU research team, genomic research scientists, precision medicine experts, clinical research team Indonesia, genetic counselor, biobank specialists, RSCM researchers, metabolic disease experts')

@section('og_title', 'Expert Research Team - Clinical Research Unit RSCM')

@section('og_description', 'Meet the multidisciplinary experts driving precision medicine research in Indonesia. Our team combines clinical excellence with cutting-edge genomic science.')

@section('og_image', asset('frontend/images/og/team-og.png'))

@section('canonical_url', route('teams.index'))

@section('content')
<x-frontend.page-title
    title="Our Teams"
    :breadcrumbs="[['title' => 'Our Teams']]"
/>

<!-- Page Content -->
        <div class="page-content">

			<!-- Our Team Start -->
			<section class="section-md">
				<div class="container">
					<!-- Row 1: Leadership - Kepala Instalasi & 3 Kepala Sub Instalasi -->
					<div class="row pbmit-element-posts-wrapper mb-4">
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/dr-dicky-l-tahapary-sppd-kemd-phd.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('teams.show', 'dr-dicky-l-tahapary-sppd-kemd-phd') }}" title="Go to Dr. Dicky L. Tahapary, SpPD-KEMD, PhD"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('teams.show', 'dr-dicky-l-tahapary-sppd-kemd-phd') }}">Dr. Dicky L. Tahapary, SpPD-KEMD, PhD</a>
										</h3>
										<div class="pbminfotech-box-team-position">Head of Clinical Research Unit</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/dr-robert-sinto-sppd-kpti.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('teams.show', 'dr-robert-sinto-sppd-kpti') }}" title="Go to Dr. Robert Sinto, SpPD, K-PTI, DPhil"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('teams.show', 'dr-robert-sinto-sppd-kpti') }}">Dr. Robert Sinto, SpPD, K-PTI, DPhil</a>
										</h3>
										<div class="pbminfotech-box-team-position">Head of Clinical Research Planning Sub-Unit</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/dr-nina-dwi-putri-spasubsiptk-msc.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('teams.show', 'dr-nina-dwi-putri-spasubsiptk-msc') }}" title="Go to Dr. Nina Dwi Putri, SpA.SubspIPT(K), MSc"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('teams.show', 'dr-nina-dwi-putri-spasubsiptk-msc') }}">Dr. Nina Dwi Putri, SpA.SubspIPT(K), MSc</a>
										</h3>
										<div class="pbminfotech-box-team-position">Head of Clinical Research Implementation Sub-Unit</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/dr-selvi-nafisa-shahab-spmk.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('teams.show', 'dr-selvi-nafisa-shahab-spmk') }}" title="Go to Dr. Selvi Nafisa Shahab, Sp.MK"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('teams.show', 'dr-selvi-nafisa-shahab-spmk') }}">Dr. Selvi Nafisa Shahab, Sp.MK</a>
										</h3>
										<div class="pbminfotech-box-team-position">Head of Genomic Laboratory</div>
									</div>
								</div>
							</div>
						</article>
					</div>

					<!-- Row 2: Unit Heads & Senior Positions -->
					<div class="row pbmit-element-posts-wrapper mb-4">
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/dr-ahmad-yanuar-safri-sps-kenk.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('teams.show', 'dr-ahmad-yanuar-safri-sps-kenk') }}" title="Go to Dr. Ahmad Yanuar Safri, SpS(K)-ENK"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('teams.show', 'dr-ahmad-yanuar-safri-sps-kenk') }}">Dr. Ahmad Yanuar Safri, SpS(K)-ENK</a>
										</h3>
										<div class="pbminfotech-box-team-position">Head of Research Policy and Administration Sub-Unit</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/siti-rizny-fitriana-saldi-apt-msc.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('teams.show', 'siti-rizny-fitriana-saldi-apt-msc') }}" title="Go to Siti Rizny Fitriana Saldi, Apt, MSc"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('teams.show', 'siti-rizny-fitriana-saldi-apt-msc') }}">Siti Rizny Fitriana Saldi, Apt, MSc</a>
										</h3>
										<div class="pbminfotech-box-team-position">Head of Epidemiology and Evidence-Based Medicine Sub-Unit</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/dr-widya-eka-nugraha-msimed.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('teams.show', 'dr-widya-eka-nugraha-msimed') }}" title="Go to Dr. Widya Eka Nugraha, M.Si.Med"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('teams.show', 'dr-widya-eka-nugraha-msimed') }}">Dr. Widya Eka Nugraha, M.Si.Med</a>
										</h3>
										<div class="pbminfotech-box-team-position">Genetic Counselor</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/dr-ardy-wildan-sppd-kemd.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="{{ route('teams.show', 'dr-ardy-wildan-sppd-kemd') }}" title="Go to Dr. Ardy Wildan, SpPD-KEMD"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ route('teams.show', 'dr-ardy-wildan-sppd-kemd') }}">Dr. Ardy Wildan, SpPD-KEMD</a>
										</h3>
										<div class="pbminfotech-box-team-position">Co-Principal Investigator</div>
									</div>
								</div>
							</div>
						</article>
					</div>

					<!-- Row 3: Staff Members -->
					<div class="row pbmit-element-posts-wrapper mb-4">
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/dr-ekvan-danang.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="javascript:void(0);" title="Go to dr. Ekvan Danang"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="javascript:void(0);">dr. Ekvan Danang</a>
										</h3>
										<div class="pbminfotech-box-team-position">Asisten Penelitian</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/dr-dyahati-wahyurini-mbiomed.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="javascript:void(0);" title="Go to dr. Dyahati Wahyurini, M.Biomed"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="javascript:void(0);">dr. Dyahati Wahyurini, M.Biomed</a>
										</h3>
										<div class="pbminfotech-box-team-position">Staff CRU</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/apt-ramiza-jihan-sfarm.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="javascript:void(0);" title="Go to Apt. Ramiza Jihan, S.Farm"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="javascript:void(0);">Apt. Ramiza Jihan, S.Farm</a>
										</h3>
										<div class="pbminfotech-box-team-position">Staff CRU</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/fadhli-arif-budiman-skom.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="javascript:void(0);" title="Go to Fadhli Arif Budiman, S.Kom."></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="javascript:void(0);">Fadhli Arif Budiman, S.Kom.</a>
										</h3>
										<div class="pbminfotech-box-team-position">Staff CRU</div>
									</div>
								</div>
							</div>
						</article>
					</div>

					<!-- Row 4: Staff Members -->
					<div class="row pbmit-element-posts-wrapper">
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/mentari-kasih-ssi-msi.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="javascript:void(0);" title="Go to Mentari Kasih, S.Si, M.Si"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="javascript:void(0);">Mentari Kasih, S.Si, M.Si</a>
										</h3>
										<div class="pbminfotech-box-team-position">Staff CRU</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/harfi-maulana-ssi-msi.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="javascript:void(0);" title="Go to Harfi Maulana, S.Si, M.Si"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="javascript:void(0);">Harfi Maulana, S.Si, M.Si</a>
										</h3>
										<div class="pbminfotech-box-team-position">Staff CRU</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/nabilla-zeinia-sudrajat-amdkes.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="javascript:void(0);" title="Go to Nabilla Zeinia Sudrajat A.Md.Kes."></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="javascript:void(0);">Nabilla Zeinia Sudrajat A.Md.Kes.</a>
										</h3>
										<div class="pbminfotech-box-team-position">Staff CRU</div>
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('frontend/images/team/shahnaz-mutia-dewi-amdkes.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-link" href="javascript:void(0);" title="Go to Shahnaz Mutia Dewi, A.Md.Kes."></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="javascript:void(0);">Shahnaz Mutia Dewi, A.Md.Kes.</a>
										</h3>
										<div class="pbminfotech-box-team-position">Staff CRU</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section>
			<!-- Our Team End -->

        </div>
        <!-- Page Content End -->
@endsection
