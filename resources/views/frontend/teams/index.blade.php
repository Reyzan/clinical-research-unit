@extends('layouts.frontend')

@section('title', 'Our Researchers')

@section('meta_description', 'Meet the expert research team at Clinical Research Unit RSCM. Our multidisciplinary scientists, geneticists, and clinicians lead Indonesia\'s precision medicine and genomic research initiatives with over 15 years combined expertise.')

@section('meta_keywords', 'CRU research team, genomic research scientists, precision medicine experts, clinical research team Indonesia, genetic counselor, biobank specialists, RSCM researchers, metabolic disease experts')

@section('og_title', 'Expert Research Team - Clinical Research Unit RSCM')

@section('og_description', 'Meet the multidisciplinary experts driving precision medicine research in Indonesia. Our team combines clinical excellence with cutting-edge genomic science.')

@section('og_image', asset('frontend/images/og/team-og.png'))

@section('canonical_url', route('teams.index'))

@push('styles')
<style>
    /* ───────── Teams Page — typographic helpers only ───────── */
    .cru-section-kicker {
        display: inline-block;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.28em;
        text-transform: uppercase;
        color: var(--pbmit-global-color, #C8A574);
        margin-bottom: 14px;
    }
    .cru-section-heading {
        font-size: clamp(28px, 4vw, 44px);
        font-weight: 700;
        line-height: 1.15;
        margin-bottom: 8px;
    }
    .cru-section-rule {
        position: relative;
        text-align: center;
        margin: 56px 0 40px;
    }
    .cru-section-rule::before {
        content: '';
        position: absolute;
        left: 0; right: 0; top: 50%;
        height: 1px;
        background: rgba(0,0,0,0.12);
    }
    .cru-section-rule > span {
        position: relative;
        background: #fff;
        padding: 0 24px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.32em;
        text-transform: uppercase;
        color: #555;
    }
    .cru-empty {
        text-align: center;
        padding: 48px 16px;
        color: #999;
        font-size: 14px;
        background: #fafaf7;
        border-radius: 4px;
    }
</style>
@endpush

@section('content')
<x-frontend.page-title
    title="Our Researchers"
    :breadcrumbs="[['title' => 'Our Researchers', 'url' => route('teams.index')]]"
/>

<div class="page-content">

    {{-- ═══════════════════════════════ LEADERSHIP ═══════════════════════════════ --}}
    <section class="section-md">
        <div class="container">

            <div class="text-center mb-5" data-aos="fade-up">
                <span class="cru-section-kicker">Clinical Research Unit</span>
                <h2 class="cru-section-heading">Leadership</h2>
            </div>

            @if($head)
                <div class="row pbmit-element-posts-wrapper justify-content-center mb-4">
                    <article class="pbmit-team-style-1 col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-featured-inner">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ $head->image_url }}" class="img-fluid" alt="{{ $head->name }}">
                                    </div>
                                </div>
                                @if($head->slug)
                                    <a class="pbmit-link" href="{{ route('teams.show', $head->slug) }}" title="Go to {{ $head->name }}"></a>
                                @endif
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-box-title-wrap">
                                    <h3 class="pbmit-team-title">
                                        <a href="{{ $head->slug ? route('teams.show', $head->slug) : 'javascript:void(0);' }}">{{ $head->name }}</a>
                                    </h3>
                                    <div class="pbminfotech-box-team-position">{{ $head->title }}</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endif

            @if($subHeads->count() > 0)
                <div class="row pbmit-element-posts-wrapper justify-content-center mb-4">
                    @foreach($subHeads as $i => $member)
                        <article class="pbmit-team-style-1 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($i + 1) * 100 }}">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-featured-inner">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ $member->image_url }}" class="img-fluid" alt="{{ $member->name }}">
                                        </div>
                                    </div>
                                    @if($member->slug)
                                        <a class="pbmit-link" href="{{ route('teams.show', $member->slug) }}" title="Go to {{ $member->name }}"></a>
                                    @endif
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-box-title-wrap">
                                        <h3 class="pbmit-team-title">
                                            <a href="{{ $member->slug ? route('teams.show', $member->slug) : 'javascript:void(0);' }}">{{ $member->name }}</a>
                                        </h3>
                                        <div class="pbminfotech-box-team-position">{{ $member->title }}</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif

            @if(!$head && $subHeads->count() === 0)
                <div class="cru-empty">No leadership members configured yet. Add team members in the admin panel and set their role to "Head of CRU" or "Sub-Head".</div>
            @endif

        </div>
    </section>

    {{-- ═══════════════════════════════ RESEARCH GROUPS ═══════════════════════════════ --}}
    @if($researchGroups->count() > 0)
        <section class="section-md">
            <div class="container">

                <div class="cru-section-rule">
                    <span>Research Groups</span>
                </div>

                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="cru-section-kicker">Four Disciplines</span>
                    <h2 class="cru-section-heading">Where Our Research Lives</h2>
                </div>

                <div class="row pbminfotech-gap-25px">
                    @foreach($researchGroups as $i => $group)
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ ($i + 1) * 100 }}">
                            <div class="pbmit-ihbox-style-10">
                                <div class="pbmit-ihbox-box">
                                    <a href="{{ route('research-groups.show', $group->slug) }}" class="pbmit-link" title="View {{ $group->name }} researchers"></a>
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            @if($group->logo_url)
                                                <img src="{{ $group->logo_url }}" alt="{{ $group->name }} logo" style="max-width:48px;max-height:48px;">
                                            @else
                                                @include('frontend.teams.partials.group-icon', ['slug' => $group->slug])
                                            @endif
                                        </div>
                                    </div>

                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title">{{ $group->name }}</h2>
                                    </div>

                                    <div class="pbmit-contents-wraper">
                                        <h2 class="pbmit-element-title">{{ $group->name }}</h2>
                                        @if($group->description)
                                            <div class="pbmit-heading-desc">{{ $group->description }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif

    {{-- ═══════════════════════════════ OUR RESEARCHERS ═══════════════════════════════ --}}
    <section id="researchers" class="section-md">
        <div class="container">

            <div class="cru-section-rule">
                <span>Our Researchers</span>
            </div>

            <div class="text-center mb-5" data-aos="fade-up">
                <span class="cru-section-kicker">{{ $researchers->count() }} Scientists & Specialists</span>
                <h2 class="cru-section-heading">The People Behind the Research</h2>
                <p class="text-muted" style="max-width: 540px; margin: 0 auto;">Hover any portrait to reveal a name. Click to read about their work, publications, and the team they lead.</p>
            </div>

            @if($researchers->count() > 0)
                <div class="row pbminfotech-gap-25px">
                    @foreach($researchers as $i => $researcher)
                        @include('frontend.teams.partials.researcher-card', ['researcher' => $researcher, 'delay' => (($i % 4) + 1) * 80])
                    @endforeach
                </div>
            @else
                <div class="cru-empty">No researchers added yet. Use the admin panel to create researchers and assign them to a research group.</div>
            @endif

        </div>
    </section>

</div>
@endsection
