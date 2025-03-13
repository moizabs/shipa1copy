@extends('frontend.layouts.app')
@section('title', 'Car Transport Get Quote')
@section('meta_description', 'Get the best car transport quotes! Request yours today for fast, easy service tailored to your needs. Instant car shipping quotes available feel free to contact.')
@section('content')
<style>
    .error {
        border: 2px solid red;
    }
    .make-dropdown {
        max-height: 200px;
        overflow-y: auto;
    }
    .dropdown-item {
        white-space: nowrap;
    }
    .model-dropdown {
        max-height: 200px;
        overflow-y: auto;
        position: absolute;
        z-index: 1000;
    }
    .input-form.tj-select {
        position: relative;
    }
</style>
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Vehicle - Car</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Vehicle - Car</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section">
    <div class="container-fluid">
        <div class="row">
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
            <div class="col-lg-12" data-sal="slide-down" data-sal-duration="800">
                <div class="tj-input-form" data-bg-image="">
                    <h2 class="title text-center">Instant Car Shipping Quote!</h2>
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
                        <input type="hidden" name="car_type" value="1" hidden>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block"> Your Name:</label>
                                    <input type="text" id="name" name="name" placeholder="Full Name"
                                        required="" />
                                    <small id="errName" class="err-style"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block">Phone:</label>
                                    <input type="tel" id="phone" name="phone" class="ophone"
                                        placeholder="Phone Number" required="" />
                                    <small id="errPhone" class="err-style"></small>
                                    <input type="hidden" name="country_code" id="country_code" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block"> Email Address:</label>
                                    <input type="email" id="email" name="email" placeholder="Your Email Address"
                                        required="" />
                                    <small id="errEmail" class="err-style"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0">
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block"> Pickup Location:</label>
                                    <input type="text" id="pickup-location" name="origin"
                                        placeholder="Ex: 90005 Or Los Angeles" required="" />
                                    <small id="errOLoc" class="err-loc"></small>
                                    <ul class="suggestions suggestionsTwo"></ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block"> Delivery Location:</label>
                                    <input type="text" id="delivery-location" name="destination"
                                        placeholder="Ex: 90005 Or Los Angeles" required="" />
                                    <small id="errDLoc" class="err-loc"></small>
                                    <ul class="suggestions suggestionsTwo"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="vehicle-info">
                            <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white">Car Information</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label>Year</label>
                                        <div class="dropdown">
                                            <input class="form-control dropdown-toggle year" type="text"
                                                name="year[]" id="year" placeholder="Select Year"
                                                data-bs-toggle="dropdown" aria-expanded="false" required>
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
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label>Make</label>
                                        <div class="dropdown">
                                            <input class="form-control dropdown-toggle make" name="make[]" required
                                                type="text" id="make" placeholder="Select Make"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <ul class="dropdown-menu make-dropdown"
                                                aria-labelledby="make">
                                                <li><a class="dropdown-item">Select Make</a></li>
                                                @foreach ($makes as $make)
                                                    <li><a class="dropdown-item"
                                                            data-value="{{ $make->make }}">{{ $make->make }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-form tj-select model-div">
                                        <label>Model</label>
                                        <div class="dropdown">
                                            <input class="form-control dropdown-toggle model-input" name="model[]"
                                                type="text" id="model" required placeholder="Select Model"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <ul class="dropdown-menu model-dropdown"
                                                aria-labelledby="model">
                                                <li><a class="dropdown-item" href="#">Select Model</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group" style="line-height:23px;">
                                    <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                    <select class="form-control lh-base" id="trailer_type" name="trailer_type">
                                        <option value="1" selected>Open Trailer</option>
                                        <option value="2">Enclosed Trailer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="condition" class="text-white">Condition</label>
                                    <select class="form-control lh-base" id="condition" name="condition[]">
                                        <option value="1" selected>Running</option>
                                        <option value="2">Non Running</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a id="addVehicleBtn" class="add-car">
                            <i class="fa fa-plus"> Add Vehicle </i>
                        </a>
                        <div id="vehicles-container">
                        </div>
                        <div class="row">
                            <div class="input-form mt-1">
                                <label class="d-block text-white"> Image:</label>
                                <input class="form-control image_input" name="image[]" type="file"
                                    accept="image/*" multiple onchange="previewImages(event)">
                                <div class="image-preview-container" id="imagePreviewContainer"></div> 
                            {{-- <--- <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100px; max-height: 100px; margin-top: 10px;"> --> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-check-input " type="checkbox" id="modification"
                                        name="modification" value="1" />
                                    <label class="form-check-label text-white ms-4" for="modification">
                                        Modified?</label>
                                </div>
                                <div class="input-form div-modify_info" style="display: none;">
                                    <label class="d-block"> Modification Information:</label>
                                    <input   type="text" id="c" name="modify_info"
                                        placeholder="Enter Modification Information" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="available_at_auction"
                                        name="available_at_auction" value="1" />
                                    <label class="form-check-label text-white" for="available_at_auction"> Available
                                        at
                                        Auction?</label>
                                </div>
                                <div class="input-form div-link mt-3" style="display: none;">
                                    <label class="d-block"> Enter Link:</label>
                                    <input class="form-control" type="url" id="link" name="link"
                                        placeholder="Enter Link" />
                                </div>
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
@endsection
@section('extraScript')
<link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
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
@endsection