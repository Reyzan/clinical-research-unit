@props(['unitDescription' => null, 'staff' => null, 'accent' => '#C8A574'])

@php($staff = $staff ?? collect())

@once
    @push('styles')
    <style>
        .cru-mtt {
            margin-top: 40px;
            padding: 40px 0;
            border-top: 1px solid rgba(0,0,0,0.08);
            border-bottom: 1px solid rgba(0,0,0,0.08);
        }
        .cru-mtt__heading {
            position: relative;
            display: inline-block;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 24px;
            padding-bottom: 10px;
        }
        .cru-mtt__heading::after {
            content: '';
            position: absolute;
            left: 0; bottom: 0;
            width: 40px; height: 3px;
            background: var(--cru-mtt-accent, #C8A574);
        }
        .cru-mtt__desc {
            color: #555;
            line-height: 1.8;
            font-size: 15px;
            max-width: 720px;
        }
        .cru-mtt__grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            margin-top: 28px;
        }
        .cru-mtt__member {
            display: grid;
            grid-template-columns: 96px 1fr;
            gap: 18px;
            align-items: start;
        }
        .cru-mtt__member-photo {
            width: 96px; height: 96px;
            border-radius: 50%;
            overflow: hidden;
            background: #f0eee8;
            flex-shrink: 0;
        }
        .cru-mtt__member-photo img {
            width: 100%; height: 100%; object-fit: cover;
        }
        .cru-mtt__member-name {
            font-size: 15px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 2px;
        }
        .cru-mtt__member-role {
            font-size: 11px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--cru-mtt-accent, #C8A574);
            font-weight: 600;
            margin-bottom: 8px;
        }
        .cru-mtt__member-desc {
            font-size: 13px;
            color: #666;
            line-height: 1.6;
        }
    </style>
    @endpush
@endonce

@if($staff->count() > 0 || $unitDescription)
    <div class="cru-mtt" style="--cru-mtt-accent: {{ $accent }};">
        <h2 class="cru-mtt__heading">Meet the Team</h2>

        @if($unitDescription)
            <p class="cru-mtt__desc">{{ $unitDescription }}</p>
        @endif

        @if($staff->count() > 0)
            <div class="cru-mtt__grid">
                @foreach($staff as $member)
                    <div class="cru-mtt__member">
                        <div class="cru-mtt__member-photo">
                            <img src="{{ $member->photo_url }}" alt="{{ $member->name }}">
                        </div>
                        <div>
                            <div class="cru-mtt__member-name">{{ $member->name }}</div>
                            <div class="cru-mtt__member-role">{{ $member->role }}</div>
                            @if($member->description)
                                <p class="cru-mtt__member-desc">{{ $member->description }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endif
