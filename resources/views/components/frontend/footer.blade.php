<!-- Footer -->
<footer class="site-footer pbmit-footer-style-1 pbmit-bg-color-light pb-5">
    <!-- Footer Widgets -->
    <div class="container">
        <div class="pbmit-footer-widget-area">
            <div class="row">
                <div class="pbmit-footer-widget-col-1 col-md-4">
                    <aside class="widget">
                        <div class="pbmit-footer-logo">
                            <img src="{{ asset('frontend/images/logo/logo-cru.png') }}" class="img-fluid pbmit-logo-img" alt="{{ config('app.name') }}">
                        </div>
                        <p class="mb-0">A nationally mandated clinical research hub delivering high-quality and ethical research to advance science and improve patient outcomes.</p>
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/footer-img-01.png') }}" class="img-fluid" alt="">
                        </div>
                    </aside>
                </div>
                <div class="pbmit-footer-widget-col-2 col-md-4">
                    <aside class="widget">
                        <h2 class="widget-title">Research Services</h2>
                        <ul class="menu">
                            <li><a href="{{ route('services.index') }}">Biobank</a></li>
                            <li><a href="{{ route('services.index') }}">Genomic</a></li>
                            <li><a href="{{ route('services.index') }}">Clinical Trial</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="pbmit-footer-widget-col-3 col-md-2">
                    <aside class="widget">
                        <h2 class="widget-title">Quick Links</h2>
                        <ul class="menu">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('teams.index') }}">Our Teams</a></li>
                            <li><a href="#">Research Groups</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="pbmit-footer-widget-col-4 col-md-2">
                    <aside class="widget">
                        <h2 class="widget-title">Visit Clinical Research Unit RSCM</h2>
                        <p class="pbmit-custom-title">Jl. Pangeran Diponegoro No.69,<br>RW.5, Senen, Kota Jakarta Pusat</p>
                        <p class="tel-nub"><a href="tel:021-80675489">021-80675489</a></p>
                        <p class="contact-email"><a href="mailto:cru@rscm.co.id">cru@rscm.co.id</a></p>
                    </aside>
                </div>
            </div>
            <div class="row">
                <div class="col-md-0 col-xl-5"></div>
                <div class="col-md-12 col-xl-7">
                    <div class="footer-copyright-text-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <x-frontend.social-links />
                            </div>
                            <div class="col-md-8 text-md-end">
                                <div class="pbmit-footer-copyright-text-area">
                                    Copyright © {{ date('Y') }} <a href="{{ route('home') }}">{{ config('app.name') }}</a>, All Rights Reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- Footer End -->
