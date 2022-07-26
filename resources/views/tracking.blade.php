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
                                <li class="breadcrumb-item active" aria-current="page">Tracking</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Tracking Here</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- category-area -->
    <section class="category-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="category-list s-category-list">
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
                                <a href="#">
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
    </section>
    <!-- category-area-end -->

    <!-- tracking-area -->
    <div class="tracking-area pt-95 pb-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="tracking-id-info text-center">
                        <p>Enter Your Cargo Tracking, Door to Door Office <a href="#">Tracking Number.</a></p>
                        <form action="{{ route('user.tracking') }}" method="POST" class="tracking-id-form">
                            @csrf
                            <input type="text"  name="tracking_id" placeholder="Tracking id" value="{{ $tracking->track_id ?? '' }}" required>
                            <button class="btn red-btn">Tracking</button>
                        </form>
                        <div class="tracking-list">
                            <ul>
                                @if (isset($tracking))
                                    <li class="{{ $tracking->status  == 'pending' ? 'active' : '' }}">
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-box"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Dispatch</p>
                                        </div>
                                    </li>
                                    <li class="{{ $tracking->status  == 'on the way' ? 'active' : '' }}">
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-warehouse"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>departed country</p>
                                        </div>
                                    </li>
                                    <li  class="{{  $tracking->status  == 'shipping' ? 'active' : '' }}">
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Destination</p>
                                        </div>
                                    </li>
                                    <li  class="{{  $tracking->status  == 'delivered' ? 'active' : '' }}">
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-audit"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Successful</p>
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-box"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Dispatch</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-warehouse"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>departed country</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Destination</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-audit"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Successful</p>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        {{-- Tracking Details --}}
                        @if (isset($tracking))
                            <div class="tracking-list">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="single-pricing text-center active">
                                            <div class="pricing-head">
                                                <h5>Your <span>Shipment</span></h5>
                                                <span>{{ $tracking->track_id }}</span>
                                                <h5>{{ ucwords($tracking->status) }}</h5>
                                                <h4>{{ $tracking->updated_at->format('l , F d h:m a').' on '.ucfirst($tracking->Destination_country) }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tracking-area-end -->

    <!-- services-area -->
    <section class="services-area delivery-bg inner-help-bg pt-110 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>how we help you</h2>
                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                            small cargo. This service
                            is useful for companies various.</p>
                    </div>
                </div>
            </div>
            <div class="services-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="s-single-services mb-50">
                            <div class="services-thumb mb-25">
                                <a href="#"><img src="{{asset('assets/img/images/s_services_img01.jpg')}}" alt="img"></a>
                            </div>
                            <div class="s-services-content">
                                <h6>Delivery Service</h6>
                                <h3>Anywhere Shipping</h3>
                                <p>Express delivery is an innovativ service is effective logistics solutio for delivery of
                                    small cargo service.</p>
                                <a href="{{ route('contact') }}" class="btn red-btn">LET US HELP</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="s-single-services mb-50">
                            <div class="services-thumb mb-25">
                                <a href="#"><img src="{{asset('assets/img/images/s_services_img02.jpg')}}" alt="img"></a>
                            </div>
                            <div class="s-services-content">
                                <h6>Inspiration Service</h6>
                                <h3>Get Insights Inspiration</h3>
                                <p>Express delivery is an innovativ service is effective logistics solutio for delivery of
                                    small cargo service.</p>
                                <a href="{{ route('contact') }}" class="btn red-btn">LET US HELP</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="s-single-services mb-50">
                            <div class="services-thumb mb-25">
                                <a href="#"><img src="{{asset('assets/img/images/s_services_img03.jpg')}}" alt="img"></a>
                            </div>
                            <div class="s-services-content">
                                <h6>Discover Locations</h6>
                                <h3>Your Freight Deadlines</h3>
                                <p>Express delivery is an innovativ service is effective logistics solutio for delivery of
                                    small cargo service.</p>
                                <a href="{{ route('contact') }}" class="btn red-btn">LET US HELP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

</main>


@endsection
