@extends('layouts.frontend')

@section('title', 'News & Updates - CRU RSCM')
@section('meta_description', 'Read the latest news and updates from Clinical Research Unit RSCM and clinical research developments in Indonesia.')
@section('meta_keywords', 'CRU RSCM, clinical research, medical research, Indonesia, news')

@section('content')
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title">News & Updates</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="Home" href="{{ route('home') }}" class="home"><span>Home</span></a>
                        </span>
                        <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                        <span><span class="post-root post post-post current-item">News</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">
    <section class="section-lg">
        <div class="container">
            <!-- Category Filter -->
            @if($categories->count() > 0)
            <div class="pbmit-category-filter text-center mb-5">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="{{ route('news.index') }}" class="pbmit-btn {{ !$selectedCategory ? 'pbmit-btn-active' : '' }}">
                            All News
                        </a>
                    </li>
                    @foreach($categories as $category)
                    <li class="list-inline-item">
                        <a href="{{ route('news.index', ['category' => $category->slug]) }}"
                           class="pbmit-btn {{ $selectedCategory === $category->slug ? 'pbmit-btn-active' : '' }}">
                            {{ $category->name }}
                            @if($category->news_count > 0)
                            <span class="badge">({{ $category->news_count }})</span>
                            @endif
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- News Grid -->
            @if($news->count() > 0)
            <div class="row">
                @foreach($news as $article)
                <div class="col-md-6 col-lg-4 mb-4">
                    <article class="pbmit-blog-style-3">
                        <div class="post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-container-inner">
                                        <!-- Category Badge -->
                                        <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                            <span class="pbmit-meta-category">
                                                @if($article->categories->first())
                                                <a href="{{ route('news.index', ['category' => $article->categories->first()->slug]) }}" rel="category tag">
                                                    {{ $article->categories->first()->name }}
                                                </a>
                                                @endif
                                            </span>
                                        </div>

                                        <!-- Featured Image -->
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset($article->featured_image) }}" class="img-fluid" alt="{{ $article->title }}">
                                            </div>
                                        </div>

                                        <!-- Link Overlay -->
                                        <a class="pbmit-link" href="{{ route('news.show', $article->slug) }}" title="{{ $article->title }}"></a>
                                    </div>

                                    <!-- Article Meta and Title -->
                                    <div class="pbmit-meta-wraper-inner">
                                        <div class="pbmit-meta-wraper">
                                            <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                                <span class="pbmit-meta-icon">
                                                    <i class="pbmit-base-icon-calendar-silhouette"></i>
                                                </span>{{ $article->published_at->format('d M Y') }}
                                            </div>
                                            <div class="pbmit-meta-author pbmit-meta-line">
                                                <span class="pbmit-meta-icon">
                                                    <i class="pbmit-base-icon-user-1"></i>
                                                </span>by
                                                <span class="pbmit-post-author">
                                                    <a href="#" rel="author">CRU RSCM</a>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Title -->
                                        <h3 class="pbmit-post-title">
                                            <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                                        </h3>

                                        <!-- Excerpt -->
                                        <div class="pbmit-entry-content">
                                            <p>{{ Str::limit(strip_tags($article->content), 120) }}</p>
                                        </div>

                                        <!-- Read More Link -->
                                        <div class="pbmit-entry-footer">
                                            <a href="{{ route('news.show', $article->slug) }}" class="pbmit-blog-btn">
                                                Read More <i class="pbmit-base-icon-right-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($news->hasPages())
            <div class="row">
                <div class="col-md-12">
                    <div class="pbmit-pagination text-center mt-4">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
            @endif
            @else
            <!-- No News Found -->
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center py-5">
                        <h3>No news articles found</h3>
                        <p class="text-muted">Please check back later for updates.</p>
                        <a href="{{ route('news.index') }}" class="pbmit-btn">
                            <span class="pbmit-button-content-wrapper">
                                <span class="pbmit-button-text">View All News</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
</div>
<!-- Page Content End -->
@endsection
