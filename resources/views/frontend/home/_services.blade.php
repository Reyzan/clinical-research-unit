<!-- Service Start --> 
<section class="service-section-one animation animated fadeIn">
    <div class="service-one-inner pbmit-bg-color-light">
        <div class="container">
            <div class="tween-effect-style-wrap">
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-xl-5">
                    <div class="pbmit-heading-subheading animation-style3">
                        <h4 class="pbmit-subtitle">Services</h4>
                        <h2 class="pbmit-title">What service we offer</h2>
                    </div>
                </div>
                <div class="col-md-12 col-xl-5">
                    <p>We provide comprehensive biospecimen services: collection, processing, quality control, secure cold-chain biobanking.</p>
                </div>
                <div class="col-md-12 col-xl-2 text-xl-end">
                    <a class="pbmit-btn transparent" href="{{ route('services.index') }}">
                        <span class="pbmit-button-content-wrapper">
                            <span class="pbmit-button-text-wrap">
                                <span class="pbmit-button-text" data-text="See All Service">
                                    <span>See All Service</span>
                                </span>
                            </span>
                            <span class="pbmit-button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="m21.706 12.708-7 7a1 1 0 0 1 -1.414-1.414l5.294-5.294h-15.586a1 1 0 0 1 0-2h15.586l-5.293-5.293a1 1 0 0 1 1.414-1.414l7 7a1 1 0 0 1 0 1.416z" fill="rgb(0,0,0)"></path></svg>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="swiper-slider pbmit-column-three" data-autoplay="false" data-loop="true" data-allow-touch="true"  data-dots="false" data-arrows="true" data-columns="3" data-margin="20" data-effect="slide">				
                <div class="swiper-wrapper">
                    <!-- Slide1 -->
                    <article class="pbmit-service-style-1 swiper-slide">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-box-content-wrap">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('frontend/images/service/biobank.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <a class="pbmit-link" href="{{ route('services.show', 'biobank') }}" title="Go to Biobank"></a>
                                <div class="pbmit-heading-box">
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('services.show', 'biobank') }}">Biobank</a>
                                    </h3>
                                </div>
                                <div class="pbmit-content-box">
                                    <div class="pbmit-service-number">01</div>
                                    <div class="pbmit-service-icon">
                                        <svg class="w-64 h-64" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M31 10C30.4477 10 30 10.4477 30 11C30 11.5523 30.4477 12 31 12V19H28V12C28.5523 12 29 11.5523 29 11C29 10.4477 28.5523 10 28 10H20C19.4477 10 19 10.4477 19 11C19 11.5523 19.4477 12 20 12V19H17V12C17.5523 12 18 11.5523 18 11C18 10.4477 17.5523 10 17 10H9C8.44772 10 8 10.4477 8 11C8 11.5523 8.44772 12 9 12V19H7V16H5V19H4V21H5V34H4V36H5V38H7V36L41 36V38H43V36H44V34H43V21H44V19H43V16H41V19H39V12C39.5523 12 40 11.5523 40 11C40 10.4477 39.5523 10 39 10H31ZM37 19V12H33V19L37 19ZM33 21L37 21V26H33V21ZM31 21V29C31 31.2091 32.7909 33 35 33C37.2091 33 39 31.2091 39 29V21H41V34L7 34V21H9V29C9 31.2091 10.7909 33 13 33C15.2091 33 17 31.2091 17 29V21H20V29C20 31.2091 21.7909 33 24 33C26.2091 33 28 31.2091 28 29V21H31ZM26 19V12H22V19H26ZM15 19V12H11V19L15 19ZM11 21L15 21V23H11V21Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('services.show', 'biobank') }}">Biobank</a>
                                    </h3>
                                    <div class="pbmit-serv-cat">
                                        <a href="{{ route('services.index') }}" rel="tag">Sample Processing</a>,
                                        <a href="{{ route('services.index') }}" rel="tag">Biobanking</a>
                                    </div>
                                    <div class="pbmit-service-description">
                                        Sample processing and biobanking for research & clinical services—aliquoting plasma/serum/buffy coat, DNA isolation, QC (Qubit/Nanodrop, electrophoresis), and secure long-term storage.		
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Slide2 -->
                    <article class="pbmit-service-style-1 swiper-slide">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-box-content-wrap">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('frontend/images/service/genomic.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <a class="pbmit-link" href="{{ route('services.show', 'genomic') }}" title="Go to Genomics"></a>
                                <div class="pbmit-heading-box">
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('services.show', 'genomic') }}">Genomic</a>
                                    </h3>
                                </div>
                                <div class="pbmit-content-box">
                                    <div class="pbmit-service-number">02</div>
                                    <div class="pbmit-service-icon">
                                        <svg class="w-64 h-64" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 506 512" fill="currentColor"><path d="m336.74152 0.00400292c-5.73115-0.1201046-12.48097 2.4529367-19.85906 9.1791138-46.53299 64.30869-24.74196 112.63817 0.66837 195.09468 27.58873 89.52542 3.31131 151.02322-96.92199 122.12402l13.97379 45.02109c121.40772 18.24633 145.71289-69.78429 129.37807-145.86926-22.33117-104.01487-54.15143-129.4267-9.83949-196.18929 5.23292-11.154198-2.75341-29.053421-17.39969-29.360355zm40.46055 45.635422c-8.07985 4.780856-10.91038 11.338059-11.19224 25.86641 32.62484 27.344901 60.36088 65.991125 82.17978 93.207925-8.0736 4.80892-18.18039 9.24981-29.2623 7.89239-10.3348-14.49301-37.84709-47.05025-58.23645-66.70916 1.66195 17.84526 6.5349 31.11518 8.01447 46.57195 31.96758 35.88994 33.66475 54.17618 33.66475 54.17618 41.24123 2.09155 76.02765-15.90116 99.23928-36.80851 12.51926-10.74801-4.99564-39.88399-27.33922-19.88508-30.18389-37.48554-61.41445-73.663738-97.06807-104.3121zm-135.39743 90.390345c-64.64745-0.73819-110.81681 48.59515-107.62596 112.7268 5.05111 56.14277 30.39886 92.91282 34.4632 138.26303l-27.75746-31.35347c-10.85496-1.19104-20.37054-2.67601-32.08588 3.79212l58.53261 61.9505c-1.583 9.51662-4.24198 19.55827-8.2646 30.31689-22.90568-22.01255-49.86811-55.03233-79.440252-87.00847-17.089179 3.79267-26.496464 13.46902-26.670857 13.75967l93.325979 100.59404c-24.19414 26.77881 17.50222 44.95274 36.45031 23.43305 65.19258-75.95155 14.96049-165.88072-6.38956-252.31856l47.51847 51.68079c16.75212 9.18649 39.17241 8.91835 47.48245 3.83614l-91.22481-94.87085c4.71318-10.52273 9.68418-13.14505 21.04372-18.75845l88.98156 92.73966c5.63414-10.58385 14.01778-20.68689 3.3979-43.30012l-57.92027-64.10571c9.89294-3.31337 31.81077 3.57633 48.98129 8.94298l-14.04983-46.8361c-9.89952-2.2521-19.51266-3.37848-28.74801-3.48394zm-143.0597 164.02338c-45.41948-0.47206-70.368163 18.21323-91.777123 37.05064-19.17018 16.97753 5.0151703 47.96486 26.71088 32.05586 27.196677-24.26249 50.116258-37.07057 93.588128-33.96092l-7.75432-33.71478c-7.3734-0.90476-14.27907-1.36336-20.767565-1.4308z"></path></svg>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('services.show', 'genomic') }}">Genomic</a>
                                    </h3>
                                    <div class="pbmit-serv-cat">
                                        <a href="{{ route('services.index') }}" rel="tag">Genomic Services</a>,
                                        <a href="{{ route('services.index') }}" rel="tag">Precision Medicine</a>
                                    </div>
                                    <div class="pbmit-service-description">
                                        Genomic testing and analysis—targeted sequencing (e.g., MODY, Familial Hypercholesterolemia), pharmacogenomics, nutrigenomics, and human variant analysis supported by CRU genomic laboratory infrastructure.				
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Slide3 -->
                    {{-- <article class="pbmit-service-style-1 swiper-slide">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-box-content-wrap">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('frontend/images/service/bacterial-analysis.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <a class="pbmit-link" href="{{ route('services.show', 'bacterial-analysis') }}" title="Go to Bacterial Analysis"></a>
                                <div class="pbmit-heading-box">
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('services.show', 'bacterial-analysis') }}">Bacterial Analysis</a>
                                    </h3>
                                </div>
                                <div class="pbmit-content-box">
                                    <div class="pbmit-service-number">03</div>
                                    <div class="pbmit-service-icon">
                                        <svg id="line_icons" height="512" viewBox="0 0 74 74" width="512" xmlns="http://www.w3.org/2000/svg" data-name="line icons"><path d="m58.522 72h-46.436a1 1 0 0 1 -1-1v-6.879a1 1 0 0 1 1-1h46.436a1 1 0 0 1 1 1v6.879a1 1 0 0 1 -1 1zm-45.436-2h44.436v-4.879h-44.436z"></path><path d="m55.943 65.121h-18.08a1 1 0 0 1 -1-1v-9.632a1 1 0 0 1 1-1h9.737a1 1 0 0 1 .755.345l8.345 9.632a1 1 0 0 1 -.756 1.655zm-17.08-2h14.891l-6.609-7.632h-8.282z"></path><path d="m37.863 55.489h-18.382a1 1 0 0 1 -1-1v-3.956a1 1 0 0 1 1-1h18.382a1 1 0 0 1 1 1v3.956a1 1 0 0 1 -1 1zm-17.382-2h16.382v-1.956h-16.382z"></path><path d="m53.1 61.846a1 1 0 0 1 -.756-.346l-4.864-5.613a1 1 0 0 1 .234-1.509 12.242 12.242 0 0 0 5.616-8.03 15.428 15.428 0 0 0 -4.35-13.685 1 1 0 0 1 .191-1.593 3.407 3.407 0 0 0 1.713-2.95 3.289 3.289 0 0 0 -.021-.4 1 1 0 0 1 1.48-.993c8.008 4.456 11.9 12.67 10.167 21.438a21.4 21.4 0 0 1 -8.839 13.5.985.985 0 0 1 -.571.181zm-3.368-6.414 3.524 4.068a19.4 19.4 0 0 0 7.292-11.72 17.545 17.545 0 0 0 -7.8-18.465 5.427 5.427 0 0 1 -1.571 2.741 17.577 17.577 0 0 1 4.115 14.681 14.245 14.245 0 0 1 -5.558 8.695z"></path><path d="m39.548 44.083a1 1 0 0 1 -.44-.1l-12.665-6.214a1 1 0 0 1 -.457-1.339l11.633-23.714a1 1 0 0 1 1.338-.457l12.665 6.2a1 1 0 0 1 .458 1.341l-2.257 4.6a1 1 0 0 1 -1.24.5 3.271 3.271 0 0 0 -1.116-.194 3.41 3.41 0 0 0 -1.852 6.277 1 1 0 0 1 .356 1.282l-5.524 11.258a1 1 0 0 1 -.899.56zm-11.326-7.67 10.869 5.332 4.725-9.632a5.411 5.411 0 0 1 4.573-9.33l1.454-2.963-10.868-5.32z"></path><path d="m35.393 48.186a1 1 0 0 1 -.44-.1l-9.211-4.517a1 1 0 0 1 -.457-1.338l2.428-4.951a1 1 0 0 1 1.338-.458l9.21 4.518a1 1 0 0 1 .458 1.338l-2.428 4.951a1 1 0 0 1 -.574.506 1.034 1.034 0 0 1 -.324.051zm-7.872-5.976 7.415 3.637 1.547-3.155-7.415-3.636z"></path><path d="m48.359 18.982a1 1 0 0 1 -.44-.1l-7.019-3.447a1 1 0 0 1 -.458-1.338l3.445-7.023a1 1 0 0 1 1.338-.458l7.023 3.445a1 1 0 0 1 .452 1.339l-3.445 7.023a1 1 0 0 1 -.9.56zm-5.684-4.9 5.225 2.562 2.563-5.227-5.225-2.564z"></path><path d="m54.4 13.229a1 1 0 0 1 -.441-.1l-12.209-5.987a1 1 0 0 1 -.458-1.342l1.592-3.24a1 1 0 0 1 1.338-.46l12.2 5.985a1 1 0 0 1 .457 1.339l-1.587 3.246a1 1 0 0 1 -.574.506 1.026 1.026 0 0 1 -.318.053zm-10.871-7.443 10.408 5.105.71-1.448-10.408-5.1z"></path><path d="m47.466 33.533a5.415 5.415 0 1 1 5.414-5.415 5.421 5.421 0 0 1 -5.414 5.415zm0-8.83a3.415 3.415 0 1 0 3.414 3.415 3.419 3.419 0 0 0 -3.414-3.418z"></path><circle cx="47.466" cy="28.118" r="1.301"></circle><path d="m47.466 29.919a1.8 1.8 0 1 1 1.8-1.8 1.8 1.8 0 0 1 -1.8 1.8zm0-2.6a.8.8 0 1 0 .8.8.8.8 0 0 0 -.8-.802z"></path><circle cx="44.543" cy="59.562" r="1.554"></circle><path d="m44.542 61.616a2.054 2.054 0 1 1 2.058-2.054 2.057 2.057 0 0 1 -2.058 2.054zm0-3.108a1.054 1.054 0 1 0 1.058 1.054 1.055 1.055 0 0 0 -1.058-1.054z"></path></svg>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('services.show', 'bacterial-analysis') }}">Bacterial Analysis</a>
                                    </h3>
                                    <div class="pbmit-serv-cat">
                                        <a href="{{ route('services.index') }}" rel="tag">Microbiology</a>,
                                        <a href="{{ route('services.index') }}" rel="tag">Genomic Surveillance</a>
                                    </div>
                                    <div class="pbmit-service-description">
                                        Bacterial genomics and outbreak support—whole genome sequencing (WGS) and amplicon sequencing (ONT GridION) for identification, resistance analysis, and infection/outbreak investigations.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article> --}}
                    <!-- Slide4 -->
                    <article class="pbmit-service-style-1 swiper-slide">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-box-content-wrap">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('frontend/images/service/clinical-trial.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <a class="pbmit-link" href="{{ route('services.show', 'clinical-trial') }}" title="Go to Clinical Trial"></a>
                                <div class="pbmit-heading-box">
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('services.show', 'clinical-trial') }}">Clinical Trial</a>
                                    </h3>
                                </div>
                                <div class="pbmit-content-box">
                                    <div class="pbmit-service-number">04</div>
                                    <div class="pbmit-service-icon">
                                        <svg class="w-64 h-64" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 30C11 29.4477 11.4477 29 12 29H26C26.5523 29 27 29.4477 27 30C27 30.5523 26.5523 31 26 31H12C11.4477 31 11 30.5523 11 30Z" fill="currentColor"></path>
                                            <path d="M12 34C11.4477 34 11 34.4477 11 35C11 35.5523 11.4477 36 12 36H26C26.5523 36 27 35.5523 27 35C27 34.4477 26.5523 34 26 34H12Z" fill="currentColor"></path>
                                            <path d="M14 21V18H16V21H19V23H16V26H14V23H11V21H14Z" fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 6C13.3431 6 12 7.34315 12 9H9C7.34315 9 6 10.3431 6 12V39C6 40.6569 7.34315 42 9 42H29C30.6569 42 32 40.6569 32 39V12C32 10.3431 30.6569 9 29 9H26C26 7.34315 24.6569 6 23 6H15ZM23 12C23.5523 12 24 11.5523 24 11V9C24 8.44772 23.5523 8 23 8H15C14.4477 8 14 8.44772 14 9V11C14 11.5523 14.4477 12 15 12H23ZM12 11C12 12.6569 13.3431 14 15 14H23C24.6569 14 26 12.6569 26 11H29C29.5523 11 30 11.4477 30 12V39C30 39.5523 29.5523 40 29 40H9C8.44772 40 8 39.5523 8 39V12C8 11.4477 8.44772 11 9 11H12Z" fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36 17C36 15.3431 37.3431 14 39 14C40.6569 14 42 15.3431 42 17V37.3028L39 41.8028L36 37.3028V17ZM39 16C38.4477 16 38 16.4477 38 17V19H40V17C40 16.4477 39.5523 16 39 16ZM39 38.1972L40 36.6972V21H38V36.6972L39 38.1972Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('services.show', 'clinical-trial') }}">Clinical Trial</a>
                                    </h3>
                                    <div class="pbmit-serv-cat">
                                        <a href="{{ route('services.index') }}" rel="tag">Site Support</a>,
                                        <a href="{{ route('services.index') }}" rel="tag">Research Operation</a>
                                    </div>
                                    <div class="pbmit-service-description">
                                        End-to-end clinical trial support—recruitment facilities, site feasibility, site budgeting, and administrative processes, backed by experienced GCP-trained investigators and audit-ready operations.	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service End -->