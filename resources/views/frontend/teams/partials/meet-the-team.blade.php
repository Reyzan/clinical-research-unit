@props(['unitDescription' => null, 'staff' => null, 'accent' => 'var(--pbmit-global-color, #40C3A3)'])

@php($staff = $staff ?? collect())

@once
    @push('styles')
    <style>
        .cru-mtt {
            margin-top: 8px;
            padding-top: 8px;
        }
        .cru-mtt__desc {
            color: var(--pbmit-body-typography-color, #555);
            line-height: 1.85;
            font-size: 16px;
            max-width: 760px;
            margin-bottom: 8px;
        }

        /* ── Stacked roster: one member per row ── */
        .cru-mtt__list {
            margin-top: 28px;
            border-top: 1px solid rgba(0,0,0,0.09);
        }
        .cru-mtt__member {
            display: grid;
            grid-template-columns: 88px 1fr;
            gap: 24px;
            align-items: center;
            padding: 22px 20px 22px 12px;
            border-bottom: 1px solid rgba(0,0,0,0.09);
            transition: background 0.35s ease, transform 0.35s ease;
        }
        .cru-mtt__member:hover {
            background: color-mix(in srgb, var(--cru-mtt-accent, #40C3A3) 6%, transparent);
            transform: translateX(4px);
        }
        .cru-mtt__member-photo {
            position: relative;
            width: 88px; height: 88px;
            border-radius: 50%;
            overflow: hidden;
            background: #f0eee8;
            flex-shrink: 0;
            box-shadow: 0 0 0 1px rgba(0,0,0,0.06);
            transition: box-shadow 0.35s ease;
        }
        .cru-mtt__member:hover .cru-mtt__member-photo {
            box-shadow: 0 0 0 3px var(--cru-mtt-accent, #40C3A3);
        }
        .cru-mtt__member-photo img {
            width: 100%; height: 100%; object-fit: cover;
        }
        .cru-mtt__member-name {
            font-family: var(--pbmit-heading-typography-font-family, "Onest", sans-serif);
            font-size: 18px;
            font-weight: 600;
            color: var(--pbmit-heading-color, #1a1a1a);
            line-height: 1.25;
            margin-bottom: 4px;
        }
        .cru-mtt__member-role {
            font-family: var(--pbmit-heading-typography-font-family, "Onest", sans-serif);
            font-size: 11px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--cru-mtt-accent, #40C3A3);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .cru-mtt__member-desc {
            font-size: 14px;
            color: var(--pbmit-body-typography-color, #666);
            line-height: 1.7;
            max-width: 720px;
            margin: 0;
        }

        @media (max-width: 600px) {
            .cru-mtt__member {
                grid-template-columns: 64px 1fr;
                gap: 16px;
                padding: 18px 8px;
            }
            .cru-mtt__member-photo { width: 64px; height: 64px; }
            .cru-mtt__member:hover { transform: none; }
        }
    </style>
    @endpush
@endonce

@if($staff->count() > 0 || $unitDescription)
    <div class="cru-mtt" style="--cru-mtt-accent: {{ $accent }};" data-aos="fade-up">
        <div class="pbmit-custom-heading animation-style3">
            <h4 class="pbmit-title">Meet the Team</h4>
        </div>

        @if($unitDescription)
            <p class="cru-mtt__desc">{{ $unitDescription }}</p>
        @endif

        @if($staff->count() > 0)
            <div class="cru-mtt__list">
                @foreach($staff as $member)
                    <div class="cru-mtt__member" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 6) * 60 }}">
                        <div class="cru-mtt__member-photo">
                            <img src="{{ $member->photo_url }}" alt="{{ $member->name }}">
                        </div>
                        <div>
                            <div class="cru-mtt__member-name">{{ $member->name }}</div>
                            @if($member->role)
                                <div class="cru-mtt__member-role">{{ $member->role }}</div>
                            @endif
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
