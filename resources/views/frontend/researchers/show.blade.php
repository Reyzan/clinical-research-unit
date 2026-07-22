@extends('layouts.frontend')

@php
    $name  = $researcher->name;
    $title = $researcher->title;
    $bio   = $researcher->bio ?? '';
    $photo = $researcher->photo_url;
    $group = $researcher->researchGroup;
    $accent = $group?->accent_color_or_default ?? '#C8A574';
@endphp

@section('title', $name . ' - ' . $title)

@section('meta_description', \Illuminate\Support\Str::limit($name . ' — ' . $title . '. ' . strip_tags($bio), 160))

@section('og_title', $name . ' - ' . $title . ' | Clinical Research Unit RSCM')

@section('og_description', \Illuminate\Support\Str::limit(strip_tags($bio), 200))

@section('og_image', $photo)

@section('og_type', 'profile')

@section('canonical_url', route('researchers.show', $slug))

@push('styles')
<style>
    .rsr-hero {
        display: grid;
        grid-template-columns: minmax(280px, 5fr) 7fr;
        gap: 48px;
        align-items: center;
        margin-bottom: 64px;
    }
    @media (max-width: 768px) {
        .rsr-hero { grid-template-columns: 1fr; gap: 28px; }
    }
    .rsr-hero__media {
        position: relative;
        aspect-ratio: 4 / 5;
        overflow: hidden;
        background: #f0eee8;
    }
    .rsr-hero__media::before {
        content: '';
        position: absolute;
        top: 16px; left: -8px;
        width: 56px; height: 4px;
        background: var(--rsr-accent, #C8A574);
        z-index: 2;
    }
    .rsr-hero__media img {
        width: 100%; height: 100%; object-fit: cover;
    }
    .rsr-hero__group {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 6px 14px;
        background: rgba(0,0,0,0.04);
        border-left: 3px solid var(--rsr-accent, #C8A574);
        font-size: 11px;
        letter-spacing: 0.22em;
        text-transform: uppercase;
        font-weight: 600;
        color: #444;
        margin-bottom: 18px;
    }
    .rsr-hero__group-dot {
        width: 8px; height: 8px; border-radius: 50%;
        background: var(--rsr-accent, #C8A574);
    }
    .rsr-hero__name {
        font-size: clamp(28px, 4vw, 44px);
        font-weight: 700;
        line-height: 1.1;
        margin-bottom: 8px;
    }
    .rsr-hero__title {
        font-size: 17px;
        color: #555;
        margin-bottom: 24px;
    }
    .rsr-hero__contact {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        align-items: center;
    }
    .rsr-hero__email {
        font-size: 14px;
        color: #444;
    }
    .rsr-social {
        display: flex;
        gap: 10px;
    }
    .rsr-social a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px; height: 38px;
        border: 1px solid rgba(0,0,0,0.12);
        border-radius: 50%;
        color: #444;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    .rsr-social a:hover {
        background: var(--rsr-accent, #C8A574);
        border-color: var(--rsr-accent, #C8A574);
        color: #fff;
        transform: translateY(-2px);
    }

    .rsr-section { margin-bottom: 56px; }
    .rsr-section__heading {
        position: relative;
        display: inline-block;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 24px;
        padding-bottom: 10px;
    }
    .rsr-section__heading::after {
        content: '';
        position: absolute;
        left: 0; bottom: 0;
        width: 40px; height: 3px;
        background: var(--rsr-accent, #C8A574);
    }
    .rsr-prose {
        color: #555;
        line-height: 1.8;
        font-size: 15px;
    }
    .rsr-edu-item {
        padding: 16px 20px;
        background: #fafaf7;
        border-left: 3px solid var(--rsr-accent, #C8A574);
        margin-bottom: 12px;
    }
    .rsr-edu-degree {
        font-weight: 600;
        color: #1a1a1a;
        font-size: 15px;
        display: block;
        margin-bottom: 4px;
    }
    .rsr-edu-meta {
        font-size: 13px; color: #666;
    }

    .rsr-pub {
        padding: 16px 0;
        border-bottom: 1px solid rgba(0,0,0,0.08);
    }
    .rsr-pub:last-child { border-bottom: 0; }
    .rsr-pub__title {
        font-size: 15px;
        font-weight: 600;
        color: #1a1a1a;
        line-height: 1.5;
        margin-bottom: 6px;
    }
    .rsr-pub__meta {
        font-size: 13px;
        color: #666;
        line-height: 1.6;
    }

</style>
@endpush

@section('content')
<x-frontend.page-title
    :title="$name"
    :breadcrumbs="[['title' => 'Our Teams', 'url' => route('teams.index')], ['title' => $name]]"
/>

<div class="page-content" style="--rsr-accent: {{ $accent }};">
    <section class="site-content">
        <div class="container">

            {{-- ── HERO ── --}}
            <div class="rsr-hero">
                <div class="rsr-hero__media">
                    <img src="{{ $photo }}" alt="{{ $name }}">
                </div>
                <div class="rsr-hero__body">
                    @if($group)
                        <div class="rsr-hero__group">
                            <span class="rsr-hero__group-dot"></span>
                            {{ $group->name }} Research Group
                        </div>
                    @endif
                    <h1 class="rsr-hero__name">{{ $name }}</h1>
                    <div class="rsr-hero__title">{{ $title }}</div>

                    <div class="rsr-hero__contact">
                        @if($researcher->email)
                            <a class="rsr-hero__email" href="mailto:{{ $researcher->email }}">{{ $researcher->email }}</a>
                        @endif

                        @if($researcher->google_scholar_url || $researcher->linkedin_url || $researcher->orcid_url)
                            <div class="rsr-social">
                                @if($researcher->google_scholar_url)
                                    <a href="{{ $researcher->google_scholar_url }}" target="_blank" rel="noopener" title="Google Scholar" aria-label="Google Scholar">
                                        <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M12 24a7 7 0 1 1 0-14 7 7 0 0 1 0 14zm0-24L0 9.5l4.4 3.4A8.5 8.5 0 0 1 12 8a8.5 8.5 0 0 1 7.6 4.9L24 9.5z"/></svg>
                                    </a>
                                @endif
                                @if($researcher->linkedin_url)
                                    <a href="{{ $researcher->linkedin_url }}" target="_blank" rel="noopener" title="LinkedIn" aria-label="LinkedIn">
                                        <i class="pbmit-base-icon-linkedin-logo"></i>
                                    </a>
                                @endif
                                @if($researcher->orcid_url)
                                    <a href="{{ $researcher->orcid_url }}" target="_blank" rel="noopener" title="ORCID" aria-label="ORCID">
                                        <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zM7.4 5.3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zM6.4 9.8h2v9.1h-2V9.8zm4 0h4.1c3.9 0 5.6 2.8 5.6 4.6 0 2.5-1.9 4.6-5.6 4.6H10.4V9.8zm2 1.7v5.8h1.9c2.7 0 3.7-2 3.7-2.9 0-1.6-1-2.9-3.7-2.9h-1.9z"/></svg>
                                    </a>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- ── RESEARCH FOCUS ── --}}
            @if($bio)
                <div class="rsr-section">
                    <h2 class="rsr-section__heading">Research Focus</h2>
                    <div class="rsr-prose">{!! nl2br(e($bio)) !!}</div>
                </div>
            @endif

            {{-- ── EDUCATION ── --}}
            @if(!empty($researcher->education))
                <div class="rsr-section">
                    <h2 class="rsr-section__heading">Education</h2>
                    @foreach($researcher->education as $edu)
                        <div class="rsr-edu-item">
                            <span class="rsr-edu-degree">{{ $edu['degree'] ?? '' }}</span>
                            <div class="rsr-edu-meta">
                                <strong>{{ $edu['institution'] ?? '' }}</strong>
                                @if(!empty($edu['period'])) &middot; <em>{{ $edu['period'] }}</em>@endif
                                @if(!empty($edu['description']))<br>{{ $edu['description'] }}@endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            {{-- ── PUBLICATIONS & BOOKS ── --}}
            @if(!empty($researcher->publications))
                @php
                    $currentPage = (int) request()->get('page', 1);
                    $perPage = 10;
                    $totalPublications = count($researcher->publications);
                    $totalPages = (int) ceil($totalPublications / $perPage);
                    $offset = ($currentPage - 1) * $perPage;
                    $paginatedPublications = array_slice($researcher->publications, $offset, $perPage);
                @endphp

                <div class="rsr-section">
                    <h2 class="rsr-section__heading">Publications & Books</h2>
                    @foreach($paginatedPublications as $pub)
                        <div class="rsr-pub">
                            <div class="rsr-pub__title">{{ $pub['title'] ?? '' }}</div>
                            <div class="rsr-pub__meta">
                                <em>{{ $pub['journal'] ?? '' }}</em>@if(!empty($pub['year'])) ({{ $pub['year'] }})@endif
                                @if(!empty($pub['doi']))<br>DOI: <a href="https://doi.org/{{ $pub['doi'] }}" target="_blank" rel="noopener">{{ $pub['doi'] }}</a>@endif
                                @if(!empty($pub['pmid']))<br>PMID: <a href="https://pubmed.ncbi.nlm.nih.gov/{{ $pub['pmid'] }}/" target="_blank" rel="noopener">{{ $pub['pmid'] }}</a>@endif
                            </div>
                        </div>
                    @endforeach

                    @if($totalPages > 1)
                        <nav aria-label="Publications pagination" class="mt-4">
                            <ul class="pagination justify-content-center">
                                @if($currentPage > 1)
                                    <li class="page-item"><a class="page-link" href="{{ route('researchers.show', ['researcher' => $slug, 'page' => $currentPage - 1]) }}">&laquo;</a></li>
                                @endif
                                @for($i = 1; $i <= $totalPages; $i++)
                                    <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                        <a class="page-link" href="{{ route('researchers.show', ['researcher' => $slug, 'page' => $i]) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                @if($currentPage < $totalPages)
                                    <li class="page-item"><a class="page-link" href="{{ route('researchers.show', ['researcher' => $slug, 'page' => $currentPage + 1]) }}">&raquo;</a></li>
                                @endif
                            </ul>
                        </nav>
                    @endif
                </div>
            @endif

            {{-- ── MEET THE TEAM ── --}}
            @include('frontend.teams.partials.meet-the-team', [
                'unitDescription' => $researcher->unit_description,
                'staff' => $researcher->teamMembers,
                'accent' => $accent,
            ])

        </div>
    </section>
</div>
@endsection
