@extends('frontend.layouts.app')
@section('title', 'Timely &amp; Affordable Golf Cart Transport Services in USA')
@section('meta_description', 'Ship A1 is best among all golf cart shipping companies in USA, offering cost-effective and
    damage-free golf cart transport service nationwide')
@section('canonical')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Golf Cart Transportation Service",
  "description": "ShipA1 Transport offers trusted, nationwide golf cart shipping with 16 years of experience, ensuring safe delivery of standard and luxury carts. With advanced trailers, transparent pricing, and 24/7 support, we provide secure, cost-efficient transport for all golf cart types.",
  "provider": {
    "@type": "Organization",
    "name": "ShipA1",
    "url": "https://www.shipa1.com/transport-services/golf-cart",
    "logo": "https://www.shipa1.com/frontend/images/logo/LOGO%20NEW-2.webp",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1 (844) 474-4721",
      "email": "shawntransport@shipa1.com",
      "contactType": "Customer Support",
      "areaServed": "US",
      "availableLanguage": "English"
    }
  },
  "serviceType": "Golf Cart Transportation Service",
  "areaServed": {
    "@type": "Place",
    "name": "USA"
  },
  "offers": {
    "@type": "AggregateOffer",
    "url": "https://www.shipa1.com/transport-services/golf-cart",
    "priceCurrency": "USD",
    "eligibleRegion": {
      "@type": "Place",
      "name": "USA"
    },
    "lowPrice": 199
  },
  "sameAs": "https://www.facebook.com/shipa1"
}

</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What makes ShipA1 a reliable golf cart shipping company?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The vehicle transport market is increasing every passing day. Therefore, always go for the licensed, certified, experienced, and strong vehicle insurance offering shipping agency."
    }
  },{
    "@type": "Question",
    "name": "How can I book fast golf cart transport services?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Connect with remotely available shipping agencies like ShipA1. We get you a quote in minutes and deliver your golf cart consignment in a couple of days."
    }
  },{
    "@type": "Question",
    "name": "Can I get golf cart shipping delivered in one day with ShipA1?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Every vehicle shipping company has its own on-road delivery submission dates. Give a call to ShipA1, share your urgent demands, and get the services as per your requirements."
    }
  },{
    "@type": "Question",
    "name": "How much does golf cart shipping typically cost in the USA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Charges for golf car transport depend on the distance, the market’s average costs, and your selected service provider. For easy shipping under cost-efficient rates, choose none other than ShipA1."
    }
  },{
    "@type": "Question",
    "name": "Does ShipA1 offer customized golf cart shipping options?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "At ShipA1, it’s easy to get customized golf cart shipping in the USA. Just fill in a short form of customized options and book the delivery in minutes."
    }
  }]
}
</script>

