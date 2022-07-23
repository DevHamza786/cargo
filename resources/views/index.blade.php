@extends('layouts.app')

@section('content')
    <main>

        <!-- slider-area -->
        <section class="s-slider-area">
            <div class="s-slider-bg fix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="s-slider-content text-center">
                                <h6><span class="dots"></span>Cargo & Freight Compan<span class="dots2"></span></h6>
                                <h2 class="frame-1"><span>PASHA</span> ENTERPRISES</h2>
                                <h2 class="frame-2"><span>PASHA</span> ENTERPRISES</h2>
                                <h2 class="frame-3"><span>PASHA</span> ENTERPRISES</h2>
                                <h2 class="frame-4"><span>PASHA</span> ENTERPRISES</h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container tracking-div" style="padding-top: 130px;">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-11">
                            <div class="slider-form" data-animation="fadeInUpS" data-delay=".9s">
                                <form action="#">
                                    <input type="text" placeholder="Tracking id">
                                    <button class="btn">Tracking</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#category-section" class="icon-scroll">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <div class="slider-golve">
                    <img src="{{ asset('assets/img/slider/golve.png') }}" class="rotateme" alt="">
                </div>
                <div class="slider-golve-bike">
                    <img src="{{ asset('assets/img/slider/bike.png') }}" alt="">
                </div>
                <div class="slide-golve-car">
                    <img src="{{ asset('assets/img/slider/car.png') }}" alt="">
                </div>
                <div class="slider-plane">
                    <img src="{{ asset('assets/img/slider/plane.png') }}" alt="">
                </div>
            </div>
        </section>
        <!-- slider-area-end -->


        <!-- category-area -->
        <section id="category-section" class="category-area">
            <div class="container">
                <div class="category-bg">
                    <div class="row">
                        <div class="col-12">
                            <div class="category-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="category-icon">
                                                <i class="flaticon-cruise"></i>
                                            </div>
                                            <h5>Sea Freight</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-air.html">
                                            <div class="category-icon">
                                                <i class="flaticon-air-freight"></i>
                                            </div>
                                            <h5>Air Freight</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="category-icon">
                                                <i class="flaticon-delivery-1"></i>
                                            </div>
                                            <h5>Insurance</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="category-icon">
                                                <i class="flaticon-warehouse"></i>
                                            </div>
                                            <h5>Warehousing</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="category-icon">
                                                <i class="flaticon-package"></i>
                                            </div>
                                            <h5>Forwarding</h5>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category-area-end -->

        <!-- services-area -->
        <section class="services-area delivery-bg pt-110 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title text-center mb-60">
                            <h2>Cargo Delivery</h2>
                            <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                small cargo. This service
                                is useful for companies various.</p>
                        </div>
                    </div>
                </div>
                <div class="services-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-services mb-30">
                                <div class="services-thumb">
                                    <a href="#"><img src="{{ asset('assets/img/images/services_img01.jpg') }}"
                                            alt="img"></a>
                                </div>
                                <div class="services-content">
                                    <div class="services-icon">
                                        <i class="flaticon-shipping-and-delivery"></i>
                                    </div>
                                    <h3><a href="#">More Control, for Free</a></h3>
                                    <span>Delivery Service</span>
                                    <p>Express delivery is an innovativ service is effective logistics solutio for delivery
                                        of small cargo service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-services mb-30">
                                <div class="services-thumb">
                                    <a href="#"><img src="{{ asset('assets/img/images/services_img02.jpg') }}"
                                            alt="img"></a>
                                </div>
                                <div class="services-content">
                                    <div class="services-icon">
                                        <i class="flaticon-shipping"></i>
                                    </div>
                                    <h3><a href="#">Expand with E-Commerce</a></h3>
                                    <span>Delivery Service</span>
                                    <p>Express delivery is an innovativ service is effective logistics solutio for delivery
                                        of small cargo service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-services mb-30">
                                <div class="services-thumb">
                                    <a href="#"><img src="{{ asset('assets/img/images/services_img03.jpg') }}"
                                            alt="img"></a>
                                </div>
                                <div class="services-content">
                                    <div class="services-icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <h3><a href="#">More Than Anywhere Shipping</a></h3>
                                    <span>Delivery Service</span>
                                    <p>Express delivery is an innovativ service is effective logistics solutio for delivery
                                        of small cargo service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="international-services position-relative pb-120 fix">
            <div class="container">
                <div class="services-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="int-services-img text-center text-lg-right">
                                <img src="{{ asset('assets/img/images/int_cargo_img.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="s-section-title mb-30">
                                <h2>International Cargo</h2>
                                <h6>Express delivery is an innovative service</h6>
                            </div>
                            <div class="int-services-content">
                                <p>Express delivery is an innovative service is effective logistics solution for the
                                    delivery of small cargo. This service
                                    is useful for companies of various effective logistics scale.</p>
                                <a href="#" class="btn">comparison</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                data-paroller-direction="horizontal">Cargo</div>
        </section>
        <!-- services-area-end -->

        <!-- video-area -->
        <section class="video-area video-bg">
            <div class="container">
                <div class="video-overlay">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-8 order-2 order-lg-0">
                            <div class="video-title">
                                <span>Our Chalanges</span>
                                <h2><span>never</span> break our promise</h2>
                                <a href="#">more services<span></span></a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="video-play">
                                <a href="https://www.youtube.com/watch?v=iWKu6WNFf9M" class="popup-video"><img
                                        src="{{ asset('assets/img/icon/play_btn.png') }}" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-area-end -->

        <!-- delivery-services -->
        <section class="delivery-services position-relative fix pt-110">
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                data-paroller-direction="horizontal">service</div>
            <div class="delivery-services-bg"></div>
            <div class="container">
                <div class="delivery-services-wrap">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-10">
                            <div class="s-section-title text-center mb-60">
                                <h2>Cargo Delivery service</h2>
                                <p>Express delivery is an innovative service is effective logistics solution for the
                                    delivery of small
                                    cargo. This service is useful for companies various.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-delivery-services mb-70 pr-75">
                                <div class="ds-icon order-0 order-md-2">
                                    <img src="{{ asset('assets/img/icon/ds_icon01.png') }}" alt="icon">
                                </div>
                                <div class="ds-content text-center text-sm-left text-md-right">
                                    <h5>Cargo Delivery</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pr-75">
                                <div class="ds-icon order-0 order-md-2">
                                    <img src="{{ asset('assets/img/icon/ds_icon02.png') }}" alt="icon">
                                </div>
                                <div class="ds-content text-center text-sm-left text-md-right">
                                    <h5>Satisfied clients</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pr-75">
                                <div class="ds-icon order-0 order-md-2">
                                    <img src="{{ asset('assets/img/icon/ds_icon03.png') }}" alt="icon">
                                </div>
                                <div class="ds-content text-center text-sm-left text-md-right">
                                    <h5>Door to door</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 d-none d-xl-block">
                            <div class="d-services-img">
                                <img src="{{ asset('assets/img/images/delivery_services_img.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-delivery-services mb-70 pl-75">
                                <div class="ds-icon">
                                    <img src="{{ asset('assets/img/icon/ds_icon04.png') }}" alt="icon">
                                </div>
                                <div class="ds-content">
                                    <h5>International delivery</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pl-75">
                                <div class="ds-icon">
                                    <img src="{{ asset('assets/img/icon/ds_icon05.png') }}" alt="icon">
                                </div>
                                <div class="ds-content">
                                    <h5>Heavy Boxes Cargo</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pl-75">
                                <div class="ds-icon">
                                    <img src="{{ asset('assets/img/icon/ds_icon06.png') }}" alt="icon">
                                </div>
                                <div class="ds-content">
                                    <h5>cargo insurance</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- delivery-services-end -->

        <!-- fact-area -->
        <section class="fact-area pt-120 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-package"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">3,560</span> km</h4>
                                <h6>Package Delivered</h6>
                                <p>Express delivery is an innaiv service effective logistics solution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-placeholder"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">195</span></h4>
                                <h6>Countries Covered</h6>
                                <p>Express delivery is an innaiv service effective logistics solution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">456</span> k</h4>
                                <h6>Happy Customer</h6>
                                <p>Express delivery is an innaiv service effective logistics solution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-like"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">99</span> Yr</h4>
                                <h6>Year Experience</h6>
                                <p>Express delivery is an innaiv service effective logistics solution</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- section-area -->
        <section class="area-wrapper black-bg position-relative pt-115 pb-120">
            <div class="area-wrap-bg"></div>
            <div class="testimonial-map-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-area">
                            <div class="section-title white-title mb-55">
                                <h6>Happy Customer Quotes</h6>
                                <h2>Our Top Reviews</h2>
                            </div>
                            <div class="testimonial-active">
                                <div class="single-testimonial">
                                    <div class="testimonial-cat mb-30">
                                        <h5>Shipping Cargo</h5>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-content mb-45">
                                        <p>“ Express delivery is an innovative service is effective logistics solution for
                                            the delivery of small cargo. This
                                            service is useful companied various effective logistics scala ”</p>
                                    </div>
                                    <div class="testimonial-avatar">
                                        <div class="testi-avatar-img">
                                            <img src="{{ asset('assets/img/images/testi_avatar01.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="testi-avatar-info">
                                            <h6>Tonoy Alexander</h6>
                                            <span>Founder Cargo</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <div class="testimonial-cat mb-30">
                                        <h5>Air Freight</h5>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-content mb-45">
                                        <p>“ Express delivery is an innovative service is effective logistics solution for
                                            the delivery of small cargo. This
                                            service is useful companied various effective logistics scala ”</p>
                                    </div>
                                    <div class="testimonial-avatar">
                                        <div class="testi-avatar-img">
                                            <img src="{{ asset('assets/img/images/testi_avatar02.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="testi-avatar-info">
                                            <h6>Lanu Dexander</h6>
                                            <span>Founder Cargo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                    <div class="cta-area cta-pl">
                        <div class="section-title white-title mb-60">
                            <h6>Clients Trust Us</h6>
                            <h2>Cargo Request Quote</h2>
                        </div>
                        <div class="cta-from">
                            <form action="#">
                                <div class="cta-form-col d-flex justify-content-between">
                                    <select class="custom-select">
                                        <option selected="">Select Service</option>
                                        <option>Air Freight</option>
                                        <option>Shipping Cargo</option>
                                        <option>Rail Cargo</option>
                                        <option>Warehousing</option>
                                    </select>
                                    <input type="text" placeholder="Length cm">
                                    <input type="text" placeholder="Hight cm">
                                </div>
                                <div class="cta-form-col d-flex justify-content-between">
                                    <select class="custom-select">
                                        <option selected="">From Country</option>
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected="">To Country</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                    </select>
                                </div>
                                <div class="cta-form-col d-flex justify-content-between">
                                    <select class="custom-select">
                                        <option selected="">Weight kg</option>
                                        <option>100Kg</option>
                                        <option>200Kg</option>
                                        <option>300Kg</option>
                                        <option>400Kg</option>
                                        <option>500Kg</option>
                                        <option>600Kg</option>
                                        <option>700Kg</option>
                                    </select>
                                    <input class="cta-email" type="email" placeholder="Email ID">
                                </div>
                                <h4 class="extra-services"><i class="fas fa-binoculars"></i>Extra Service</h4>
                                <ul>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Air Freight</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Shipping Cargo</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Rail Cargo</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">Warehousing</label>
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn">comparison</button>
                            </form>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </section>
        <!-- section-area-end -->

        <!-- control-area -->
        <section class="control-area pt-110 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title text-center mb-60">
                            <h2>We give complete control</h2>
                            <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                small cargo. This service
                                is useful for companies various</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid control-fluid">
                <div class="row control-active">
                    <div class="col-xl-4">
                        <div class="single-control-wrap fix">
                            <div class="control-thumb">
                                <img src="{{ asset('assets/img/images/control_img01.jpg') }}" alt="img">
                            </div>
                            <div class="control-overlay-content">
                                <h4><a href="#" class="text-light">Cargo Truck</a></h4>
                                <span>Delivery Anything</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single-control-wrap fix">
                            <div class="control-thumb">
                                <img src="{{ asset('assets/img/images/control_img02.jpg') }}" alt="img">
                            </div>
                            <div class="control-overlay-content">
                                <h4><a href="#" class="text-light">Cargo shipping</a></h4>
                                <span>Delivery Anything</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single-control-wrap fix">
                            <div class="control-thumb">
                                <img src="{{ asset('assets/img/images/control_img03.jpg') }}" alt="img">
                            </div>
                            <div class="control-overlay-content">
                                <h4><a href="#" class="text-light">Cargo Truck</a></h4>
                                <span>Delivery Anything</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single-control-wrap fix">
                            <div class="control-thumb">
                                <img src="{{ asset('assets/img/images/control_img02.jpg') }}" alt="img">
                            </div>
                            <div class="control-overlay-content">
                                <h4><a href="#" class="text-light">Cargo shipping</a></h4>
                                <span>Delivery Anything</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single-control-wrap fix">
                            <div class="control-thumb">
                                <img src="{{ asset('assets/img/images/control_img03.jpg') }}" alt="img">
                            </div>
                            <div class="control-overlay-content">
                                <h4><a href="#" class="text-light">Cargo Truck</a></h4>
                                <span>Delivery Anything</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- control-area-end -->

        <!-- brand-area -->
        <div class="brand-area gray-bg pt-85 pb-85">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="{{ asset('assets/img/brand/brnad_logo01.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="{{ asset('assets/img/brand/brnad_logo02.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="{{ asset('assets/img/brand/brnad_logo03.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="{{ asset('assets/img/brand/brnad_logo04.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="{{ asset('assets/img/brand/brnad_logo05.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="{{ asset('assets/img/brand/brnad_logo03.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- newsletter -->
        <section class="newsletter-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-wrap">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="newsletter-content">
                                        <h4>Newsletter Sign Up</h4>
                                        <span>Notifications our best deals...</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <input type="email" placeholder="Enter your email...">
                                            <button class="btn">subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-end -->

    </main>
@endsection
