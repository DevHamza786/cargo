@extends('pages.app')

@section('content')

<main>

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- support-area -->
    <div class="support-area support-bg pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>Get In Touch</h2>
                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of small
                            cargo. This service is useful for companies various.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="support-form text-center">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" style="text-align: left !important">
                                <strong>Success! </strong>
                                    {{ session('success') }}
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
                                    <span><strong>
                                        <i class="fas fa-times" style="color:green;"></i>
                                    </strong></span>
                                </button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('send.contact') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="First Name *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone" placeholder="Phone Number *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your E-mail *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="url" name="webiste" placeholder="Website">
                                </div>
                            </div>
                            <textarea name="message" id="message" placeholder="Message" required></textarea>
                            <button type="submit" class="btn red-btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- support-area-end -->

    <!-- contact-area -->
    <section class="contact-area primary-bg pt-70 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon01.png')}}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>Find Location</h5>
                            <span>IMPERIAL HOTEL, BACK ANNEXE, M.T KHAN ROAD, SULTANABAD NEAR PIDC HOUSE, KARACHI</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon02.png')}}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>Phone Number</h5>
                            <span>+92-3132062283</span>
                            <span>+92-3343536678</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon03.png')}}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>email informing</h5>
                            <span>info@pashaenterprises.org</span>
                            <span>pashaenterprises72@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon04.png')}}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>email informing</h5>
                            <span>IMPERIAL HOTEL, BACK ANNEXE, M.T KHAN ROAD, SULTANABAD NEAR PIDC HOUSE, KARACHI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- contact-map -->
    <div id="contact-page-map"></div>
    <!-- contact-map-end -->

</main>

@endsection


@section('script')

<script>
    function basicmap() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,
            scrollwheel: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(24.8607, 67.0011), // New York
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{ featureType: "administrative", elementType: "labels.text.fill", stylers: [{ color: "#444444" }] }, { featureType: "landscape", elementType: "all", stylers: [{ color: "#f2f2f2" }] }, { featureType: "poi", elementType: "all", stylers: [{ visibility: "off" }] }, { featureType: "road", elementType: "all", stylers: [{ saturation: -100 }, { lightness: 45 }] }, { featureType: "road.highway", elementType: "all", stylers: [{ visibility: "simplified" }] }, { featureType: "road.arterial", elementType: "labels.icon", stylers: [{ visibility: "off" }] }, { featureType: "transit", elementType: "all", stylers: [{ visibility: "off" }] }, { featureType: "water", elementType: "all", stylers: [{ color: "#46bcec" }, { visibility: "on" }] }]
        };
        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('contact-page-map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(24.8607, 67.0011),
            map: map,
            icon: 'img/icon/map_icon.png',
            title: 'Makplus'
        });
    }
    if ($('#contact-page-map').length != 0) {
        google.maps.event.addDomListener(window, 'load', basicmap);
    }
</script>

@endsection
