<!-- Blog start -->
<section class="portfolio-section-three pbmit-element-portfolio-style-2">
    <div class="container">
        <div class="pbmit-heading-subheading text-center animation-style3">
            <h4 class="pbmit-subtitle">Read Our Blog</h4>
            <h2 class="pbmit-title">Latest News & Updates</h2>
            <div class="pbmit-heading-desc">
                Read the latest news about Clinical Research Unit RSCM and clinical research developments in Indonesia.
            </div>
        </div>
        @if($news && $news->count() > 0)
        <div class="row">
            {{-- First (featured) news article --}}
            @if($news->first())
            <div class="col-md-12 col-lg-5 col-xl-6 pbmit-blog-group-left">
                <article class="pbmit-blog-style-3">
                    <div class="post-item">
                        <div class="pbminfotech-box-content">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-container-inner">
                                    <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                        <span class="pbmit-meta-category">
                                            @if($news->first()->categories->first())
                                            <a href="{{ route('news.index', ['category' => $news->first()->categories->first()->slug]) }}" rel="category tag">
                                                {{ $news->first()->categories->first()->name }}
                                            </a>
                                            @endif
                                        </span>
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset($news->first()->featured_image) }}" class="img-fluid" alt="{{ $news->first()->title }}">
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="{{ route('news.show', $news->first()->slug) }}" title="{{ $news->first()->title }}"></a>
                                </div>
                                <div class="pbmit-meta-wraper-inner">
                                    <div class="pbmit-meta-wraper">
                                        <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                            <span class="pbmit-meta-icon">
                                                <i class="pbmit-base-icon-calendar-silhouette"></i>
                                            </span>{{ $news->first()->published_at->format('d M Y') }}
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
                                    <h3 class="pbmit-post-title">
                                        <a href="{{ route('news.show', $news->first()->slug) }}">{{ $news->first()->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endif

            {{-- Remaining news articles (up to 3) --}}
            <div class="col-md-12 col-lg-7 col-xl-6 pbmit-blog-group-right">
                <div class="row">
                    @foreach($news->skip(1)->take(3) as $article)
                    <article class="pbmit-blog-style-3 col-md-12">
                        <div class="post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-container-inner">
                                        <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                            <span class="pbmit-meta-category">
                                                @if($article->categories->first())
                                                <a href="{{ route('news.index', ['category' => $article->categories->first()->slug]) }}" rel="category tag">
                                                    {{ $article->categories->first()->name }}
                                                </a>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset($article->featured_image) }}" class="img-fluid" alt="{{ $article->title }}">
                                            </div>
                                        </div>
                                        <a class="pbmit-link" href="{{ route('news.show', $article->slug) }}" title="{{ $article->title }}"></a>
                                    </div>
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
                                        <h3 class="pbmit-post-title">
                                            <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- Blog End -->
