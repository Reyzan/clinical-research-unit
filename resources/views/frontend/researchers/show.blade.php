@extends('layouts.frontend')

@php
    $name  = $researcher->name;
    $title = $researcher->title;
    $bio   = $researcher->bio ?? '';
    $photo = $researcher->photo_url;
    $group = $researcher->researchGroup;
@endphp

@section('title', $name . ' - ' . $title)

@section('meta_description', \Illuminate\Support\Str::limit($name . ' — ' . $title . '. ' . strip_tags($bio), 160))

@section('og_title', $name . ' - ' . $title . ' | Clinical Research Unit RSCM')

@section('og_description', \Illuminate\Support\Str::limit(strip_tags($bio), 200))

@section('og_image', $photo)

@section('og_type', 'profile')

@section('canonical_url', route('researchers.show', $slug))

@section('content')
<x-frontend.page-title
    :title="$name"
    :breadcrumbs="[['title' => 'Our Teams', 'url' => route('teams.index')], ['title' => $name]]"
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
												<img src="{{ $photo }}" class="img-fluid" alt="{{ $name }}">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6 pbmit-team-detail">
									<div class="pbmit-team-des">
										<div class="pbmit-team-summary">
											<h2 class="pbmit-team-title">{{ $name }}</h2>
											<span class="pbmit-team-designation">{{ $title }}</span>
											@if($group)
												<br><span class="pbmit-team-subtitle text-muted">{{ $group->name }} Research Group</span>
											@endif
										</div>
										<div class="pbmit-short-description">
											{!! nl2br(e($bio)) !!}
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 full-width-1200">
								<div class="pbmit-team-info-left">
									@if($researcher->email || $group || $researcher->google_scholar_url || $researcher->linkedin_url || $researcher->orcid_url)
									<div class="pbmit-info-teammember-content">
										<h4 class="mb-3">Personal Information</h4>
										<ul class="pbmit-team-info-content pbmit-single-team-info">
											@if($researcher->email)
												<li><span>Email Address :</span> <a href="mailto:{{ $researcher->email }}">{{ $researcher->email }}</a></li>
											@endif
											@if($group)
												<li><span>Research Group :</span> <a href="{{ route('research-groups.show', $group->slug) }}">{{ $group->name }}</a></li>
											@endif
											@if($researcher->google_scholar_url)
												<li><span>Google Scholar :</span> <a href="{{ $researcher->google_scholar_url }}" target="_blank" rel="noopener">View Profile</a></li>
											@endif
											@if($researcher->linkedin_url)
												<li><span>LinkedIn :</span> <a href="{{ $researcher->linkedin_url }}" target="_blank" rel="noopener">View Profile</a></li>
											@endif
											@if($researcher->orcid_url)
												<li><span>ORCID :</span> <a href="{{ $researcher->orcid_url }}" target="_blank" rel="noopener">View Profile</a></li>
											@endif
										</ul>
									</div>
									@endif
									@if(!empty($researcher->education))
									<div class="ihbox-style-15-area">
										<div class="pbmit-custom-heading animation-style3">
											<h4 class="pbmit-title">Education</h4>
										</div>
										<div class="row pbminfotech-gap-25px">
											@foreach($researcher->education as $index => $edu)
											<div class="pbmit-miconheading-style-16 col-md-12">
												<div class="pbmit-ihbox-style-16">
													<div class="pbmit-ihbox-box">
														<div class="pbmit-text-content">
															<span class="pbmit-ihbox-icon-type-text">{{ $index + 1 }}</span>
															<div class="pbmit-text-content-wrapper">
																<span class="pbmit-element-title">{{ $edu['degree'] ?? '' }}</span>
																<span class="pbmit-heading-desc">
																	<strong>{{ $edu['institution'] ?? '' }}</strong><br>
																	<em>{{ $edu['period'] ?? '' }}</em>
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

										@if(!empty($researcher->publications))
										<div class="ihbox-style-15-area mt-4">
											<div class="pbmit-custom-heading pb-xl-3 animation-style3">
												<h4 class="pbmit-title">Publications & Books</h4>
											</div>
											@php
												$currentPage = request()->get('page', 1);
												$perPage = 10;
												$totalPublications = count($researcher->publications);
												$totalPages = ceil($totalPublications / $perPage);
												$offset = ($currentPage - 1) * $perPage;
												$paginatedPublications = array_slice($researcher->publications, $offset, $perPage);
											@endphp

											@foreach($paginatedPublications as $pub)
											<article class="pbmit-miconheading-style-15">
												<div class="pbmit-ihbox pbmit-ihbox-style-15">
													<div class="pbmit-ihbox-box">
														<h2 class="pbmit-element-title" style="font-size: 16px;">
															{{ $pub['title'] ?? '' }}
														</h2>
														<div class="pbmit-heading-desc">
															<em>{{ $pub['journal'] ?? '' }}</em>@if(!empty($pub['year'])) ({{ $pub['year'] }})@endif
															@if(!empty($pub['doi']))
																<br>DOI: <a href="https://doi.org/{{ $pub['doi'] }}" target="_blank" rel="noopener">{{ $pub['doi'] }}</a>
															@endif
															@if(!empty($pub['pmid']))
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
															<a class="page-link" href="{{ route('researchers.show', ['researcher' => $slug, 'page' => $currentPage - 1]) }}" aria-label="Previous">
																<span aria-hidden="true">&laquo;</span>
															</a>
														</li>
														@endif

														@for($i = 1; $i <= $totalPages; $i++)
														<li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
															<a class="page-link" href="{{ route('researchers.show', ['researcher' => $slug, 'page' => $i]) }}">{{ $i }}</a>
														</li>
														@endfor

														@if($currentPage < $totalPages)
														<li class="page-item">
															<a class="page-link" href="{{ route('researchers.show', ['researcher' => $slug, 'page' => $currentPage + 1]) }}" aria-label="Next">
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

											@include('frontend.teams.partials.meet-the-team', [
												'unitDescription' => $researcher->unit_description,
												'staff' => $researcher->teamMembers,
											])
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
