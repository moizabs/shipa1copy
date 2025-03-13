@extends('frontend.layouts.app')
@section('title', 'Efficient Dry Van Transportation Services Across USA')
@section('meta_description', 'Our professional team provides excellent dry van transportation across the USA. We value punctuality for all of your van transportation needs.')
@section('content')
<style>
    .full-width {
        width: 100%;
    }
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
</style>
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Dry Van Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Dry Van</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-two-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="choose-us-top-content-1">
                            <div class="tj-section-heading-1">
                                <!-- <span class="sub-title-1 active-shape2"> Have any ideas in your mind?</span> -->
                                <h2 class="title-1">Dry-van Shipping Services</h2>
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="{{ route('frontend.forms.dryvan') }}">
                                    Get Quote <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Introduction</h6>
                                </div>
                            </div>
                            <p>
                                Ever heard of dry van transportation services or freight shipping? In this comprehensive guide,
                                 we will discuss the main features and benefits of dry van shipping which will help you decide what mode 
                                 to choose or what type of vehicle to ship while thinking about your reallocation or moving your goods.
                            </p>
                        </div>
                    </div>
                   
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">What is Dry Van Shipping?</h6>
                                </div>
                            </div>
                            <p>
                            Freight shipping, often referred to as "box trailer" or "dry van transport," is a fundamental and versatile method for moving goods in the freight transportation industry.
                            Dry van shipping is a widely preferred choice due to its versatility and cost-effectiveness. It is particularly well-suited for transporting goods that do not necessitate specific temperature conditions or specialised handling. Dry van trailers offer the convenience of easy loading and unloading at various locations, including warehouses, distribution centres, and shipping ports.</p>
                        </div>
                    </div>
                   
                </div>
                <div class="row ">
                    <h2 class="title-1">Advantages and Key Features of Dry Van Transportation:</h2>
                    <p>
                    This method of shipping involves the use of fully enclosed trailers to protect cargo from external elements such as weather,
                    dust, and theft. It is well known for its key features, which are:</p> 
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Versatility</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Convenience</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Cost-effectiveness</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Security</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Additional Dry Van Services</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Same-Day Shipping</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Expedited Freight</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Shipment Pairing</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">High-Value Cargo Protection Services</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Drop Trailers</h6>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
</section>
@include('partials.reveiw-small-detail') 
<section class="tj-about-section pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">LTL and FTL Frieght Shipping</span>
                        <p class="desc">
                            Shipping can be a daunting task, especially when it comes to choosing between FTL and LTL.
                            Both methods have their own unique advantages and disadvantages, Which is why it's important to 
                            understand the differences between them because ate Day Dispatch we empower you to choice with your 
                            own needs.
                            <h3>What is FTL ?</h3>
                            If you have a large amount of freight that needs to be shipped, FTL is probably the best option for you. With FTL shipping, you'll have access to an entire trailer that's dedicated solely to your freight.
                            This means that your shipment won't be mixed with other shipments, and it'll be delivered directly to its destination.
                            However, FTL shipping can be more expensive than LTL, especially if you don't have enough freight to fill an entire trailer.
                            FTL carriers typically base their rates on industry capacity, transportation type, and fuel costs.
                            FTL carriers are often less strict about charging for accessorial,
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  pt-4 mt-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/tuxpi.co0293926.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('partials.cta-section')
    <div class="container">
        <div class="row">
            <div class="col-lg-4  pt-4 mt-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/tuxpi.com.1665.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">LTL and FTL Frieght Shipping</span>
                        <p class="desc">
                        <h3>What is LTL ?</h3>
                        If you have a smaller shipment that doesn't require an entire trailer, LTL might be a better option. With 
                        LTL shipping, your shipment will be combined with other shipments from various businesses. This means that
                         your shipment might be loaded and unloaded multiple times before reaching its final destination, which can
                          result in longer delivery times. <br>
                        LTL carriers are more likely to charge extra fees for any disruptions or delays in the flow of freight
                         movement. Hence, the choice between FTL and LTL comes down to the size and type of your shipment, as 
                         well as your budget and timeline. By understanding the differences between these two methods, you can
                          make an informed decision that meets your specific shipping needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>       
<section class="tj-about-section pt-0">
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
                Key Facts About Dry Van Trailers</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Materials Used</span>
                        <p class="desc">
                        Dry van trailers are typically constructed from various materials, including galvanised steel, aluminium, 
                        hardwood, or iron. The choice of material can impact the trailer's durability, weight, and cost.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Limitations</span>
                        <p class="desc">
                        Despite various benefits, the shippers must consider the following limitations and discuss them with the
                            customer service team of the logistic company while shipping their valuable assets.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">No Climate Control</span>
                        <p class="desc">
                        Unlike refrigerated containers, often referred to as "reefers," dry vans do not have climate control capabilities. This means they are not equipped to maintain specific temperature conditions within the trailer. Therefore, dry van 
                        shipping is best suited for goods that do not require temperature-sensitive handling, such as frozen or refrigerated items.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Enclosed Container</span>
                        <p class="desc">
                        One of the defining features of dry van shipping is the use of fully enclosed trailers. These trailers have walls, a roof, and a floor, creating a sealed container to protect cargo from external elements. 
                        This enclosure provides a high level of security against weather conditions, dust, and theft. Dry van shipping involves sealed containers attached to semi-trucks. </p>
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
                <h5 class="title fs-1">Trailers used for DRY VAN</h5>
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
                                    <img src="{{ asset('/frontend/images/slider/Standard Dry Van Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Standard Dry Van Trailers</h5>
                                        <p class="card-text  text-dark">One of the most prevalent types of trailers which are used for the transportation of dry vans, these are in enclosed
                                            form, protected from weather conditions, road debris, and any other potential scratches.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.dryvan') }}" >
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
                                        <h5 class="card-title sub-title active-shape">Reefer Trailers</h5>
                                        <p class="card-text text-dark">Reefers are a transportation required for temperature-sensitive cargo however these can also transport dry vans, 
                                            especially when temperature control is a secondary concern. These are equipped with a cooling unit that assists in
                                            maintaining a cool temperature making them an ideal choice for dry goods</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.dryvan') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Reefer Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
                                    <img src="{{ asset('/frontend/images/slider/Flatbed Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Flatbed Trailers</h5>
                                        <p class="card-text text-dark">This type of trailer is used for flexible loading and unloading of dry vans, because of its accessible structure 
                                            this trailer is an ideal type for any oversized or oddly shaped vehicle and cargo.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.dryvan') }}" >
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
                                        <h5 class="card-title sub-title active-shape">Drop Deck Trailers</h5>
                                        <p class="card-text text-dark">These types of trailers usually are pretty similar to flatbeds but with a lower deck, which allows easy transportation 
                                            of dry vans that exceeds the height limit.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.dryvan') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Dropdeck Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
