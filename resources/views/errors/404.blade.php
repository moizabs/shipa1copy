@extends('frontend.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .icon {
        font-size: 32px;
        font-weight: bold;
        letter-spacing: 32px;
        position: relative;
    }
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-30px);
        }
        60% {
            transform: translateY(-15px);
        }
    }
</style>
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Page Not Found</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>
                            <span> 404 Error</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="thank-you-section pt-5 pb-0 px-2 position-relative">
    <div class="container text-center my-4">
        <div class="row" style="olid #ebe8e8;box-shadow: 0px 0px 51px -5px rgba(0,0,0,1) inset;-webkit-box-shadow: 0px 0px 51px -5px rgb(233 236 239) inset;-moz-box-shadow: 0px 0px 51px -5px rgba(0,0,0,1) inset;border-radius: 25px;padding: 35px;">
            <div class="col-12 mb-4">
                <i class="fas fa-exclamation-triangle fa-5x mb-4" style="color: #f46c6c; animation: bounce 2s infinite;"></i>
                <h2 class="thank-you-title">Oops! Page Not Found</h2>
                <p class="thank-you-message">
                    Sorry, the page you are looking for doesn't exist or may have been moved. Please return to the homepage or contact support for assistance.
                </p>
            </div>
            <div class="col-12 d-flex flex-column flex-md-row justify-content-evenly">
                <div class="mb-3 mb-md-0">
                    <div class="price__cta-btn">
                        <a href="{{ route('welcome') }}">
                            <button class="tj-submit-btn previous">
                                Back Home<i class="fa-light fa-arrow-right"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
@endsection