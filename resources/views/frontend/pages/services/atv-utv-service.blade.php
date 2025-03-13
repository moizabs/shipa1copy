@extends('frontend.layouts.app')
@section('title', 'Best ATV & UTV Transport Services in USA with Quick Delivery')
@section('meta_description', 'Affordable and fast ATV and UTV transport services in USA. We ensure your ATV/UTV are transported safely and efficiently to your destination.')
@section('content')
<style>
    .full-width {
        width: 100%;
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
        background: url('/img/1-background-image-ATV-Transport.webp');
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
                    <h1 class="breadcrumb-title text-center">ATV/UTV Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> ATV/UTV</span>
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
                <div class="image-container">
                    <img class="img-fluid" src="{{ asset('/frontend/images/project/tuxpi.coo.webp') }}" loading="lazy" alt="Motorcyle Transport">
                </div>
                    <br>
                <div class="text-container text-left">
                    <h3>ATV/UTV Transport Service</h3>
                    <p>Are you in search of a trustworthy ATV/UTV transport company for your shipment? Well, then you are on the right platform.
                        Ship A1 is a dominating vehicle transport company providing top-rated ATV/UTV services to its valuable customers at competitive 
                        market rates. Choosing the right company will save you from trouble, and you will have a remarkable journey. 
                        We will share some noteworthy factors that come into play whenever you plan to ship an ATV/UTV. <br> The key considerations
                        during the ATV shipment that you need to consider are:
                        <br>
                            <ul>
                            <li>Convenience</li>
                            <li>Ratings</li>
                            <li>Insurance Policy and Coverage</li>
                            <li>Affordability</li>
                            </ul> 
                    </p> 
                    <br>
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
                        <h4 class="title text-center">ATV/UTV Quote!</h4>
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
                                        <input type="tel" class="ophone" id="phone" name="phone" placeholder="Number"
                                            required="" />
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
                                    <h4 class="text-white">Atv/Utv Information</h4>
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
                                        <input   type="text" id="c" name="modify_info"
                                            placeholder="Modification" />
                                    </div>
                                </di>
                                <div class="col-md-6">
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
                                </div>
                            </div>
                            <div class="input-form">
                                <label class="d-block text-white"> Image:</label>
                                <input class="form-control image_input" type="file" accept="image/*" multiple
                                    onchange="previewImages(event)">
                                <div class="image-preview-container" id="imagePreviewContainer"></div>
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
<section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" 
                             data-sal-duration="800">Insurance and Safety</h3>
                            <p class="desc">
                                Apart from the company’s experience, ratings, and shipping services, another thing that you need to consider
                                 when choosing an All-Terrain transport company is the insurance coverage. We all are vulnerable to unexpected 
                                 incidents, and all we can do is prepare ourselves beforehand to avoid any trouble in the long run, and for that,
                                  insurance coverage is essential. <br>
                                Before making any step towards the shipment process ask all the necessary questions about the insurance policy. 
                                Some shipping companies provide the full insurance package. However, it is smart to ask beforehand so to free yourself 
                                in case there is any mishap during the shipment. You can also have a conversation with the company’s representative 
                                if you are having any problems understanding the process.
                                </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('/frontend/images/project/2a-image-for-ATV-UTV-transport-_1_.webp') }}" alt="Image">
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <div class="container pb-4">
            <div class="row">    
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                 <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/2b-image-for-ATV-UTV-transport-_1_.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" 
                        data-sal-duration="800">Pricing Factors Consideration</h3>
                    <p class="desc">
                        At last, you cannot erase the price factor from the list when talking about
                         All-Terrain transportation. The price for the shipment of an ATV depends on several factors such as <br>
                         <ul>
                            <li>Weight</li>
                            <li>Size</li>
                            <li>Shape</li>
                            <li>Distance traveled</li>
                            </ul> 
                            Apart from that, other things that can impact the price include fuel costs, the time of the year, and other additional
                             insurance. 
                            Weight is the main factor affecting the price of the shipment. Considering all these factors, Ship A1 is the all-in-one 
                            choice for anyone willing to ship their All-Terrain vehicle. You can get our services all over the United States with ease. 
                            So, get your quotes and start your car transport journey with us.
                    </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        @include('partials.cta-section')
        <div class="container">
            <div class="row">
                <h2 class="title sal-animate text-center pt-4" data-sal="slide-left" data-sal-duration="800">
                    Why Choose Us?</h2>
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Access To All Locations</span>
                            <p class="desc">
                            We currently ship all around the contiguous United States and in case of ATV/UTV 
                            it’s easier to reach locations because the trailers aren’t big in size for atv shipping.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Types of ATV/UTV</span>
                            <p class="desc">
                            A wide range of ATV’s and UTV’s could be shipped with the car hauling method 
                            of door to door transport such as Quads, Sports ATV etc.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Advanced Trailers</span>
                            <p class="desc">
                                We offer our customers 2 premium and most convenient modes of trailers that are enclosed and open. Enclosed trailers are expensive 
                                as they ensure the protection of your vehicle and ship it in a closed trailer whereas an open trailer is the most cost-effective and standard mode of shipping your vehicle,
                                 in this mode your vehicle will be shipped in an open trailer with utmost care and safety. 
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Tracking System</span>
                            <p class="desc">
                                When transporting with Ship A1 you will have the benefit of tracking
                                 your shipment from anywhere and anytime.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row full-width ps-4 pt-4">
                <div class="col-12 custom-style">
                    <h4 class=" text-center">Company Performance and Quality</h4>
                    <p class=" text-center">The first thing that you need to consider when selecting any auto transport company 
                        for your ATV shipment is to check the overall company’s performance. For that, you can visit the company’s platform
                         and check customer reviews and ratings. Our customer reviews are 100% original and genuine, they will give you a clear idea 
                         of where the company stands in the shipping industry. You will find everything you need for your All-Terrain Vehicle Transport
                          on our platform.
                        Ship A1 stands tall in the auto transportation business because we ensure the quality of our customer’s
                         vehicles and keep them as our top priority. So what are you waiting for? Get a free quote from our website 
                         now and get a rough estimate of your shipment!
                         </p>
                    <div class="tj-theme-button  text-center mt-2">
                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.atv_utv') }}">
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
                <h5 class="title fs-1">Trailers used for ATV/UTV</h5>
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
                                    <img src="{{ asset('/frontend/images/slider/ATV on Closed Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Enclosed Trailer</h5>
                                        <p class="card-text  text-dark">Offer full protection from weather, road debris, potential scratches, and damages due
                                            to route conditions. Often equipped with ramps for loading and unloading, are a bit pricey because this
                                            type of trailer is used for classic and luxurious ATVS and UTVS.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.atv_utv') }}">
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
                                        <h5 class="card-title sub-title active-shape">Open Trailer</h5>
                                        <p class="card-text text-dark">Lightweight and easy to transport, one of the most standard and commonly used trailers.
                                            With the best rates, this offers visibility and accessibility and is used for standard ATVS and UTVS.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.atv_utv') }}">
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/ATV on Open Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
                                    <img src="{{ asset('/frontend/images/slider/ATV on Tilt Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Tilt Trailer</h5>
                                        <p class="card-text text-dark"> Has a tilted deck for easy loading and unloading, is mostly used and preferred for heavier
                                            ATVS and UTVS.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.atv_utv') }}">
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
                                        <h5 class="card-title sub-title active-shape">Multi-Vehicle Trailer</h5>
                                        <p class="card-text text-dark">Can easily carry more than 1 UTV and ATV, offering a stable and secure
                                            transportation solution.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.atv_utv') }}">
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Multiple ATVs on Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
<section class="tj-choose-us-section-service-atv-utv-2">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h2 class="services-h1">Things To Keep In Mind</h2>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Transit Insured</h5>
                        <p class="card-text text-dark">One of the things that is a make or break for the customer is whether he 
                            would get insurance or not?. At ShipA1 you will get a full insurance coverage during transit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Suspension for Safer Transit</h5>
                        <p class="card-text text-dark">The ATV/UTV hauling service becomes even more safer because of the suspensions
                            our trailers are equipped with. It will nullify the road debris completely.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Tracking of ATV/UTV</h5>
                        <p class="card-text text-dark">In some of the cases we give you the system to track the activity of the
                            trucker where he has reached & how long would it take to deliver shipment?</p>
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
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Is my ATV/UTV insured during transport?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, your ATV/UTV is fully insured during transportation. Our insurance covers any 
                                        possible damage that may be caused during transit. Please refer to our insurance 
                                        policy for more details.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How much does it cost to ship an ATV/UTV?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>The price to send an ATV/UTV will depend on distance, the type of car shipping, open or enclosed,
                                            and any other services that might be necessary, such as an expedited service.
                                            Local hauling is usually around $200 to $600, and coast-to-coast shipping would
                                            run from $600 to $1500. Please feel free to contact us with the details so we can
                                             provide you with an exact quote for your shipment.
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I get a quote?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                At Ship A1, we have the convenience of free quotes that we offer to all our customers online.<br>You can call our direct 
                                number<a class="pp-link" href="#"> 1 (844) 474-4721</a> for an instant quote.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How long does it take for an ATV/UTV to be shipped?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The time it will take to ship an ATV/UTV is dependent on the distance of shipment, method of
                                    shipment, and demand at the point of shipment. The conveyance of local units,
                                    which is up to a few hundred miles, may take up to 1-3 days. And you should
                                    consider that cross-country shipment usually takes 5 to 10 days. you will
                                    always know where your shipment is.

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
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support</h3>
                    <p class="slide-text">Our customers are our top priority, which is why we offer 24/7 support to address any concerns and provide tailored solutions to meet their needs.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-truck icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Competitive Pricing</h3>
                    <p class="slide-text">We provide cost-effective rates and premium services without compromising the quality of our customer’s shipments.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Full Insurance Coverage</h3>
                    <p class="slide-text">100% insured vehicles to ensure peace of mind and security for our customers against unforeseen incidents.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-map-marker-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Real-Time Tracking</h3>
                    <p class="slide-text">Track your shipment from anywhere, anytime with the help of our advanced tracking service.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-trailer icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Advanced Trailers</h3>
                    <p class="slide-text">We offer reliable enclosed and open trailers equipped with premium features to protect your UTV and ATV during transport.</p>
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