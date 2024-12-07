@extends('base.admin')
@section('title', 'Home')

@section('content')
    @include('components.header')
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area" id="home">
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

    <section class="about_area" id="about">
        @include('components.about')
    </section>

    {{-- <section class="brand_area section_gap_top">
        @include('components.brand')
    </section> --}}

    <section class="features_area" id="service">
        @include('components.features')
    </section>

    <section class="portfolio_area" id="portfolio">
        @include('components.portfolio')
    </section>

    {{-- @include('components.testimoni') --}}

    <section class="newsletter_area section_gap_bottom">
        @include('components.news-letter')
    </section>

    @include('components.footer')
@endsection
@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll("section[id]"); // Pastikan setiap elemen target memiliki ID
            const navItems = document.querySelectorAll(".nav-item"); // Seleksi elemen <li>

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        const link = document.querySelector(`a[href="#${entry.target.id}"]`);
                        const listItem = link.closest(".nav-item"); // Dapatkan elemen <li> parent

                        if (entry.isIntersecting) {
                            navItems.forEach((item) => item.classList.remove("active"));
                            listItem.classList.add("active");
                        }
                    });
                }, {
                    threshold: 0.5
                } // Trigger ketika 50% elemen terlihat
            );

            sections.forEach((section) => observer.observe(section));
        });
    </script>
@endpush
