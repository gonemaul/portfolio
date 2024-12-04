@extends('base.admin')
@section('title', 'Home')

@section('content')
    @include('components.header')
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content">
                            <h3 class="text-uppercase" data-aos="fade-right">Hello</h3>
                            <h1 class="text-uppercase" data-aos="fade-right">I am Ahmad Hasby Maulana</h1>
                            <h5 class="text-uppercase" data-aos="fade-right">backend developer</h5>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home_right_img" data-aos="fade-left">
                            <img class="" src="{{ asset('assets/img/banner/home-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <section class="about_area" id="about_area">
        @include('components.about')
    </section>

    {{-- <section class="brand_area section_gap_top">
        @include('components.brand')
    </section> --}}

    <section class="features_area" id="service_area">
        @include('components.features')
    </section>

    <section class="portfolio_area" id="portfolio">
        @include('components.portfolio')
    </section>

    {{-- @include('components.testimoni') --}}

    @include('components.news-letter')

    @include('components.footer')
@endsection
