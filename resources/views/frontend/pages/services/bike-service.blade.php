@extends('frontend.layouts.app')
@section('title', 'Bike & Motorcycle Shipping Services in USA with Fast Delivery')
@section('meta_description', 'Trust our professional motorcycle shipping services for secure and timely delivery. Get your bike transported with care and precision all over the USA.')
@section('content')
<style>
    .card-2 {
        display: flex;
        align-items: center;
        background-color: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        filter: brightness(0.85);
    }
    .card-content {
        background: #1a191929;
        flex: 1;
        padding: 2rem;
    }
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #1a73e8;
        margin-bottom: 1rem;
    }
    .card-description {
        font-size: 1rem;
        color: #ffffff;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }
    .full-width {
        width: 100%;
    }
    .title-2 {
        color: #8fc445;
    }
    .desc-2 {
        color: white;
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
        box-shadow:0 5px 30px 0 rgba(35,43,54,.3);
    }
    .services {
        text-align: center;
        border-radius: 12px;
        padding: 10px 30px 0px 30px;
    }
    .services-h1 {
        text-align:center;
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
        background: url('/img/autoauction banner 2.webp');
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
                    <h1 class="breadcrumb-title text-center">Motorcyle Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Motorcyle</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-blog-standard pb-0 pt-4">
   <div class="container" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
           <div class="row">
                <div class="col-lg-7">
							<div class="image-container">
                                <img class="img-fluid" src="{{ asset('/frontend/images/project/1-banner-for-motorcycle-transport.webp') }}" loading="lazy" alt="Motorcyle Transport">
                            </div>
                             <br>
                    <div class="text-container text-left">
                        <h3>A Reliable and Cost-Effective Way of Motorcycle Shipping</h3>
                        <p>There are multiple motorcycle shipping companies online that offer services throughout the
                             nation easily, however finding a reliable company that ships your motorcycle in the quoted 
                             time can be a daunting task. When transporting with Ship A1 you don’t need to worry about 
                             any upfront or hidden payments because we provide our customers with accurate <a class="pp-link-2" href="{{ route('form.vehicle.form.vehicle.car') }}"> shipping quotes.</a>
                            With 16 years of experience in this field,<a class="pp-link-2" href="{{ route('welcome') }}"> Ship A1 </a> can confidently guarantee your smooth 
                            transportation! Providing services nationwide we excel in motorcycle shipment with plenty 
                            of benefits that leave the customer wanting to work with us again and again. Not only do we 
                            provide the best services we also take care of your budget and offer reasonable rates without 
                            compromising the quality.
                            </p>
                        <br>
                    </div>
                </div>
                <div class="col-lg-5">
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
                            <h4 class="title text-center">Motorcycle Quote!</h4>
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
                                            <input type="text" id="name" name="name" placeholder="Name" required="" />
                                            <small id="errName" class="err-style"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-form">
                                            <label class="d-block">Phone:</label>
                                            <input class="ophone" type="tel" id="phone" name="phone" placeholder="Number" required="" />
                                            <small id="errPhone" class="err-style"></small>
                                            <input type="hidden" name="country_code" id="country_code" />
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
                                            <input type="text" id="pickup-location" name="origin"
                                                placeholder="" required="" />
                                            <small id="errOLoc" class="err-loc"></small>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-form">
                                            <label class="d-block  mb-0"> Delivery Location:</label>
                                            <input type="text" id="delivery-location" name="destination"
                                                placeholder="" required="" />
                                            <small id="errDLoc" class="err-loc"></small>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row select-bm">
                                    <div class="col-md-12 text-center">
                                        <h4 class="text-white">Motorcycle Information</h4>
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
                                <a class="add-car-1" id="addVehicleBtn"><i class="fa fa-plus"></i> Add Vehicle</a>
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
                                            <input   type="text" id="c" name="modify_info"
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
                                    <div class="input-form mt-1">
                                        <label class="d-block text-white"> Image:</label>
                                        <input class="form-control image_input" name="image[]" type="file" accept="image/*" multiple
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
<section class="tj-about-section pt-0">
    <div class="container pb-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/2a-image-for-motorcycle-transport-_1_.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" 
                        data-sal-duration="800">Affordable and Secure Shipping</h3>
                        <p class="desc">
                            If you are worried about the increased rates of motorcycle shipping, and you don’t want
                             to continue the shipment because of that fear, worry no more because Ship A1 offers transparency
                              and affordability in every shipment. <br>
                            After all, ShipA1 believes in giving a quality offer to the customers rather than using the
                             opportunity against them. We understand your needs and promise to fulfill your requirements
                              by offering tailored solutions and taking care of your vehicle.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.cta-section')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" 
                        data-sal-duration="800">Stress-Free Motorcycle Shipping</h3>
                        <p class="desc">
                            Shipping your motorcycle from one place to another looks like an easy job but certain risks and 
                            demands arise when it comes to choosing different routes and places. However, if you are shipping 
                            with Ship A1, you have nothing to worry about since there are no risks involved when transporting
                             your vehicle. Our professional and experienced staff is well aware of everything necessary for the
                              shipment of motorcycles. <br>
                            Trusting Ship A1 will offer you peace of mind because that is our customer promise!
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/tuxpicom.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center pt-4" data-sal="slide-left" data-sal-duration="800">
                Why Choose Us?</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Secure Shipment</span>
                        <p class="desc">
                        The shipment of your vehicle is handled with utmost care and in a completely guarded way with us.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Affordable Price</span>
                        <p class="desc">
                        The combination of affordable price & timely vehicles delivery is what make our services unique and special.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">100% Insurance Coverage</span>
                        <p class="desc">
                            We believe in the safety and security of our vehicles as well as our customers which is why we 
                            have 100% insured vehicles to take care of any risks or unforeseen events.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">24/7 Customer Support</span>
                        <p class="desc">
                            Our customers are our top priority, which is why we offer 24/7 support to our customers to
                             erase any doubt and offer tailored solutions to their needs and concerns.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row full-width pt-4">
            <div class="col-12 custom-style">
                <h4 class=" text-center">Delivering Motorcycles Promptly Nationwide</h4>
                <p class=" text-center">Many professionals truckers are a part of ShipA1, and that is the main reason behind the on-time delivery of motorcycles. Another way to look into what services look like in a particular company, you can always look at their feedback section, testimonials, and their rating to know about their services. ShipA1 and its motorcycle shipping are famous around the nation, and that is why you will always find satisfied customers when it comes to ShipA1 motorcycle shipping. Since ShipA1 has its own quality standards, it believes that the customers should be given a proper service across the nation.</p>
                <div class="tj-theme-button  text-center mt-2">
                    <a class="tj-transparent-btn" href="{{ route('form.vehicle.form.vehicle.car') }}" >
                        Get Quote
                        <i class="flaticon-right-1"></i>
                    </a>
                </div>
            </div>
      </div>
    </div>
</section>
<section class="tj-testimonial-section">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <h5 class="title fs-1">Advanced Trailers used for Motorcycles</h5>
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
                                    <img src="{{ asset('/frontend/images/slider/Single-Motorcycle-on-Closed-Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Single-Motorcycle Trailers</h5>
                                        <p class="card-text  text-dark">Designed for a single motorcycle, this type
                                            of trailer is lightweight and easy to transport</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.form.vehicle.car') }}" >
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
                                        <h5 class="card-title sub-title active-shape">Multi-Motorcycle Trailers</h5>
                                        <p class="card-text text-dark">Capable of carrying more than 1 motorcycle, this type 
                                            of trailer has a strong body and has more features than the single motorcycle trailer.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.form.vehicle.car') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Multiple-Motorcycles-on-Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
<section class="tj-choose-us-section-service-bike-6">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h2 class="services-h1">Motorcyle Hauling Services</h2>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Enclosed Carrier</h5>
                        <p class="card-text text-dark">Although a bit expensive, it is a safe way to get your car 
                            transported. Enclosed carrier guards your car against the external environment such as 
                            weather ailments etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Open Trailer</h5>
                        <p class="card-text text-dark">A standard and cost-effective way to ship your car from anywhere to your desired destination. Your 
                            vehicle will be strapped onto an open trailer with utmost care and safety and delivered to your location without any
                             complications.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Expedited Shipping</h5>
                        <p class="card-text text-dark">If you are looking to move quickly to a new place and
                             need your car moved along with you then expedited shipping service must be your first choice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-faq-section tj-faq-page pt-4">
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
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I get a quote?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                At Ship A1, we have the convenience of free quotes that we offer to all our customers online.<br>You can call our direct 
                                number<a class="pp-link-2" href="#"> 1 (844) 474-4721</a> for an instant quote.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How much does it cost to ship  Motorcycle?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The price to send  Motorcycle will depend on distance, the type of shipping, open or enclosed,
                                     and any other services that might be necessary, such as an expedited service.
                                     Local hauling is usually around $200 to $600, and coast-to-coast shipping would
                                     run from $600 to $1500. Please feel free to contact us with the details so we can provide you with an exact quote for your shipment.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How long does it take for  Motorcycle to be shipped?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The time it will take to ship  Motorcycle is dependent on the distance of shipment, method of
                                    shipment, and demand at the point of shipment. The conveyance of local units,
                                    which is up to a few hundred miles, may take up to 1-3 days. And you should
                                    consider that cross-country shipment usually takes 5 to 10 days. you will
                                    always know where your shipment is.

                                    </div>
                                </div>
                            </div> 
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Is my Motorcycle insured during transport?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Yes, your Motorcycle is fully insured during transportation. Our insurance 
                                            covers any possible damage that may be caused during transit. Please refer to our
                                             insurance policy for more details.
                                        </strong>
                                    </div>
                                </div>
                            </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
@endsection