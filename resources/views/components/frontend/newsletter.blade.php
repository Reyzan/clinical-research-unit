<div class="pbmit-footer-big-area-wrapper">
    <div class="container">
        <div class="pbmit-footer-big-area pbmit-bg-color-secondary">
            <div class="row align-items-center g-0">
                <div class="col-md-12 col-xl-6 pbmit-footer-left">
                    <div class="pbmit-ihbox-style-12">
                        <div class="pbmit-ihbox-box">
                            <div class="pbmit-ihbox-svg">
                                <div class="pbmit-ihbox-svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_4" height="512" viewBox="0 0 24 24" width="512">
                                        <g>
                                            <path d="m21.379 16.913c-1.512-1.278-2.379-3.146-2.379-5.125v-2.788c0-3.519-2.614-6.432-6-6.92v-1.08c0-.553-.448-1-1-1s-1 .447-1 1v1.08c-3.387.488-6 3.401-6 6.92v2.788c0 1.979-.867 3.847-2.388 5.133-.389.333-.612.817-.612 1.329 0 .965.785 1.75 1.75 1.75h16.5c.965 0 1.75-.785 1.75-1.75 0-.512-.223-.996-.621-1.337z"></path>
                                            <path d="m12 24c1.811 0 3.326-1.291 3.674-3h-7.348c.348 1.709 1.863 3 3.674 3z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <div class="pbmit-contents-wrap">
                                    <h2 class="pbmit-element-title">Subscribe to Newsletter</h2>
                                </div>
                                <div class="pbmit-heading-desc">Get exclusive news & offers through our ophtical newsletter</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6">
                    <form action="{{ route('home') }}" method="POST">
                        @csrf
                        <div class="pbmit-footer-newsletter">
                            <div class="pbmit-news-wrap">
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" required>
                                <button class="pbmit-form-btn" type="submit" value="Sign up">
                                    <span class="pbmit-button-inner">
                                        <span class="pbmit-button-icon">
                                            <i class="pbmit-base-icon-mail"></i>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
