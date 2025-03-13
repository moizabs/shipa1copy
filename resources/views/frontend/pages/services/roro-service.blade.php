@extends('frontend.layouts.app')
@section('title', 'Open and Container RORO Shipping. Services With Experts - Shipa1')
@section('meta_description',
'Shipa1 offering RORO shipping services, Clear all documentation and other paper works with
our experts and professionals, Get amazing discounts and offers for RORO transport.')
@section('content')
<Style>
    .title-2 {
        color: #8fc445;
    }
    .desc-2 {
        color: white;
    }
    .why-box {
        border-radius: 12px;
        padding: 20px 0px;
        background: #f8f9fa9c;
    }
    .card- {
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 5px 30px 0 rgba(35, 43, 54, .3);
    }
    .services {
        text-align: center;
        border-radius: 12px;
        padding: 10px 30px 0px 30px;
    }
    .services-h1 {
        text-align: center;
        margin-bottom: 50px;
    }
    .why-choose-us-slider::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); 
    z-index: 0; 
    }
    .why-choose-us-slider {
        background: url('/img/RoRo-Shipping.webp');
        padding: 60px 0;
        background-color: #f9f9f9;
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 1;
    }
    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        animation: fadeIn 1s ease-in-out;
    }
    .section-description {
        text-align: center;
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 30px;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto 30px;
        opacity: 0.8;
        animation: fadeIn 1.2s ease-in-out;
    }
    .slide {
        min-width: 33.333%;
        box-sizing: border-box;
        padding: 20px;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        border: 1px solid rgba(221, 221, 221, 0.6);
        text-align: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .slide:hover {
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
        background-color: rgba(255, 255, 255, 1);
    }
    .slide i {
        margin-bottom: 20px;
        color: #666;
        font-size: 3rem;
        transition: color 0.3s ease;
    }
    .slide:hover i {
        color: #8FC445;
    }
    .slide-title {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: bold;
        letter-spacing: 0.3px;
        transition: color 0.3s ease;
    }
    .slide:hover .slide-title {
        color: #8FC445;
    }
    .slide-text {
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
        opacity: 0.9;
    }
</Style>
<section class="tj-choose-us-section-service-roro">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">RORO SHIPPING SERVICES</h2>
                        <p class="desc-2">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.
                        </p>
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col-lg-6 mt-0" data-sal="slide-down" data-sal-duration="800">
                <div class="tj-input-form  w-100" data-bg-image="">
                    <form action="{{ route('submit.quote') }}" novalidate method="post"
                        class="rd-mailform validate-form" id="calculatePriceFrom" data-parsley-validate
                        data-parsley-errors-messages-disabled enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="container mt-2">
                            <input type="hidden" name="roro" value="RORO SHIPMENT">
                            <div class="route_quote_info" id="step1">
                                <div class="row">
                                    <h4 class="title text-center">Quote Request!</h4>
                                    <div class="col-xl-12 col-lg-12 mb-4">
                                        <h6 class="text-white">Moving From</h6>
                                        <label class="text-white mb-2">Where Are You Moving From?</label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="pickup-location"
                                                placeholder="Enter City or ZipCode" name="From_ZipCode" required>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 class="text-white">Deliver To</h6>
                                    <div class="col-xl-4 col-lg-4 mb-4">
                                        <label class="text-white mb-2">Country:</label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="delivery-country"
                                                placeholder="Enter Country" name="To_Country" required>
                                            <ul class="suggestions suggestionsCountry"></ul>
                                            <small id="errDLoc" class="err-loc"></small>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 mb-4">
                                        <label class="text-white mb-2">City:</label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="delivery-location-1"
                                                placeholder="Enter City" name="To_ZipCode" required>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 mb-4">
                                        <label class="text-white mb-2">Zip Code:<small>(Optional)</small></label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" placeholder="Enter ZipCode"
                                                name="To_ZipCode">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="price__cta-btn text-center">
                                            <button class="tj-submit-btn" type="button" id="step1_next">
                                                Next <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Step 2: Vehicle Information -->
                            <div class="vehicle_quote_info" id="step2" style="display: none;">
                                <div class="row">
                                    <h4 class="title text-center">VEHICLE INFORMATION</h4>
                                    <select id="tabSelector"   aria-label="Tab selector" required>
                                        <option value="" selected disabled>Select a Vehicle</option>
                                        <option value="Atv">Atv Utv Transport</option>
                                        <option value="Boat-Transport">Boat Transport</option>
                                        <option value="Car">Car Transport</option>
                                        <option value="Golf-Cart">Golf Cart Transport</option>
                                        <option value="Heavy-Equipment">Heavy Equipment Transport</option>
                                        <option value="Motorcycle">Motorcycle Transport</option>
                                        <option value="RV-Transport">RV Transport</option>
                                    </select>
                                    <div class="tab-content" id="additionalContent"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn">
                                            <button class="tj-submit-btn previous" id="step2_previous">
                                                Previous <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn float-end">
                                            <button class="tj-submit-btn" type="button" id="step2_next">
                                                Next <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Step 3: Customer Information -->
                            <div class="basic_quote_info" id="step3" style="display: none;">
                                <div class="row mb-3">
                                    <h4 class="text-center text-white target-top">Customer Information</h4>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Your Name:</label>
                                            <input class="form-control" id="name" name="name" type="text"
                                                placeholder="Customer Name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-input-field">
                                            <label class="d-block text-white">Phone:</label>
                                            <input id="phone" class="form-control ophone" name="phone"
                                                type="tel" placeholder="Customer Phone" required>
                                            <small id="errPhone" class="err-style"></small>
                                            <input type="hidden" name="country_code" id="country_code" />
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Email Address:</label>
                                            <input class="form-control" id="email" name="email" type="email"
                                                placeholder="Email address" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn">
                                            <button class="tj-submit-btn previous scroll-up-btn" id="step3_previous">
                                                Previous <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn float-end">
                                            <button class=" tj-submit-btn " href="" type="submit"
                                                id="submit_instant_code" value="Submit Form">
                                                Calculate Price <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.reveiw-small-detail')
<section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">RORO Shipping Overview
                        </h3>
                        <p class="desc">Ship-A1 is a US-based auto shipping company providing transportation services
                            worldwide. When shipping vehicles overseas, the most frequently used shipping option is RORO
                            (Roll-on/Roll-off) Shipping.
                            What is RORO Shipping? <br>
                            RORO shipping is the simplest and easiest method of transportation for the vehicle. The
                            vehicle is driven directly onto the RORO vessel and secured to the car deck. They are
                            securely inside the boat. Wind-and-watertight. It is essential to note that you cannot ship
                            personal effects using this method only spare tires and factory-fitted accessories are
                            allowed.
                            If you’re looking to ship your vehicle overseas, worry no more because Ship-A1 is connected
                            with the best cargo companies that carry your vehicle to other countries without any
                            complications and at reasonable rates. Rest assured, our agents take care of clearing
                            documents and other paperwork for you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/roro-1.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/roro-2.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">RORO Shipping
                            Destinations</h3>
                        <p class="desc">We are providing Facilities in roro shipping service our experts are here to
                            help
                            you in your roro shipping from us to their following ports. Ship-A1 is providing RORO
                            Shipping
                            service from U.S to in these Following:
                        <div class="row">
                            <div class="col-sm-4">
                                <strong>Nigeria:</strong> Lagos
                            </div>
                            <div class="col-sm-4">
                                <strong>Ghana:</strong> Takoradi, Tema
                            </div>
                            <div class="col-sm-4">
                                <strong>Togo:</strong> Lome
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <strong>Ivory Coast:</strong> Abidjan
                            </div>
                            <div class="col-sm-4">
                                <strong>The Gambia:</strong> Banjul
                            </div>
                            <div class="col-sm-4">
                                <strong>Guinea:</strong> Conakry
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <strong>Cameroon:</strong> Douala
                            </div>
                            <div class="col-sm-4">
                                <strong>Sierra Leone:</strong> Freetown
                            </div>
                            <div class="col-sm-4">
                                <strong>Gabon:</strong> Libreville
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <strong>Angola:</strong> Luanda, Monrovia
                            </div>
                            <div class="col-sm-4">
                                <strong>Benin:</strong> Cotonou
                            </div>
                            <div class="col-sm-4">
                                <strong>Senegal:</strong> Dakar
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Republic of the Congo:</strong>
                                Pointe-Noire
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                        <hr>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Comparing RORO and
                            Container Shipping</h3>
                        <p class="desc">
                            When it comes to the international transportation of vehicles, importers usually prefer one
                            of two primary shipping methods:
                        <ul>
                            <li>Container shipping</li>
                            <li>RORO shipping</li>

                        </ul>
                        The auto car shipping companies provide exceptional service for the transportation of the car
                        from one place to
                        another place. The best thing about working with a trusted and renowned company is that you
                        won't have to worry
                        about anything because our expert and well-equipped team will do that for you!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/roro-3.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/roro-4.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Benefits of RORO
                            Shipping Service</h3>
                        <p class="desc">Some of the advantages are as follows: <br>
                            Similar to how affordability interests a customer, the same way speed interests a shipper.
                            Since cars and
                            lorries can drive straight onto the ship at one port and then drive off at the other port
                            within a few
                            minutes of the ship docking, it saves much time for the shipper. <br>
                            It can also integrate well with additional transport development, such as containers. The
                            use of
                            Customs-sealed units has enabled frontiers to be crossed with the minimum of delay.
                            Therefore, it
                            increases the speed and efficiency of the shipper. The ship has also worked with extremely
                            popular
                            vacation planners and private car owners. Hence significantly contributing to the growth of
                            tourism.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.cta-section')
<section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center pt-4" data-sal="slide-left" data-sal-duration="800">
                Key Features of RORO Shipping</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Affordability</span>
                    </div>
                    <p class="desc">RORO is the most preferred shipping method to ship vehicles from one port to the
                        other. It is also
                        the fastest method of transportation that will free you of any additional expenses. If your
                        country uses CIF
                        to calculate duties and taxes, then you can save double, and as long as you keep on shipping,
                        you indeed
                        save on tax duties too! Now that's a good deal.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Convenient</span>
                    </div>
                    <p class="desc">The outstanding and useful fact about RORO shipping is that it can apply to any
                        vehicle. So long
                        as you or the professional moving company you hire provide a trailer with wheels for boats and
                        caravans, you
                        do not need to pull them apart to fit inside a container. You may even be able to drive your car
                        right from
                        the destination port if you have enough gas left in the tank.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Safe</span>
                    </div>
                    <p class="desc">You might have read some articles concerned about the safety of the stuff they
                        ship. As long as
                        you have chosen RORO car shipping, you will not have to worry about the security of your
                        vehicles.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Speed</span>
                    </div>
                    <p class="desc">The lack of RORO availability at specific ports can cause delays in
                        transportation. If this does
                        occur, importers have to find a port that offers this option in their close vicinity.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Shipping Process</span>
                    </div>
                    <p class="desc">The shipping process is convenient, and it takes the least time when it comes to
                        processing
                        international shipping. Therefore, many people trust the RORO shipping. Therefore, if you are
                        planning
                        international car shipping, then you can rely on RORO services.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Fast</span>
                    </div>
                    <p class="desc">This mode of shipping is used when you want to transport your vehicle on urgent
                        or when time is
                        essential. The standard vehicle shipping services take more days for shipping overseas, but RORO
                        car shipping
                        is more efficient than its alternatives.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Saves Times and Money</span>
                    </div>
                    <p class="desc">Another advantage is the affordability. It is one of the cheapest international
                        shipping
                        services which deliver the automobiles on time. Therefore, it also saves time. The air shipping
                        and
                        another way of international shipping are pretty expensive when it compares with the RORO
                        shipping.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Safety</span>
                    </div>
                    <p class="desc">Although RORO shipping is considered more affordable and convenient, it is also
                        more
                        high-risk in terms of vehicle safety. The main reasons for this are the loading/unloading stage,
                        during which accidents can occur, and the extensive exposure to diverse climate changes.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Insurance</span>
                    </div>
                    <p class="desc">The various companies which offer the RORO service are now providing car
                        insurance.
                        Therefore, international car shipping is pretty safe now after incorporating coverage. The
                        company covers not
                        only the safety of the car but also, they verify the damages. In addition to that, the company
                        scrutinizes
                        the condition of the vehicle as they are liable for the damages.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Attractive Rates and Discounts</span>
                    </div>
                    <p class="desc">The service not only delivers car internationally at a very affordable price rate
                        but also,
                        they provide various attractive discounts. This can be an added advantage. Many companies offer
                        discounts
                        to maintain healthy competition in the market.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-service-roro-8">
    <div class="container why-box">
        <div class="row services">
            <h1 class="services-h1">Our RORO Shipping Process Explained</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Step 1</h5>
                        <p class="card-text text-dark">The client contacts about shipping his vehicle overseas and
                            provides us with necessary documents relating to its automobile.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Step 2</h5>
                        <p class="card-text text-dark">Ship-A1 starts preparing your documents for secure shipping, and
                            you receive the bill detailing the cost of taxes.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Step 3</h5>
                        <p class="card-text text-dark">Ship-A1 offers seamless RORO shipping from the U.S., handling
                            customs, loading, and providing manual tracking. Trust us for safe, reliable, and affordable
                            car shipping with special discounts available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-faq-section tj-faq-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> How It’s Work</span>
                    <h2 class="title">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I prepare my vehicle for transport?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We'll provide detailed instructions, but you'll need to remove personal
                                        belongings, as well as make sure to follow guidelines or instructions based on
                                        the chosen transport method.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I get a quote?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>At Ship A1 we have the convenience of providing free online quotes to our
                                        customers, you can check them out at www.shipa1.com</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Can I track my vehicle during transport?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes! ShipA1 provides a user-friendly tracking system for real-time updates
                                        on your vehicle's location throughout the journey.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us-slider">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white">Why Choose Us?</h2>
            <span class="sub-title active-shape">Discover the benefits of choosing ShipA1 through our features.</span>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support</h3>
                    <p class="slide-text">24/7 Customer Support: Our customers are our top priority, which is why we offer
                            24/7 support to our customers to erase any doubt and offer tailored solutions to their needs and concerns.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">On-Time Delivery</h3>
                    <p class="slide-text">At Ship A1 we keep in mind that time is equally valuable for both our customers and our company which is why we 
                        ensure the quick delivery of your cargo as scheduled and in perfect condition.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Experienced Professionals</h3>
                    <p class="slide-text">Our highly skilled and professional carriers and staff are experts in what they do, which is handling, maintaining,
                            and easily loading your vehicle on our trailers.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Real-Time Tracking</h3>
                    <p class="slide-text">Making it easy for our customers to easily track their vehicle’s current and updated status anytime and anywhere.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Refrigeration Technology</h3>
                    <p class="slide-text">Our fully equipped trailers maintain precise temperature control
                            suitable for your cargo throughout the journey</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.blog-slider')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS8r7ZgkAHXuIJKgaYhhF4WccgswI-1F8&amp;v=3.exp&amp;libraries=places">
</script>
<script>
    $(document).ready(function() {
        $(document).on('keyup', '#delivery-country', function() {
            var inputField = $(this);
            var suggestionsList = inputField.siblings(".suggestionsCountry");
            var query = inputField.val();

            if (query !== "") {
                suggestionsList.css("display", "block");

                $.ajax({
                    url: '/get-countries',
                    type: 'GET',
                    data: {
                        search: query
                    },
                    success: function(response) {

                        suggestionsList.empty();

                        if (response.length > 0) {
                            response.forEach(function(country) {
                                suggestionsList.append(
                                    '<li class="suggestion-item-country">' +
                                    country.name + '</li>');
                            });
                        } else {
                            suggestionsList.append(
                                '<li class="no-results">No results found</li>');
                        }
                    }
                });
            } else {
                suggestionsList.css("display", "none");
            }
        });

        $(document).on('click', '.suggestion-item-country', function() {
            var selectedCountry = $(this).text();
            $('#delivery-country').val(selectedCountry);
            $('.suggestionsCountry').css("display", "none");
        });

        $(document).on('click', '#submit_instant_code', function() {
            console.log('yes yes yes');
            $('#calculatePriceFromRoro').submit();
        });
    });
</script>
<script>
    function playVideo() {
        document.querySelector('.video-thumbnail').style.display = 'none';
        document.querySelector('.video-iframe').style.display = 'block';
        var iframe = document.getElementById('videoFrame');
        var videoSrc = iframe.src;
        iframe.src = videoSrc + "&autoplay=1";
    }
</script>
@endsection