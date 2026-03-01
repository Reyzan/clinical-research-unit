@extends('layouts.frontend')

@section('title', $news->meta_title ?? $news->title)
@section('meta_description', $news->meta_description ?? strip_tags(substr($news->content, 0, 160)))
@section('meta_keywords', 'CRU RSCM, clinical research, medical research, Indonesia')

{{-- Open Graph Tags --}}
@section('og_title', $news->title)
@section('og_description', $news->meta_description ?? strip_tags(substr($news->content, 0, 160)))
@section('og_image', asset($news->featured_image))

@section('content')
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper animation animated fadeIn">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner">
                        <h1 class="pbmit-tbar-title">{{ $news->title }}</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="Home" href="{{ route('home') }}" class="home"><span>Home</span></a>
                        </span>
                        <span class="sep">
                            <i class="pbmit-base-icon-angle-right"></i>
                        </span>
                        <span>
                            <a title="News" href="{{ route('news.index') }}"><span>News</span></a>
                        </span>
                        <span class="sep">
                            <i class="pbmit-base-icon-angle-right"></i>
                        </span>
                        <span><span class="post-root post post-post current-item">{{ Str::limit($news->title, 50) }}</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">
    <!-- Blog Single Details -->
    <section class="site-content blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-9 blog-left-col">
                    <div class="row">
                        <div class="col-md-12">
                            <article>
                                <div class="post blog-classic">
                                    <div class="pbmit-img-wrapper-inner">
                                        <!-- Featured Image -->
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <a href="{{ route('news.show', $news->slug) }}">
                                                    <img src="{{ asset($news->featured_image) }}" class="img-fluid" alt="{{ $news->title }}">
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Blog Meta Top -->
                                        <div class="pbmit-blog-meta pbmit-blog-meta-top">
                                            <span class="pbmit-meta pbmit-meta-date">
                                                <i class="pbmit-base-icon-calendar-silhouette"></i>
                                                <a href="{{ route('news.show', $news->slug) }}" rel="bookmark">
                                                    <span>{{ $news->published_at->format('F d, Y') }}</span>
                                                </a>
                                            </span>
                                            <span class="pbmit-meta pbmit-meta-author">
                                                <i class="pbmit-base-icon-user-1"></i>by
                                                <a class="pbmit-author-link" href="#">CRU RSCM</a>
                                            </span>
                                            @if($news->categories->first())
                                            <span class="pbmit-meta pbmit-meta-cat">
                                                <i class="pbmit-base-icon-label"></i>
                                                <a href="{{ route('news.index', ['category' => $news->categories->first()->slug]) }}" rel="category tag">{{ $news->categories->first()->name }}</a>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="pbmit-blog-classic-inner">
                                        <!-- Article Content -->
                                        <div class="pbmit-entry-content">
                                            {!! $news->content !!}
                                        </div>

                                        <!-- Tags and Social Share -->
                                        <div class="pbmit-blog-meta-bottom">
                                            <div class="pbmit-blog-meta-bottom-left">
                                                @if($news->categories->count() > 0)
                                                <div class="tagcloud">
                                                    <ul>
                                                        @foreach($news->categories as $category)
                                                        <li><a href="{{ route('news.index', ['category' => $category->slug]) }}" class="tag-cloud-link">{{ $category->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="pbmit-blog-meta-bottom-right">
                                                <div class="pbmit-social-share">
                                                    <ul>
                                                        <li class="pbmit-social-li pbmit-social-li-facebook">
                                                            <a class="pbmit-popup" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('news.show', $news->slug)) }}" title="Share on Facebook" target="_blank">
                                                                <i class="pbmit-base-icon-facebook-squared"></i>
                                                            </a>
                                                        </li>
                                                        <li class="pbmit-social-li pbmit-social-li-twitter">
                                                            <a class="pbmit-popup" href="https://twitter.com/intent/tweet?url={{ urlencode(route('news.show', $news->slug)) }}&text={{ urlencode($news->title) }}" title="Share on X (Twitter)" target="_blank">
                                                                <i class="pbmit-base-icon-twitter-2"></i>
                                                            </a>
                                                        </li>
                                                        <li class="pbmit-social-li pbmit-social-li-linkedin">
                                                            <a class="pbmit-popup" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('news.show', $news->slug)) }}&title={{ urlencode($news->title) }}" title="Share on LinkedIn" target="_blank">
                                                                <i class="pbmit-base-icon-linkedin-squared"></i>
                                                            </a>
                                                        </li>
                                                        <li class="pbmit-social-li pbmit-social-li-instagram">
                                                            <a class="pbmit-popup" href="https://www.instagram.com/" title="Share on Instagram" target="_blank">
                                                                <i class="pbmit-base-icon-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Post Navigation -->
                                @if($previousNews || $nextNews)
                                <nav class="navigation post-navigation" aria-label="Posts">
                                    <div class="nav-links">
                                        @if($previousNews)
                                        <div class="nav-previous">
                                            <a href="{{ route('news.show', $previousNews->slug) }}" rel="prev">
                                                <span class="pbmit-nav-thumbnail">
                                                    <img src="{{ asset($previousNews->featured_image) }}" class="img-fluid" alt="{{ $previousNews->title }}">
                                                </span>
                                                <span class="pbmit-nav-wrapper">
                                                    <span class="pbmit-nav-head">Prev Post</span>
                                                    <span class="pbmit-nav-title">{{ Str::limit($previousNews->title, 60) }}</span>
                                                </span>
                                            </a>
                                        </div>
                                        @endif

                                        @if($nextNews)
                                        <div class="nav-next">
                                            <a href="{{ route('news.show', $nextNews->slug) }}" rel="next">
                                                <span class="pbmit-nav-wrapper">
                                                    <span class="pbmit-nav-head">Next Post</span>
                                                    <span class="pbmit-nav-title">{{ Str::limit($nextNews->title, 60) }}</span>
                                                </span>
                                                <span class="pbmit-nav-thumbnail">
                                                    <img src="{{ asset($nextNews->featured_image) }}" class="img-fluid" alt="{{ $nextNews->title }}">
                                                </span>
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </nav>
                                @endif

                                <!-- Author Box -->
                                <div class="pbmit-author-box">
                                    <div class="pbmit-author-image-wrap">
                                        <div class="pbmit-author-image">
                                            <img alt="CRU RSCM" src="{{ asset('frontend/images/author.png') }}" class="avatar">
                                        </div>
                                        <span class="pbmit-author-name">
                                            <a href="#" title="Posted by CRU RSCM" rel="author">CRU RSCM</a>
                                        </span>
                                    </div>
                                    <div class="pbmit-author-content">
                                        <p class="pbmit-text pbmit-author-bio">Clinical Research Unit RSUP Nasional Dr. Cipto Mangunkusumo - Advancing medical research and clinical trials in Indonesia with world-class standards and expertise.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-3 blog-right-col">
                    <aside class="sidebar">
                        <!-- Search Widget -->
                        <aside class="widget widget-search">
                            <form class="search-form" action="{{ route('news.index') }}" method="GET">
                                <div class="search-wrapper">
                                    <input type="search" name="s" class="form-control" placeholder="Search..." value="{{ request('s') }}">
                                    <button type="submit">
                                        <i class="pbmit-base-icon-search-1"></i>
                                    </button>
                                </div>
                            </form>
                        </aside>

                        <!-- Author Widget -->
                        <aside class="widget widget-author">
                            <div class="textwidget">
                                <div class="pbmit-author-widget">
                                    <div class="pbmit-author-img">
                                        <img src="{{ asset('frontend/images/sidebar-author-img.jpg') }}" class="img-fluid" alt="CRU RSCM">
                                    </div>
                                    <h3 class="pbmit-author-name">CRU RSCM</h3>
                                    <div class="pbmit-author-bio">Clinical Research Unit at Indonesia's premier teaching hospital</div>
                                </div>
                            </div>
                        </aside>

                        <!-- Categories Widget -->
                        <aside class="widget widget-categories">
                            <h2 class="widget-title">Categories</h2>
                            <ul>
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('news.index', ['category' => $category->slug]) }}">
                                        {{ $category->name }}
                                        @if($category->news_count > 0)
                                        <span class="post-count">({{ $category->news_count }})</span>
                                        @endif
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                        <!-- Recent Posts Widget -->
                        @if($recentNews->count() > 0)
                        <aside class="widget widget-recent-post">
                            <h2 class="widget-title">Recent News</h2>
                            <ul class="recent-post-list">
                                @foreach($recentNews as $recent)
                                <li class="recent-post-list-li">
                                    <a href="{{ route('news.show', $recent->slug) }}" class="recent-post-thum">
                                        <img src="{{ asset($recent->featured_image) }}" class="img-fluid" alt="{{ $recent->title }}">
                                    </a>
                                    <div class="recent-post-details">
                                        <a href="{{ route('news.show', $recent->slug) }}">
                                            {{ Str::limit($recent->title, 50) }}
                                        </a>
                                        <span class="post-date">
                                            <i class="pbmit-base-icon-calendar-silhouette"></i> {{ $recent->published_at->format('M d, Y') }}
                                        </span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </aside>
                        @endif

                        <!-- Tags Widget -->
                        @if($news->categories->count() > 0)
                        <aside class="widget widget-tag-cloud">
                            <h2 class="widget-title">Tags</h2>
                            <div class="tagcloud">
                                @foreach($news->categories as $category)
                                <a href="{{ route('news.index', ['category' => $category->slug]) }}" class="tag-cloud-link">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </aside>
                        @endif
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Page Content End -->
@endsection