@section('content')
    <style>
        .side-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 50px auto;
            padding: 20px;
        }

        .side-container div h2 {
            color: #062e39;
        }

        .side-container div p {
            color: #062e39;
        }

        .side-container div h2 span {
            color: #8fc445;
            font-weight: 700;
        }

        .side-container div hr {
            color: #8fc445;
            height: 8px;
            opacity: 1;
            /* border-radius: 5px; */
            border-top-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .btnfaq {
            border: none;
            border-radius: 5px;
            background-color: #8fc445;
            color: white;
            padding: 6px;
            transition: 1s;
        }

        .btnfaq:hover {
            background-color: #062e39;
            color: white;
        }

        .faq-container {
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .faq-container h2 {
            text-align: center;
            color: #8fc445;
        }

        .faq {
            border-bottom: 1px solid #ddd;
        }

        .faq button {
            width: 100%;
            background: none;
            color: #062e39;
            border: none;
            text-align: left;
            font-size: 18px;
            padding: 15px;
            cursor: pointer;
            outline: none;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq button:hover {
            background: #f1f1f1;
        }

        .faq-content {
            display: none;
            padding: 15px;
            font-size: 16px;
            background: #f9f9f9;
            border-radius: 5px;
        }

        .open-faq {
            background: #d22;
            color: white;
        }

        .full-width {
            width: 100%;
        }

        .services {
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 10px 10px 30px 10px;
            background-color: #9d9e9f14;
        }

        .services-h1 {
            text-align: center;
            text-decoration: overline;
            margin-bottom: 50px;
            color: #8FC445;
        }

        .why-box {
            border-radius: 12px;
            padding: 40px 0px;
            background: #183c46eb;
        }

        .title-2 {
            color: #8fc445;
        }

        .desc-2 {
            color: white;
        }

        .card- {
            background: #29494e;
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .custom-style {
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .custom-style h4 {
            margin-top: 0;
        }

        .custom-style p {
            margin-bottom: 0;
        }

        .top-left-image {
            position: absolute;
            top: -25px;
            left: -25px;
            width: 100px;
            height: 100px;
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
            background: url('/img/1 background image golf cart transport.webp');
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
    </style>
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title ml-4 fs-2 w-75 ">Ship Your Golf Cart Safely in All Over USA with Trusted Golf
                            Cart Shipping Company</h1>
                        <h2 class="breadcrumb-title ml-4 fs-6 w-75 mb-5">
                            Partner with ShipA1 and get early pickup and timely delivery of your utility buggies. Ready for speedy gold car transport service? 
                        </h2>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Golf Cart</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-blog-standard pb-0 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                   
                    <br>
                    <div class="text-container text-left">
                        <h3>Globally Indorsed Golf Cart Transportation</h3>
                        <p>Your small vehicle transport - golf cart hauling delivery is in safe hands. If our <a class="alllinks" href="{{ route('services') }}"> speedy
                            shipping services</a> and on-road uninterrupted communication are not enough then trust our sixteen
                            years of experience in this business. Yes, your custom and luxury club cars demand proper
                            packaging, enclosed trailer support, and additional monitoring updates. We understand your green
                            wheels are not less than vintage cars. That’s why our golf cart transport service comes with
                            valuable offerings. Such as hand-picked shipping haulers, multiple cost-efficient shipping
                            packages, insurance support, and highly trained carriers.
                        </p>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6 text-center">
                            <h4><i class="fas fa-ship" style="color: var(--tj-primary-color);"></i> Successful Shipment</h4>
                            <div class="review-counter fs-2">
                                <span id="counter-value" class="ms-3" data-target="318"
                                    style="color: var(--tj-secondary-color);">0</span>k+
                            </div>
                        </div>
                        <div class="col-6 text-center">
                            <h4><i class="fas fa-smile" style="color: var(--tj-primary-color);"></i> Satisfied Clients</h4>
                            <div class="review-counter fs-2">
                                <span id="counter-value-2" class="ms-3 " data-target="289"
                                    style="color: var(--tj-secondary-color);">0</span>k+
                            </div>
                        </div>
                    </div><br><br>
                     <div class="image-container">
                        <img class="img-fluid" src="{{ asset('frontend/images/service/ATV.jpeg') }}"
                           style="height: 450px; border-radius: 30px" loading="lazy" alt="Motorcyle Transport">
                    </div>
                </div>
                <div class="col-lg-5 p-0">
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
                    <div class="tj-input-form w-100" data-bg-image="">
                        <h4 class="title text-center">Golf Cart Quote!</h4>
                        <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform validate-form"
                            id="calculatePriceFrom" novalidate data-parsley-validate data-parsley-errors-messages-disabled
                            enctype="multipart/form-data">
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
                            <input type="hidden" name="vehicle_opt" value="vehicle" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Name"
                                            required="" />
                                        <small id="errName" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Phone:</label>
                                        <input type="tel" class="ophone" id="phone" name="phone"
                                            placeholder="Number" required="" />
                                        <input type="hidden" name="country_code" id="country_code" />
                                        <small id="errPhone" class="err-style"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-form">
                                        <label class="d-block">Email:</label>
                                        <input type="email" id="email" name="email" placeholder="Email "
                                            required="" />
                                        <small id="errEmail" class="err-style"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block mb-0"> Pickup Location:</label>
                                        <input type="text" id="pickup-location" name="origin" placeholder=""
                                            required="" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block  mb-0"> Delivery Location:</label>
                                        <input type="text" id="delivery-location" name="destination" placeholder=""
                                            required="" />
                                        <small id="errDLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white">Golf Cart Information</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label> Year</label>
                                        <div class="dropdown">
                                            <input class="form-control dropdown-toggle year" type="text"
                                                name="year[]" id="year" placeholder="Select Year"
                                                data-bs-toggle="dropdown" aria-expanded="false" maxlength="4" required>
                                            <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                                                <li><a class="dropdown-item">Select Year</a></li>
                                                @php
                                                    $currentYear = date('Y');
                                                    for ($year = $currentYear; $year >= 1936; $year--) {
                                                        echo "<li><a class='dropdown-item' data-value='$year'>$year</a></li>";
                                                    }
                                                @endphp
                                            </ul>
                                        </div>
                                        <!-- <select class="nice-select year vehicle-year custom-select-style" name="year[]"
                                                id="year" required>
                                                <option value="" disabled selected>Select Year</option>
                                                @php
                                                    $currentYear = date('Y');
                                                    for ($year = $currentYear; $year >= 1936; $year--) {
                                                        echo "<option value='$year'>$year</option>";
                                                    }
                                                @endphp
                                            </select> -->
                                        <div class="error-message" style="color: red; display: none;">
                                            Please select a year.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label>Make</label>
                                        <input type="text" id="make" name="make[]" placeholder="Enter Make"
                                            required="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select vehicle-model-div">
                                        <label>Model</label>
                                        <input type="text" id="model" name="model[]" placeholder="Enter Model"
                                            required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                        <select class=" " id="trailer_type" name="trailer_type">
                                            <option value="1" selected>Open Trailer</option>
                                            <option value="2">Enclosed Trailer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class=" " id="condition" name="condition[]">
                                            <option value="1" selected>Running</option>
                                            <option value="2">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <a class="add-car-1 mb-2" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
                                Vehicle</a>
                            <div id="vehicles-container">
                            </div>
                            <div class="row mt-2">
                                <di class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-check-input " type="checkbox" id="modification"
                                            name="modification" value="1" />
                                        <label class="form-check-label text-white ms-4" for="modification">
                                            Modified?</label>
                                    </div>

                                    <div class="input-form div-modify_info" style="display: none;">
                                        <label class="d-block"> Modification Information:</label>
                                        <input type="text" id="c" name="modify_info"
                                            placeholder="Modification" />
                                    </div>
                                </di>
                                <di class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="available_at_auction"
                                            name="available_at_auction" value="1" />
                                        <label class="form-check-label text-white" for="available_at_auction">
                                            Auction?</label>
                                    </div>

                                    <div class="input-form div-link mt-3" style="display: none;">
                                        <label class="d-block"> Enter Link:</label>
                                        <input class="form-control" type="url" id="link" name="link"
                                            placeholder="Link" />
                                    </div>
                                </di>
                            </div>
                            <div class="row">
                                <div class="input-form">
                                    <label class="d-block text-white"> Image:</label>
                                    <input class="form-control image_input" type="file" accept="image/*" multiple
                                        onchange="previewImages(event)">
                                    <div class="image-preview-container" id="imagePreviewContainer"></div>
                                </div>
                            </div>
                            <div class="tj-theme-button text-center mt-3">
                                <button class="tj-submit-btn" type="submit" value="submit">
                                    Calculate Price <i class="fa-light fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.reveiw-small-detail')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center  pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal- text-center" data-sal="slide-left" data-sal-duration="800">Why Opt for ShipA1 Among Golf Cart Shipping
                             Companies Nearby </h3>
                        <p class="desc text-center">Here is how our golf cart shipping service sets us apart from other native brokers in the USA.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6  pt-2 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Advanced Shipping Trailers</span>
                        <p class="desc">
                            We offer the most suitable trailer types for every alternative of freight shipping asked during the booking process. As a customer support edge to our clients: they are given the control to pick their own golf car transportation trailers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  pt-2 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Best Security, No Hidden Costs</span>
                        <p class="desc">
                            ShipA1 is the element of trust in the logistics business. We charge what the market can’t bear. Therefore, no hidden, additional fares while in partnership with ShipA1. Our high-tech trailers involve the best road navigation and vehicle monitoring gadgets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6  pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Proper Vehicle Monitoring</span>
                        <p class="desc">
                            It’s not just the drivers and carriers who monitor their loaded cargo. Our team at the headquarters supports the fleets from the backend. Your golf cart transport delivery is in safe hands. ShipA1 is your trusted shipping companion.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading ">
                        <span class="sub-title active-shape">Ensured Experts & Insurance</span>
                        <p class="desc">The team is trained and experienced. Aligned professional carriers work as per the guidelines shared through BOL and SDS sheets. Similarly, each cargo shipment involved strong insurance coverage and backup support.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row full-width ps-4 pt-4">
            <div class="col-12 custom-style">
                <h4 class=" text-center">What do we offer?</h4>
                <p class=" text-center">Ship A1 Transport masters a range of multiple services to our customers, from
                    cost-effective deals, white glove delivery, door-to-door delivery, and terminal-to-terminal delivery
                    to enclosed and open-air transport. Whether you’re renting a golf cart, purchasing it for your needs,
                    want it removed from one location and moved to another, or just need it to be sent for maintenance, we
                    have you covered! Choosing Ship A1 Transport for your<a class="pp-link-2"
                        href="{{ route('form.vehicle.golf_cart') }}"> Golf Cart Shipping </a>means you have entrusted us
                    as your trusted and reliable partner who shares mutual feelings when it comes to professionalism and
                    transparency.</p>
                <div class="tj-theme-button  text-center mt-2">
                    <a class="tj-transparent-btn" href="{{ route('form.vehicle.golf_cart') }}">
                        Get Quote
                        <i class="flaticon-right-1"></i>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>

    @include('partials.cta-section')
    <section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Best Golf Cart Shipping of All Types of Club Cars </h3>
                            <p>Almost all types of golf buggies can be loaded in no time at ShipA1. Is your turf cart of one of these:</p>
                            <h5>Common & Everyday Carts</h5>
                            <ul>
                                <li>Standard golf cart </li>
                                <li>Street-legal golf cart</li>
                                <li>Electric golf cart </li>
                            </ul>
                            <h5>Premium & Luxury Carts</h5>
                            <ul>
                                <li>High-end golf carts </li>
                                <li>Custom-modified golf carts</li>
                                <li>Leisure-focused golf carts</li>
                            </ul>
                            <h5>Common & Everyday Carts</h5>
                            <ul>
                                <li>Standard golf cart </li>
                                <li>Street-legal golf cart</li>
                                <li>Electric golf cart </li>
                            </ul>
                            {{-- <p class="desc">
                                We not only focus on providing top-notch services, but we also ensure that our offerings
                                are meticulously tailored to meet your unique needs and expectations. With years of
                                accumulated
                                experience and expertise, we can proudly state that our services are rooted in complete
                                transparency
                                and unwavering reliability. <br>
                                Our commitment goes beyond just fulfilling your requirements, we aim to exceed your
                                expectations by delivering
                                personalized solutions that align perfectly with your specific demands. Every aspect of our
                                service is designed
                                with your satisfaction in mind, ensuring that you receive the highest level of care and
                                attention throughout
                                the entire process.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded"
                                src="{{ asset('frontend/images/project/2a-image-for-golf-cart-transport.webp') }}"
                                alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-4">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded"
                                src="{{ asset('frontend/images/project/1-image-for-golf-cart-transport.webp') }}"
                                alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Key Guidelines for Our Clients Before Golf Carts Pickup</h3>
                            <p>To be more assured about the security of your golf carts, follow these core instructions before loading.</p>
                            <p class="desc">
                            <ul>
                                <li> The first step should be a proper inspection (look-over) of your golf carts.</li>
                                <li>Go for packaging with perfect padding to be secure from possible damage.</li>
                                <li>Be attentive while loading your golf carts into traveling trailers.</li>
                                <li>Have a final look at trailers and shipment documentation for assurance.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="tj-testimonial-section">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <h5 class="title fs-1">Trailers used for Golf Cart</h5>
                </div>
            </div>
            <div class="swiper-container swiper-new-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-2 mb-3">
                                    <div class="row g-0">
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/Golf cart on enclosed trailer.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Enclosed Trailers</h5>
                                                <p class="card-text  text-dark">The luxurious trailer is for premium and custom-built golf carts. The highly advanced tech-integrated roof and walls secure your deluxe and leisure-focused carts.
                                                </p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('form.vehicle.golf_cart') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-2 mb-3">
                                    <div class="row g-0">
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Open Trailers</h5>
                                                <p class="card-text text-dark">It always gets effortless to move your golf carts from one city to another when you pick an open trailer. For better advantage, it’s regular, fast, and affordable. Guess what? The open trailer does have multiple vehicle transport options.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('form.vehicle.golf_cart') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/Golf cart on open trailer.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-2 mb-3">
                                    <div class="row g-0">
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/1 image for Commercial b00h.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                    <h5 class="card-title sub-title active-shape">Tilt Trailers</h5>
                                                    <p class="card-text text-dark">If you have a couple of club cars transported into another state and are looking for a trailer with smoother roll-on and roll-off, then always go for the tilt-hauling option. This trailer type is comfortable for all types of green wheels.</p>
                                                    <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('form.vehicle.golf_cart') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-2 mb-3">
                                    <div class="row g-0">
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Hydraulic Lift Trailers</h5>
                                                <p class="card-text text-dark">This trailer has a hydraulic feature that
                                                    allows the bed to be lowered and raised
                                                    making unloading and loading a golf cart much more convenient.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('form.vehicle.golf_cart') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/Golf cart on hydraulic lift trailer.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="why-choose-us-slider">
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
                    <p class="slide-text">Our customers are our top priority, which is why we offer
                         24/7 support to our customers to erase any doubt and offer tailored solutions 
                         to their needs and concerns.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Affordability</h3>
                    <p class="slide-text">Get amazing and quality services without emptying your bank! Better rates and top-notch
                         quality are what we promise our customers. </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">100% Insurance</h3>
                    <p class="slide-text">To avoid any risks and damage we have 100% insured vehicles 
                        to ensure your vehicle is in safe hands.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Trusted By Many</h3>
                    <p class="slide-text">You can check our satisfied clients on our website, google as well as on different platforms
                         like BBB (Better Business Bureau) and social media platforms.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Proven experience</h3>
                    <p class="slide-text">With over years of experience Ship A1 has managed to deliver hundreds of 
                        vehicles throughout USA successfully.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    @include('partials.usa-states-map')
    {{-- <section class="tj-faq-section tj-faq-page pt-4">
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Is my Golf Cart insured during transport?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, your Golf Cart is fully insured during transportation. Our insurance covers any possible damage that
                                         may be caused during transit. Please refer to our insurance policy for more details.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I need to prepare my golf cart for shipping?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <strong>Here's how you need to help get your golf cart ready for shipping:</strong>
                                    <ul>
                                        <li class="m-0 p-0">Empty the Cart: Clean out any dirt or other debris to prevent damage during shipping.</li>
                                        <li class="m-0 p-0">Remove Personal stuff: Clean up behind any wayward items and personal belongings.</li>
                                        <li class="m-0 p-0">Secure the Loose Parts: Make sure all parts of the car, including mirrors and other accessories, are either tightly secured or removed.</li>
                                        <li class="m-0 p-0">Disengage the Battery: Take apart the battery cords for your own safety.</li>
                                        <li class="m-0 p-0">Check Tire Pressure: This will ensure the proper inflation of tires so as not to encounter any sort of problem while loading and unloading.</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How much does it cost to transport a golf cart?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The amount to ship your golf cart varies from a number of different elements involved: the distance,
                                    shipping method, open versus enclosed transport, and any added services for which you might want 
                                    to pay. Local transport, on average, will cost anything from $200 to $500, while intercontinental 
                                    may cost up to $600-$1,200. Please contact us with details of what you need that is, pickup and
                                    delivery locations, weight, and other specifications and we'll be sure to provide you with an 
                                    estimate of the cost involved.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How long does it take to deliver a golf cart?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is one of the many factors that depend on miles covered, shipping methods, and the demand at that time. Usually, local shipment within just a few
                                            hundred miles takes 1-3 days, while cross-country transportation could come in anywhere from 5 to 10 days. 
                                            You will be given estimated delivery times as you book your transport and can track your shipment throughout.
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    @php
    $faqs = [
        [
            'question' => 'What makes ShipA1 a reliable golf cart shipping company?',
            'answer' => 'The vehicle transport market is increasing every passing day. Therefore, always go for the licensed, certified, experienced, and strong vehicle insurance offering shipping agency.',
        ],
        [
            'question' => 'How can I book fast golf cart transport services?',
            'answer' => 'Connect with remotely available shipping agencies like ShipA1. We get you a quote in minutes and deliver your golf cart consignment in a couple of days.',
        ],
        [
            'question' => 'Can I get golf cart shipping delivered in one day with ShipA1?',
            'answer' => 'Every vehicle shipping company has its own on-road delivery submission dates. <a href="https://www.shipa1.com" target="_blank">Give a call to ShipA1</a>, share your urgent demands, and get the services as per your requirements.',
        ],
        [
            'question' => 'How much does golf cart shipping typically cost in the USA?',
            'answer' => 'Charges for golf car transport depend on the distance, the market’s average costs, and your selected service provider. For easy shipping under cost-efficient rates, choose none other than ShipA1.',
        ],
        [
            'question' => 'Does ShipA1 offer customized golf cart shipping options?',
            'answer' => 'At ShipA1, it’s easy to get customized golf cart shipping in the USA. Just fill in a short form of customized options and book the delivery in minutes.',
        ],
    ];
@endphp

<x-faq :faqs="$faqs" />
    @include('partials.blog-slider')
@endsection
@section('extraScript')
    <script>
        $(document).ready(function() {
            function addNewVehicle() {
                var newVehicleHtml =
                    `
                <div class="vehicle-info">
                <div class="row select-bm">
                    <!-- Bin icon for deleting vehicle -->
                    <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>
                <div class="col-md-4">
                <div class="input-form tj-select">
                <label>Year</label>
                <div class="dropdown">
                    <input class="form-control dropdown-toggle year" type="text"
                        name="year[]" id="year" placeholder="Select Year"
                        data-bs-toggle="dropdown" aria-expanded="false" maxlength="4" required>
                    <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                        <li><a class="dropdown-item">Select Year</a></li>`;
                var currentYear = {{ date('Y') }};
                for (var year = currentYear; year >= 1936; year--) {
                    newVehicleHtml += `<li><a class='dropdown-item' data-value='${year}'>${year}</a></li>`;
                }
                newVehicleHtml +=
                    `</ul>
                </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="input-form tj-select">
                <label>Make</label>
                <input type="text" id="make" name="make[]"
                placeholder="Enter Make" required="" />
                </div>
                </div>
                <div class="col-md-4">
                <div class="input-form tj-select model-div">
                <label>Model</label>
                <input type="text" id="model" name="model[]" placeholder="Enter Model"
                required="" />
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="condition" class="text-white">Condition</label>
                        <select class="nice-select" id="condition" name="condition[]">
                            <option value="1" selected>Running</option>
                            <option value="2">Non Running</option>
                        </select>
                    </div>
                </div>
                </div>
                </div>
                `;
                $('#vehicles-container').append(newVehicleHtml);
                initializeSearchableDropdown();
            }

            function initializeSearchableDropdown() {
                $('.dropdown-toggle.year').on('input', function() {
                    var input = $(this);
                    var filter = input.val().toLowerCase();
                    var dropdown = input.siblings('.dropdown-menu.year-dropdown');
                    dropdown.find('.dropdown-item').each(function() {
                        var text = $(this).text().toLowerCase();
                        if (text.includes(filter) || filter === '') {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                });
                $('.dropdown-menu.year-dropdown').on('click', '.dropdown-item', function() {
                    var item = $(this);
                    var input = item.closest('.dropdown').find('.dropdown-toggle.year');
                    input.val(item.text());
                    item.closest('.dropdown-menu').hide();
                });
                $('.dropdown-toggle.year').on('focus', function() {
                    $(this).siblings('.dropdown-menu.year-dropdown').show();
                });
                $(document).on('click', function(e) {
                    if (!$(e.target).closest('.dropdown').length) {
                        $('.dropdown-menu.year-dropdown').hide();
                    }
                });
            }
            $('#addVehicleBtn').click(function() {
                addNewVehicle();
            });
            $(document).on('click', '.delete-vehicle', function() {
                $(this).closest('.vehicle-info').remove();
            });
            initializeSearchableDropdown();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counter = document.getElementById('counter-value');
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const increment = target / 50;
            const updateCounter = () => {
                if (count < target) {
                    count = Math.ceil(count + increment);
                    counter.textContent = count;
                    setTimeout(updateCounter, 50);
                } else {
                    counter.textContent = target;
                }
            };
            updateCounter();
        });
        document.addEventListener("DOMContentLoaded", function() {
            const counter = document.getElementById('counter-value-2');
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const increment = target / 50;
            const updateCounter = () => {
                if (count < target) {
                    count = Math.ceil(count + increment);
                    counter.textContent = count;
                    setTimeout(updateCounter, 50);
                } else {
                    counter.textContent = target;
                }
            };
            updateCounter();
        });

    </script>
@endsection
