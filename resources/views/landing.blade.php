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
    <style>
        .scroll-bound {
            height: 3000vh;
            
            .content {
                height: 100vh;
                position: sticky;
                top:0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }    
        
        video {
            width: 1040px; 
            position: fixed; 
            margin-left: 8%;
        }
    </style>
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'DM Sans', sans-serif;">
    <div class="site-wrapper overflow-hidden position-relative">
        <!-- Site Header -->
        <!--Site Header Area -->
        <header class="site-header site-header--menu-right landing-4-menu site-header--absolute site-header--sticky">
            <div class="container">
                <nav class="navbar site-navbar">
                    <!-- Brand Logo-->
                    <div class="brand-logo">
                        <a href="#">
                            <!-- light version logo (logo must be black)-->
                            <img src="{{ asset('template') }}/image/logo/bounce-black.png" alt="" class="light-version-logo">
                            <!-- Dark version logo (logo must be White)-->
                            <img src="{{ asset('template') }}/image/logo/bounce-white.png" alt="" class="dark-version-logo">
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
                                <a href="#" class="nav-link-item">Interface</a>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link-item">Finance</a>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link-item">Inventory</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-btn ms-auto d-none d-sm-block">
                        <a class="btn send-request-btn focus-reset" href="#" style="display: inline-flex">
                        Send Request
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
        <!-- Hero Area -->
        <div class="content-area-l4">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="app">
                            <div id="bound-one" class="scroll-bound">
                                <div class="content">
                                    <video muted preload>
                                        <source src="https://rr3---sn-npoeen7d.googlevideo.com/videoplayback?expire=1641658399&ei=v2PZYbyRBJnxhga2kLjIBA&ip=64.145.79.190&id=o-AK2QZ__bIl_ri-NQ5ehg3Ze0oCQjXFsuxD4kWwPAr2fX&itag=18&source=youtube&requiressl=yes&vprv=1&mime=video%2Fmp4&ns=WpWYYo2A4nRt462ug5477vEG&gir=yes&clen=3070725&ratebypass=yes&dur=59.559&lmt=1628114663557028&fexp=24001373,24007246&c=WEB&txp=5530434&n=atSTC2AqOggLUg&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cns%2Cgir%2Cclen%2Cratebypass%2Cdur%2Clmt&sig=AOq0QJ8wRQIgaJnK1d9XrQKrv3CkT206ltG2JYoBOwJg1qrGUsnOBfUCIQDvQj7K8WFvW_qpd6GTCXLdfnaGQEGcI9S_qtQtJBC-ZA%3D%3D&rm=sn-ab5ee77s&req_id=3a704fb6a593a3ee&ipbypass=yes&redirect_counter=2&cm2rm=sn-htgx20capjpq-jb3l7s&cms_redirect=yes&mh=uF&mip=158.140.180.80&mm=30&mn=sn-npoeen7d&ms=nxu&mt=1641641066&mv=m&mvi=3&pl=24&lsparams=ipbypass,mh,mip,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRQIgPPqugTet8HSegR85Gon_8LSEbRRr2zgTu3syPTUzSfQCIQDOL-_JWi3hsxIIk3DuQV_XmZ0cTjbfnNJzV245QHeG7g%3D%3D" type="video/mp4">
                                        <p>Your user agent does not support the HTML5 Video element.</p>
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video On Scroll JS -->
    <script>
        const registerVideo = (bound, video) => {
            bound = document.querySelector(bound);
            video = document.querySelector(video);
            const scrollVideo = () => {
                if (video.duration) {
                    const distanceFromTop = window.scrollY + bound.getBoundingClientRect().top;
                    const rawPercentScrolled =
                        (window.scrollY - distanceFromTop) /
                        (bound.scrollHeight - window.innerHeight);
                    const percentScrolled = Math.min(Math.max(rawPercentScrolled, 0), 1);
                    video.currentTime = video.duration * percentScrolled;
                }
                requestAnimationFrame(scrollVideo);
            };
            requestAnimationFrame(scrollVideo);
        };
        registerVideo("#bound-one", "#bound-one video");
    </script>
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