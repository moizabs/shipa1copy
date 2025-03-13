@extends('frontend.layouts.app')
@section('title', 'Fast Golf Cart Shipping Services in USA at Best Pricing')
@section('meta_description', 'Professional golf cart shipping services for safe, efficient delivery in USA. Enjoy peace of mind while we handle your golf cart shipping with care.')
@section('content')
<style>
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
        text-align:center;
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
                    <h1 class="breadcrumb-title text-center">Golf Cart Transport</h1>
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
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('/frontend/images/project/tuxpi.com.1730289103.webp') }}" loading="lazy" alt="Motorcyle Transport">
                        </div>
                            <br>
                <div class="text-container text-left">
                        <h3>What is golf cart shipping?</h3>
                        <p> Similar to any vehicle shipping, golf carts are also modes of transport that have proven to be 100%
                            convenient and cost-effective. Just like any other vehicle being shipped, they also require the
                            same amount of maintenance, care, and the shipping process. Golf carts are not limited to the
                            golf course but are also pretty well reputable in other factors.You must be wondering where and 
                            how else are golf carts used. You will come across multiple golf carts being utilized in places
                            like communities, hospitals, companies, resorts, etc.
                        </p> 
                </div>
                <div class="row mt-4">
                    <div class="col-6 text-center">
                        <h4><i class="fas fa-ship" style="color: var(--tj-primary-color);"></i> Successful Shipment</h4>
                        <div class="review-counter fs-2">
                            <span id="counter-value" class="ms-3" data-target="318" style="color: var(--tj-secondary-color);">0</span>k+
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <h4><i class="fas fa-smile" style="color: var(--tj-primary-color);"></i> Satisfied Clients</h4>
                        <div class="review-counter fs-2">
                            <span id="counter-value-2" class="ms-3 " data-target="289" style="color: var(--tj-secondary-color);">0</span>k+
                        </div>
                    </div>
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
<section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" 
                             data-sal-duration="800">Why is that?</h3>
                            <p class="desc">
                                We not only focus on providing top-notch services, but we also ensure that our offerings
                                 are meticulously tailored to meet your unique needs and expectations. With years of accumulated 
                                 experience and expertise, we can proudly state that our services are rooted in complete transparency 
                                 and unwavering reliability. <br>
                                Our commitment goes beyond just fulfilling your requirements, we aim to exceed your expectations by delivering 
                                personalized solutions that align perfectly with your specific demands. Every aspect of our service is designed
                                 with your satisfaction in mind, ensuring that you receive the highest level of care and attention throughout 
                                 the entire process.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('/frontend/images/project/2a-image-for-golf-cart-transport.webp') }}" alt="Image">
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
                            <img class="rounded" src="{{ asset('/frontend/images/project/1-image-for-golf-cart-transport.webp') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" 
                             data-sal-duration="800">Why Choose Ship A1 Transport?</h3>
                            <p class="desc">
                                <ul>
                                   <li> <b>Proven experience:</b> With over years of experience Ship A1 has managed to deliver hundreds of vehicles throughout USA successfully. </li>
                                   <li><b>Trusted By Many:</b> You can check our satisfied clients on our website, google as well as on different platforms like BBB 
                                    (Better Business Bureau) and social media platforms.</li>
                                   <li><b>100% Insurance:</b> To avoid any risks and damage we have 100% insured vehicles to ensure your vehicle is in safe hands.</li>
                                   <li><b>Affordability:</b> Get amazing and quality services without emptying your bank! Better rates and top-notch quality are what we promise our customers. </li>
                                </ul>
                                Choosing the right company for your shipping solutions is extremely crucial as it determines
                                 the security, timely delivery, and protection of your vehicles. Hence, <a class="pp-link-2" href="{{ route('welcome') }}">choosing Ship A1</a>
                                  Transport for your golf cart shipping has to be the best option for your transportation needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.cta-section')
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate text-center" data-sal="slide-left" 
                            data-sal-duration="800">Golf Cart Shipping Methods</h3>
                            <p class="desc text-center">Ship A1 provides a comprehensive range of services tailored to accommodate 
                                types of distances, timelines, and modes of protection for your golf cart.
                                 Here are the most common modes of shipping used:
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-6 sal-animate pt-2 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Open Auto Transport</span>
                            <p class="desc">
                                It's the affordable golf cart transport: It's the cheapest option of open truck or 
                                trailer transport carrying your vehicle. Your vehicle is exposed to weather, but on-board 
                                experts ensure your vehicle to be safe throughout the travel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-2 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Enclosed Auto Transport</span>
                            <p class="desc">
                                This is the maximum protection; the vehicle is completely sheltered in a trailer. 
                                It's ideal to travel long distances or through bad weather, but it is considerably more 
                                expensive for high-value or custom golf carts.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Door-to-Door Delivery</span>
                            <p class="desc">
                                This service will conveniently pick up a golf cart from its location
                                 and drop it off right at the destination. Great for anyone that enjoys an 
                                 ordeal-free experience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading mb-4">
                            <span class="sub-title active-shape">Terminal-to-Terminal Shipping</span>
                            <p class="desc">A cost-effective option is that you drop your golf cart at a 
                                terminal in proximity and pick up from another at the destination. This is, 
                                above all, a budget-friendly choice, more so in the long run.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row full-width ps-4 pt-4">
                <div class="col-12 custom-style">
                    <h4 class=" text-center">What do we offer?</h4>
                    <p class=" text-center">Ship A1 Transport masters a range of multiple services to our customers, from 
                       cost-effective deals, white glove delivery, door-to-door delivery, and terminal-to-terminal delivery 
                       to enclosed and open-air transport. Whether you’re renting a golf cart, purchasing it for your needs, 
                       want it removed from one location and moved to another, or just need it to be sent for maintenance, we 
                       have you covered! Choosing Ship A1 Transport for your<a class="pp-link-2" href="{{ route('form.vehicle.golf_cart') }}"> Golf Cart Shipping </a>means you have entrusted us 
                       as your trusted and reliable partner who shares mutual feelings when it comes to professionalism and 
                       transparency.</p>
                    <div class="tj-theme-button  text-center mt-2">
                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.golf_cart') }}" >
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
                                    <img src="{{ asset('/frontend/images/slider/Golf cart on enclosed trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Enclosed Trailers</h5>
                                        <p class="card-text  text-dark">Used for expensive or luxury golf carts, this type of trailer is designed to protect your
                                            vehicle from potential scratches, road debris, and weather conditions although it is a bit pricey as
                                            compared to the other trailers it offers peace of mind to the customers.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.golf_cart') }}" >
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
                                        <p class="card-text text-dark">A cost-effective option for those who just want their standard golf carts to be shipped, it
                                            provides accessibility and visibility to the golf carts strapped onto the trailer, without compromising the
                                            quality or duration of your shipment.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.golf_cart') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Golf cart on open trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
                                    <img src="{{ asset('/frontend/images/slider/1 image for Commercial b00h.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Tilt Trailers</h5>
                                        <p class="card-text text-dark">This trailer facilitates easy loading and
                                            unloading of a golf cart because of its tilted deck.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.golf_cart') }}" >
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
                                        <h5 class="card-title sub-title active-shape">Hydraulic Lift Trailers</h5>
                                        <p class="card-text text-dark">This trailer has a hydraulic feature that allows the bed to be lowered and raised
                                            making unloading and loading a golf cart much more convenient.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.golf_cart') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Golf cart on hydraulic lift trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
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
    document.addEventListener("DOMContentLoaded", function () {
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