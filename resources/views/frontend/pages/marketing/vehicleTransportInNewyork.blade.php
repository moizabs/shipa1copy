@extends('frontend.layouts.app')
@section('title', 'Affordable Vehicle Transportation Services in New York | Shipa1')
@section('meta_description', 'Looking for reliable vehicle transportation in New York? Shipa1 offers affordable, secure, and timely car shipping services. Request a free quote today and experience hassle-free transport solutions!')
@section('content')
<Style>
    .custom-textarea{
        width: 100%;
        height: 100px;
        background: #f0f2f7;
        font-size: 15px; 
        font-weight: 350;
        padding: 5px 10px;
    }
    .desc-2 {
        color: white;
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
        background: url('/img/NY2.jpg');
        padding: 60px 0;
        background-color: #f9f9f9;
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 1;
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
    .about-content-one {
        overflow: hidden;
    }
    .hover-effect:hover .overlay {
        opacity: 1;
    }
    .hover-effect:hover .desc {
        color: white;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #062e39d4; 
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }
    .tj-section-heading {
        position: relative;
        z-index: 2; 
    }
    .sub-title,
    .desc {
        transition: color 0.3s ease;
    }
</Style>
<section class="tj-choose-us-section-service-construction-1">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">Vehicle Transportation In New York</h2>
                        <p class="desc-2">ShipA1’s New York car shipping services mean swift vehicle delivery in no time.
                            Wanna find out how this magic works? Reach out to us now!</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="tj-icon-box3 text-center">
                                <i class="flaticon flaticon-courier"></i>
                                <h6 class="title">Optimized Cost</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="tj-icon-box3 text-center">
                                <i class="flaticon flaticon-cargo"></i>
                                <h6 class="title">Delivery on Time</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="tj-icon-box3 text-center">
                                <i class="flaticon flaticon-agreement"></i>
                                <h6 class="title">Safety & Reliability</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-0" data-sal="slide-down" data-sal-duration="800">
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
                {{-- @include('partials.multi-form-Vehicle-detail') --}}
                @include('partials.marketing-form')
                {{-- @include('partials.multi-form-heavy') --}}
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-2 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Your Speedy New York Car Shipping Services</h3>
                        <p class="desc">Shipping cars into and out of New York is difficult, but ShipA1 makes it smooth and hassle-free. 
                            From heavy lifts to branded cars entering the state, ShipA1 provides affordable packages, ensuring no
                            increases in hauler, crane, or carrier costs. With our dependable door-to-door delivery, we'll make
                            shipping a breeze for you. With ShipA1, you can enjoy the ease of navigating national legal 
                            complexities and unpredictable road conditions in out-of-state transport. We ensure verified 
                            documentation and a smooth delivery process, making us the ideal choice for vehicle transportation 
                            in and out of New York.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/slider/1-content.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.reveiw-detail')
<section class="tj-blog-standard pb-0 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="image-container">
                    <img class="img-fluid" src="{{ asset('/frontend/images/project/azxsazxs.png') }}"
                        loading="lazy" alt="Motorcyle Transport">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="text-container text-left">
                    <h3>The First Stop Platform of Car Shipping Services</h3>
                    <p>Ship A1, your go-to partner in transportation services! We prioritize the needs of our customers and
                         ensure their shipping services are as smooth as possible. With over 16 years of experience, we can
                          proudly count ourselves as one of the leading transportation companies. <br>
                        Ready to ship your car to a new destination? Say no more, Ship A1 offers the best car transportation
                         services, as well as equipped with advanced trailers for your vehicle.
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
        </div>
    </div>
</section>
<section class="tj-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading"><span class="sub-title active-shape">A1 Transportation
                            Company</span>
                        <h2 class="title">What Makes Us Dependable?</h2>
                        <p class="desc">Among all the shipping companies out there, factors that make us stand out
                            from the rest are:</p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><img loading="lazy"
                                    src="{{ asset('frontend/images/icon/winner.svg') }}" fetchpriority="high"
                                    alt="Icon"></div>
                            <div class="ab-title">
                                <h5 class="title">Our Values</h5>
                            </div>
                        </div>
                        <p class="desc">We are a licensed Transportation company with high moral values and have
                            attained customer satisfaction through their remarks on esteemed platforms.</p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><i class="fa-light fa-bell-concierge fa-2xl"
                                    style="color:#8fc445"></i></div>
                            <div class="ab-title">
                                <h5 class="title">Scope of Services</h5>
                            </div>
                        </div>
                        <p class="desc">Range of vehicles, we ship, is not limited to just conventional cars and
                            motorbikes.</p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><i class="fa-light fa-shield-heart fa-2xl"
                                    style="color:#8fc445"></i></div>
                            <div class="ab-title">
                                <h5 class="title">Safety Is Our Priority</h5>
                            </div>
                        </div>
                        <p class="desc">No matter which mode of transportation you use, ShipA1 assures its customers,
                            atmost security to their assets.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-right" data-sal-duration="800">
                <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                    <div class="tj-icon-box2 text-center">
                        <div class="number-icon"><i class="flaticon-in-person"></i></div>
                        <div class="about-number">
                            <div class="tj-count"><span class="odometer" data-count="289">0</span>k+</div>
                            <p class="desc">Satisfied Client</p>
                        </div>
                    </div>
                    <div class="image-box"><img class="p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                            src="{{ asset('/frontend/images/slider/gif-img.webp') }}" fetchpriority="high"
                            loading="lazy" alt="Image"></div><img
                        class="group-1 p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                        src="{{ asset('/frontend/images/about/about-3.webp') }}" fetchpriority="high" loading="lazy"
                        alt="Image" width="1200" height="800">
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.cta-section')
<section class="tj-about-section pt-0 pb-4">
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center pt-4" data-sal="slide-left" data-sal-duration="800">
                Why Choose Ship A1?</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 position-relative shadow-sm hover-effect">
                    <div class="overlay"></div>
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Experienced</span>
                        <p class="desc">
                            Our dominance in car shipping started a decade ago but our grounding area was New York. 
                            And who can say to a service provider packed with expert shippers, skilled carriers, and high-tech haulers?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 position-relative shadow-sm hover-effect">
                    <div class="overlay"></div>
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Availability of Trailers</span>
                        <p class="desc">
                            Our services depend on your personal choices. Do you want to ship your car to New York in an open or enclosed trailer? 
                            Or is it the transport from or to New York? Your car shipping smart trailers are just one call away.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 position-relative shadow-sm hover-effect">
                    <div class="overlay"></div>
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Specialized Handling</span>
                        <p class="desc">
                            Stress about the roll-on/roll-off and car shipping security? Don’t worry about it. 
                            Your vehicles for shipping in New York are covered. It’s ShipA1, your trusted transport partner.
                            Your precious car is our priority.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 position-relative shadow-sm hover-effect">
                    <div class="overlay"></div>
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Tailor-Made Solutions</span>
                        <p class="desc">
                            What? Need smart GPS, active monitoring, fast delivery, and flexible services? Just say it. 
                            Our customized solutions are open to people in New York. This state is the dominating hub of ShipA1. 
                            So, talk to us and get tailor-made solutions today!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us-slider mb-3">
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
                    <p class="slide-text">What? Query from New York? We never miss it! Take advantage of our 24/7 active assistance.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Affordability</h3>
                    <p class="slide-text">No hidden charges, no extra fares. ShipA1’s services mean cost-efficiency for all New Yorkers.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Convenience</h3>
                    <p class="slide-text">Challenges in car shipping by ShipA1, what’s that? Try out our services and be satisfied. It’s your shipping brand.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Door to Door</h3>
                    <p class="slide-text">We handle every step, picking up the vehicle from your location and delivering it to your destination, saving you time and effort.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Insurance</h3>
                    <p class="slide-text">Your vehicles are 100% covered. You are partnering with ShipA1. Your cars are a luxury to us. So, sit back and relax.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function playVideo() {
        document.querySelector('.video-thumbnail').style.display = 'none';
        document.querySelector('.video-iframe').style.display = 'block';
        var iframe = document.getElementById('videoFrame');
        var videoSrc = iframe.src;
        iframe.src = videoSrc + "&autoplay=1"; 
    }
</script>
<script>
    $(document).ready(function() {
        function addNewVehicle() {
            var newVehicleHtml =
                `
            <div class="vehicle-info">
            <div class="row select-bm">
                <!-- Bin icon for deleting vehicle -->
                <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;"></i></span>
                <div class="col-md-4">
                    <div class="input-form tj-select">
                        <label>Year</label>
                        <div class="dropdown">
                            <input class="form-control dropdown-toggle year" type="text"
                                name="year[]" id="year" placeholder="Select Year"
                                data-bs-toggle="dropdown" aria-expanded="false" required>
                            <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                                <li><a class="dropdown-item">Select Year</a></li>`;
            var currentYear = {{ date('Y') }};
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<li><a class='dropdown-item' data-value='${year}'>${year}</a></li>`;
            }
            newVehicleHtml += `
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-form tj-select">
                        <label>Make</label>
                        <div class="dropdown">
                            <input class="form-control dropdown-toggle make" name="make[]" type="text" id="make" placeholder="Select Make" data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu make-dropdown" aria-labelledby="make">
                                <li><a class="dropdown-item" >Select Make</a></li>`;
            @foreach ($makes as $make)
                newVehicleHtml +=
                    `<li><a class="dropdown-item"  data-value="{{ $make->make }}">{{ $make->make }}</a></li>`;
            @endforeach
            newVehicleHtml += `
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-form tj-select model-div">
                        <label>Model</label>
                        <select class="nice-select model" name="model[]" id="model" required>
                            <!-- Options will be filled by JavaScript -->
                        </select>
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
        }
        $('#addVehicleBtn').click(function() {
            addNewVehicle();
        });
        $(document).on('click', '.delete-vehicle', function() {
            $(this).closest('.vehicle-info').remove();
        });
        $(document).on('click', '.make-dropdown .dropdown-item', function() {
            var make = $(this).data('value');
            $(this).closest('.dropdown').find('.form-control').val(make).end()
                .find('.dropdown-menu').removeClass('show');
            var vehicleInfo = $(this).closest('.vehicle-info');
            var year = vehicleInfo.find('.year').val();
            if (year && make) {
                getModel(year, make, vehicleInfo);
            }
        });
        // $(document).on('change', '.year, .make', function() {
        //     var year = $(this).closest('.vehicle-info').find('.year').val();
        //     var makeId = $(this).closest('.vehicle-info').find('.make').val();
        //     alert(makeId);
        //     var vehicleInfo = $(this).closest('.vehicle-info');
        //     if (year && makeId) {
        //         getModel(year, makeId, vehicleInfo);
        //     }
        // });
        $(document).on('click', '.year-dropdown .dropdown-item', function() {
            console.log('okokok');
            var selectedYear = $(this).data('value');
            var vehicleInfo = $(this).closest(
                '.vehicle-info');
            vehicleInfo.find('.year').val(
                selectedYear);
        });
        $(document).on('click', '.year, .make', function() {
            var year = $(this).closest('.vehicle-info').find('.year').val();
            var makeId = $(this).closest('.vehicle-info').find('.make').val();
            // alert(makeId);
            var vehicleInfo = $(this).closest('.vehicle-info');
            if (year && makeId) {
                getModel(year, makeId, vehicleInfo);
            }
        });
        function getModel(year, makeId, vehicleInfo) {
            $.ajax({
                url: "{{ route('get.models') }}",
                method: 'GET',
                data: {
                    year: year,
                    make: makeId
                },
                success: function(response) {
                    var modelDropdown = vehicleInfo.find('.model-dropdown');
                    var modelInput = vehicleInfo.find('.model-input');
                    var modelSelect = vehicleInfo.find('.model');
                    if (modelDropdown.length && modelInput.length) {
                        modelDropdown.empty();
                        modelDropdown.append(
                            '<li><a class="dropdown-item" data-value="">Select Model</a></li>');
                        $.each(response, function(index, model) {
                            modelDropdown.append(
                                '<li><a class="dropdown-item" data-value="' + model +
                                '">' + model + '</a></li>');
                        });
                        modelInput.on('focus', function() {
                            modelSelect.empty(); 
                            modelSelect.append(
                                '<option value="">Select Model</option>'
                            );
                            modelDropdown.show();
                        });
                        modelInput.on('input', function() {
                            var searchTerm = $(this).val().toLowerCase();
                            modelDropdown.find('li').each(function() {
                                var itemText = $(this).text().toLowerCase();
                                if (itemText.indexOf(searchTerm) !== -1 ||
                                    searchTerm === '') {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });
                        });
                        modelDropdown.on('click', 'a.dropdown-item', function(e) {
                            e.preventDefault(); 
                            var selectedText = $(this).text();
                            var selectedValue = $(this).data('value');
                            modelInput.val(
                                selectedText); 
                            modelDropdown.hide();
                            modelSelect.empty(); 
                            modelSelect.append('<option value="' + selectedValue + '">' +
                                selectedText + '</option>');
                            modelSelect.val(
                                selectedValue
                            ); 
                        });
                        $(document).on('click', function(e) {
                            if (!modelInput.is(e.target) && !modelDropdown.is(e.target) &&
                                modelDropdown.has(e.target).length === 0) {
                                modelDropdown.hide();
                            }
                        });
                    }
                    if (modelSelect.length) {
                        modelSelect.empty(); 
                        modelSelect.append(
                            '<option value="">Select Model</option>'); 
                        $.each(response, function(index, model) {
                            modelSelect.append('<option value="' + model + '">' + model +
                                '</option>');
                        });
                        modelSelect.on('change', function() {
                            var selectedModel = $(this).val();
                            modelInput.val(modelSelect.find('option:selected').text());
                        });
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
        $(document).on('input', '.dropdown-toggle', function() {
            var input = $(this).val().toLowerCase();
            $(this).siblings('.dropdown-menu').find('.dropdown-item').each(function() {
                var text = $(this).text().toLowerCase();
                $(this).toggle(text.indexOf(input) > -1);
            });
        });
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