<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pasha Enterprises - Cargo Freight Company</title>
        <meta name="description" content="Pasha Enterprises - Cargo Freight Company">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/default.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    </head>
    <body>

        <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="P" class="letters-loading">
                            P
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="H" class="letters-loading">
                            H
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                        <span data-text-preloader="T" class="letters-loading">
                            T
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                        <span data-text-preloader="P" class="letters-loading">
                            P
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                    </div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- header-start -->
        <header class="transparent-header s-transparent-header">
            <div class="third-header-top d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-4">
                            <div class="third-logo text-center">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/white_logo.png')}}" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="third-header-contact">
                                <div class="third-header-form">
                                    <form action="#">
                                        <input type="text" placeholder="Enter Tracking Id...">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="third-hrader-contact-list">
                                    <ul>
                                        <li>
                                            <div class="thc-icon">
                                                <i class="fas fa-headphones"></i>
                                            </div>
                                            <div class="thc-content">
                                                <p><span>Call :</span><a class="text-white" href="tel:+92-3132062283">+92-3132062283</a></p>
                                                <p><a class="text-white" href="mailto:info@pashaenterprises.org" target="_blank">info@pashaenterprises.org</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thc-icon">
                                                <i class="fas fa-map-marker"></i>
                                            </div>
                                            <div class="thc-content">
                                                <p><a class="text-white" href="https://www.google.com/maps/search/Karachi%2C%20Sindh%2C%20Pakistan/@24.8607,67.0011,17z?hl=en" target="_blank">ANNEXE, M.T KHAN ROAD</a></p>
                                                <p>Karachi</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="main-header third-main-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/new_logo.png')}}" class="mobile-logo logo-none" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 d-none d-md-block">
                            <div class="menu-area">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('about_us') }}">Company</a></li>
                                            <li><a href="{{ route('home') }}">Tracking</a></li>
                                            {{-- <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Services</a>
                                                        <ul class="submenu">
                                                            <li><a href="service-air.html">Services Air</a></li>
                                                            <li><a href="service-Railway.html">Services Railway</a></li>
                                                            <li><a href="service-door-to-door.html">Services Door to Door</a></li>
                                                            <li><a href="service-warehouse.html">Services warehouse</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="pricing.html">Pricing Plan</a></li>
                                                </ul>
                                            </li> --}}
                                            <li><a href="{{ route('support') }}">Support</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-search t-header-search">
                                    {{-- <a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-magnifying-glass"></i></a> --}}
                                </div>
                                <div class="header-btn s-header-btn">
                                    {{-- <a href="#" class="btn" data-toggle="modal" data-target="#exampleModalLong"><img src="img/icon/calculator-symbols02.png" alt="icon">Get Fare Rate</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-start-end -->

        <!-- main-area -->

        @yield('content')

        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="footer-wrap pt-190 pb-40" data-background="{{ asset('assets/img/bg/footer_bg.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/new_logo.png')}}" alt="img"></a>
                                </div>
                                <div class="footer-text">
                                    <p>Orem Ipsum is simply dumm text the printing and types indstr sum has been the industry
                                    </p>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>USEFUL LINKS</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-caret-right"></i> About us</a></li>
                                        <li><a href="#"><i class="fas fa-caret-right"></i> Delivery Information</a></li>
                                        <li><a href="#"><i class="fas fa-caret-right"></i> Terms & Conditions</a></li>
                                        <li><a href="#"><i class="fas fa-caret-right"></i> Privacy Policy</a></li>
                                        <li><a href="#"><i class="fas fa-caret-right"></i> Refund Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>Support & Downloads</h5>
                                </div>
                                <div class="f-support-content">
                                    <p>Lorem ipsum dolor sit amet, consy eetur adipisc de elit. Quisque act raqum nunc no dolor
                                    </p>
                                    {{-- <a href="#" class="f-download-btn"><img src="{{ asset('assets/img/images/f_download_btn01.png')}}" alt="img"></a>
                                    <a href="#" class="f-download-btn"><img src="{{ asset('assets/img/images/f_download_btn02.png')}}" alt="img"></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-7">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Pasha ENTERPRISES </span> | All Rights Reserved</p>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-5">
                            <div class="f-payment-method text-center text-md-right">
                                <img src="{{ asset('assets/img/images/card_img.png')}}" alt="img">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->




		<!-- JS here -->
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.meanmenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/ajax-form.js')}}"></script>
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <script src="{{ asset('assets/js/aos.js')}}"></script>
        <script src="{{ asset('assets/js/paroller.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>

        @yield('script')

    </body>
</html>
