@extends('pages.app')

@section('content')

<main>

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- services-area -->
    <section class="services-area delivery-bg pt-110 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>Cargo Delivery</h2>
                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                            small cargo. This service is useful for companies various.</p>
                    </div>
                </div>
            </div>
            <div class="services-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#"><img src="{{ asset('assets/img/images/services_img01.jpg')}}" alt="img"></a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-shipping-and-delivery"></i>
                                </div>
                                <h3><a href="#">More Control, for Free</a></h3>
                                <span>Delivery Service</span>
                                <p>Express delivery is an innovativ service is effective logistics solutio for delivery of
                                    small cargo service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#"><img src="{{ asset('assets/img/images/services_img02.jpg')}}" alt="img"></a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-shipping"></i>
                                </div>
                                <h3><a href="#">Expand with E-Commerce</a></h3>
                                <span>Delivery Service</span>
                                <p>Express delivery is an innovativ service is effective logistics solutio for delivery of
                                    small cargo service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#"><img src="{{ asset('assets/img/images/services_img03.jpg')}}" alt="img"></a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <h3><a href="#">More Than Anywhere Shipping</a></h3>
                                <span>Delivery Service</span>
                                <p>Express delivery is an innovativ service is effective logistics solutio for delivery of
                                    small cargo service.</p>
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
                            <img src="{{ asset('assets/img/images/int_cargo_img.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="s-section-title mb-30">
                            <h2>International Cargo</h2>
                            <h6>Express delivery is an innovative service</h6>
                        </div>
                        <div class="int-services-content">
                            <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                small cargo. This service
                                is useful for companies of various effective logistics scale.</p>
                            <a href="#" class="btn red-btn">comparison</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">Cargo</div>
    </section>
    <!-- services-area-end -->

    <!-- video-area -->
    <section class="video-area video-bg">
        <div class="container">
            <div class="video-overlay s-video-overlay">
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
                            <a href="https://www.youtube.com/watch?v=iWKu6WNFf9M" class="popup-video"><img src="{{ asset('assets/img/icon/play_btn.png')}}" alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-area-end -->

    <!-- faq-area -->
    <section class="faq-area faq-bg pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>frequently asked questions</h2>
                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                            small cargo. This service is useful for companies various.</p>
                    </div>
                </div>
            </div>
            <div class="faq-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="nav flex-column nav-pills faq-tab-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <div class="faq-tab-icon">
                                    <i class="far fa-bell"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Anywhere Shipping</h5>
                                    <p>Express delivery is an innovative service effective logistics.</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Cargo Logistics Provides</h5>
                                    <p>Express delivery is an innovative service effective logistics.</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Words Cargo Freight</h5>
                                    <p>Express delivery is an innovative service effective logistics.</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Shipping Lines</h5>
                                    <p>Express delivery is an innovative service effective logistics.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="far fa-bell"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Anywhere Shipping</h5>
                                            <p>Express delivery is an innovative service effective logistics.</p>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            What is Startesk?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of small cargo. This service is useful companies of various effective service is effective logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            What is cargo and logistics?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of small cargo. This service is useful companies of various effective service is effective logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            What is the difference between freight and cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of small cargo. This service is useful companies of various effective service is effective logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                                            aria-expanded="false" aria-controls="collapseFour">
                                                            What is between shipment cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of small cargo. This service is useful companies of various effective service is effective logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                                            aria-expanded="false" aria-controls="collapseFive">
                                                            What are types of cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of small cargo. This service is useful companies of various effective service is effective logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingSix">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                                            aria-expanded="false" aria-controls="collapseSix">
                                                            What is the difference between freight cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of small cargo. This service is useful companies of various effective service is effective logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Cargo Logistics Provides</h5>
                                            <p>Express delivery is an innovative service effective logistics.</p>
                                        </div>
                                        <div class="accordion" id="accordionAwardExample">
                                            <div class="card">
                                                <div class="card-header" id="headingAwardOne">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseAwardOne"
                                                            aria-expanded="true" aria-controls="collapseAwardOne">
                                                            What is Startesk?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardOne" class="collapse" aria-labelledby="headingAwardOne" data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseAwardTwo"
                                                            aria-expanded="false" aria-controls="collapseAwardTwo">
                                                            What is cargo and logistics?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardTwo" class="collapse show" aria-labelledby="headingAwardTwo"
                                                    data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardThree">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseAwardThree"
                                                            aria-expanded="false" aria-controls="collapseAwardThree">
                                                            What is the difference between freight and cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardThree" class="collapse" aria-labelledby="headingAwardThree" data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardFour">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseAwardFour"
                                                            aria-expanded="false" aria-controls="collapseAwardFour">
                                                            What is between shipment cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardFour" class="collapse" aria-labelledby="headingAwardFour" data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardFive">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseAwardFive"
                                                            aria-expanded="false" aria-controls="collapseAwardFive">
                                                            What are types of cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardFive" class="collapse" aria-labelledby="headingAwardFive" data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardSix">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseAwardSix"
                                                            aria-expanded="false" aria-controls="collapseAwardSix">
                                                            What is the difference between freight cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardSix" class="collapse" aria-labelledby="headingAwardSix" data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="fas fa-bullseye"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Words Cargo Freight</h5>
                                            <p>Express delivery is an innovative service effective logistics.</p>
                                        </div>
                                        <div class="accordion" id="accordionBullseyeExample">
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeOne">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseBullseyeOne"
                                                            aria-expanded="true" aria-controls="collapseBullseyeOne">
                                                            What is Startesk?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeOne" class="collapse" aria-labelledby="headingBullseyeOne"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseBullseyeTwo"
                                                            aria-expanded="false" aria-controls="collapseBullseyeTwo">
                                                            What is cargo and logistics?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeTwo" class="collapse show" aria-labelledby="headingBullseyeTwo"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeThree">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseBullseyeThree"
                                                            aria-expanded="false" aria-controls="collapseBullseyeThree">
                                                            What is the difference between freight and cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeThree" class="collapse" aria-labelledby="headingBullseyeThree"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeFour">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseBullseyeFour"
                                                            aria-expanded="false" aria-controls="collapseBullseyeFour">
                                                            What is between shipment cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeFour" class="collapse" aria-labelledby="headingBullseyeFour"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeFive">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseBullseyeFive"
                                                            aria-expanded="false" aria-controls="collapseBullseyeFive">
                                                            What are types of cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeFive" class="collapse" aria-labelledby="headingBullseyeFive"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeSix">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseBullseyeSix"
                                                            aria-expanded="false" aria-controls="collapseBullseyeSix">
                                                            What is the difference between freight cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeSix" class="collapse" aria-labelledby="headingBullseyeSix"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="fas fa-cog"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Shipping Lines</h5>
                                            <p>Express delivery is an innovative service effective logistics.</p>
                                        </div>
                                        <div class="accordion" id="accordionCogExample">
                                            <div class="card">
                                                <div class="card-header" id="headingCogOne">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseCogOne"
                                                            aria-expanded="true" aria-controls="collapseCogOne">
                                                            What is Startesk?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogOne" class="collapse" aria-labelledby="headingCogOne"
                                                    data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseCogTwo"
                                                            aria-expanded="false" aria-controls="collapseCogTwo">
                                                            What is cargo and logistics?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogTwo" class="collapse show" aria-labelledby="headingCogTwo"
                                                    data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogThree">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseCogThree" aria-expanded="false" aria-controls="collapseCogThree">
                                                            What is the difference between freight and cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogThree" class="collapse" aria-labelledby="headingCogThree"
                                                    data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogFour">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseCogFour" aria-expanded="false" aria-controls="collapseCogFour">
                                                            What is between shipment cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogFour" class="collapse" aria-labelledby="headingCogFour"
                                                    data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogFive">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseCogFive" aria-expanded="false" aria-controls="collapseCogFive">
                                                            What are types of cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogFive" class="collapse" aria-labelledby="headingCogFive"
                                                    data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogSix">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseCogSix"
                                                            aria-expanded="false" aria-controls="collapseCogSix">
                                                            What is the difference between freight cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogSix" class="collapse" aria-labelledby="headingCogSix"
                                                    data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                                                            small cargo. This service is useful companies of various effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- brand-area -->
    <div class="brand-area pt-85 pb-85">
        <div class="container">
            <div class="row brand-active">
                <div class="col-12">
                    <div class="signle-brand">
                        <img src="{{ asset('assets/img/brand/brnad_logo01.png')}}" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="signle-brand">
                        <img src="{{ asset('assets/img/brand/brnad_logo02.png')}}" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="signle-brand">
                        <img src="{{ asset('assets/img/brand/brnad_logo03.png')}}" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="signle-brand">
                        <img src="{{ asset('assets/img/brand/brnad_logo04.png')}}" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="signle-brand">
                        <img src="{{ asset('assets/img/brand/brnad_logo05.png')}}" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="signle-brand">
                        <img src="{{ asset('assets/img/brand/brnad_logo03.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
</main>

@endsection
