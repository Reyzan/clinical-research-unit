<div class="pbmit-menuarea">
    <div class="site-navigation">
        <nav class="main-menu navbar-expand-xl navbar-light">
            <div class="navbar-header">
                <!-- Toggle Button -->
                <button id="menu-toggle" class="navbar-toggler" type="button">
                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <g data-name="04">
                            <path d="m58 31h-52a1 1 0 0 0 0 2h52a1 1 0 0 0 0-2z"></path>
                            <path d="m6 18h52a1 1 0 0 0 0-2h-52a1 1 0 0 0 0 2z"></path>
                            <path d="m58 46h-52a1 1 0 0 0 0 2h52a1 1 0 0 0 0-2z"></path>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="pbmit-mobile-menu-bg"></div>
            <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                <div class="pbmit-menu-wrap">
                    <span class="closepanel">
                        <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163"
                            height="20.163" viewBox="0 0 26.163 26.163">
                            <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                            <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                        </svg>
                    </span>
                    <ul class="navigation clearfix">
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="dropdown {{ request()->routeIs('about', 'teams.*', 'faq') ? 'active' : '' }}">
                            <a href="#">About</a>
                            <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('teams.index') }}">Our Teams</a></li>
                            </ul>
                        </li>
                        <li class="dropdown {{ request()->routeIs('services.*') ? 'active' : '' }}">
                            <a href="#">Research</a>
                            <ul>
                                <li class="dropdown">
                                    <a href="#">Research Services</a>
                                    <ul>
                                        <li><a href="{{ route('services.show', 'biobank') }}">Biobank</a></li>
                                        <li><a href="{{ route('services.show', 'genomic') }}">Genomics</a></li>
                                        <li><a href="{{ route('services.show', 'clinical-trial') }}">Clinical Trials</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Research Groups</a></li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
