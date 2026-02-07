@props(['memberName', 'cvFile'])

<aside class="widget pbmit-download-info">
    <h2 class="widget-title">{{ $memberName }}'s Profile</h2>
    <div class="textwidget">
        <div class="pbmit-download">
            @if($cvFile && file_exists(public_path($cvFile)))
                <div class="pbmit-item-download">
                    <a href="{{ asset($cvFile) }}" target="_blank" rel="noopener" download>
                        <div class="pbmit-download-content">
                            <div class="pbmit-download-wrap">
                                <i class="pbmit-base-icon-pdf-file"></i>
                                <h3 class="pbmit-download-title">
                                    Complete CV
                                </h3>
                            </div>
                            <span class="pbmit-download-item">
                                <i class="pbmit-download-icon pbmit-base-icon-download"></i>
                            </span>
                        </div>
                    </a>
                </div>
            @else
                <p class="text-muted">CV not available</p>
            @endif
        </div>
    </div>
</aside>