<section class="tj-choose-us-section-service-farm-8">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h2 class="services-h1">Common Sizes</h2>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">28' (pup trailer)</h5>
                        <p class="card-text text-dark">
                            <ul class="list-unstyled ps-0 text-start ">
                                <li>★ Length: 8.5 metres (28 feet)</li>
                                <li>★ Width: 2.4 metres</li>
                                <li>★ Height: 2.7 metres</li>
                                <li>★ Approximate Load Capacity:
                                Typically, pup trailers can carry up to 14 pallets.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">48' Dry Van:</h5>
                        <p class="card-text text-dark">
                            <ul class="list-unstyled ps-0 text-start ">
                                <li>★ Length: 14.6 metres (48 feet)</li>
                                <li>★ Width: 2.59 metres</li>
                                <li>★ Height: 4 metres</li>
                                <li>★ Approximate Load Capacity:
                                These trailers can accommodate around 24 pallets of cargo.</li>
                             </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">53' Dry Van:</h5>
                        <p class="card-text text-dark">
                            <ul class="list-unstyled ps-0 text-start ">
                                <li>★ Length: 16 metres (53 feet)</li>
                                <li>★ Width: 2.59 metres</li>
                                <li>★ Height: 2.59 metres</li>
                                <li>★ Approximate Load Capacity:
                                    53-foot dry vans are among the largest and can carry
                                    approximately 26 pallets.</li>
                             </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-faq-section tj-faq-page pt-5">
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
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How many types of freight do you transport?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ship A1 handles a wide quantity and range of freight including LTL and FTL transporting services, as well as ensuring the safety of your vehicles and peace of mind.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What’s the shipping process of freight in FTL?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The process is quite easy, if your shipment is large enough to take up enough space it will be a full truckload and it shall be transported in a separate truck all by itself, if your shipment does not take the entire space, it will be transported along with other shipments and this mode is called Partial Truckload.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How much time will it take to ship my freight?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>It all depends on the potential route planning as well as the distance. However, Ship A1 will provide an estimated timeframe during the quote process and keep you updated throughout the entire journey.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    How do I prepare my vehicle for transport?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We'll provide detailed instructions, but you'll need to remove personal belongings, as well as make sure to follow guidelines or instructions based on the chosen transport method.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-dryvan mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-us-top-content">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">Have any ideas in your mind?</span>
                        <h2 class="title">Reasons Why You Choose Us.</h2>
                    </div>
                    <div class="tj-theme-button">
                        <a class="tj-transparent-btn" href="{{ route('quote.form.combine') }}">
                        Get Quote<i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item">
                    <div class="choose-step-box">
                        <div class="choose-box"></div>
                        <div class="step-content">
                            <h6 class="title">Competitive Pricing:</h6>
                        </div>
                    </div>
                    <p>
                        At Ship A1 we offer the best services to our customers accompanied by multiple benefits like affordable rates,
                         we do not let this factor affect the quality of our services. 
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                <div class="choose-us-step-item">
                    <div class="choose-step-box">
                        <div class="choose-box"></div>
                        <div class="step-content">
                            <h6 class="title">Real-Time Tracking:</h6>
                        </div>
                    </div>
                    <p>
                        Track your shipping status anytime and anywhere, this enables the customers to secure 
                        their peace of mind and trust the process. 
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                <div class="choose-us-step-item">
                    <div class="choose-step-box">
                        <div class="choose-box"></div>
                        <div class="step-content">
                            <h6 class="title">100% Insurance:</h6>
                        </div>
                    </div>
                    <p>
                        Rest assured! Because our Dry Vans are 100% insured and secured from any unforeseen incidents.
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                <div class="choose-us-step-item">
                    <div class="choose-step-box">
                        <div class="choose-box"></div>
                        <div class="step-content">
                            <h6 class="title">24/7 Customer Support:</h6>
                        </div>
                    </div>
                    <p>
                        Our expert and professional team ensures our customers are not left unattended, with 24/7 service to diminish customer
                         concerns we take our job very seriously and our main motive is to gain customer loyalty. 
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                <div class="choose-us-step-item">
                    <div class="choose-step-box">
                        <div class="choose-box"></div>
                        <div class="step-content">
                            <h6 class="title">Door to Door:</h6>
                        </div>
                    </div>
                    <p>
                        We handle every step, picking up the vehicle from your location and delivering 
                        it to your destination saving you time and effort.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.blog-slider')
@endsection
@section('extraScript')
@endsection