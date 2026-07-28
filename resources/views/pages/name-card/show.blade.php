<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $person['name'] }} — {{ config('app.name') }} Name Card</title>
    <link rel="icon" href="{{ asset('frontend/images/favicon/favicon.ico') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:wght@400;600;700;800&display=swap');

        :root {
            --pbmit-global-color: #40C3A3;
            --pbmit-secondary-color: #007A7F;
            --pbmit-accent-color: #CDE300;
            --pbmit-body-typography-color: #6E6E6D;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: #F4F6F5;
            font-family: "Schibsted Grotesk", sans-serif;
            color: #1a1a1a;
        }

        .card {
            position: relative;
            width: 100%;
            max-width: 460px;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            padding: 40px 32px 56px;
        }

        .card-logo {
            position: absolute;
            top: 24px;
            right: 24px;
            height: 40px;
        }

        .card-name {
            margin: 0 0 8px;
            font-size: 28px;
            font-weight: 800;
            color: var(--pbmit-secondary-color);
            padding-bottom: 12px;
            border-bottom: 2px solid var(--pbmit-global-color);
            display: inline-block;
        }

        .card-title,
        .card-org {
            margin: 4px 0;
            font-size: 15px;
            line-height: 1.4;
        }

        .card-title {
            font-weight: 600;
            color: #1a1a1a;
        }

        .card-org {
            color: var(--pbmit-body-typography-color);
        }

        .card-contact {
            list-style: none;
            margin: 28px 0 0;
            padding: 0;
        }

        .card-contact li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 14px;
            font-size: 14px;
            color: #1a1a1a;
        }

        .card-contact li:last-child { margin-bottom: 0; }

        .card-contact .icon {
            flex: none;
            width: 20px;
            height: 20px;
            margin-top: 1px;
            color: var(--pbmit-secondary-color);
        }

        .card-contact a {
            color: inherit;
            text-decoration: none;
        }

        .card-contact a:hover { text-decoration: underline; }

        .card-wave {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 55%;
            height: 90px;
            background: linear-gradient(120deg, var(--pbmit-secondary-color), var(--pbmit-global-color) 60%, var(--pbmit-accent-color));
            clip-path: polygon(100% 0, 100% 100%, 40% 100%, 100% 0);
            z-index: 0;
        }

        .card > * { position: relative; z-index: 1; }
    </style>
</head>
<body>
    <div class="card">
        <img class="card-logo" src="{{ asset('frontend/images/logo/logo-cru.png') }}" alt="{{ config('app.name') }} logo">

        <h1 class="card-name">{{ $person['name'] }}</h1>

        @if (! empty($person['title']))
            <p class="card-title">{{ $person['title'] }}</p>
        @endif

        <p class="card-org">Clinical Research Unit RSCM<br>RSUPN Dr. Cipto Mangunkusumo</p>

        <ul class="card-contact">
            <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.5"/></svg>
                <span>Jl. Pangeran Diponegoro No.69, RW.5, Senen, Kota Jakarta Pusat, 10430</span>
            </li>
            <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 5c0-.6.4-1 1-1h3l2 5-2 1.5a11 11 0 0 0 5.5 5.5L15 14l5 2v3c0 .6-.4 1-1 1A15 15 0 0 1 4 5Z"/></svg>
                <a href="tel:021-80675489">021-80675489</a>
            </li>
            @if (! empty($person['email']))
                <li>
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                    @php $firstEmail = trim(explode(',', $person['email'])[0]); @endphp
                    <a href="mailto:{{ $firstEmail }}">{{ $firstEmail }}</a>
                </li>
            @endif
            <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg>
                <a href="{{ route('home') }}">{{ request()->getHost() }}</a>
            </li>
        </ul>

        <div class="card-wave"></div>
    </div>
</body>
</html>
