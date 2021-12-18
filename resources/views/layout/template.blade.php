<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOUNCE</title>
    <link rel="shortcut icon" href="{{ asset('template') }}/image/favicon.png" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="{{ asset('template') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('template') }}/fonts/icon-font/css/style.css">
    <link rel="stylesheet" href="{{ asset('template') }}/fonts/typography-font/typo.css">
    <link rel="stylesheet" href="{{ asset('template') }}/fonts/fontawesome-5/css/all.css">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/aos/aos.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/nice-select/nice-select.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/slick/slick.min.css">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{ asset('template') }}/css/main.css">
    <!-- Custom stylesheet -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'DM Sans', sans-serif;">
    <div class="site-wrapper overflow-hidden position-relative">
        <!-- Site Header -->
        <!--Site Header Area -->
        <header class="site-header site-header--menu-center landing-1-menu site-header--absolute site-header--sticky">
            <div class="container-fluid">
                <nav class="navbar site-navbar">
                    <!-- Brand Logo-->
                    <div class="brand-logo">
                        <a href="/">
                            <!-- light version logo (logo must be black)-->
                            <img src="{{ asset('template') }}/image/logo/bounce-black.png" alt=""
                                class="light-version-logo">
                            <!-- Dark version logo (logo must be White)-->
                            <img src="{{ asset('template') }}/image/logo/bounce-white.png" alt=""
                                class="dark-version-logo">
                        </a>
                    </div>
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main">
                                <li class="nav-item">
                                    <a href="solusi_bisnis" class="nav-link-item">Solusi Bisnis</a>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="fitur" class="nav-link-item drop-trigger">Fitur<i
                                            class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu--item">
                                            <a>Kasir</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a>Inventori</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a>Karyawan</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a>Laporan Keuangan</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="harga" class="nav-link-item">Harga</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link-item">Inspirasi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link-item">Hubungi Kami</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    {{-- <div class="header-btns  header-btns  ms-auto d-none d-xs-inline-flex">
                        <a class="btn log-in-btn focus-reset" href="#">
                            Sign In
                        </a>
                        <a class="btn sign-in-btn focus-reset" href="#">
                            Coba Gratis
                        </a>
                    </div> --}}
                    <div class="header-btns  header-btns ms-auto d-none d-xs-inline-flex">
                        <a class="btn log-in-btn focus-reset" href="#">
                            Sign In
                        </a>
                        <a class="btn sign-in-btn focus-reset" href="#">
                            Coba Gratis
                        </a>
                    </div>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                    <!--/.Mobile Menu Hamburger Ends-->
                </nav>
            </div>
        </header>
        <!-- navbar- -->

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>

        <!-- Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row justify-content-md-between justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                        <div class="join-us-content text-center text-md-start">
                            <h2>200K+ People joined us.
                                When are you joining?</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-8">
                        <div class="join-us-btn text-md-end text-center">
                            <button class="btn">Get Started Now</button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="border border-footer"></div>
                    </div>
                </div>
                <div class="row footer-quick-link-area justify-content-lg-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-area-list-item">
                            <h4>THEME PAGES</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Home Pages</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-area-list-item">
                            <h4>COMPANY BIO</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Sales Tools Catalog</a></li>
                                <li><a href="#">Academy</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-area-list-item">
                            <h4>PARTNERSHIP</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Peseller Program</a></li>
                                <li><a href="#">AI Labs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-area-list-item get-in-touch-area">
                            <h4>get in touch</h4>
                            <p>Contact us any time for getting support.</p>
                            <h3>bounceteknologi@gmail.com</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- Vendor Scripts -->
    <script src="{{ asset('template') }}/js/vendor.min.js"></script>
    <!-- Plugin's Scripts -->
    <script src="{{ asset('template') }}/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="{{ asset('template') }}/plugins/nice-select/jquery.nice-select.min.js"></script>
    <script src="{{ asset('template') }}/plugins/aos/aos.min.js"></script>
    <script src="{{ asset('template') }}/plugins/slick/slick.min.js"></script>
    <script src="https://porjoton.netlify.app/mekanic/js/waypoints.min.js"></script>
    <script src="{{ asset('template') }}/plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="{{ asset('template') }}/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('template') }}/plugins/isotope/packery.pkgd.min.js"></script>
    <script src="{{ asset('template') }}/plugins/isotope/image.loaded.js"></script>
    <script src="{{ asset('template') }}/plugins/menu/menu.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('template') }}/plugins/swiper/swiper.js"></script>
    <!-- Activation Script -->
    <script src="{{ asset('template') }}/js/custom.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
