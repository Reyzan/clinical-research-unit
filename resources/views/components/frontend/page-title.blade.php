@props(['title', 'breadcrumbs' => []])

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper animation animated fadeIn">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner">
                        <h1 class="pbmit-tbar-title">{{ $title }}</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="Home" href="{{ route('home') }}" class="home">
                                <span>{{ config('app.name') }}</span>
                            </a>
                        </span>
                        @foreach($breadcrumbs as $breadcrumb)
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span>
                                @if(isset($breadcrumb['url']))
                                    <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a>
                                @else
                                    <span class="post-root post-current-item">{{ $breadcrumb['title'] }}</span>
                                @endif
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End -->
