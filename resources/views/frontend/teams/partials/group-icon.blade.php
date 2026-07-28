@props(['slug' => null])

@switch($slug)
    @case('infeksi')
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="1.6"
             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 5v-2"/>
            <path d="M15 5l1.5 -2"/>
            <path d="M9 5l-1.5 -2"/>
            <path d="M19 12h2"/>
            <path d="M19 9l2 -1.5"/>
            <path d="M19 15l2 1.5"/>
            <path d="M5 12h-2"/>
            <path d="M5 9l-2 -1.5"/>
            <path d="M5 15l-2 1.5"/>
            <path d="M12 19v2"/>
            <path d="M15 19l1.5 2"/>
            <path d="M9 19l-1.5 2"/>
            <path d="M12 8a4 4 0 0 1 4 4a4 4 0 0 1 -4 4a4 4 0 0 1 -4 -4a4 4 0 0 1 4 -4z"/>
        </svg>
        @break

    @case('metabolik')
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="1.6"
             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M9 3h6v3l3 4.5v8.5a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8.5l3 -4.5v-3z"/>
            <path d="M9 12h6"/>
            <path d="M11 15h2"/>
            <path d="M9 6h6"/>
        </svg>
        @break

    @case('neuro')
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="1.6"
             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M15.5 13a3.5 3.5 0 0 0 -3.5 3.5v1a3.5 3.5 0 0 0 7 0v-1.8"/>
            <path d="M8.5 13a3.5 3.5 0 0 1 3.5 3.5v1a3.5 3.5 0 0 1 -7 0v-1.8"/>
            <path d="M17.5 16a3.5 3.5 0 0 0 0 -7h-.5"/>
            <path d="M19 9.3v-2.8a3.5 3.5 0 0 0 -7 0"/>
            <path d="M6.5 16a3.5 3.5 0 0 1 0 -7h.5"/>
            <path d="M5 9.3v-2.8a3.5 3.5 0 0 1 7 0v10"/>
        </svg>
        @break

    @case('hemato-onk')
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="1.6"
             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 3l4 6.5a4.5 7.5 0 1 1 -8 0z"/>
        </svg>
        @break

    @default
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="1.6"
             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 21h14"/>
            <path d="M6 18h2a2 2 0 0 1 2 2h4a2 2 0 0 1 2 -2h2"/>
            <path d="M6.5 11l9 -9l3.5 3.5l-9 9z"/>
            <path d="M13 4l3 3"/>
            <path d="M11 8.5l3.5 3.5"/>
            <path d="M5 14l3 3"/>
            <path d="M5 14l-1 1"/>
        </svg>
@endswitch
