@extends('layouts.frontend')

@section('title', 'Home')

@section('content')
    @include('frontend.home._hero-slider')
    @include('frontend.home._about')
    @include('frontend.home._services')
    @include('frontend.home._why-choose-us')
    @include('frontend.home._research-group')
    @include('frontend.home._blog')
@endsection
