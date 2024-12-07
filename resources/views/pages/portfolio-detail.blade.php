@extends('base.admin')
@section('title', 'Portfolio Detail')

@section('content')
    @include('components.header')

    <!--================Start Portfolio Details Area =================-->
    <section class="portfolio_details_area">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left_img">
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/portfolio-details.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-5">
                        <div class="portfolio_right_text mt-30">
                            <h4 class="text-uppercase">mini e-commerce</h4>
                            <ul class="list">
                                <li>
                                    <img class="icon" src="{{ asset('assets/svg/like.svg') }}" alt="">
                                    <span>Like</span>: 10K
                                </li>
                                <li>
                                    <img class="icon" src="{{ asset('assets/svg/eye.svg') }}" alt="">
                                    <span>Viewer</span>: 20K
                                </li>
                                <li>
                                    <img class="icon" src="{{ asset('assets/svg/github.svg') }}" alt="">
                                    <span>Github</span>:
                                    <a href="">
                                        github.com</a>
                                </li>
                                <li>
                                    <img class="icon" src="{{ asset('assets/svg/live.svg') }}" alt="">
                                    <span>Website</span>:
                                    <a href="">
                                        gonemaul.my.id</a>
                                </li>
                                <li>
                                    <img class="icon" src="{{ asset('assets/svg/live.svg') }}" alt="">
                                    <span>API</span>:
                                    <a href="">
                                        postman.com</a>
                                </li>
                                <li>
                                    <img class="icon" src="{{ asset('assets/svg/date.svg') }}" alt="">
                                    <span>Datetime</span>: 17 Aug 2018 - 12 September 2018
                                </li>
                                <li class="contributor mt-3"><span>Contributor</span>
                                    <div class="d-flex gap-3">
                                        <a class="person" href="https://github.com" target="_blank">
                                            <img src="{{ asset('assets/img/testimonials/t1.jpg') }}" alt=""
                                                class="rounded-circle">
                                        </a>
                                        <a class="person" href="https://github.com">
                                            <img src="{{ asset('assets/img/testimonials/t2.jpg') }}" alt=""
                                                class="rounded-circle">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Deskripsi</h4>
                <p>Proyek ini adalah aplikasi Mini E-Commerce yang dirancang menggunakan framework Laravel 11. Proyek ini
                    bertujuan untuk menyediakan platform dasar e-commerce dengan fitur-fitur lengkap yang mencakup antarmuka
                    admin berbasis web dan API untuk pengguna umum. Solusi ini menggunakan berbagai teknologi modern untuk
                    meningkatkan pengalaman pengguna, keamanan, dan skalabilitas.</p>
                <h4>Fitur Utama</h4>
                <h4>Penggunaan</h4>
                <h4>Cara Instalasi</h4>
                <div class="instalasi">
                    <div class="terminal">
                        <button class="copy-btn" data-clipboard-target="#step1">Copy</button>
                        <pre id="step1">
                            <code>
                            git clone https://github.com/username/mini-ecommerce.git
                            cd mini-ecommerce
                            composer install
                            npm install
                            </code>
                        </pre>
                    </div>
                    <div class="terminal">
                        <button class="copy-btn" data-clipboard-target="#step2">Copy</button>
                        <pre id="step2">
                            <code>
                            git clone https://github.com/username/mini-ecommerce.git
                            cd mini-ecommerce
                            composer install
                            npm install
                            </code>
                        </pre>
                    </div>
                    <div class="terminal">
                        <button class="copy-btn" data-clipboard-target="#step3">Copy</button>
                        <pre id="step3">
                            <code>
                            git clone https://github.com/username/mini-ecommerce.git
                            cd mini-ecommerce
                            composer install
                            npm install
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
    </section>
    <!--================End Portfolio Details Area =================-->

    {{-- @include('components.news-letter') --}}
    @include('components.footer')
@endsection
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
    <script>
        // Initialize Clipboard.js
        new ClipboardJS('.copy-btn');
    </script>
@endpush
