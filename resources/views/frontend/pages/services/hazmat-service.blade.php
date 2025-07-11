@extends('frontend.layouts.app')
@section('title', 'Hire Trained &amp; Trusted team for Hazmat Transportation')
@section('meta_description', 'Hazmat product shipping is not a typical transport delivery. You need ShipA1’s expertly trained
team here. Get a quote today and hire the best men in.')
@section('canonical')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection
@section('content')
<script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Hazmat Transportation Service",
  "description": "ShipA1 Transport provides trusted Hazmat transportation services across the USA, ensuring safe and compliant handling of hazardous materials. With rigorous training and adherence to strict regulations, we guarantee reliable delivery while prioritizing safety and environmental protection.",
  "provider": {
    "@type": "Organization",
    "name": "ShipA1",
    "url": "https://www.shipa1.com/transport-services/hazmat",
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
  "serviceType": "Hazmat Transportation Service",
  "areaServed": {
    "@type": "Place",
    "name": "USA"
  },
  "offers": {
    "@type": "AggregateOffer",
    "url": "https://www.shipa1.com/transport-services/hazmat",
    "priceCurrency": "USD",
    "lowPrice": 199
  },
  "sameAs": [
    "https://www.facebook.com/shipa1",
    "https://www.shipa1.com"
  ]
}

</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What types of hazardous materials can ShipA1 transport?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Chemicals, flammable liquids, gases, explosives, radio-activity, and toxic substances."
    }
  },{
    "@type": "Question",
    "name": "What safety measures are followed during hazardous materials transport?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Proper labeling and packaging, appropriate containers, secure loading, frequent vehicle inspections, and trained drivers."
    }
  },{
    "@type": "Question",
    "name": "How is the cost of hazardous materials transport calculated?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Factors that may influence the cost include the type and amount of hazmat transportation, the distance it will cover, protective measures, special instruments/equipment that might be required, and adding insurance on top of everything. Please call us for an accurate quote 1(844) 474-4721."
    }
  }]
}
</script>

    <style>
        .full-width {
            width: 100%;
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

        .services {
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

        .card- {
            background: #29494e;
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
            background: url('/img/1 background image hazmart transport.webp');
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
                        <h1 class="breadcrumb-title ml-4 fs-2 w-75">Hazmat Transportation Services in USA You Can Trust - Get
                            Quote Now!</h1>
                        <h2 class="breadcrumb-title ml-4 fs-6 w-75 mb-5">Government urges: only partner with a certified hazmat transportation company in the USA Therefore, connect with ShipA1 today!</h2>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Hazmat</span>
                            </span>
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
                <div class="col-lg-8 sal-animate " data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h2 class="sub-title active-shape">Safe Handling and Storage of Hazardous Materials</h2>
                            <p class="desc">
                                It's essential to label all hazardous materials with the appropriate
                                Hazmat symbols. Different symbols correspond to each category, so ensure
                                correct labeling for proper handling. Using the right containers for
                                storage is crucial. For example, if you're storing a liquid, invest in a
                                proper drum. Also, consider spill control pallets to prevent extensive
                                clean-up in case of leaks.
                                Ensure that you have Materials Safety Data Sheets (MSDS) available for
                                your employees. These are essential resources that guide how to handle
                                various materials. You can find these sheets online, but be sure to use
                                the most recent version and print multiple copies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/OLD/hazmat-service2.webp') }}"
                                alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/OLD/hazmat-service4.webp') }}"
                                alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 sal-animate " data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Hazmat Training</span>
                            <p class="desc">
                            <h4>7.5 Tonne Luton Van</h4>
                            According to the Hazmat Training Handbook, there are four key points to make your employees
                            aware of:
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    {{-- <ul class="ps-0"> --}}
                                    <p> <strong>General Awareness:</strong> Employees should have a basic understanding of
                                        Hazmat safety and how your facility operates.</p>
                                    <p> <strong>Security Training:</strong> Offer basic security awareness training for
                                        handling, storing, and transporting hazardous materials securely.</p>
                                    {{-- </ul> --}}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <ul class=" ps-0">
                                        <p> <Strong>Safety Training:</Strong> Teach them how to respond to emergencies and
                                            prevent accidents, fostering a safety-conscious workplace culture.</p>
                                        <p> <strong>Job-Specific Training:</strong> Provide training that is tailored to
                                            their specific roles and responsibilities.</p>
                                    </ul>
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-about-section pt-0 ">
        <div class="container">
            <div class="row">
                <h2 class="title">Hazmat Rules</h2>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Job Procedures</span>
                            <p class="desc">Define specific procedures and job duties for each employee,
                                and ensure they receive job-specific training.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Personal Protective Gear</span>
                            <p class="desc">Always have personal protective equipment available. Employees should inspect
                                it
                                before use to ensure it's safe; if damaged, replace it.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Proper Use</span>
                            <p class="desc">In handling hazardous materials, employees should only use them for their
                                intended purposes.
                                Avoid using substances for tasks they weren't designed for, ensuring safety and compliance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-blog-standard pt-0 pb-4">
        <div class="container">
            <div class="row full-width pt-4 ps-4">
                <div class="col-12 custom-style">
                    <h4 class=" text-center">Safety First with Ship A1</h4>
                    <p class=" text-center">At Ship A1 Transport Service, our commitment to safety extends to the
                        transportation
                        of hazardous materials (Hazmat). We adhere to strict regulatory guidelines and industry best
                        practices to
                        ensure the secure and compliant transport of these materials.Our specialized team undergoes rigorous
                        Hazmat training, covering everything from proper handling and packaging to emergency response
                        procedures.
                        With Ship A1, you can have confidence in the safe and reliable transportation of Hazmat, protecting
                        both
                        people and the environment throughout the journey.Choose Ship A1 for safe and reliable Hazmat
                        transport.
                    </p>
                    <div class="tj-theme-button  text-center mt-2">
                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.hazmattransport') }}">
                            Get Quote
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.cta-section')
    <section class="tj-choose-us-section-two-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-us-top-content-1">
                        <div class="tj-section-heading-1">
                            <h2 class="title-1">Hazmat Shipping Services</h2>
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
                                <h6 class="title-1">What is HAZMAT?</h6>
                            </div>
                        </div>
                        <p>HAZMAT, (Hazardous Material), refers to substances that can be really risky for our health,
                            safety,
                            and even the things we build and use—if they're not handled and transported carefully. To make
                            sure
                            these dangerous materials are moved safely, there are important rules and guidelines to follow.
                            Some of these rules come from organizations like IATA, ICAO, the United Nations, and others.
                            They create regulations like the Dangerous Goods Regulations and the International Maritime
                            Dangerous
                            Goods Code. These rules help everyone involved in transporting these materials do it safely.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="choose-us-step-item-1">
                        <div class="choose-step-box-1">
                            <div class="choose-box-1"></div>
                            <div class="step-content-1">
                                <h6 class="title-1">What Counts as HAZMAT?</h6>
                            </div>
                        </div>
                        <p>Understanding the classification of hazardous materials into different classes is crucial because
                            it
                            guides how these materials should be treated to ensure safety during their handling and
                            transportation. Each class has specific rules and precautions associated with it to prevent
                            accidents, spills, fires, or other dangers.
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <ul class="">
                                    <li> Explosives (Class 1): These are things that can explode, like fireworks, bullets,
                                        or dynamite.</li>
                                    <li> Gases (Class 2): These are gases that can catch fire easily, like the gas in
                                        lighters or aerosol sprays.</li>
                                    <li> Flammable Liquids (Class 3): These are liquids that can easily catch fire, like
                                        gasoline or paint.</li>
                                    <li> Flammable Solids (Class 4): These are solid things that can burn, like matches or
                                        certain metals.</li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-3">
                                <ul class="">
                                    <li> Oxidizing Substances (Class 5): These substances can make other things catch fire
                                        more easily.</li>
                                    <li> Toxic Substances (Class 6): These are things that can seriously hurt or even kill
                                        you if you're exposed to them. Think of strong acids or poisonous chemicals.</li>
                                    <li>Radioactive Materials (Class 7): These are materials that give off harmful
                                        radiation, like some medical stuff or uranium.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <h2 class="title-1">How to Safely Ship HAZMAT ?</h2>
                <p>Shipping hazardous materials, or HAZMAT, requires special care to keep everyone safe.
                    They are often moved in special tank containers.</p>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="choose-us-step-item-1">
                        <div class="choose-step-box-1">
                            <div class="choose-box-1"></div>
                            <div class="step-content-1">
                                <h6 class="title-1">Proper Packaging</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="choose-us-step-item-1">
                        <div class="choose-step-box-1">
                            <div class="choose-box-1"></div>
                            <div class="step-content-1">
                                <h6 class="title-1">Correct Labels</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="choose-us-step-item-1">
                        <div class="choose-step-box-1">
                            <div class="choose-box-1"></div>
                            <div class="step-content-1">
                                <h6 class="title-1">Safety Data Sheets (SDS)</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="choose-us-step-item-1">
                        <div class="choose-step-box-1">
                            <div class="choose-box-1"></div>
                            <div class="step-content-1">
                                <h6 class="title-1">Separate Containers</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
    $faqs = [
        [
            'question' => 'What types of hazardous materials can ShipA1 transport?',
            'answer' => 'Chemicals, flammable liquids, gases, explosives, radio-activity, and toxic substances.',
        ],
        [
            'question' => 'What safety measures are followed during hazardous materials transport?',
            'answer' => 'Proper labeling and packaging, appropriate containers, secure loading, frequent vehicle inspections, and trained drivers.',
        ],
        [
            'question' => 'How is the cost of hazardous materials transport calculated?',
            'answer' => 'Factors that may influence the cost include the type and amount of hazmat transportation, the distance it will cover, protective measures, special instruments/equipment that might be required, and adding insurance on top of everything. Please call us for an accurate quote 1(844) 474-4721.',
        ],
    ];
@endphp

<x-faq :faqs="$faqs" />
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
                        <p class="slide-text">Our customers come first, which is why we provide 24/7 support to clear doubts and offer tailored solutions to their needs
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="slide text-center">
                        <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                        <h3 class="slide-title">On-Time Delivery</h3>
                        <p class="slide-text">At Ship A1, we value time for both our customers and our company, ensuring your cargo is delivered quickly, on schedule, and in perfect condition.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="slide text-center">
                        <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                        <h3 class="slide-title">Experienced Professionals</h3>
                        <p class="slide-text">Our highly skilled and professional carriers and staff are true experts in what they do, which includes carefully handling, maintaining, and easily loading your vehicle onto our specialized trailers.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="slide text-center">
                        <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                        <h3 class="slide-title">Real-Time Tracking</h3>
                        <p class="slide-text">Making it easy for our customers to easily track their vehicle’s current and
                            updated status anytime and anywhere.</p>
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
@endsection
@section('extraScript')
@endsection
