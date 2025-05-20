@extends('frontend.layouts.app')
@section('title', 'ShipA1 - Top ATV/UTV Transportation Services in USA.')
@section('meta_description', 'Your search for the best ATV/UTV transportation should end here! Connect with ShipA1 and get
instant, customized quotes today with extra charges.')
@section('canonical')
<link rel="canonical" href="{{ url()->current() }}">
@endsection
<script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "UTV Transportation Service",
  "description": "ShipA1 offers trusted, convenient ATV/UTV transport across the USA with secure, affordable options. Get a quick quote for timely delivery with experienced carriers and advanced trailers. Customers enjoy door-to-door delivery, real-time tracking, and full insurance coverage.",
  "provider": {
    "@type": "Organization",
    "name": "ShipA1",
    "url": "https://www.shipa1.com/transport-services/motorcycle",
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
  "serviceType": "UTV Transportation Service",
  "areaServed": {
    "@type": "Place",
    "name": "USA"
  },
  "offers": {
    "@type": "AggregateOffer",
    "url": "https://www.shipa1.com/transport-services/atv-utv",
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
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is ShipA1 available for ATV/UTV transportation in my city?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we are active all over the USA. Our team covers all commercial and remote locations of all fifty states."
      }
    },
    {
      "@type": "Question",
      "name": "Can I ship my ATV and UTV at the same time with ShipA1?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, with custom ATV/UTV transportation options you can choose a multi‑vehicle trailer type."
      }
    },
    {
      "@type": "Question",
      "name": "How secure are ShipA1’s ATV/UTV transport services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our drivers and carriers are native and experienced. We also make sure to secure your selected trailers before starting on‑route journeys."
      }
    },
    {
      "@type": "Question",
      "name": "How does ShipA1 transport ATVs and UTVs in the USA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "After pickup and loading, we deliver shipments through state‑to‑state and city‑to‑city routes, finishing with door‑to‑door submission."
      }
    },
    {
      "@type": "Question",
      "name": "How much does single‑vehicle UTV transport cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Charges depend on distance, UTV type, and location. Contact our customer support team for the most cost‑efficient options."
      }
    }
  ]
}


    </script>
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

    .side-container{
           display: flex;
           justify-content: center;
           align-items: center;
           margin: 50px auto;
           padding:20px;
        }
        .side-container div h2{
            color: #062e39;
        }
        .side-container div p {
            color: #062e39;
        }
        .side-container div h2 span{
            color: #8fc445;
            font-weight: 700;
        }
        .side-container div hr{
            color: #8fc445;
            height: 8px;    
            opacity: 1; 
            /* border-radius: 5px; */
            border-top-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .btnfaq{
            border: none;
            border-radius: 5px;
            background-color: #8fc445;
            color: white;
            padding: 6px ;
            transition: 1s;
        }
        .btnfaq:hover{
            background-color: #062e39;
            color: white;
        }
        .faq-container {
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding:20px;
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
</style>
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title fs-2 text-center">Best UTV Transport Company in USA– Trust Ship A1 for Your ATV/UTV Transportation Needs!</h1>
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
                    <h2 class="fs-3">Convenient ATV/UTV Transport Service</h2>
                    <p>ShipA1 is not just the top or best ATV/UTV transport company; it’s the trusted and proven all-terrain vehicle and utility task vehicle shipping agency. Taking care of side-by-side hauling, convenience, packaging, and security, we offer the suitable ATV/UTV shipping options all over the USA.
                       <p>A simple quote changes your delayed all-terrain vehicle and utility task vehicle transport into just-arriving delivery. ShipA1 is ready for urgent quotes for your ATV or UTV orders. Connect with us today. </p>
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
<section class="why-choose-us-slider">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white fs-3">Here is how we make your ATV/UTV shipping easy in the USA.</h2>
            {{-- <span class="sub-title active-shape text-white">Here is how we make your ATV/UTV shipping easy in the USA.</span> --}}
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">All-Day Active Help Desk </h3>
                    <p class="slide-text">The team is ready to get you a quote, suggest best ATV/UTV shipping options, and confirm the booking.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-truck icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Budget-Friendly Prices</h3>
                    <p class="slide-text">Utilize a free digital average <a class="alllinks" href="{{ route('quote.form.combine') }}">shipping cost calculator</a> . We shape your ATV/UTV transport journey effortlessly.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Full Vehicle Security</h3>
                    <p class="slide-text">Safe pickup and loading of your ATV/UTV vehicles. On-road monitoring of advanced trailers.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-map-marker-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Trained Carriers </h3>
                    <p class="slide-text">Our aligned team is experienced enough to handle touch roadblocks, heavy traffic, and unpredictable weather conditions.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-trailer icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Timely Delivery</h3>
                    <p class="slide-text">No more delays, fixed maintenance stops, and on-time delivery of your hand-picked ATV/UTV transporting trailers.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" 
                             data-sal-duration="800">Single-Person ATV Transport</h3>
                            <p class="desc">
                                The trend of ATV rides in the remote locations of California, New Jersey, Nevada, and Alabama is not new. You need your all-terrain vehicles (sports, utility, and farm) around your backyard. Or maybe there should be a luxurious collection of modern quad bikes at your farmhouses in Taxes, Iowa, and Missouri.<br>
                                ATV rides are fun. You can make their shipping more relaxing by collaborating with our team: ready and available in your city or state in the USA. So, not just in New York, Alaska, Maryland, and Virginia, we are active all over the United States of America. Say yes to convenient and <a class="alllinks" href="{{ route('services') }}">trusted side-by-side hauling services</a>.
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
                        data-sal-duration="800">Multiple Riders UTV Transport</h3>
                    <p class="desc">
                        Yes, you heard it right, this UTV transport service is for your adventure/trail, work/crew, and electric utility task vehicles. SxS UTVs size, type, and delivery distance matter to suggest a suitable highly advanced trailer from our side. As we take the info of year, make, and model for transportation of vehicles. <br>
                         <ul>
                            <li>Weight</li>
                            <li>Size</li>
                            <li>Shape</li>
                            <li>Distance traveled</li>
                            </ul> 
                            If our affordable rates work for you then you are welcome to get our additional benefits during this city-to-city or state-to-state UTV transportation service. Hand-pick the shipping hauler from our tilt, open, enclosed, and multi-vehicle options. It just takes a few steps to book our UTV relocation services. 
                    </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        {{-- <div class="container">
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
        </div> --}}
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
@include('partials.cta-section')
@include('partials.usa-states-map')
{{-- <section class="tj-choose-us-section-service-atv-utv-2">
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
</section> --}}
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
</section> --}}
@php
    $faqs = [
        [
            'question' => 'Is ShipA1 available for ATV/UTV transportation in my city?',
            'answer' => 'Yes, we are active all over the USA. Our team covers all commercial and remote locations of all fifty states here.',
        ],
        [
            'question' => 'Can I ship my ATV and UTV at the same time with ShipA1?',
            'answer' => 'Why not, with custom ATV/UTV transportation options you can choose a multi-vehicle trailer type.',
        ],
        [
            'question' => 'How secure are ShipA1’s ATV/UTV transport services?',
            'answer' => 'Our drivers and carriers are native and experienced. We also make sure to secure your selected trailers before you go towards on-route journeys.',
        ],
        [
            'question' => 'How does ShipA1 transport ATVs and UTVs in the USA?',
            'answer' => 'In simple terms, after the pickup and loading of your ATVs/UTVs, our team delivers the shipment through state-to-state, and city-to-city transport methods, ending the on-road journeys with door-to-door submission.',
        ],
        [
            'question' => 'How much does single-vehicle UTV transport cost?',
            'answer' => 'Charges for your UTV transport depend on distance, UTV type, and location. You are requested to connect with our customer support team for better cost-efficient options.',
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

        document.querySelectorAll(".faq-toggle").forEach(button => {
        button.addEventListener("click", () => {
            const faqContent = button.nextElementSibling;
            const isOpen = button.classList.contains("open-faq");

            document.querySelectorAll(".faq-toggle").forEach(btn => {
                btn.classList.remove("open-faq");
                btn.nextElementSibling.style.display = "none";
                btn.querySelector("span").textContent = "+";
            });

            if (!isOpen) {
                button.classList.add("open-faq");
                faqContent.style.display = "block";
                button.querySelector("span").textContent = "-";
            }
        });
    });
    </script>
@endsection