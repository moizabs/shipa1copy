<link rel="apple-touch-icon" href="{{ asset('/frontend/images/logo/favicon.webp') }}" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend/images/logo/favicon.webp') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/sal.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/icons.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/odometer.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@if ($vehicleType == 'Car')
    <div class="row select-bm">
        <div class="col-md-12 text-center">
            <h4 class="text-white mb-0"></h4>
        </div>
    </div>
    <div id="vehicles-container">
    </div>
@else
    <div class="row select-bm">
        <div class="col-md-12 text-center">
            <h4 class="text-white">Vehicle Information</h4>
        </div>
    </div>
    <div id="vehicles-container">
    </div>
@endif
<a class="add-car" id="addVehicleBtn">
    <i class="fa fa-plus"> Add
        Vehicle </i>
</a>
<div id="vehicles-container">
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/meanmenu.js') }}"></script>
<script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('frontend/js/odometer.min.js') }}"></script>
<script src="{{ asset('frontend/js/sal.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script>
    $(document).ready(function() {
        var isFirstVehicleAdded = true;
        var vehicle_Type = '{{ $vehicleType }}';
        if (vehicle_Type == 'Car') {
            function addNewVehicle() {
                var newVehicleHtml =
                    `
                        <div class="vehicle-info">
                        <div class="row select-bm">
                        <div class="col-md-4">
                        <div class="input-form tj-select">
                        <label> Year</label>
                        <select class="nice-select year" name="year[]" required id="year"> <option value="" disabled selected>Select Year</option>`;
                var currentYear = {{ date('Y') }};
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

                @foreach ($makes as $make)
                    newVehicleHtml += `<option value="{{ $make->make }}">{{ $make->make }}</option>`;
                @endforeach
                newVehicleHtml += `
                    </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="input-form tj-select model-div">
                    <label>Model</label>
                    <select class="nice-select model" name="model[]" id="model" required></select>`;      
                    // Check if it's the first vehicle added
                    if (isFirstVehicleAdded) {
                        // Hide the bin icon for the first vehicle
                        isFirstVehicleAdded = false; // Update flag
                    } else {
                        // Show the bin icon for subsequent vehicles
                        newVehicleHtml += `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;
                    }
                    newVehicleHtml += `
                    </div>
                    </div>
                    </div>
                    </div>
                    `;
                $('#vehicles-container').append(newVehicleHtml);
            }
        } else {
            function addNewVehicle() {
                var newVehicleHtml =
                    `
                    <div class="vehicle-info">
                    <div class="row select-bm">
                    <div class="col-md-4">
                    <div class="input-form tj-select">
                    <label> Year</label>
                    <select class="nice-select year" name="year[]" id="year"> <option value="" disabled selected>Select Year</option>`;
                var currentYear = {{ date('Y') }};
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
                        // Check if it's the first vehicle added
                        if (isFirstVehicleAdded) {
                            // Hide the bin icon for the first vehicle
                            isFirstVehicleAdded = false; // Update flag
                        } else {
                            // Show the bin icon for subsequent vehicles
                            newVehicleHtml += `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;
                        }
                        newVehicleHtml += `</div>
                        </div>
                        </div>
                        </div>
                        `;
                $('#vehicles-container').append(newVehicleHtml);
            }
        }
        $('#addVehicleBtn').click(function() {
            addNewVehicle();
        });
        $(document).on('click', '.delete-vehicle', function() {
            $(this).closest('.vehicle-info').remove();
        });
        $(document).on('change', '.year, .make', function() {
            var year = $(this).closest('.vehicle-info').find('.year').val();
            var makeId = $(this).closest('.vehicle-info').find('.make').val();
            var vehicleInfo = $(this).closest('.vehicle-info');
            if (year && makeId) {
                getModel(year, makeId, vehicleInfo);
            }
        });
        function getModel(year, makeId, vehicleInfo) {
            console.log('yes inn');
            $.ajax({
                url: "{{ route('get.models') }}",
                method: 'GET',
                data: {
                    year: year,
                    make: makeId
                },
                success: function(response) {
                    var modelsDropdown = vehicleInfo.find('.model');
                    modelsDropdown.empty();
                    var selectOptions = '<option value="">Select Model</option>';
                    $.each(response, function(index, model) {
                        selectOptions += '<option value="' + model + '">' + model +
                            '</option>';
                    });
                    modelsDropdown.html(selectOptions);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
    });
</script>
<script>
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
                        selectOptions += '<option value="' + model + '">' + model +
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

        // $('#available_at_auction').change(function() {
        //     if ($(this).is(':checked')) {
        //         $('.div-link').show();
        //     } else {
        //         $('.div-link').hide();
        //     }
        // });

        // $('#modification').change(function() {
        //     if ($(this).is(':checked')) {
        //         $('.div-modify_info').show();
        //     } else {
        //         $('.div-modify_info').hide();
        //     }
        // });
    });
</script>
<script>
    function updateSuggestions(inputField, suggestionsList) {
        var inputValue = inputField.val();
        $.ajax({
            url: "{{ route('get.zipcodes') }}",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                "input": inputValue
            },
            success: function(response) {
                suggestionsList.empty();

                $.each(response, function(index, suggestion) {
                    var listItem = $("<li>").text(suggestion).click(function() {
                        inputField.val(suggestion);
                        suggestionsList.css("display", "none");
                    });
                    suggestionsList.append(listItem);
                });
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    }
    $("#pickup-location, #delivery-location").keyup(function() {
        var inputField = $(this);
        var suggestionsList = inputField.siblings(".suggestionsTwo");
        suggestionsList.css("display", "block");
        if (inputField.val() === "") {
            suggestionsList.css("display", "none");
        }
        updateSuggestions(inputField, suggestionsList);
    });
</script>
