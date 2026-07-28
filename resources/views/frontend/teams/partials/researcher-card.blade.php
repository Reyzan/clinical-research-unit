@props(['researcher', 'delay' => 100])

@once
    @push('styles')
    <style>
        /* Researchers are shown without a visible identity — the name is only
           revealed on hover/focus, matching the "disorot" (spotlighted) behavior
           requested for the Our Researchers grid. */
        .cru-researcher-card .pbmit-portfolio-title {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transform: translateY(6px);
            transition: max-height 0.3s ease, opacity 0.3s ease, transform 0.3s ease;
        }
        .cru-researcher-card:hover .pbmit-portfolio-title,
        .cru-researcher-card:focus-within .pbmit-portfolio-title {
            max-height: 3em;
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    @endpush
@endonce

<div class="col-md-6 col-lg-4 col-xl-3 mb-4" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <article class="pbmit-portfolio-style-1 cru-researcher-card">
        <div class="pbminfotech-post-content">
            <div class="pbmit-featured-img-wrapper">
                <div class="pbmit-featured-wrapper">
                    <img src="{{ $researcher->photo_url }}" class="img-fluid" alt="{{ $researcher->name }}">
                </div>
            </div>
            <div class="pbminfotech-box-content">
                <div class="pbminfotech-box-content-inner">
                    @if($researcher->researchGroup)
                        <div class="pbmit-port-cat">
                            <a href="javascript:void(0)" rel="tag">{{ $researcher->researchGroup->name }}</a>
                        </div>
                    @endif
                    <h3 class="pbmit-portfolio-title">
                        <a href="{{ $researcher->slug ? route('researchers.show', $researcher->slug) : 'javascript:void(0)' }}">{{ $researcher->name }}</a>
                    </h3>
                </div>
            </div>
        </div>
    </article>
</div>
