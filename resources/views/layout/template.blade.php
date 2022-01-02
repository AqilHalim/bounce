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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body data-theme-mode-panel-active data-theme="light" style="font-family: 'DM Sans', sans-serif;">
        <div class="site-wrapper overflow-hidden position-relative">
            <!-- Site Header -->
            <!--Site Header Area -->
            <header class="site-header site-header--menu-center landing-1-menu site-header--absolute site-header--sticky" style="background: #fff">
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
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a>Inventori</a>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a>Karyawan</a>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a>Laporan Keuangan</a>
                                                <p>Lorem ipsum dolor sit amet.</p>
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
                        <div class="header-btns  header-btns ms-auto d-none d-sm-block" style="margin-top: 16px">
                            <a class="btn log-in-btn focus-reset" style="display: inline-flex" data-bs-toggle="modal" data-bs-target="#modal_login">
                            Login
                            </a>
                            <a class="btn sign-in-btn focus-reset" style="display: inline-flex;" href="#">
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
            
            <!-- Modal Login-->
            <div class="modal fade" id="modal_login" tabindex="-1" aria-labelledby="modal_loginLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <img src="{{ asset('template') }}/image/logo/bounce-black.png" style="width: 100px">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0"></legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Remeber Me
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-target="#modal_register" data-bs-toggle="modal" data-bs-dismiss="modal" style="color: #fff">Register</button>
                        <button type="button" class="btn btn-primary" style="color: #fff">Login</button>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal Register-->
            <div class="modal fade" id="modal_register" tabindex="-1" aria-labelledby="modal_registerLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <img src="{{ asset('template') }}/image/logo/bounce-black.png" style="width: 100px">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="inputName">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPhone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="inputPhone">
                            </div>   
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-target="#modal_login" data-bs-toggle="modal" data-bs-dismiss="modal" style="color: #fff">Back</button>
                        <button type="button" class="btn btn-success" style="color: #fff">Register</button>
                    </div>
                    </div>
                </div>
            </div>

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
                                <h3>bouncetech@gmail.com</h3>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
