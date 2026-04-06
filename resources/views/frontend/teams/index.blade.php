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
					<div class="row pbmit-element-posts-wrapper">
						@foreach($teamMembers as $member)
						@php $href = $member->slug ? route('teams.show', $member->slug) : 'javascript:void(0);' @endphp
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-inner">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ $member->image_url }}" class="img-fluid" alt="{{ $member->name }}">
										</div>
									</div>
									<a class="pbmit-link" href="{{ $href }}" title="Go to {{ $member->name }}"></a>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbmit-box-title-wrap">
										<h3 class="pbmit-team-title">
											<a href="{{ $href }}">{{ $member->name }}</a>
										</h3>
										<div class="pbminfotech-box-team-position">{{ $member->title }}</div>
									</div>
								</div>
							</div>
						</article>
						@endforeach
					</div>
				</div>
			</section>
			<!-- Our Team End -->

        </div>
        <!-- Page Content End -->
@endsection
