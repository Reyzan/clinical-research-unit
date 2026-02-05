@extends('layouts.frontend')

@section('title', 'Home')

@section('meta_description', 'Clinical Research Unit (CRU) RSCM pioneers precision medicine in Indonesia through cutting-edge genomic research, strategic biobank services, and innovative clinical trials. Join us in advancing healthcare for every patient.')

@section('meta_keywords', 'clinical research unit, RSCM clinical research, genomic research Indonesia, precision medicine Jakarta, biobank services, metabolic disease research, Indonesian genomics, personalized medicine, genetic research hub')

@section('og_title', 'Clinical Research Unit RSCM - Pioneering Precision Medicine in Indonesia')

@section('og_description', 'Advancing Indonesia\'s healthcare through genomic research, biobank services, and precision medicine. National hub for metabolic disease research since 2022.')

@section('og_image', asset('frontend/images/og/home-og.png'))

@section('canonical_url', route('home'))

@section('content')
    @include('frontend.home._hero-slider')
    @include('frontend.home._about')
    @include('frontend.home._services')
    @include('frontend.home._why-choose-us')
    @include('frontend.home._research-group')
    @include('frontend.home._blog')
@endsection
