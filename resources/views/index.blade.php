@extends('layout.template')
<style>
    .content-area-2 {
        padding: 70px 0px !important;
    }
</style>
@section('content')
    <!-- navbar- -->
    <!-- Content Area 1 -->
    <div class="hero-area hero--area-curve text-center bg-position  position-relative" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10" data-aos="zoom-in" data-aos-duration="800" data-aos-once="true">
                    <div class="hero-area-content">
                        <div class="hero-area__title">
                            <h2 class="text-black">Mulai Bisnis Impian Anda Bersama Bounce</h2>
                        </div>
                        <div class="hero-area__btn">
                            <button class="btn btn--lg focus-reset text-white" style="background-color: #443DF6">Coba Gratis</button>
                        </div>
                    </div>
                </div>
                <div class="video-content-area-l4">
                    <div class="row">
                        <div class="col-lg-12" data-aos="zoom-in" data-aos-duration="800" data-aos-once="true">
                            <div class="video-l4-area bg-position  text-center"
                                style="background: url({{ asset('template') }}/image/landing-4/video-bg.png);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Content Area 2 -->
        <div class="content-area-2">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-right" data-aos-duration="800"
                        data-aos-once="true">
                        <div class="content-image-group-1">
                            <div class="image__1">
                                <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800"
                        data-aos-once="true">
                        <div class="content">
                            <div class="section__heading">
                                <h3>Atur Keuangan Lebih Mudah Dengan
                                    Laporan Pemasukkan Dan Pengeluaran
                                    Dalam Satu Aplikasi Kasir
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore
                                    et dolore magna aliquyam erat.</p>
                            </div>
                            <div class="content__btn">
                                <a href="#" class="btn  btn--link focus-reset focus-reset">Lihat Fitur Pengelolaan
                                    Keuangan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area 3  -->
        <div class="content-area-2">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-10 col-sm-12 order-lg-0 order-1" data-aos="fade-right"
                        data-aos-duration="800" data-aos-once="true">
                        <div class="content">
                            <div class="section__heading">
                                <h3>Laporan Stok Inventori Real-Time Untuk
                                    Membantu Anda Mengelola Beberapa
                                    Outlet Di Saat Yang Bersamaan
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore
                                    et dolore magna aliquyam erat.</p>
                            </div>
                            <div class="content__btn">
                                <a href="#" class="btn  btn--link focus-reset focus-reset">Lihat Fitur Inventori
                                    Otomatis</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800"
                        data-aos-once="true">
                        <div class="content-image-group-1">
                            <div class="image__1">
                                <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area 4 -->
        <div class="content-area-2">
            <div class="container" style="padding-bottom: 70px">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-right" data-aos-duration="800"
                        data-aos-once="true">
                        <div class="content-image-group-1">
                            <div class="image__1">
                                <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800"
                        data-aos-once="true">
                        <div class="content">
                            <div class="section__heading">
                                <h3>Tingkatkan Kepuasan Pelanggan
                                    Dengan Layanan Yang Lebih Efisien
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore
                                    et dolore magna aliquyam erat.</p>
                            </div>
                            <div class="content__btn">
                                <a href="#" class="btn  btn--link focus-reset focus-reset">Lihat Tampilan POS Bounce</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area 5 -->
        <div class="career-video-area bg-position aos-init aos-animate"
            style="background: url({{ asset('template') }}/image/landing-7/video-bg.png)" data-aos="zoom-in"
            data-aos-duration="800" data-aos-once="true">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="career-video-icon text-center">
                            <a class="video-icon" data-fancybox="" href="https://www.youtube.com/watch?v=7BUeUKOq0n0"><i
                                    class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area 6 -->
        <div class="testimonial-area-2">
            <div class="container">
                <div class="row justify-content-lg-start justify-content-center align-items-center">
                    <div class="col-xl-6 col-lg-5 col-md-7 col-sm-7 col-xs-8 position-relative" data-aos="fade-up"
                        data-aos-duration="800" data-aos-once="true">
                        <div class="quote-image">
                            <img src="{{ asset('template') }}/image/landing-2/quote_icon.png" alt="image">
                        </div>
                        <div class="l2-testimonial-image-slider">
                            <div class="single-item focus-reset position-relative">
                                <div class="testimonial-image">
                                    <img class="d-inline-block mw-100"
                                        src="{{ asset('template') }}/image/landing-2/testimonial-1.png" alt="img">
                                </div>
                            </div>
                            <div class="single-item focus-reset">
                                <div class="testimonial-image">
                                    <img class="d-inline-block mw-100"
                                        src="{{ asset('template') }}/image/career/testimonial-img.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-9" data-aos="fade-down" data-aos-duration="800"
                        data-aos-once="true">
                        <div class="l2-testimonial-text-slider">
                            <div class="single-item focus-reset">
                                <div class="content text-lg-start text-center">
                                    <h2>Clients <br>
                                        Testimonials</h2>
                                    <div class="star-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut
                                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                        justo duo dolores et
                                        ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.”</p>
                                    <div
                                        class="client-identity d-flex align-items-center justify-content-lg-start justify-content-center">
                                        <div class="icon">
                                            <i class="fas fa-puzzle-piece"></i>
                                        </div>
                                        <div class="client-info">
                                            <h6>David Herison</h6>
                                            <span>Founder & CEO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item focus-reset">
                                <div class="content text-lg-start text-center">
                                    <h2>Clients <br>
                                        Testimonials 2</h2>
                                    <div class="star-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut
                                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                        justo duo dolores et
                                        ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.”</p>
                                    <div
                                        class="client-identity d-flex align-items-center justify-content-lg-start justify-content-center">
                                        <div class="icon">
                                            <i class="fas fa-puzzle-piece"></i>
                                        </div>
                                        <div class="client-info">
                                            <h6>David Herison</h6>
                                            <span>Founder & CEO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="next-prev-btn3 d-flex justify-content-center justify-content-lg-start">
                            <span class="prev3 active">Prev Story </span>
                            <span class="next3"> Next Story </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
