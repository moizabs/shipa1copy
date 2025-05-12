@extends('frontend.layouts.app')
@section('title', 'Order Tracking')
@section('meta_description',
'Simplify your shopping experience by tracking your orders seamlessly. Receive real-time notifications and stay informed about your delivery progress.')
@section('canonical')
<link rel="canonical" href="{{ url()->current() }}">
@endsection
@section('content')
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('/frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Track Your Shipment!</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Track Your Shipment</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-contact-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div  >
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"> Want To Know Your Order Status?</span>
                        <h2 class="title">Get Status of Your Order</h2>
                    </div>
                    <div class="tj-animate-form d-flex align-items-center">
                        <form id="orderTrackingForm" class="animate-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input" name="order_num" id="order_num"
                                            placeholder=" " />
                                        <label class="form__label">Order #:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <button id="submitButton" class="tj-primary-btn contact-btn" type="button">
                                        Track Order <i class="flaticon-right-1"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mt-3" id="orderTrackingHtml">
        </div>
    </div>
</section>
@endsection
@section('extraScript')
<script>
    $(document).ready(function() {
        $('#submitButton').click(function() {
            var formData = $('#orderTrackingForm').serialize();
            $.ajax({
                type: 'POST',
                url: '{{ route('track.order') }}',
                data: formData,
                success: function(response) {
                    if (response['status_code'] == 400) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                        $('#orderTrackingHtml').html('');
                    } else {
                        $('#orderTrackingHtml').html(response);
                    }
                },
                error: function(xhr, status, error) {
                    var response = xhr.responseJSON;
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            });
        });
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
@endsection