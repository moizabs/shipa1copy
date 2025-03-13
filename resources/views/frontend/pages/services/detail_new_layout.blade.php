@extends('frontend.layouts.app')
@section('content')
<Style>
    .card- {
        background: #29494e;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
    .services {
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        padding: 10px 10px 30px 10px;
        background-color: #9d9e9f14;
    }
    .services h1 {
        text-decoration: overline;
        margin-bottom: 50px;
        color: #8FC445;
    }
    .service-container {
        display: flex;
        justify-content: center;
        gap: 20px;
    }
    .service-box {
        max-width: 300px;
        text-align: left;
        background-color: #29494e;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    .service-box img {
        height: 40px;
        width: 40px;
    }
    .service-box h3 {
        margin: 20px 0 10px;
        color: #333333;
    }
    .service-box p {
        color: #666666;
    }
</Style>
<section class="tj-choose-us-section-service-car">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">{{ $service->name }}</h2>
                        <p class="desc-2">
                            {{ $service->text_to_show }}
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
                <div class="tj-input-form-car mt-4 w-100" data-bg-image="">
                    <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform"
                        id="calculatePriceFrom" data-parsley-validate data-parsley-errors-messages-disabled
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
                        <div class="container mt-2">
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
                                            <label class="error-message" id="pickup-location-error">This field is
                                                required.</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-4">
                                        <h6 class="text-white">Moving To</h6>
                                        <label class="text-white mb-2">Where Are You Moving To?</label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="delivery-location"
                                                placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                            <label class="error-message" id="delivery-location-error">This field is
                                                required.</label>
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
                            <div class="vehicle_quote_info" id="step2" style="display: none;">
                                <div class="row">
                                    <h4 class="title text-center">VEHICLE INFORMATION</h4>
                                    <select id="tabSelector"   aria-label="Tab selector" required>
                                        <option value="" selected disabled>Select a Vehicle</option>
                                        <option value="Atv">Atv Utv Transport</option>
                                        <option value="Car">Car</option>
                                        <option value="Golf-Cart">Golf Cart</option>
                                        <option value="Motorcycle">Motorcycle</option>
                                    </select>
                                    <label class="error-message" id="tabSelector-error">This field is required.</label>
                                    <div class="tab-content mt-3" id="additionalContent"></div>
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
                            <div class="basic_quote_info" id="step3" style="display: none;">
                                <div class="row mb-3">
                                    <h4 class="text-center text-white">Customer Information</h4>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Your Name:</label>
                                            <input class="form-control" required name="Custo_Name" type="text"
                                                placeholder="Customer Name">
                                            <label class="error-message" id="Custo_Name-error">This field is
                                                required.</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-input-field">
                                            <label class="d-block text-white">Phone:</label>
                                            <input id="phone" class="form-control" required name="phone"
                                                type="tel" placeholder="Customer Phone">
                                            <label class="error-message" id="Custo_Phone-error">This field is
                                                required.</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Email Address:</label>
                                            <input class="form-control" required name="Custo_Email" type="email"
                                                placeholder="Email address">
                                            <label class="error-message" id="Custo_Email-error">This field is
                                                required.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn">
                                            <button class="tj-submit-btn previous" id="step3_previous">
                                                Previous <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn float-end">
                                            <button class="tj-submit-btn" type="submit" id="submit_instant_code"
                                                value="submit">
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
@include('partials.reveiw-site')
<section class="tj-about-section-four">
    <div class="container">
        <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">{{ $service->display_name }}</h2>
    </div>
</section>
<section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"> {{ $service->heading_one }}</span>
                        <p class="desc">
                            {{ $service->desc_one }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ !is_null($service->banner_image) ? asset($service->banner_image) : '' }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex"
                        src="{{ !is_null($service->image2) ? asset($service->image2) : '' }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ !is_null($service->image3) ? asset($service->image3) : '' }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex"
                        src="{{ !is_null($service->image3) ? asset($service->image3) : '' }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"> {{ $service->heading_two }}</span>
                        <p class="desc">
                            {{ $service->desc_two_one }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"> {{ $service->heading_three }}</span>
                        <p class="desc">
                            {{ $service->desc_three }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"> {{ $service->heading_four }}</span>
                        <p class="desc">
                            {{ $service->desc_four }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-cta-section-two">
    <div class="tj_cta_image-4 w-100 h-50"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="tj-cta-content d-flex justify-content-around" style="bottom: 40px; z-index: 3;">
                    <div class="tj-section-heading ">
                        <span class="sub-title active-shape2"> Support Center 24/7 </span>
                        <p class="text-white mt-2">Feel Free To Contact Us For Additional Info</p>
                    </div>
                    <div class="tj-theme-button mt-2">
                        <a class="tj-transparent-btn" href="{{ route('contactUs') }}" target="_blank">
                            Get Support<i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section-five">
    <div class="container">
        <div class="row">
            <div class="services">
                <h1>{{ $service->heading_five }}</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card- h-100 ">
                            <div class="card-body">
                                <h5 class="card-title text-white">{{ $service->heading_six }}</h5>
                                <p class="card-text text-light">
                                    {{ $service->desc_six }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card- h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">{{ $service->heading_seven }}</h5>
                                <p class="card-text text-light">
                                    {{ $service->desc_seven }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card- h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">{{ $service->heading_eight }}</h5>
                                <p class="card-text text-light">
                                    {{ $service->desc_eight }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-service-car-2">
    <div class="container why-box">
        <div class="row">
            <div class="col-lg-8 sal-animate" data-sal="slide-right" data-sal-duration="800">
                <div class="about-content-two">
                    <div class="tj-section-heading">
                        <h2 class="title-2">Why Choose Us?</h2>
                        <p class="desc-2">
                            We have a distinct approach when it comes to the philosophy of business.<br>Our belief in
                            innovation & unique business practices differentiate us & here are the reasons why you must
                            choose us:
                        </p>
                    </div>
                    <div class="content-box d-flex align-items-center border-top">
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                            </div>
                            <p class="desc-2">★ Professional & responsive customer service available 24/7.</p>
                        </div>
                        <div class="tj-icon-box">
                            <p class="desc-2">★ A wide range of services such as open, enclosed & expedited.</p>
                        </div>
                        <div class="tj-icon-box pb-4">
                            <p class="desc-2">★ Prompt delivery due to efficient use of trailers.</p>
                        </div>
                    </div>
                    <div class="content-box d-flex align-items-center">
                        <div class="tj-icon-box">
                            <p class="desc-2">★ Legion of truckers available with years old network.</p>
                        </div>
                        <div class="tj-icon-box">
                            <p class="desc-2">★ Get online car shipping quotes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex"
                        src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
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
                        <img src="{{ !is_null($service->banner_image) ? asset($service->banner_image) : '' }}" alt="Image">
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
                                    {{ $service->faq_q1 }}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>
                                        {{ $service->ans_faq1 }}
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {{ $service->faq_q2 }}
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>
                                        {{ $service->ans_faq2 }}
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    {{ $service->faq_q3 }}
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>
                                        {{ $service->ans_faq3 }}
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
        var selectedTab = '';
        $('#tabSelector').change(function() {
            $('.vehicles-container').html('');
            selectedTab = $(this).val();
            var vehicleType = $(this).val();
            $('.tab-pane').removeClass('show active');
            $('#' + selectedTab).addClass('show active');

            $.ajax({
                url: "{{ route('get.partial.form') }}",
                method: 'GET',
                data: {
                    vehicleType: vehicleType,
                },
                success: function(response) {
                    $('#additionalContent').html('');
                    $('#additionalContent').html(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
        function addNewVehicle() {
            var newVehicleHtml =
                `
                    <div class="vehicle-info">
                    <div class="row select-bm">
                    <div class="col-md-4">
                    <div class="input-form tj-select">
                    <label> Year</label>
                    <select class="nice-select year" name="year[]" required id="year"> <option value="" disabled selected>Select Year</option>`;
            var currentYear = {
                {
                    date('Y')
                }
            };
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<option value="${year}">${year}</option>`;
            }
            newVehicleHtml +=
                `</select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="input-form tj-select">
                    <label>Make</label>
                    <select class="nice-select make" name="make[]" required id="make"> <option value="" disabled selected>Select Make</option>`;
            newVehicleHtml += `
                    </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="input-form tj-select model-div">
                    <label>Model</label>
                    <select class="nice-select model" name="model[]" id="model" required></select>`;
            newVehicleHtml +=
                `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;
            newVehicleHtml += `
                        </div>
                        </div>
                        </div>
                        </div>
                        `;
            $('.vehicles-container').append(newVehicleHtml);
        }
        function addOtherVehicle() {
            var newVehicleHtml =
                `
                    <div class="vehicle-info">
                    <div class="row select-bm">
                    <div class="col-md-4">
                    <div class="input-form tj-select">
                    <label> Year</label>
                    <select class="nice-select year" name="year[]" id="year"> <option value="" disabled selected>Select Year</option>`;
            var currentYear = {
                {
                    date('Y')
                }
            };
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<option value="${year}">${year}</option>`;
            }
            newVehicleHtml +=
                `</select>
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
                            required="" />`
            newVehicleHtml +=
                `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;
            newVehicleHtml += `</div>
                            </div>
                            </div>
                            </div>
                            `;
            $('.vehicles-container').append(newVehicleHtml);
        }
        $(document).on('click', '.addVehicleBtn', function() {
            if ($('#tabSelector').val() == 'Car') {
                addNewVehicle();
            } else {
                addOtherVehicle();
            }
        });
        $(document).on('click', '.delete-vehicle', function() {
            $(this).closest('.vehicle-info').remove();
        });
        $(document).ready(function() {
            $(document).on('change', '.vehicle-year, .vehicle-make', function() {
                var year = $('.vehicle-year').val();
                var makeId = $('.vehicle-make').val();
                if (year && makeId) {
                    getModel(year, makeId);
                }
            });
            function getModel(year, makeId) {
                console.log('yes inn');
                $.ajax({
                    url: "{{ route('get.models') }}",
                    method: 'GET',
                    data: {
                        year: year,
                        make: makeId
                    },
                    success: function(response) {
                        var modelsDropdown = $('.vehicle-model-div');
                        modelsDropdown.empty();
                        var selectOptions =
                            '<label>Model</label> <select class="nice-select model" name="model[]" id="model" required> <option value="">Select Model</option>';
                        $.each(response, function(index, model) {
                            selectOptions += '<option value="' + model + '">' +
                                model +
                                '</option>';
                        });
                        selectOptions += '</select>';
                        modelsDropdown.html(selectOptions);
                        console.log('yesssss', response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    });
</script>
@endsection