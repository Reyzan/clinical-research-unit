@extends('layouts.frontend')

@php
    $accent = $group->accent_color_or_default;
@endphp

@section('title', $group->name . ' Research Group')

@section('meta_description', \Illuminate\Support\Str::limit($group->name . ' Research Group at Clinical Research Unit RSCM. ' . strip_tags($group->description ?? ''), 160))

@section('og_title', $group->name . ' Research Group | Clinical Research Unit RSCM')

@section('og_description', \Illuminate\Support\Str::limit(strip_tags($group->description ?? ''), 200))

@section('canonical_url', route('research-groups.show', $slug))

@push('styles')
<style>
    .rg-hero {
        text-align: center;
        margin-bottom: 48px;
    }
    .rg-hero__icon {
        width: 96px; height: 96px;
        margin: 0 auto 20px;
        display: flex; align-items: center; justify-content: center;
        border-radius: 50%;
        background: color-mix(in srgb, {{ $accent }} 12%, transparent);
        color: {{ $accent }};
    }
    .rg-hero__icon img {
        max-width: 56px; max-height: 56px;
    }
    .rg-hero__name {
        font-size: clamp(28px, 4vw, 40px);
        font-weight: 700;
        margin-bottom: 12px;
    }
    .rg-hero__desc {
        max-width: 640px;
        margin: 0 auto;
        color: #555;
        line-height: 1.8;
    }
    .rg-back {
        display: inline-block;
        margin-bottom: 24px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #555;
    }
    .rg-back:hover { color: {{ $accent }}; }
</style>
@endpush

@section('content')
<x-frontend.page-title
    :title="$group->name"
    :breadcrumbs="[['title' => 'Our Researchers', 'url' => route('teams.index')], ['title' => $group->name]]"
/>

<div class="page-content">
    <section class="section-md">
        <div class="container">

            <a href="{{ route('teams.index') }}" class="rg-back">&larr; Back to Our Researchers</a>

            <div class="rg-hero">
                <div class="rg-hero__icon">
                    @if($group->logo_url)
                        <img src="{{ $group->logo_url }}" alt="{{ $group->name }} logo">
                    @else
                        @include('frontend.teams.partials.group-icon', ['slug' => $group->slug])
                    @endif
                </div>
                <h1 class="rg-hero__name">{{ $group->name }} Research Group</h1>
                @if($group->description)
                    <p class="rg-hero__desc">{{ $group->description }}</p>
                @endif
            </div>

            @if($group->researchers->count() > 0)
                <div class="row pbminfotech-gap-25px">
                    @foreach($group->researchers as $i => $researcher)
                        @include('frontend.teams.partials.researcher-card', ['researcher' => $researcher, 'delay' => (($i % 4) + 1) * 80])
                    @endforeach
                </div>
            @else
                <div class="cru-empty" style="text-align:center;padding:48px 16px;color:#999;font-size:14px;background:#fafaf7;border-radius:4px;">
                    No researchers assigned to this group yet.
                </div>
            @endif

        </div>
    </section>
</div>
@endsection
