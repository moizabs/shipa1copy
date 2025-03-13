@extends('dashboard.admin.layouts.app')
@section('content')
    <title>A1 Export - Add Port Detail</title>
@section('style')
    <style>
        form ul {
            position: absolute;
            z-index: 1;
            width: 96.7%;
            max-height: 160px;
            overflow-y: scroll;
            display: none;
        }

        form ul::-webkit-scrollbar {
            width: 1px;
        }

        form ul::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        form ul::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }

        form ul li:hover {
            background-color: grey;
            color: white;
            cursor: pointer;
        }
    </style>
@endsection
<?php
// $access = [];
// if(Session::get('admin')->userAccess)
// {
//     foreach(Session::get('admin')->userAccess as $value)
//     {
//         $access[] = $value->access->name;
//     }
// }
?>
<div class="dashboardMain__body--heading" style="display: flex;justify-content:space-between;">
    <h2>Add Port Detail</h2>
</div>
<div class="feesmain">
    <div class="card">
        <form action="{{ route('admin.port.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container p-5">
                <div class="row">
                    <div class="inputGroup col-sm-12" style="position: relative;">
                        <label for="address"> Address:</label>
                        <select id="address" name="address">
                            <option disabled selected value="">Select Address</option>
                            <option value="SALLAUM LINES DELIVERY ADDRESSES">SALLAUM LINES DELIVERY ADDRESSES</option>
                            <option value="Grimaldi Group Shipping Line">Grimaldi Group Shipping Line</option>
                        </select>
                    </div>
                    <div class="inputGroup col-sm-6" style="position: relative;">
                        <label for="port_name"> Port Name:</label>
                        <input type="text" id="port_name" name="port_name" value="" placeholder="Port Name">
                        <ul class="bg-light">
                        </ul>
                    </div>
                    <div class="inputGroup col-sm-6" style="position: relative;">
                        <label for="country"> Country: </label>
                        <input type="text" id="country" name="country" value="" placeholder="Country">
                    </div>
                    <div class="inputGroup col-sm-6" style="position: relative;">
                        <label for="latitude"> Latitude:</label>
                        <input type="text" id="latitude" name="latitude" value="" placeholder="Latitude">
                    </div>
                    <div class="inputGroup col-sm-6" style="position: relative;">
                        <label for="longitude"> Longitude:</label>
                        <input type="text" id="longitude" name="longitude" value="" placeholder="Longitude">
                    </div>
                    <div class="inputGroup col-sm-6" style="position: relative;">
                        <label for="terminal_name"> Terminal Name: </label>
                        <input type="text" id="terminal_name" name="terminal_name" value=""
                            placeholder="Terminal Name">
                    </div>
                    <div class="inputGroup col-sm-6" style="position: relative;">
                        <label for="status"> Status:</label>
                        <select id="status" name="status">
                            <option disabled selected value="">Select Status</option>
                            <option value="1">On</option>
                            <option value="0">Off</option>
                        </select>
                    </div>
                </div>
                <div class="row deliveryPorts">

                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary addDeliveryPort" type="button">Add Delivery Ports</button>
                    <button class="btn btn-success submit" type="submit">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#port_name").keyup(function() {
        var port_name = $(this);
        if (port_name.val() == '') {
            $("#country").val('');
            $("#latitude").val('');
            $("#longitude").val('');
            port_name.siblings("ul").hide();
            port_name.siblings("ul").children().remove();
        } else {
            $.ajax({
                url: "{{ url('admin/port/search/get') }}",
                type: "GET",
                data: {
                    port_name: port_name.val()
                },
                dataType: "json",
                success: function(res) {
                    port_name.siblings("ul").show();
                    port_name.siblings("ul").children().remove();
                    $.each(res.data, function(k, v) {
                        port_name.siblings("ul").append(
                            `<li class="p-3 selectPort"><small>${this.name}</small><span style="display:none;" class="country">${this.country}</span><span style="display:none;" class="latitude">${this.latitude}</span><span style="display:none;" class="longitude">${this.longitude}</span></li>`
                            );
                    });

                    $(".selectPort").click(function() {
                        var port_name = $(this).children('small').text();
                        var country = $(this).children('.country').text();
                        var latitude = $(this).children('.latitude').text();
                        var longitude = $(this).children('.longitude').text();

                        $("#port_name").val(port_name);
                        $("#country").val(country);
                        $("#latitude").val(latitude);
                        $("#longitude").val(longitude);
                        $(this).parents("ul").children().remove();
                        $(this).parents("ul").hide();
                    })
                }
            });
        }
    })

    var i = 0;
    $(".addDeliveryPort").click(function() {
        i = i + 1;
        $(".deliveryPorts").append(`
                <div class="col-sm-12 removeAddingFees">
                    <div class="row">
                        <div class="inputGroup col-sm-6" style="position: relative;">
                            <label for="delivery_port_name${i}"> Delivery Port Name ${i}:</label>
                            <input type="text" id="delivery_port_name${i}" name="delivery_port_name[]" class="delivery_port_name"
                                placeholder="Delivery Port Name ${i}">
                            <ul class="bg-light">
                            </ul>
                        </div>
                        <div class="inputGroup col-sm-5" style="position: relative;">
                            <label for="delivery_country${i}"> Delivery Country ${i}:</label>
                            <input type="text" id="delivery_country${i}" name="delivery_country[]"
                                placeholder="Delivery Country ${i}" class="delivery_country">
                        </div>
                        <div class="col-sm-1 mt-5 removeFieldBtn">
                            <button class="btn btn-danger" title="Delete Fees" type="button"><i class="fas fa-minus"></i></button>
                        </div>
                        <div class="inputGroup col-sm-4" style="position: relative;">
                            <label for="delivery_latitude${i}"> Delivery Latitude ${i}:</label>
                            <input type="text" id="delivery_latitude${i}" name="delivery_latitude[]" class="delivery_latitude"
                                placeholder="Delivery Latitude ${i}">
                        </div>
                        <div class="inputGroup col-sm-4" style="position: relative;">
                            <label for="delivery_longitude${i}"> Delivery Longitude ${i}:</label>
                            <input type="text" id="delivery_longitude${i}" name="delivery_longitude[]" class="delivery_longitude"
                                placeholder="Delivery Longitude ${i}">
                        </div>
                        <div class="inputGroup col-sm-4" style="position: relative;">
                            <label for="price${i}"> Price ${i}:</label>
                            <input type="text" id="price${i}" name="price[]"
                                placeholder="Price ${i}" style="padding-left: 35px; padding-top: 3px;" class="price">
                                <i class="fa-solid fa-dollar-sign absolute__icon" style="left:9px;"></i>
                        </div>
                    </div>
                </div>
            `);

        $(".removeFieldBtn").click(function() {
            $(this).parents(".removeAddingFees").remove();
        });

        $(".delivery_port_name").keyup(function() {
            var port_name = $(this);
            if (port_name.val() == '') {
                port_name.parents('.inputGroup').siblings('.inputGroup').children(".delivery_country")
                    .val('');
                port_name.parents('.inputGroup').siblings('.inputGroup').children(".delivery_latitude")
                    .val('');
                port_name.parents('.inputGroup').siblings('.inputGroup').children(".delivery_longitude")
                    .val('');
                port_name.siblings("ul").hide();
                port_name.siblings("ul").children().remove();
            } else {
                $.ajax({
                    url: "{{ url('admin/port/search/get') }}",
                    type: "GET",
                    data: {
                        port_name: port_name.val()
                    },
                    dataType: "json",
                    success: function(res) {
                        port_name.siblings("ul").show();
                        port_name.siblings("ul").children().remove();
                        $.each(res.data, function(k, v) {
                            port_name.siblings("ul").append(
                                `<li class="p-3 selectDeliveryPort"><small>${this.name}</small><span style="display:none;" class="country">${this.country}</span><span style="display:none;" class="latitude">${this.latitude}</span><span style="display:none;" class="longitude">${this.longitude}</span></li>`
                                );
                        });

                        $(".selectDeliveryPort").click(function() {
                            var port_name = $(this).children('small').text();
                            var country = $(this).children('.country').text();
                            var latitude = $(this).children('.latitude').text();
                            var longitude = $(this).children('.longitude').text();

                            $(this).parents("ul").siblings(".delivery_port_name")
                                .val(port_name);
                            $(this).parents("ul").parents('.inputGroup').siblings(
                                    '.inputGroup').children(".delivery_country")
                                .val(country);
                            $(this).parents("ul").parents('.inputGroup').siblings(
                                    '.inputGroup').children(".delivery_latitude")
                                .val(latitude);
                            $(this).parents("ul").parents('.inputGroup').siblings(
                                    '.inputGroup').children(".delivery_longitude")
                                .val(longitude);
                            $(this).parents("ul").children().remove();
                            $(this).parents("ul").hide();
                        })
                    }
                });
            }
        })
    });


    $(".submit").click(function(e) {
        $(".inputGroup").children('.alert').remove();

        var address = $("#address");
        var port_name = $("#port_name");
        var latitude = $("#latitude");
        var longitude = $("#longitude");
        var country = $("#country");
        var terminal_name = $("#terminal_name");
        var status = $("#status");
        var delivery_port_name = $(".delivery_port_name");
        var delivery_latitude = $(".delivery_latitude");
        var delivery_longitude = $(".delivery_longitude");
        var delivery_country = $(".delivery_country");
        var price = $(".price");

        if ($('input').has("#address")) {
            if (address.children("option:selected").val() == '') {
                e.preventDefault();
                address.parent(".inputGroup").append(`
                        <div class="alert bg-danger text-light mt-3">
                            <span>
                                <strong>The address is required!</strong>
                            </span>
                        </div>`);
            }
        }

        if ($('input').has("#port_name")) {
            if (port_name.val() == '') {
                e.preventDefault();
                port_name.parent(".inputGroup").append(`
                        <div class="alert bg-danger text-light mt-3">
                            <span>
                                <strong>The port name is required!</strong>
                            </span>
                        </div>`);
            }
        }

        if ($('input').has("#latitude")) {
            if (latitude.val() == '') {
                e.preventDefault();
                latitude.parent(".inputGroup").append(`
                        <div class="alert bg-danger text-light mt-3">
                            <span>
                                <strong>The latitude is required!</strong>
                            </span>
                        </div>`);
            }
        }

        if ($('input').has("#longitude")) {
            if (longitude.val() == '') {
                e.preventDefault();
                longitude.parent(".inputGroup").append(`
                        <div class="alert bg-danger text-light mt-3">
                            <span>
                                <strong>The longitude is required!</strong>
                            </span>
                        </div>`);
            }
        }

        if ($('input').has("#country")) {
            if (country.val() == '') {
                e.preventDefault();
                country.parent(".inputGroup").append(`
                        <div class="alert bg-danger text-light mt-3">
                            <span>
                                <strong>The country is required!</strong>
                            </span>
                        </div>`);
            }
        }

        if ($('input').has("#terminal_name")) {
            if (terminal_name.val() == '') {
                e.preventDefault();
                terminal_name.parent(".inputGroup").append(`
                        <div class="alert bg-danger text-light mt-3">
                            <span>
                                <strong>The terminal name is required!</strong>
                            </span>
                        </div>`);
            }
        }

        if ($('input').has("#status")) {
            if (status.children("option:selected").val() == '') {
                e.preventDefault();
                status.parent(".inputGroup").append(`
                        <div class="alert bg-danger text-light mt-3">
                            <span>
                                <strong>The status is required!</strong>
                            </span>
                        </div>`);
            }
        }

        if ($('input').hasClass("delivery_port_name")) {
            $.each(delivery_port_name, function() {
                var deliveryPortNameParent = $("#" + this.getAttribute('id')).parent(".inputGroup");
                if (this.value == '') {
                    e.preventDefault();
                    deliveryPortNameParent.append(`
                            <div class="alert bg-danger text-light mt-3">
                                <span>
                                    <strong>The delivery port name is required!</strong>
                                </span>
                            </div>`);
                }
            })
        }

        if ($('input').hasClass("delivery_latitude")) {
            $.each(delivery_latitude, function() {
                var deliveryLatitudeParent = $("#" + this.getAttribute('id')).parent(".inputGroup");
                if (this.value == '') {
                    e.preventDefault();
                    deliveryLatitudeParent.append(`
                            <div class="alert bg-danger text-light mt-3">
                                <span>
                                    <strong>The delivery latitude is required!</strong>
                                </span>
                            </div>`);
                }
            })
        }

        if ($('input').hasClass("delivery_longitude")) {
            $.each(delivery_longitude, function() {
                var deliveryLongitudeParent = $("#" + this.getAttribute('id')).parent(".inputGroup");
                if (this.value == '') {
                    e.preventDefault();
                    deliveryLongitudeParent.append(`
                            <div class="alert bg-danger text-light mt-3">
                                <span>
                                    <strong>The delivery longitude is required!</strong>
                                </span>
                            </div>`);
                }
            })
        }

        if ($('input').hasClass("delivery_country")) {
            $.each(delivery_country, function() {
                var deliveryCountryParent = $("#" + this.getAttribute('id')).parent(".inputGroup");
                if (this.value == '') {
                    e.preventDefault();
                    deliveryCountryParent.append(`
                            <div class="alert bg-danger text-light mt-3">
                                <span>
                                    <strong>The delivery country is required!</strong>
                                </span>
                            </div>`);
                }
            })
        }

        if ($('input').hasClass("price")) {
            $.each(price, function() {
                var priceParent = $("#" + this.getAttribute('id')).parent(".inputGroup");
                if (this.value == '') {
                    e.preventDefault();
                    priceParent.append(`
                            <div class="alert bg-danger text-light mt-3">
                                <span>
                                    <strong>The price is required!</strong>
                                </span>
                            </div>`);
                } else if (!$.isNumeric(this.value)) {
                    e.preventDefault();
                    priceParent.append(`
                            <div class="alert bg-danger text-light mt-3">
                                <span>
                                    <strong>The price is contain number!</strong>
                                </span>
                            </div>`);
                }
            })
        }
    })
</script>
@endsection
