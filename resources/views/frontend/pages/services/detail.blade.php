@extends('frontend.layouts.app')
@section('content')
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">{{ $service->name }}</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>
                            <span> Service</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="page-details-wrapper service-details-wrapper">
                    <div class="tj-blog-item-three">
                        <div class="tj-blog-image">
                            <a href="#">
                                <img src="{{ !is_null($service->banner_image) ? asset($service->banner_image) : '' }}"
                                    alt="Blog" />
                            </a>
                        </div>
                        <div class="blog-content-area">
                            <div class="blog-header">
                                <h3>
                                    <a class="title-link" href="service-details.html">
                                        {{ !is_null($service->heading_one) ? $service->heading_one : '' }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                        @if ($service->desc_one != null)
                            <p>
                                {{ !is_null($service->desc_one) ? $service->desc_one : '' }}
                            </p>
                        @endif
                    </div>
                    <div class="row align-items-center">
                        @if ($service->image2 != null)
                            <div class="col-lg-5 col-md-6">
                                <div class="check-image">
                                    <img src="{{ !is_null($service->image2) ? asset($service->image2) : '' }}"
                                        alt="Blog" />
                                </div>
                            </div>
                        @endif
                        @if ($service->heading_two != null)
                            <div class="col-lg-7 col-md-6">
                                <div class="check-list">
                                    <h5 class="title">
                                        {{ !is_null($service->heading_two) ? $service->heading_two : '' }}
                                    </h5>
                                    <p>{{ !is_null($service->desc_two_one) ? $service->desc_two_one : '' }}</p>
                                    <ul class="list-gap">
                                        <li><i
                                                class="fa-light fa-check"></i>{{ !is_null($service->desc_two_two) ? $service->desc_two_two : '' }}
                                        </li>
                                        <li><i
                                                class="fa-light fa-check"></i>{{ !is_null($service->desc_two_three) ? $service->desc_two_three : '' }}
                                        </li>
                                        <li><i
                                                class="fa-light fa-check"></i>{{ !is_null($service->desc_two_four) ? $service->desc_two_four : '' }}
                                        </li>
                                        <li><i
                                                class="fa-light fa-check"></i>{{ !is_null($service->desc_two_five) ? $service->desc_two_five : '' }}
                                        </li>
                                        <li><i
                                                class="fa-light fa-check"></i>{{ !is_null($service->desc_two_six) ? $service->desc_two_six : '' }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="details-video-content">
                        {!! !is_null($service->extra) ? $service->extra : '' !!}
                        @if ($service->image3 != null)
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="sevice-image">
                                        <img src="{{ !is_null($service->image3) ? asset($service->image3) : '' }}"
                                            alt="Image" />
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="details-sidebar-inner">
                    <div class="tj-sidebar-widget sidebar-service">
                        <h5 class="details_title">Logistics Services</h5>
                        <ul class="list-gap">
                            @foreach ($related as $row)
                                <li>
                                    <a href="{{ route('service.details', $row->slug) }}">{{ $row->name }}
                                        <i class="flaticon-right-chevron"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tj-appointment-box" data-bg-image="assets/images/service/service-15.jpg">
                        <div class="tj-appointment-bg" data-bg-image="assets/images/banner/service_shape.png"></div>
                        <div class="tj-appointment-body">
                            <div class="appointment-percent text-center">
                                <span class="text-uppercase">100% <br />Quality
                                </span>
                            </div>
                            <div class="appointment-content text-center">
                                <h4 class="title">Make An Appointment</h4>
                                <a class="tel-link" href="tel:+18444744721">1 (844) 474-4721</a>
                                <p>Perfectly simple & easy to distinguish free hour when power.</p>
                                <div class="tj-theme-button">
                                    <a href="{{ route('quote.form.combine') }}" >
                                    <button class="tj-transparent-btn submit-btn2" type="submit" value="submit">
                                        Get a Quote <i class="fa-light fa-arrow-right"></i>
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection