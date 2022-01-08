@extends('layout.template')

@section('content')
    <!-- Content Area 1  -->
    <div class="hero-area hero--area-curve text-center bg-position  position-relative"
        style="background: url({{ asset('template') }}/image/landing-1/hero-bg-2.png)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10" data-aos="zoom-in" data-aos-duration="800" data-aos-once="true">
                    <div class="hero-area-content">
                        <div class="hero-area__title">
                            <h2 class="text-white">Kelola Coffee Shop Anda
                                dalam Satu Aplikasi
                            </h2>
                        </div>
                        <div class="hero-area__btn">
                            <button class="btn btn--lg focus-reset text-white" style="background-color: #443DF6">Mulai
                                dengan Bounce</button>
                        </div>
                    </div>
                </div>
                <div class="video-content-area-l4">
                    <div class="row">
                        <div class="col-lg-12" data-aos="zoom-in" data-aos-duration="800" data-aos-once="true">
                            <div class="video-l4-area bg-position  text-center"
                                style="background: url({{ asset('template') }}/image/landing-4/video-bg.png);">
                                <a class="video-icon" data-fancybox=""
                                    href="https://www.youtube.com/embed/9yc1lfFZX-I"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Area 2  -->
    <div class="content-area-2">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-10 col-sm-12 order-lg-0 order-1" data-aos="fade-right" data-aos-duration="800"
                    data-aos-once="true">
                    <div class="content">
                        <div class="section__heading">
                            <h3>Bounce Untuk Coffee Shop
                                Anda
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore
                                et dolore magna aliquyam erat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
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
    <!-- Content Area 3 -->
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
                <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="content">
                        <div class="section__heading">
                            <h3>Mengelola Coffee Shop Anda
                                Lebih Mudah Dengan Bounce
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore
                                et dolore magna aliquyam erat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Area 4 -->
    <div class="faq-area-l9-1">
        <div class="container">
            <div class="col-lg-12" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                <div class="section__heading-2" style="text-align: center">
                    <h2>Frequently asked questions ?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <div class="faq-l9-1">
                        <ul class="accordion p-0">
                            <li>
                                <a>Apa itu Bounce?</a>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat.
                                </p>
                            </li>
                            <li>
                                <a>Apa kelebihan menggunakan Bounce?</a>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat.
                                </p>
                            </li>
                            <li>
                                <a>Siapakah partner Bounce?</a>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
