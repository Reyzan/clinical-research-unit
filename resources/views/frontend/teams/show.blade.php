@extends('layouts.frontend')

@php
    // Extract member data (will be passed from controller)
    $memberName = $member->name ?? 'Team Member';
    $memberTitle = $member->title ?? 'Researcher';
    $memberBio = $member->bio ?? 'Expert researcher at Clinical Research Unit RSCM';
    $memberImage = $member->image_url;
@endphp

@section('title', $memberName . ' - ' . $memberTitle)

@section('meta_description', 'Learn about ' . $memberName . ', ' . $memberTitle . ' at Clinical Research Unit RSCM. ' . \Illuminate\Support\Str::limit($memberBio, 120))

@section('meta_keywords', $memberName . ', ' . $memberTitle . ', CRU RSCM researcher, genomic research expert, precision medicine specialist, clinical research Indonesia')

@section('og_title', $memberName . ' - ' . $memberTitle . ' | Clinical Research Unit RSCM')

@section('og_description', $memberBio)

@section('og_image', $memberImage)

@section('og_type', 'profile')

@section('canonical_url', route('teams.show', $slug))

@section('content')
<x-frontend.page-title
    :title="$memberName"
    :breadcrumbs="[['title' => $memberName]]"
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
												<img src="{{ $memberImage }}" class="img-fluid" alt="{{ $memberName }}">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6 pbmit-team-detail">
									<div class="pbmit-team-des">
										<div class="pbmit-team-summary">
											<h2 class="pbmit-team-title">{{ $memberName }}</h2>
											<span class="pbmit-team-designation">{{ $memberTitle }}</span>
											@if(isset($member->subtitle))
												<br><span class="pbmit-team-subtitle text-muted">{{ $member->subtitle }}</span>
											@endif
										</div>
										<div class="pbmit-short-description">
											{!! nl2br(e($memberBio)) !!}
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 full-width-1200">
								<div class="pbmit-team-info-left">
									@if($member->email || $member->location || $member->nationality || $member->languages || $member->speciality)
									<div class="pbmit-info-teammember-content">
										<h4 class="mb-3">Personal Information</h4>
										<ul class="pbmit-team-info-content pbmit-single-team-info">
											@if($member->email)
												<li><span>Email Address :</span> <a href="mailto:{{ $member->email }}">{{ $member->email }}</a></li>
											@endif
											@if($member->location)
												<li><span>Location :</span> {{ $member->location }}</li>
											@endif
											@if($member->nationality)
												<li><span>Nationality :</span> {{ $member->nationality }}</li>
											@endif
											@if($member->languages)
												<li><span>Languages :</span> {{ $member->languages }}</li>
											@endif
											@if($member->speciality)
												<li><span>Speciality :</span> {{ $member->speciality }}</li>
											@endif
										</ul>
									</div>
									@endif
									@if(isset($member->education) && count($member->education) > 0)
									<div class="pbmit-entry-content">
										<div class="pbmit-custom-heading animation-style3">
											<h4 class="pbmit-title">Education</h4>
										</div>
										<div class="row pbminfotech-gap-25px">
											@foreach($member->education as $index => $edu)
											<div class="pbmit-miconheading-style-16 col-md-12">
												<div class="pbmit-ihbox-style-16">
													<div class="pbmit-ihbox-box">
														<div class="pbmit-text-content">
															<span class="pbmit-ihbox-icon-type-text">{{ $index + 1 }}</span>
															<div class="pbmit-text-content-wrapper">
																<span class="pbmit-element-title">{{ $edu['degree'] }}</span>
																<span class="pbmit-heading-desc">
																	<strong>{{ $edu['institution'] }}</strong><br>
																	<em>{{ $edu['period'] }}</em>
																	@if(!empty($edu['description']))
																		<br>{{ $edu['description'] }}
																	@endif
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
									@endif
										@if(isset($member->experience) && count($member->experience) > 0)
										<div class="ihbox-style-15-area">
											<div class="pbmit-custom-heading pb-xl-3 animation-style3">
												<h4 class="pbmit-title">Experience</h4>
											</div>
											@foreach($member->experience as $exp)
											<article class="pbmit-miconheading-style-15">
												<div class="pbmit-ihbox pbmit-ihbox-style-15">
													<div class="pbmit-ihbox-box">
														<h2 class="pbmit-element-title">
															{{ $exp['position'] }}
														</h2>
														<div class="pbmit-heading-desc">
															<strong>{{ $exp['organization'] }}</strong><br>
															<em>{{ $exp['period'] }}</em>
															@if(!empty($exp['description']))
																<br>{{ $exp['description'] }}
															@endif
														</div>
													</div>
												</div>
											</article>
											@endforeach
										</div>
										@endif

										@if(isset($member->publications) && count($member->publications) > 0)
										<div class="ihbox-style-15-area mt-4">
											<div class="pbmit-custom-heading pb-xl-3 animation-style3">
												<h4 class="pbmit-title">Publications</h4>
											</div>
											@php
												$currentPage = request()->get('page', 1);
												$perPage = 10;
												$totalPublications = count($member->publications);
												$totalPages = ceil($totalPublications / $perPage);
												$offset = ($currentPage - 1) * $perPage;
												$paginatedPublications = array_slice($member->publications, $offset, $perPage);
											@endphp

											@foreach($paginatedPublications as $pub)
											<article class="pbmit-miconheading-style-15">
												<div class="pbmit-ihbox pbmit-ihbox-style-15">
													<div class="pbmit-ihbox-box">
														<h2 class="pbmit-element-title" style="font-size: 16px;">
															{{ $pub['title'] }}
														</h2>
														<div class="pbmit-heading-desc">
															<em>{{ $pub['journal'] }}</em> ({{ $pub['year'] }})
															@if(isset($pub['doi']))
																<br>DOI: <a href="https://doi.org/{{ $pub['doi'] }}" target="_blank" rel="noopener">{{ $pub['doi'] }}</a>
															@endif
															@if(isset($pub['pmid']))
																<br>PMID: <a href="https://pubmed.ncbi.nlm.nih.gov/{{ $pub['pmid'] }}/" target="_blank" rel="noopener">{{ $pub['pmid'] }}</a>
															@endif
														</div>
													</div>
												</div>
											</article>
											@endforeach

											@if($totalPages > 1)
											<div class="pagination-wrapper mt-4">
												<nav aria-label="Publications pagination">
													<ul class="pagination justify-content-center">
														@if($currentPage > 1)
														<li class="page-item">
															<a class="page-link" href="{{ route('teams.show', ['slug' => $slug, 'page' => $currentPage - 1]) }}" aria-label="Previous">
																<span aria-hidden="true">&laquo;</span>
															</a>
														</li>
														@endif

														@for($i = 1; $i <= $totalPages; $i++)
														<li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
															<a class="page-link" href="{{ route('teams.show', ['slug' => $slug, 'page' => $i]) }}">{{ $i }}</a>
														</li>
														@endfor

														@if($currentPage < $totalPages)
														<li class="page-item">
															<a class="page-link" href="{{ route('teams.show', ['slug' => $slug, 'page' => $currentPage + 1]) }}" aria-label="Next">
																<span aria-hidden="true">&raquo;</span>
															</a>
														</li>
														@endif
													</ul>
												</nav>
											</div>
											@endif
										</div>
										@endif
									</div>
								</div>
							<div class="col-md-4 right-col full-width-1200 sidebar">
								<aside class="service-sidebar">
									@if(isset($member->cv_file))
									<x-frontend.cv-download
										:memberName="$memberName"
										:cvFile="$member->cv_file"
									/>
								@endif
								</aside>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Doctor Detail end -->
		</div>
		<!-- Page Content End -->
@endsection
