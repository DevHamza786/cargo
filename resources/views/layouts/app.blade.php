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
        <header>
            <div class="header-top-wrap purple-bg d-none d-md-block">
                <div class="container-fluid header-container-p">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-6">
                            <div class="header-contact">
                                <ul>
                                    <li><i class="fas fa-headphones"></i>Call us <a class="text-white" href="tel:+92-3132062283">+92-3132062283</a></li>
                                    <li><i class="far fa-envelope"></i><a class="text-white" href="mailto:info@pashaenterprises.org" target="_blank">info@pashaenterprises.org</a></li>
                                    <li><i class="fas fa-map-marker"></i><a class="text-white" href="https://www.google.com/maps/search/Karachi%2C%20Sindh%2C%20Pakistan/@24.8607,67.0011,17z?hl=en" target="_blank">ANNEXE, M.T KHAN ROAD</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-6">
                            <div class="header-top-right d-flex justify-content-end align-items-center">
                                <div class="header-country">
                                    {{-- <form action="#">
                                        <select name="name" class="selected">
                                            <option value="">New York</option>
                                            <option value="">Washington</option>
                                            <option value="">Lake</option>
                                            <option value="">Seventh</option>
                                        </select>
                                    </form> --}}
                                </div>
                                <div class="header-social">
                                    <ul>
                                        <li>Follow us :</li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="main-header">
                <div class="container-fluid header-container-p">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/new_logo.png')}}" class="mobile-logo" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 d-none d-md-block">
                            <div class="menu-area">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('about_us') }}">Company</a></li>
                                            <li><a href="{{ route('tracking') }}">Tracking</a></li>
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
                                <div class="header-search">
                                    <a href="#" data-toggle="modal" data-target="#search-modal">
                                        {{-- <i class="flaticon-magnifying-glass"></i> --}}
                                    </a>
                                </div>
                                <div class="header-btn">
                                    <a href="{{ route('login') }}" class="btn rounded" >Sign In</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!-- Modal Search -->
                    {{-- <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Modal -->
                    {{-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content fare-rate-modal">
                                <ul class="nav nav-tabs setup-panel">
                                    <li class="nav-item single-steps">
                                        <a class="nav-link btn-amber" href="#step-1">Select Your Destination</a>
                                    </li>
                                    <li class="nav-item single-steps">
                                        <a class="nav-link btn-blue-grey" href="#step-2">ITEMS TO BE SHIPPED</a>
                                    </li>
                                    <li class="nav-item single-steps">
                                        <a class="nav-link btn-blue-grey" href="#step-3">tracking information</a>
                                    </li>
                                </ul>
                                <form action="#" method="post">
                                    <div class="single-setup" id="step-1">
                                        <div class="fare-rate-tab-content">
                                            <div class="modal-shipping-info">
                                                <ul>
                                                    <li>
                                                        <div class="shipping-step-count">
                                                            <h5>A</h5>
                                                        </div>
                                                        <div class="shipping-address-form">
                                                            <div class="shipping-country-box form-group">
                                                                <label for="from-country">from country</label>
                                                                <input type="text" required="required" id="from-country" placeholder="Select Your Destination">
                                                            </div>
                                                            <div class="shipping-address-box form-group">
                                                                <label for="from-country-location">add your location</label>
                                                                <input type="text" required="required" id="from-country-location" placeholder="Select Your Destination">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="shipping-step-count">
                                                            <h5>B</h5>
                                                        </div>
                                                        <div class="shipping-address-form">
                                                            <div class="shipping-country-box form-group">
                                                                <label for="to-country">TO country</label>
                                                                <input type="text" required="required" id="to-country" placeholder="Select Your Destination">
                                                            </div>
                                                            <div class="shipping-address-box form-group">
                                                                <label for="to-country-location">add your location</label>
                                                                <input type="text" required="required" id="to-country-location" placeholder="Select Your Destination">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="modal-shipping-more-list">
                                                <ul>
                                                    <li><a href="#"><i class="flaticon-credit-card"></i> Don't have an account? No problem Pay by credit card or cash.</a></li>
                                                    <li><a href="#"><i class="flaticon-sings"></i> Get a quick quote and start shipping</a></li>
                                                    <li><a href="#"><i class="flaticon-track"></i> Consult your packaging and delivery options</a></li>
                                                </ul>
                                            </div>
                                            <button class="btn f-right nextBtn-2 btn-success" type="button">one more step</button>
                                        </div>
                                    </div>
                                    <div class="single-setup" id="step-2">
                                        <div class="fare-rate-tab-content">
                                            <div class="modal-shipping-details">
                                                <div class="modal-shipping-title">
                                                    <h2>items <span>details</span></h2>
                                                    <h2 class="f-right">total cost : <span>$ 19.00</span></h2>
                                                </div>
                                                <div class="shipping-details-info">
                                                    <div class="single-shipping-details-box">
                                                        <label for="packaging-size">packaging size</label>
                                                        <select class="custom-select" id="packaging-size">
                                                            <option selected="">Standart Size ( 42” x 36” )</option>
                                                            <option>Standart Size ( 82” x 86” )</option>
                                                            <option>Standart Size ( 102” x 165” )</option>
                                                            <option>Standart Size ( 110” x 205” )</option>
                                                            <option>Standart Size ( 120” x 250” )</option>
                                                        </select>
                                                    </div>
                                                    <div class="single-shipping-details-box shipping-qty">
                                                        <label for="QTY-number">QTY</label>
                                                        <input type="number" value="1" id="QTY-number" required="required">
                                                    </div>
                                                    <div class="single-shipping-details-box shipping-weight">
                                                        <label for="packaging-weight">TOTAL WEIGHT</label>
                                                        <select class="custom-select" id="packaging-weight">
                                                            <option selected="">KG</option>
                                                            <option>20KG</option>
                                                            <option>30KG</option>
                                                            <option>50KG</option>
                                                            <option>80KG</option>
                                                            <option>100KG</option>
                                                        </select>
                                                    </div>
                                                    <div class="single-shipping-details-box shipping-transport">
                                                        <label for="cargo-transport">cargo transport</label>
                                                        <select class="custom-select" id="cargo-transport">
                                                            <option selected="">IN</option>
                                                            <option>1500in</option>
                                                            <option>2000in</option>
                                                            <option>2500in</option>
                                                            <option>3000in</option>
                                                            <option>3500in</option>
                                                            <option>4000in</option>
                                                        </select>
                                                    </div>
                                                    <div class="single-shipping-details-box shipping-product">
                                                        <label for="product-category">product category</label>
                                                        <select class="custom-select" id="product-category">
                                                            <option selected="">Glass Product</option>
                                                            <option>Glass Product</option>
                                                            <option>Glass Product</option>
                                                            <option>Glass Product</option>
                                                            <option>Glass Product</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" required="required" class="custom-control-input" id="customControlInline">
                                                    <label class="custom-control-label" for="customControlInline">Logistics is generally the detailed organization and implementation of a complex operation. In a general business sense, logistics is the management of the flow of things between the point of origin and the point</label>
                                                </div>
                                            </div>
                                            <button class="btn f-left prevBtn-2 btn-success" type="button">Previous</button>
                                            <button class="btn f-right nextBtn-2 btn-success" type="button"><span>$19.00</span> Booking</button>
                                        </div>
                                    </div>
                                    <div class="single-setup" id="step-3">
                                        <div class="fare-rate-tab-content">
                                            <div class="modal-shipping-details">
                                                <div class="modal-shipping-title">
                                                    <h2>tracking <span>information</span></h2>
                                                </div>
                                                <div class="f-left pr-20">
                                                    <div class="shipping-details-info shipping-tracking-info">
                                                        <div class="modal-tracking-info">
                                                            <label for="invoice-id">invoice Id</label>
                                                            <input type="text" id="invoice-id" placeholder="Enter Your Id">
                                                        </div>
                                                        <div class="modal-tracking-info">
                                                            <label>Search invoice</label>
                                                            <button class="btn nextBtn-2 btn-success">find your product</button>
                                                        </div>
                                                    </div>
                                                    <div class="tracking-quots-board">
                                                        <label>your happiness quotes</label>
                                                        <div class="tracking-quots-board-info">
                                                            <img src="img/bg/board_bg.jpg" alt="img">
                                                            <h5>On Board Your Products. Now Product is
                                                            Malaysia Ocean</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tracking-modal-map">
                                                    <div id="contact-map"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
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
                                    <a href="index.html"><img src="{{ asset('assets/img/logo/new_logo.png')}}" alt="img"></a>
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

    </body>
</html>
