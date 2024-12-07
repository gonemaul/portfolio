@extends('base.admin')
@section('title', 'Portfolio')

@section('content')
    @include('components.header')

    <!--================Start Portfolio Area =================-->
    <section class="portfolio_area" id="portfolio" style="padding-top: 140px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title text-left">
                        <h2>My Project</h2>
                    </div>
                </div>
            </div>
            <div class="filters portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">all</li>
                    <li data-filter=".popular">popular</li>
                    <li data-filter=".latest"> latest</li>
                    <li data-filter=".following">following</li>
                    <li data-filter=".upcoming">upcoming</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row portfolio-grid justify-content-center">
                    <div class="col-lg-4 col-md-6 all latest">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p1.jpg') }}"
                                    alt="">
                                <div class="label api">
                                    API
                                </div>
                                <div class="overlay"></div>
                                {{-- <a href="{{ asset('assets/img/portfolio/p1.jpg') }}" class="img-gal"> --}}
                                <div class="icon">
                                    {{-- <span class="lnr lnr-cross"></span> --}}
                                    <a href="#eye">
                                        <img src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                    </a>
                                    <a href="#live">
                                        <img src="{{ asset('assets/svg/live.svg') }}" alt="">
                                    </a>
                                </div>
                                {{-- </a> --}}
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">minimal design</a></h4>
                                <p>Animated, portfolio</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all popular">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p2.jpg') }}"
                                    alt="">
                                <div class="overlay"></div>
                                <div class="label web">
                                    WEB
                                </div>
                                <a href="{{ asset('assets/img/portfolio/p2.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <img src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                        <img src="{{ asset('assets/svg/live.svg') }}" alt="">
                                        {{-- <span class="lnr lnr-cross"></span> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Paint wall</a></h4>
                                <p>Animated, portfolio</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all latest">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p3.jpg') }}"
                                    alt="">
                                <div class="overlay"></div>
                                <div class="label full">
                                    ALL
                                </div>
                                <a href="{{ asset('assets/img/portfolio/p3.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <img src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                        <img src="{{ asset('assets/svg/live.svg') }}" alt="">
                                        {{-- <span class="lnr lnr-cross"></span> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">female light</a></h4>
                                <p>Animated, portfolio</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all popular">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p4.jpg') }}"
                                    alt="">
                                <div class="overlay"></div>
                                <a href="{{ asset('assets/img/portfolio/p4.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <img src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                        <img src="{{ asset('assets/svg/live.svg') }}" alt="">
                                        {{-- <span class="lnr lnr-cross"></span> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">fourth air</a></h4>
                                <p>Animated, portfolio</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all following">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/p6.jpg') }}"
                                    alt="">
                                <div class="overlay"></div>
                                <a href="{{ asset('assets/img/portfolio/p5.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <img src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                        <img src="{{ asset('assets/svg/live.svg') }}" alt="">
                                        {{-- <span class="lnr lnr-cross"></span> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">together sign</a></h4>
                                <p>Animated, portfolio</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all upcoming">
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
                    <div class="col-lg-4 col-md-6 all upcoming following">
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
                    <div class="col-lg-4 col-md-6 all following">
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
                    <div class="col-lg-4 col-md-6 all upcoming">
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
    </section>
    <!--================End Portfolio Area =================-->

    @include('components.footer')
@endsection
