    <!--================Start Portfolio Area =================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title text-left" data-aos="fade-right" data-aos-duration="1000">
                    <h2>quality work <br>
                        Recently done project </h2>
                </div>
            </div>
        </div>
        <div class="filters portfolio-filter">
            <ul>
                <li class="active" data-filter="*">all</li>
                <li data-filter=".popular">api</li>
                <li data-filter=".latest"> web</li>
                <li data-filter=".following">web + api</li>
            </ul>
        </div>

        <div class="filters-content">
            <div class="row portfolio-grid justify-content-center">
                <div class="col-lg-4 col-md-6 all latest" data-aos="fade-up" data-aos-duration="950">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p1.jpg') }}"
                                alt="">
                            <div class="label full">
                                Web + API
                            </div>
                            <div class="overlay"></div>
                            <a href="{{ asset('assets/img/portfolio/p1.jpg') }}" class="img-gal">
                                <div class="icon">
                                    <a href="#eye">
                                        <img src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                    </a>
                                    <a href="#live">
                                        <img src="{{ asset('assets/svg/live.svg') }}" alt="">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4>
                                <a href="{{ route('portfolio_detail') }}">Mini E-Commerce</a>
                                <img src="{{ asset('assets/svg/auth.svg') }}" alt="">
                                <img src="{{ asset('assets/svg/live.svg') }}" alt="">
                            </h4>
                            <p class="m-0 py-2"><img src="{{ asset('assets/svg/date.svg') }}" alt="">
                                20 November 2024 - 13 Desember 2024</p>
                            <div class="bottom d-flex justify-content-start">
                                <div class="like mr-3 fw-medium">
                                    <img class="mr-1" src="{{ asset('assets/svg/like.svg') }}" alt="">
                                    27K
                                </div>
                                <div class="show fw-medium">
                                    <img class="mr-1" src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                    30K
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all popular" data-aos="fade-up" data-aos-duration="950">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p2.jpg') }}"
                                alt="">
                            <div class="label web">
                                Web
                            </div>
                            <div class="overlay"></div>
                            <a href="{{ asset('assets/img/portfolio/p2.jpg') }}" class="img-gal">
                                <div class="icon">
                                    <a href="#eye">
                                        <img src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4>
                                <a href="{{ route('portfolio_detail') }}">Mini E-Commerce</a>
                                <img src="{{ asset('assets/svg/live.svg') }}" alt="">
                            </h4>
                            <p class="m-0 py-2"><img src="{{ asset('assets/svg/date.svg') }}" alt="">
                                20 November 2024 - Saat ini</p>
                            <div class="bottom d-flex justify-content-start">
                                <div class="like mr-3 fw-medium">
                                    <img class="mr-1" src="{{ asset('assets/svg/like.svg') }}" alt="">
                                    27K
                                </div>
                                <div class="show fw-medium">
                                    <img class="mr-1" src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                    30K
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all latest" data-aos="fade-up" data-aos-duration="950">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p3.jpg') }}"
                                alt="">
                            <div class="overlay"></div>
                            <a href="{{ asset('assets/img/portfolio/p3.jpg') }}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4>
                                <a href="#">Mini E-Commerce</a>
                                <img src="{{ asset('assets/svg/auth.svg') }}" alt="">
                            </h4>
                            <p class="m-0 py-2"><img src="{{ asset('assets/svg/date.svg') }}" alt="">
                                20 November 2024 - 13 Desember 2024</p>
                            <div class="bottom d-flex justify-content-start">
                                <div class="like mr-3 fw-medium">
                                    <img class="mr-1" src="{{ asset('assets/svg/like.svg') }}" alt="">
                                    27K
                                </div>
                                <div class="show fw-medium">
                                    <img class="mr-1" src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                    30K
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all popular" data-aos="fade-up" data-aos-duration="950">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p4.jpg') }}"
                                alt="">
                            <div class="overlay"></div>
                            <a href="{{ asset('assets/img/portfolio/p4.jpg') }}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">fourth air</a></h4>
                            <p>Animated, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all following" data-aos="fade-up" data-aos-duration="950">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p6.jpg') }}"
                                alt="">
                            <div class="overlay"></div>
                            <a href="{{ asset('assets/img/portfolio/p5.jpg') }}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">together sign</a></h4>
                            <p>Animated, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all upcoming" data-aos="fade-up" data-aos-duration="950">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p5.jpg') }}"
                                alt="">
                            <div class="overlay"></div>
                            <a href="{{ asset('assets/img/portfolio/p6.jpg') }}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">multiply fowl</a></h4>
                            <p>Animated, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all upcoming following" data-aos="fade-up" data-aos-duration="950">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p7.jpg') }}"
                                alt="">
                            <div class="overlay"></div>
                            <a href="{{ asset('assets/img/portfolio/p7.jpg') }}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">green heaven</a></h4>
                            <p>Animated, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all following" data-aos="fade-up" data-aos-duration="950">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p8.jpg') }}"
                                alt="">
                            <div class="overlay"></div>
                            <a href="{{ asset('assets/img/portfolio/p8.jpg') }}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4>fly male</h4>
                            <p>Animated, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all upcoming" data-aos="fade-up" data-aos-duration="950">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p9.jpg') }}"
                                alt="">
                            <div class="overlay"></div>
                            <a href="{{ asset('assets/img/portfolio/p9.jpg') }}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">season face</a></h4>
                            <p>Animated, portfolio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Portfolio Area =================-->
