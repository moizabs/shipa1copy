@extends('frontend.layouts.app')
@section('content')
<style>
    .tj-service-section-four {
        background-color: #f8f9fa;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }
    .service-item-three {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        overflow: hidden;
        position: relative;
        margin-bottom: 30px;
        cursor: pointer;
    }
    .service-item-three:hover {
        transform: translateY(-10px);
        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
    }
    .service-item-three .overlay {
        position: absolute;
        top: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(6 46 57 / 59%);
        transition: top 0.3s ease-in-out;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
    }
    .service-item-three:hover .overlay {
        top: 0;
    }
    .service-image img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease-in-out;
    }
    .service-item-three:hover .service-image img {
        transform: scale(1.05);
    }
    .service-content-1 {
        padding: 20px;
        text-align: center;
    }
    .service-content-1 h4 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .service-content-1 h4 a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s ease;
    }
    [data-sal="slide-up"] {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }
    [data-sal="slide-up"].sal-animate {
        opacity: 1;
        transform: translateY(0);
    }
    .tj-service-section-four {
        scroll-behavior: smooth;
    }
    @media (max-width: 991px) {
        .tj-section-heading .title {
            font-size: 28px;
        }
        .service-content-1 h4 {
            font-size: 18px;
        }
    }
</style>
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Service Page</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Service</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-service-section-four tj-service-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> What We Do</span>
                    <h2 class="title">Logistic & Transport</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/slider/car-transports.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <i class="fa-solid fa-car-side fa-3x text-white"></i>
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">The First Stop Platform of Car Shipping Services</h4>
                            </div>
                            <div class="col-12 text-center">
                                <a href="{{ route('frontend.pages.services.car-service') }}">
                                    <button class="tj-submit-btn fs-6">
                                        Car Shipping Service <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4><a class="title" href="{{ route('frontend.pages.services.car-service') }}">
                                Car Shipping Service </a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/service/Bike.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <i class="fa fa-motorcycle fa-3x"></i>
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Cost-Effective Way of Motorcycle Shipping</h4>
                            </div>
                            <div class="col-12 text-center">
                                <a class="fs-5" href="{{ route('frontend.pages.services.bike-service') }}">
                                    <button class="tj-submit-btn fs-6">
                                        Motorcycle Service <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4><a class="title" href="{{ route('frontend.pages.services.bike-service') }}">
                                Motorcycle Shipping Service </a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/service/ATV.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg fill="#ffffff" width="75px" height="75px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" transform="matrix(-1, 0, 0, 1, 0, 0)" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M31.8125 8C31.78125 8.007813 31.75 8.019531 31.71875 8.03125L21.9375 10.78125L21.9375 10.8125C20.9375 11.039063 20.039063 11.613281 19.46875 12.46875L14.15625 20.4375C14.121094 20.488281 14.089844 20.539063 14.0625 20.59375L7.4375 21.65625C7.417969 21.65625 7.394531 21.65625 7.375 21.65625C6.039063 21.953125 5.046875 23.066406 4.8125 24.40625L4.78125 24.40625L4.03125 27.78125C3.964844 28.078125 4.035156 28.386719 4.222656 28.621094C4.414063 28.859375 4.699219 28.996094 5 29L8 29L8 30.09375C5.164063 30.570313 3 33.035156 3 36C3 39.300781 5.699219 42 9 42C12.300781 42 15 39.300781 15 36C15 35.300781 14.878906 34.625 14.65625 34L16.1875 34L16.9375 35.96875C16.945313 36 16.957031 36.03125 16.96875 36.0625L16.96875 36.09375C16.996094 36.421875 17.183594 36.710938 17.46875 36.875C17.5 36.898438 17.53125 36.917969 17.5625 36.9375C17.59375 36.949219 17.625 36.960938 17.65625 36.96875C17.875 37.058594 18.117188 37.070313 18.34375 37L31 37C31.09375 37.003906 31.1875 36.992188 31.28125 36.96875C31.3125 36.960938 31.34375 36.949219 31.375 36.9375C31.441406 36.914063 31.503906 36.882813 31.5625 36.84375C31.585938 36.824219 31.605469 36.804688 31.625 36.78125C31.65625 36.761719 31.6875 36.742188 31.71875 36.71875C31.742188 36.699219 31.761719 36.679688 31.78125 36.65625C31.78125 36.644531 31.78125 36.636719 31.78125 36.625C31.828125 36.578125 31.871094 36.523438 31.90625 36.46875C31.90625 36.457031 31.90625 36.449219 31.90625 36.4375L31.9375 36.375C31.949219 36.34375 31.960938 36.3125 31.96875 36.28125L33.125 34L34.34375 34C34.121094 34.625 34 35.300781 34 36C34 39.300781 36.699219 42 40 42C43.300781 42 46 39.300781 46 36C46 33.035156 43.835938 30.570313 41 30.09375L41 29L47 29C47.300781 28.996094 47.585938 28.859375 47.777344 28.621094C47.964844 28.386719 48.035156 28.078125 47.96875 27.78125C47.96875 27.78125 47.738281 26.683594 47.21875 25.34375C46.699219 24.003906 45.914063 22.382813 44.65625 21.25C44.476563 21.089844 44.242188 21 44 21L35.59375 21L38.40625 15.375C38.863281 14.457031 38.808594 13.378906 38.28125 12.5C38.28125 12.5 37.632813 11.40625 36.5625 10.3125C35.492188 9.21875 33.957031 8 32 8C31.96875 8 31.9375 8 31.90625 8C31.875 8 31.84375 8 31.8125 8 Z M 32.09375 10.03125C33.144531 10.074219 34.261719 10.804688 35.125 11.6875C36.015625 12.59375 36.5625 13.5 36.5625 13.5C36.738281 13.792969 36.777344 14.164063 36.625 14.46875L34 19.6875L34 18.5C34 17.671875 33.328125 17 32.5 17C31.671875 17 31 17.671875 31 18.5L31 25.3125L30.625 26L25.5 26C24.671875 26 24 26.671875 24 27.5C24 28.328125 24.671875 29 25.5 29L28.96875 29L28.40625 30L21 30L21 25C21.003906 24.847656 20.96875 24.699219 20.90625 24.5625L18.90625 20.5625C18.71875 20.160156 18.285156 19.929688 17.84375 20L16.78125 20.15625L21.15625 13.59375C21.449219 13.152344 21.886719 12.855469 22.40625 12.75C22.4375 12.742188 22.46875 12.730469 22.5 12.71875 Z M 17.4375 22.125L19 25.25L19 31C19 31.550781 19.449219 32 20 32L29 32C29.359375 32.003906 29.695313 31.8125 29.875 31.5L34.59375 23L43.5 23C44.246094 23.773438 44.917969 24.960938 45.34375 26.0625C45.546875 26.582031 45.546875 26.628906 45.65625 27L35 27C34.613281 26.996094 34.261719 27.214844 34.09375 27.5625L30.375 35L18.6875 35L15.9375 27.65625C15.792969 27.261719 15.417969 27 15 27L6.25 27L6.75 24.84375C6.75 24.824219 6.75 24.800781 6.75 24.78125C6.832031 24.210938 7.25 23.75 7.8125 23.625 Z M 10 29L14.3125 29L15.4375 32L13.46875 32C12.578125 31.003906 11.371094 30.324219 10 30.09375 Z M 35.625 29L39 29L39 30.09375C37.628906 30.324219 36.421875 31.003906 35.53125 32L34.125 32 Z M 9 32C11.222656 32 13 33.777344 13 36C13 38.222656 11.222656 40 9 40C6.777344 40 5 38.222656 5 36C5 33.777344 6.777344 32 9 32 Z M 40 32C42.222656 32 44 33.777344 44 36C44 38.222656 42.222656 40 40 40C37.777344 40 36 38.222656 36 36C36 33.777344 37.777344 32 40 32 Z M 9 34C7.90625 34 7 34.90625 7 36C7 37.09375 7.90625 38 9 38C10.09375 38 11 37.09375 11 36C11 34.90625 10.09375 34 9 34 Z M 40 34C38.90625 34 38 34.90625 38 36C38 37.09375 38.90625 38 40 38C41.09375 38 42 37.09375 42 36C42 34.90625 41.09375 34 40 34Z"></path></g></svg>                                     
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">A Wide Range of ATV/UTV Service</h4>
                            </div>
                            <div class="col-12 text-center">
                                <a class="fs-5" href="{{ route('frontend.pages.services.atv-utv-service') }}">
                                    <button class="tj-submit-btn fs-6">
                                        ATV/UTV Shipping Service <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4><a class="title" href="{{ route('frontend.pages.services.atv-utv-service') }}">
                                ATV/UTV Shipping Service </a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/service/Golf.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg fill="#ffffff" width="75px" height="75px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M23 7C14.523438 7 8.8125 8 8.8125 8C8.261719 8.101563 7.894531 8.636719 8 9.1875C8.101563 9.738281 8.636719 10.105469 9.1875 10C9.1875 10 9.945313 9.890625 11 9.75L11 18L6 18L6 20L11 20L11 24.03125C13.097656 24.128906 15.246094 24.363281 17.34375 24.75C16.949219 23.519531 16.421875 21.949219 15.9375 20.65625C15.296875 18.960938 13.949219 18.34375 13 18.125L13 9.5C15.410156 9.25 18.855469 9 23 9C26.136719 9 28.871094 9.136719 31.0625 9.3125C31.070313 9.34375 31.082031 9.375 31.09375 9.40625L37.90625 25L34.34375 33L26 33L26 31.28125C26 30.152344 25.277344 29.167969 24.125 28.71875C19.441406 26.882813 13.253906 25.835938 7.96875 26C6.21875 26.054688 5.015625 26.449219 4.28125 27.21875C2.273438 29.320313 2 32.839844 2 36C2 36.550781 2.449219 37 3 37L4.09375 37C4.027344 37.324219 4 37.65625 4 38C4 40.757813 6.242188 43 9 43C11.414063 43 13.441406 41.277344 13.90625 39L38.09375 39C38.558594 41.277344 40.585938 43 43 43C45.757813 43 48 40.757813 48 38C48 37.773438 47.964844 37.5625 47.9375 37.34375C47.972656 37.238281 48 37.117188 48 37L48 31C48 30.917969 47.988281 30.828125 47.96875 30.75C47.105469 27.292969 41.171875 24.78125 39.75 24.21875L33.3125 9.53125C35.503906 9.769531 36.8125 10 36.8125 10C37.363281 10.105469 37.898438 9.738281 38 9.1875C38.105469 8.636719 37.738281 8.101563 37.1875 8C37.1875 8 31.476563 7 23 7 Z M 30.875 16C30.652344 16.023438 30.441406 16.125 30.28125 16.28125L26.28125 20.28125C25.882813 20.679688 25.882813 21.320313 26.28125 21.71875C26.679688 22.117188 27.320313 22.117188 27.71875 21.71875L29 20.4375L35.0625 26.46875L35.9375 24.5L30.4375 19L31.71875 17.71875C32.042969 17.417969 32.128906 16.941406 31.933594 16.546875C31.742188 16.148438 31.308594 15.929688 30.875 16 Z M 9 35C10.652344 35 12 36.347656 12 38C12 39.652344 10.652344 41 9 41C7.347656 41 6 39.652344 6 38C6 36.347656 7.347656 35 9 35 Z M 43 35C44.652344 35 46 36.347656 46 38C46 39.652344 44.652344 41 43 41C41.347656 41 40 39.652344 40 38C40 36.347656 41.347656 35 43 35Z"></path></g></svg>                                                                           
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your Golf Carts</h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.golf-cart-service') }}"><button class="tj-submit-btn fs-6">Golf Cart Shipping Service<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4> <a class="title" href="{{ route('frontend.pages.services.golf-cart-service') }}">
                                Golf Cart Shipping Service </a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('img/BOAT-BANNER.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg fill="#ffffff" height="75px" width="89px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.998 511.998" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M482.193,315.609L19.174,263.436c-3.558-0.401-5.956,3.456-4.113,6.528c29.594,49.365,99.652,84.164,181.205,84.164 h276.216c1.877,0,3.524-1.22,4.079-3.012l9.233-30.012C486.579,318.553,484.847,315.908,482.193,315.609z"></path> </g> </g> <g> <g> <path d="M510.652,230.062c-1.357-2.116-3.567-3.524-6.05-3.857l-128-17.067c-4.617-0.606-8.96,2.662-9.591,7.33 c-0.631,4.668,2.662,8.969,7.33,9.591l14.49,1.929c2.116,0.282,3.703,2.091,3.703,4.224v13.193c0,2.534-2.202,4.514-4.719,4.241 l-34.133-3.661c-2.167-0.222-3.814-2.057-3.814-4.233v-37.35c0-0.845,0.247-1.664,0.717-2.364l14.916-22.374 c1.707-2.56,1.903-5.837,0.521-8.576c-1.391-2.748-4.147-4.54-7.219-4.685l-179.2-8.533c-2.876-0.026-5.666,1.212-7.347,3.567 c0,0-34.099,47.923-41.574,58.47c-0.896,1.263-2.398,1.937-3.934,1.766L9.438,209.113c-2.423-0.256-4.813,0.521-6.613,2.133 C1.033,212.868,0,215.172,0,217.595c0,8.218,1.067,16.273,3.081,24.09c0.444,1.724,1.946,2.978,3.712,3.183L488.9,299.191 c2.039,0.23,3.951-1.024,4.557-2.987l18.168-59.034C512.358,234.773,512,232.17,510.652,230.062z M246.255,182.796l-6.656,46.609 c-0.324,2.261-2.33,3.874-4.608,3.644c-16.648-1.681-79.198-8.26-79.198-8.26c-3.243-0.35-4.915-4.062-3.021-6.724l29.312-41.037 c0.845-1.178,2.227-1.852,3.678-1.783l56.474,2.688C244.745,178.052,246.613,180.304,246.255,182.796z M338.765,189.017 l-5.248,7.851c-0.469,0.7-0.717,1.527-0.717,2.372v39.774c0,2.534-2.202,4.514-4.719,4.241l-67.721-7.253 c-2.398-0.256-4.113-2.458-3.772-4.847l6.903-48.324c0.307-2.176,2.227-3.763,4.429-3.661l67.499,3.217 C338.731,182.54,340.608,186.252,338.765,189.017z M443.733,250.892c0,2.534-2.202,4.514-4.719,4.241 c0,0-17.715-1.997-25.651-2.935c-2.15-0.247-3.763-2.074-3.763-4.233v-12.339c0-2.577,2.27-4.574,4.83-4.233l25.6,3.413 c2.116,0.29,3.703,2.099,3.703,4.233V250.892z M490.863,246.608l-3.166,10.274c-0.597,1.946-2.5,3.2-4.531,2.987l-18.56-1.988 c-2.159-0.23-3.806-2.065-3.806-4.241v-11.179c0-2.577,2.27-4.574,4.83-4.233l21.717,2.893 C489.958,241.471,491.639,244.083,490.863,246.608z"></path> </g> </g> </g></svg>                                                                          
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your Boat</h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.boat-service') }}"><button class="tj-submit-btn fs-6">Boat Transport Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4><a class="title" href="{{ route('frontend.pages.services.boat-service') }}">
                                Boat Transport Services</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/service/Construction.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" width="82px" height="82px" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st1{fill:none;stroke:#ffffff;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;} .st2{fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;} </style> <line class="st0" x1="3" y1="11" x2="3" y2="14"></line> <path class="st0" d="M18,18l-1.7-8.3c-0.2-1-1-1.7-2-1.7H11c-1.1,0-2,0.9-2,2v4"></path> <path class="st0" d="M31,26h-5.6c-0.9,0-1.8-0.4-2.4-1l0,0c-0.6-0.6-1-1.5-1-2.4V17l8,9"></path> <circle class="st0" cx="4" cy="23" r="3"></circle> <circle class="st0" cx="16" cy="23" r="3"></circle> <polyline class="st0" points="19,8 12,8 12,15 "></polyline> <line class="st0" x1="13.2" y1="22" x2="6.8" y2="22"></line> <path class="st0" d="M1.5,21.3C1.2,21,1,20.5,1,20v-4c0-1.1,0.9-2,2-2h6l9,4h4"></path> </g></svg>                                                                           
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your Construction Equipment</h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.construction-service') }}"><button class="tj-submit-btn fs-6"> Equipment Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4> <a class="title" href="{{ route('frontend.pages.services.construction-service') }}">
                                Construction Equipment Services</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/service/Commercial.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <i class="fa-solid fa-truck-fast fa-3x" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your Truck</h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.commercial-service') }}"><button class="tj-submit-btn fs-6"> Equipment Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4> <a class="title" href="{{ route('frontend.pages.services.commercial-service') }}">
                                Commercial Truck Transport</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/service/Excavator.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg fill="#ffffff" height="80px" width="80px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.985 511.985" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M492.629,103.143l-102.409-25.6c-2.057-0.512-4.139-0.768-6.212-0.768c-6.707,0-13.244,2.637-18.099,7.501l-85.931,85.931 c-0.316-0.845-0.674-1.664-1.075-2.475l-25.6-51.2c-4.335-8.67-13.201-14.157-22.895-14.157H153.6c-14.14,0-25.6,11.46-25.6,25.6 v76.834H25.6c-14.14,0-25.6,11.46-25.6,25.6v51.2c0,14.14,11.46,25.6,25.6,25.6h102.409v25.6h-51.2 c-28.237,0-51.2,22.972-51.2,51.2c0,28.237,22.972,51.2,51.2,51.2h256.017c28.237,0,51.2-22.972,51.2-51.2 c0-28.237-22.972-51.2-51.2-51.2H230.417v-25.6h25.6c7.663,0,14.925-3.43,19.78-9.353l127.036-154.684l76.476,9.719 l-26.377,98.517l-59.409-13.687l6.554-23.654c1.903-6.81-2.099-13.867-8.9-15.753c-6.955-1.826-13.875,2.116-15.753,8.926 c0,0-22.639,67.038-13.978,88.832c4.173,10.547,12.279,18.5,23.373,22.989c16.205,6.554,30.003,9.822,41.626,9.822 c7.825,0,14.703-1.485,20.651-4.454c9.626-4.813,16.375-13.466,19.473-25.011l45.201-168.132 C513.434,118.486,505.301,106.309,492.629,103.143z M332.826,358.418c14.14,0,25.6,11.46,25.6,25.6s-11.46,25.6-25.6,25.6H76.809 c-14.14,0-25.6-11.46-25.6-25.6s11.46-25.6,25.6-25.6H332.826z M153.609,332.818v-25.6h51.2v25.6H153.609z M256.017,281.61H25.6 v-51.2h128.009h102.409V281.61z M256.017,204.801H153.609v-76.809h76.809l25.6,51.208V204.801z M441.839,292.814 c-1.527,5.777-4.104,7.697-6.153,8.73c-4.301,2.15-15.454,4.224-41.25-6.187c-4.651-1.886-7.552-4.642-9.173-8.661 c-2.85-7.117-1.425-16.862,0.623-24.44l60.425,13.918L441.839,292.814z M485.99,127.95l-93.961-11.947L281.626,250.437V204.81 l102.409-102.409l101.973,25.498L485.99,127.95z"></path> </g> </g> </g></svg>                                                                          
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your </h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.construction-service') }}"><button class="tj-submit-btn fs-6"> Equipment Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4><a class="title" href="{{ route('frontend.pages.services.excavator-service') }}">
                                Excavator Transport Services</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/service/Farm.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg fill="#ffffff" height="75px" width="75px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(1 1)"> <g> <g> <path d="M502.467,353.133h-0.853c-1.707-4.267-4.267-9.387-6.827-14.507c3.413-3.413,3.413-8.533,0-11.947l-17.067-17.067 c-3.413-3.413-8.533-3.413-11.947,0c-5.12-2.56-10.24-5.12-14.507-6.827v-0.853c0-5.12-3.413-8.533-8.533-8.533H408.6 c-5.12,0-8.533,3.413-8.533,8.533v0.853c-4.267,1.707-9.387,4.267-14.507,6.827c-3.413-3.413-8.533-3.413-11.947,0 l-17.067,17.067c-3.413,3.413-3.413,8.533,0,11.947c-2.56,5.12-5.12,10.24-6.827,14.507h-0.853c-5.12,0-8.533,3.413-8.533,8.533 V395.8c0,5.12,3.413,8.533,8.533,8.533h0.853c1.707,4.267,4.267,9.387,6.827,14.507c-3.413,3.413-3.413,8.533,0,11.947 l17.067,17.067c3.413,3.413,8.533,3.413,11.947,0c5.12,2.56,10.24,5.12,14.507,6.827v0.853c0,5.12,3.413,8.533,8.533,8.533 h34.133c5.12,0,8.533-3.413,8.533-8.533v-0.853c4.267-1.707,9.387-4.267,14.507-6.827c3.413,3.413,8.533,3.413,11.947,0 l17.067-17.067c3.413-3.413,3.413-8.533,0-11.947c2.56-5.12,5.12-10.24,6.827-14.507h0.853c5.12,0,8.533-3.413,8.533-8.533 v-34.133C511,356.547,507.587,353.133,502.467,353.133z M493.933,387.267c-3.413,0.853-5.973,2.56-6.827,5.973 c-1.707,5.12-5.973,13.653-11.093,21.333c-1.707,2.56-1.707,6.827,0,9.387l-5.12,5.12c-2.56-1.707-6.827-1.707-9.387,0 c-6.827,5.12-16.213,9.387-21.333,11.093c-3.413,0.853-5.12,3.413-5.973,6.827h-17.067c-0.853-3.413-2.56-5.973-5.973-6.827 c-5.12-1.707-13.653-5.973-21.333-11.093c-2.56-1.707-6.827-1.707-9.387,0l-5.12-5.12c1.707-2.56,1.707-6.827,0-9.387 c-5.12-6.827-9.387-16.213-11.093-21.333c-0.853-3.413-3.413-5.12-6.827-5.973V370.2c3.413-0.853,5.973-2.56,6.827-5.973 c1.707-5.12,5.973-13.653,11.093-21.333c1.707-2.56,1.707-6.827,0-9.387l5.12-5.12c2.56,1.707,6.827,1.707,9.387,0 c6.827-5.12,16.213-9.387,21.333-11.093c3.413-0.853,5.12-3.413,5.973-6.827H434.2c0.853,3.413,2.56,5.973,5.973,6.827 c5.12,1.707,13.653,5.973,21.333,11.093c2.56,1.707,6.827,1.707,9.387,0l5.12,5.12c-1.707,2.56-1.707,6.827,0,9.387 c5.12,6.827,9.387,16.213,11.093,21.333c0.853,3.413,3.413,5.12,6.827,5.973V387.267z"></path> <path d="M425.667,336.067c-23.893,0-42.667,18.773-42.667,42.667s18.773,42.667,42.667,42.667s42.667-18.773,42.667-42.667 S449.56,336.067,425.667,336.067z M425.667,404.333c-14.507,0-25.6-11.093-25.6-25.6s11.093-25.6,25.6-25.6 s25.6,11.093,25.6,25.6S440.173,404.333,425.667,404.333z"></path> <path d="M324.853,397.152c0.114-0.982,0.121-2.019,0.121-3.059c-0.853-5.12-1.707-10.24-1.707-15.36s0.853-10.24,2.56-15.36 c0.538-1.613,0.396-3.224-0.208-4.624c2.955-15.679,9.562-30.52,19.834-43.163c15.933-20.089,38.052-33.429,62.704-37.739 c0.084-0.015,0.169-0.028,0.254-0.042c0.8-0.138,1.604-0.265,2.409-0.384c0.232-0.034,0.464-0.066,0.696-0.098 c0.667-0.094,1.335-0.18,2.005-0.261c0.297-0.036,0.595-0.07,0.893-0.103c0.613-0.068,1.228-0.129,1.844-0.186 c0.33-0.03,0.66-0.061,0.991-0.089c0.6-0.05,1.203-0.091,1.805-0.13c0.334-0.022,0.668-0.046,1.003-0.064 c0.638-0.035,1.278-0.06,1.918-0.083c0.295-0.011,0.589-0.026,0.885-0.034c0.933-0.025,1.868-0.04,2.805-0.04 c1.038,0,2.079,0.022,3.122,0.053c0.309,0.009,0.618,0.021,0.927,0.034c0.797,0.031,1.595,0.073,2.393,0.123 c0.285,0.018,0.57,0.031,0.854,0.052c0.947,0.067,1.894,0.15,2.842,0.243c0.469,0.046,0.936,0.099,1.403,0.152 c0.513,0.057,1.025,0.12,1.538,0.185c0.555,0.071,1.11,0.141,1.663,0.22c0.07,0.01,0.139,0.022,0.209,0.033 c1.411,0.207,2.817,0.445,4.215,0.709c0.253,0.048,0.506,0.096,0.76,0.146c2,0.394,3.984,0.849,5.953,1.358 c0.565,0.147,1.129,0.296,1.692,0.453c0.341,0.094,0.683,0.189,1.023,0.287c9.163,2.668,18.009,6.685,26.02,12.166 c0.663,0.331,1.457,0.66,2.327,0.891c4.937,3.265,9.592,6.957,13.886,11.056c3.413,3.413,8.533,3.413,11.947,0 c3.413-3.413,3.413-8.533,0-11.947c-4.193-4.031-8.661-7.727-13.356-11.07l15.063-35.863C511,244.76,511,243.053,511,242.2 V54.467c0-5.12-3.413-8.533-8.533-8.533H263.533c-5.12,0-8.533,3.413-8.533,8.533V88.6V191v8.533h-51.2v-51.2 c0-5.12-3.413-8.533-8.533-8.533h-8.533v-25.6c0-9.387,7.68-17.067,17.067-17.067c5.12,0,8.533-3.413,8.533-8.533 s-3.413-8.533-8.533-8.533c-18.773,0-34.133,15.36-34.133,34.133v25.6h-8.533c-5.12,0-8.533,3.413-8.533,8.533v51.2H67.267 c-23.893,0-42.667,18.773-42.667,42.667v17.067v70.598C8.863,343.891-1,364.342-1,387.267c0,42.667,34.133,76.8,76.8,76.8 c36.791,0,67.215-25.388,74.903-59.733h158.375c1.58,7.005,3.772,13.833,6.509,20.48c0.853,3.413,4.267,5.12,7.68,5.12 c0.853,0,2.56,0,3.413-0.853c4.267-1.707,5.973-6.827,4.267-11.093C328.149,411.459,326.122,404.42,324.853,397.152z M272.067,97.133h68.267v85.333h-68.267V97.133z M255,216.6v34.133h-51.2V216.6H255z M169.667,156.867h17.067v51.2v51.2v25.6 h-17.067v-25.6v-51.2V156.867z M41.667,242.2c0-14.507,11.093-25.6,25.6-25.6H152.6v34.133H41.667V242.2z M41.667,318.147V267.8 H152.6v25.6c0,5.12,3.413,8.533,8.533,8.533h34.133c5.12,0,8.533-3.413,8.533-8.533v-25.6h59.733c5.12,0,8.533-3.413,8.533-8.533 v-51.2v-8.533h76.8c5.12,0,8.533-3.413,8.533-8.533V88.6c0-5.12-3.413-8.533-8.533-8.533h-76.8V63h221.867v177.493 l-13.501,32.064c-7.284-3.746-14.941-6.735-22.834-8.925c-7.574-2.148-15.315-3.469-23.104-4.035 c-0.149-0.011-0.297-0.022-0.446-0.032c-0.748-0.052-1.497-0.099-2.246-0.136c-0.468-0.024-0.937-0.042-1.406-0.061 c-0.525-0.02-1.049-0.044-1.574-0.057c-1.051-0.028-2.102-0.045-3.155-0.045c-1.103,0-2.201,0.018-3.297,0.048 c-0.25,0.007-0.498,0.02-0.748,0.029c-0.874,0.029-1.747,0.066-2.616,0.114c-0.206,0.012-0.411,0.027-0.616,0.039 c-0.959,0.058-1.915,0.127-2.867,0.209c-0.079,0.007-0.157,0.014-0.236,0.021c-52.299,4.557-95.22,43.182-106.297,93.407H144.92 c-12.987-25.162-36.785-41.047-64.78-42.54c-0.234-0.013-0.467-0.025-0.701-0.036c-1.206-0.054-2.418-0.091-3.639-0.091 c-1.314,0-2.627,0.036-3.938,0.098c-0.017,0.001-0.034,0.001-0.051,0.002C61.213,311.074,50.766,313.597,41.667,318.147z M75.8,447c-33.28,0-59.733-26.453-59.733-59.733c0-31.17,23.206-56.349,53.491-59.417c0.059-0.006,0.117-0.012,0.176-0.018 c0.86-0.085,1.727-0.146,2.598-0.194c0.179-0.01,0.356-0.024,0.535-0.032c0.972-0.046,1.95-0.073,2.934-0.073 c0.941,0,1.875,0.028,2.804,0.07c0.252,0.011,0.502,0.027,0.753,0.042c0.737,0.042,1.47,0.096,2.199,0.164 c0.204,0.019,0.409,0.036,0.613,0.057c1.904,0.197,3.779,0.479,5.623,0.847c0.105,0.021,0.209,0.043,0.313,0.065 c0.888,0.182,1.77,0.381,2.643,0.602c0.039,0.01,0.077,0.019,0.116,0.028c1.876,0.478,3.715,1.044,5.512,1.692 c0.066,0.024,0.131,0.048,0.196,0.072c0.813,0.297,1.617,0.612,2.413,0.942c0.098,0.041,0.196,0.08,0.294,0.121 c0.853,0.359,1.696,0.736,2.527,1.133c0.051,0.025,0.101,0.052,0.152,0.076c0.683,0.329,1.356,0.675,2.024,1.029 c0.403,0.214,0.802,0.435,1.199,0.659c0.255,0.143,0.508,0.288,0.76,0.434c11.163,6.506,20.097,16.685,25.324,29.515 c0.163,0.653,0.422,1.243,0.754,1.771c2.272,6.355,3.512,13.225,3.512,20.416C135.533,420.547,109.08,447,75.8,447z M306.2,387.267H152.6c0-0.974-0.03-1.92-0.071-2.856c-0.132-3.671-0.52-7.27-1.141-10.786c-0.161-1.119-0.327-2.252-0.494-3.424 H306.2c0,2.56,0,5.973,0,8.533S306.2,384.707,306.2,387.267z"></path> <path d="M75.8,353.133c-18.773,0-34.133,15.36-34.133,34.133c0,18.773,15.36,34.133,34.133,34.133 c18.773,0,34.133-15.36,34.133-34.133C109.933,368.493,94.573,353.133,75.8,353.133z M75.8,404.333 c-9.387,0-17.067-7.68-17.067-17.067S66.413,370.2,75.8,370.2s17.067,7.68,17.067,17.067S85.187,404.333,75.8,404.333z"></path> <path d="M383,199.533h85.333c5.12,0,8.533-3.413,8.533-8.533V88.6c0-5.12-3.413-8.533-8.533-8.533H383 c-5.12,0-8.533,3.413-8.533,8.533V191C374.467,196.12,377.88,199.533,383,199.533z M391.533,97.133H459.8v85.333h-68.267V97.133z "></path> <path d="M272.067,301.933h42.667c5.12,0,8.533-3.413,8.533-8.533c0-5.12-3.413-8.533-8.533-8.533h-42.667 c-5.12,0-8.533,3.413-8.533,8.533C263.533,298.52,266.947,301.933,272.067,301.933z"></path> <path d="M246.467,336.067h42.667c5.12,0,8.533-3.413,8.533-8.533S294.253,319,289.133,319h-42.667 c-5.12,0-8.533,3.413-8.533,8.533S241.347,336.067,246.467,336.067z"></path> </g> </g> </g> </g></svg>                                                                         
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your Farm Transport</h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.construction-service') }}"><button class="tj-submit-btn fs-6"> Equipment Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4> <a class="title" href="{{ route('frontend.pages.services.farm-service') }}">
                                 Transport Services</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/service/Heavy.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg width="75px" height="75px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ffffff" d="M94.071 92.535v85.772c5.493.912 10.978 1.915 16.346 3.062 1.052-16.604 6.311-33.717 19.521-47.064 14.006-14.151 36.123-23.201 68.34-24.377l-1.838-17.393zm290.104 24.387l-17.938 1.496 3.451 41.416 17.961-1.209zm-184 10.963c-29.839.853-47.228 8.759-57.444 19.08-10.324 10.431-14.198 24.227-14.498 39.074 16.892 7.201 32.876 13.728 34.407 32.443l48.607 14.243zm64.564 15.851v50.268h16.135v-50.268zm124.407 32.828l-17.963 1.207 3.11 37.336L353.2 227.47l2.43 19.437 20.322-11.908 6.37 76.422c4.133-8.828 9.474-17.361 15.949-25.34zm-332.26 18.737l-30.067 75.166 15.672 26.12 27.926-49.024 43.803.826 163.758 49.17 27.59 32.978h42.378l-14.875-118.99-106.627-6.272 3.526 33.371 58.347 17.397-5.142 17.248c-46.641-13.699-94.304-28.4-140.537-41.912 3.413-15.453 1.87-18.897-11.332-24.932-24.049-10.298-47.517-9.563-74.42-11.146zm23.88 70.459l-57.8 101.474 32.762 48.635h213.005l43.418-49.41-44.517-53.211-156.225-46.91zm24.366 15.08c14.289 0 26.066 11.777 26.066 26.066 0 14.29-11.777 26.067-26.066 26.067-14.29 0-26.065-11.778-26.065-26.067s11.776-26.066 26.065-26.066zm311.5 11.56c-27.812 30.32-34.254 70.426-16.715 98.655 7.529 12.117 27.669 20.92 51.041 25.056 12.635 2.236 25.873 3.169 38.076 3.354-30.21-21.402-48.91-41.992-59.601-63.692-10.052-20.402-12.867-41.244-12.801-63.373zm-311.5 6.44c-4.562 0-8.067 3.504-8.067 8.066 0 4.562 3.505 8.069 8.067 8.069s8.068-3.507 8.068-8.069c0-4.562-3.506-8.066-8.068-8.066zm130.74 25.63c21.985 0 40 18.016 40 40 0 21.985-18.015 40-40 40s-40-18.015-40-40c0-21.984 18.015-40 40-40zM81.962 335.73c17.843 0 32.5 14.657 32.5 32.5 0 17.842-14.655 32.5-32.498 32.5-17.843 0-32.5-14.658-32.5-32.5 0-17.843 14.655-32.5 32.498-32.5zm153.91 6.74c-12.258 0-22.002 9.744-22.002 22.002s9.744 22 22.002 22 22.002-9.742 22.002-22-9.744-22.002-22.002-22.002zm84.752 6.066l15.236 18.211-13.173 14.992h53.322c-3.336-10.645-4.5-21.877-3.65-33.203zm-238.662 5.192c-8.116 0-14.5 6.386-14.5 14.502 0 8.115 6.386 14.501 14.502 14.501s14.5-6.386 14.5-14.501c0-8.116-6.386-14.502-14.502-14.502z"></path></g></svg>                                                                         
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your  Equipment</h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.heavy-service') }}"><button class="tj-submit-btn fs-6"> Equipment Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4><a class="title" href="{{ route('frontend.pages.services.heavy-service') }}">
                                Heavy Equipment Services </a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('/frontend/images/service/RV.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg fill="#ffffff" width="75px" height="75px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g data-name="Calque 2" id="Calque_2"> <path d="M24.36,44.65H8.22a1.5,1.5,0,0,0-1.5,1.5V57.22a1.5,1.5,0,0,0,1.5,1.5H24.36a1.5,1.5,0,0,0,1.5-1.5V46.15A1.5,1.5,0,0,0,24.36,44.65Zm-1.5,11.07H9.72V47.65H22.86Z"></path> <path d="M46.84,44.65H30.7a1.5,1.5,0,0,0-1.5,1.5V57.22a1.5,1.5,0,0,0,1.5,1.5H46.84a1.5,1.5,0,0,0,1.5-1.5V46.15A1.5,1.5,0,0,0,46.84,44.65Zm-1.5,11.07H32.2V47.65H45.34Z"></path> <path d="M96,59.36H93.85l-5.2-9.21H90a4.92,4.92,0,0,0,4.28-1.81,5.11,5.11,0,0,0,.5-4.31c0-.12-3.51-11.94-11-11.94H1.72a1.5,1.5,0,1,0,0,3H4.59v2H1.72a1.5,1.5,0,0,0-1.5,1.5v36.6a1.5,1.5,0,0,0,1.5,1.5H9.46a7.75,7.75,0,0,0,15.41,0H76.24a7.75,7.75,0,0,0,15.41,0h6.63a1.5,1.5,0,0,0,1.5-1.5V63.12A3.75,3.75,0,0,0,96,59.36Zm-7.34,16.5a4.75,4.75,0,1,1-4.75-4.75A4.76,4.76,0,0,1,88.69,75.86ZM85.21,50.15l5.19,9.21H77.69l-.8-9.21Zm11.57,13V73.67H91.37a7.74,7.74,0,0,0-14.86,0H72.44V50.15h1.44L74.82,61a1.49,1.49,0,0,0,1.49,1.37H96A.76.76,0,0,1,96.78,63.12Zm-77.25-26v-2h8.94v2Zm11.94-2h8.94v2H31.47Zm11.94,0h3.82l-2.73,2H43.41Zm-35.82,0h8.94v2H7.59ZM21.92,75.86a4.75,4.75,0,1,1-4.75-4.75A4.76,4.76,0,0,1,21.92,75.86Zm9.48-2.93V67.54h5.39v5.39Zm23.35.74v-26h9.07v26Zm14.69-25v25H66.82V46.21a1.5,1.5,0,0,0-1.5-1.5H53.25a1.5,1.5,0,0,0-1.5,1.5V73.67h-12V66a1.5,1.5,0,0,0-1.5-1.5H29.9A1.5,1.5,0,0,0,28.4,66v7.63H24.6a7.74,7.74,0,0,0-14.86,0H3.22V40.07H45a1.51,1.51,0,0,0,.88-.28l6.48-4.7H83.8c4,0,7.17,6.58,8.11,9.83a2.25,2.25,0,0,1-.09,1.68c-.34.48-1.3.55-1.83.55h-19A1.5,1.5,0,0,0,69.44,48.65Z"></path> <path d="M85.44,41.45a1.5,1.5,0,0,0-1.5-1.5H70.45a1.5,1.5,0,0,0,0,3H83.94A1.5,1.5,0,0,0,85.44,41.45Z"></path> </g> </g></svg>                                                                          
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your </h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.rv-service') }}"><button class="tj-submit-btn fs-6">RV Transport Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4> <a class="title" href="{{ route('frontend.pages.services.rv-service') }}">
                                RV Transport Services </a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('img/dry-van.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="75px" height="75px" viewBox="0 0 796.2 796.201" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M228.709,562.066c-26.248,0-47.501,21.264-47.501,47.504c0,26.238,21.253,47.502,47.501,47.502 c26.225,0,47.506-21.264,47.506-47.502C276.215,583.33,254.934,562.066,228.709,562.066z"></path> <path d="M354.073,567.707c-26.225,0-47.504,21.269-47.504,47.505c0,26.235,21.279,47.503,47.504,47.503 c26.249,0,47.503-21.268,47.503-47.503C401.576,588.973,380.322,567.707,354.073,567.707z"></path> <path d="M669.721,562.066c-26.234,0-47.5,21.264-47.5,47.504c0,26.238,21.266,47.502,47.5,47.502 c26.24,0,47.506-21.264,47.506-47.502C717.227,583.33,695.961,562.066,669.721,562.066z"></path> <path d="M783.013,400.06c0-21.713-10.651-40.797-26.87-52.787c-10.906-8.064-24.297-12.998-38.916-12.998H605.943v12.998h-1.104 v166.076h-25.302h-27.485H126.426v82.501h27.493c6.456-35.471,37.445-62.372,74.79-62.372h125.364 c37.349,0,68.333,26.901,74.792,62.372H594.93c6.456-35.471,37.456-62.372,74.789-62.372c37.338,0,68.338,26.901,74.795,62.372 H796.2v-82.501h-13.188L783.013,400.06L783.013,400.06z M754.414,465.054h-84.693v-105.67h47.506c0,0,37.188,3.288,37.188,32.992 L754.414,465.054L754.414,465.054z"></path> <polygon points="566.872,488.016 592.174,488.016 592.174,321.939 592.174,133.486 0,133.486 0,488.016 113.762,488.016 539.385,488.016 "></polygon> </g> </g> </g></svg>                                                                        
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your Dry Van</h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.dryvan-service') }}"><button class="tj-submit-btn fs-6">Dry Van Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4><a class="title" href="{{ route('frontend.pages.services.dryvan-service') }}">
                                Dry Van Transport </a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('img/HAZMAT-BANNER.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80px" height="80px" viewBox="0 0 256 131" enable-background="new 0 0 256 131" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M216.625,87.554c-13.141-1.295-24.07,9.634-22.774,22.774c0.958,9.722,8.822,17.586,18.545,18.545 c13.141,1.296,24.07-9.634,22.775-22.775C234.212,96.376,226.348,88.512,216.625,87.554z M222.217,110.196 c-0.696,2.791-2.933,5.027-5.724,5.724c-5.868,1.465-11.154-3.821-9.689-9.689c0.697-2.791,2.933-5.027,5.724-5.724 C218.396,99.043,223.682,104.328,222.217,110.196z M252.203,88.636h-4.492V69.77c0-6.644-4.959-12.577-11.679-12.577h-21.561 c-0.453,0-0.988-0.057-1.29-0.359l-33.6-32.705c-1.51-1.51-3.347-2.795-5.537-2.87h-20.718c-1.954,0-3.538,1.584-3.538,3.538v72.145 c0,3.847,3.119,6.966,6.966,6.966h28.968c0.831,0,1.378-0.821,1.529-1.576c2.265-12.987,13.591-22.878,27.257-22.878 s24.992,9.891,27.257,22.878c0.151,0.83,0.621,1.576,1.452,1.576h2.695c4.304,0,8.085-3.69,8.085-7.919v-5.587 C254,89.571,253.109,88.636,252.203,88.636z M197.403,57.193H160.57c-0.988,0-1.797-0.808-1.797-1.797V32.039 c0-0.988,0.808-1.797,1.797-1.797h11.679c0.453,0,1.368,0.682,1.746,0.984l24.313,23.267 C199.214,55.626,198.838,57.193,197.403,57.193z M131.503,20.798h-12.365v35.151h-5.044V20.798h-10.512V2.022h-7.986v18.775h-8.683 v14.483H57.623v-5.044H81.87V4.431H60.217v16.367H32.544v35.151h-5.042V20.798H16.123C8.324,20.798,2,27.119,2,34.921v54.865 c0,7.801,6.324,14.123,14.123,14.123h0.623c-0.293,1.39-0.452,2.828-0.452,4.305c0,11.477,9.287,20.764,20.764,20.764 s20.764-9.287,20.764-20.764c0-1.477-0.159-2.916-0.452-4.305h6.112c-0.428,2.042-0.565,4.191-0.346,6.406 c0.958,9.722,8.822,17.586,18.545,18.545c13.141,1.295,24.07-9.634,22.774-22.775c-0.073-0.739-0.198-1.462-0.348-2.176h27.4 c7.799,0,14.123-6.322,14.123-14.123V34.921C145.626,27.119,139.302,20.798,131.503,20.798z M45.011,108.213 c0,4.359-3.594,7.953-7.953,7.953s-7.953-3.594-7.953-7.953c0-1.582,0.478-3.06,1.29-4.305h13.328 C44.533,105.153,45.011,106.631,45.011,108.213z M91.501,110.182c-0.696,2.791-2.933,5.027-5.724,5.724 c-5.868,1.465-11.154-3.821-9.689-9.689c0.207-0.83,0.565-1.602,1.019-2.309h13.352C91.598,105.661,92.078,107.873,91.501,110.182z"></path> </g></svg>                                                                       
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your Hazmat Transport</h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.hazmat-service') }}"><button class="tj-submit-btn fs-6">Hazmat Transport Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4><a class="title" href="{{ route('frontend.pages.services.hazmat-service') }}">
                                Hazmat Transport</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('img/ReeferTruck3.webp') }}" alt="Image" />
                    </div>
                    <div class="overlay">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center mb-3">
                                <svg fill="#ffffff" width="75px" height="75px" viewBox="0 -30.87 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 61.14" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style> <g> <path class="st0" d="M105.01,40.54c-5.7,0-10.3,4.63-10.3,10.3c0,5.7,4.63,10.3,10.3,10.3c5.7,0,10.3-4.63,10.3-10.3 C115.31,45.14,110.68,40.54,105.01,40.54L105.01,40.54z M61.86,41.46c-5.2,0-9.38,4.22-9.38,9.38c0,5.2,4.22,9.38,9.38,9.38 c5.2,0,9.38-4.22,9.38-9.38C71.24,45.64,67.02,41.46,61.86,41.46L61.86,41.46z M61.86,47.23c-1.99,0-3.61,1.62-3.61,3.61 s1.62,3.61,3.61,3.61c1.99,0,3.61-1.62,3.61-3.61S63.85,47.23,61.86,47.23L61.86,47.23z M24.11,41.46c-5.2,0-9.38,4.22-9.38,9.38 c0,5.2,4.22,9.38,9.38,9.38c5.2,0,9.38-4.22,9.38-9.38C33.5,45.64,29.28,41.46,24.11,41.46L24.11,41.46z M24.11,47.23 c-1.99,0-3.61,1.62-3.61,3.61s1.62,3.61,3.61,3.61c1.99,0,3.61-1.62,3.61-3.61S26.11,47.23,24.11,47.23L24.11,47.23z M47.37,53.53 H38.1v-3.01h9.27V53.53L47.37,53.53z M10.46,53.53H5.63c-1.55,0-2.95-0.66-3.96-1.71c-1.01-1.05-1.65-2.5-1.65-4.02V8.06 c0-2.44-0.36-4.44,1.62-6.42C2.66,0.63,4.05,0,5.6,0h73.32c1.55,0,2.95,0.63,3.96,1.65c1.01,1.01,1.65,2.41,1.65,3.96l0,7.26 l10.27,0.07l3.62,0.02l0,0c0.73,0.79,1.4,1.6,2.01,2.42c2.71,3.64,4.23,7.94,4.52,12.11l16.38,6.27l1.55,16.51h-5.01 c-2.31-18.03-25.03-15.84-25.73,0l-7.61,0v1.74c0,0.86-0.67,1.52-1.52,1.52l-6.69,0v-3.04h5.16V5.61c0-0.7-0.28-1.33-0.76-1.81 c-0.48-0.48-1.11-0.76-1.81-0.76H5.6c-0.7,0-1.33,0.29-1.81,0.76C2.76,4.77,3.07,6.43,3.07,7.7v40.1c0,0.73,0.32,1.43,0.79,1.93 c0.48,0.48,1.08,0.79,1.77,0.79h4.82V53.53L10.46,53.53z M94.46,17.89l-5.83-0.09v9.69h11.02C99.12,23.98,97.49,20.9,94.46,17.89 L94.46,17.89z M105.01,46.88c-2.19,0-3.96,1.77-3.96,3.96c0,2.19,1.77,3.96,3.96,3.96c2.19,0,3.96-1.77,3.96-3.96 C108.97,48.65,107.2,46.88,105.01,46.88L105.01,46.88z"></path> </g> </g></svg>                                                                         
                            </div>
                            <div class="col-12 text-center text-white mb-3">
                                <h4 class="overlay-title">Safely Transporting Your Reefer</h4>
                            </div>
                            <div class="col-12 text-center"><a class="fs-5" href="{{ route('frontend.pages.services.reefer-service') }}"><button class="tj-submit-btn fs-6">Reefer Transport Services<i class="fa fa-arrow-left"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-content-1">
                        <h4> <a class="title" href="{{ route('frontend.pages.services.reefer-service') }}">
                                Reefer Transport</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img loading="lazy" src="{{ asset('img/roro-banner.webp') }}" alt="Image" />
                    </div>
                    <div class="service-content-1">
                        <h4><a class="title" href="{{ route('frontend.pages.services.roro-service') }}">
                                Roro Shipping International</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2"> Why Choose Us</span>
                        <h2 class="title">We are the Future of Cargo & Logistics</h2>
                        <p class="desc">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all
                                its customers and seeks your trust in return of our services.
                        </p>
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
            <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">
                @include('partials.multi-form')
            </div>
        </div>
    </div>
</section>
<section class="tj-service-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape">What We Do</span>
                    <h2 class="title">Logistic & Transport</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                <a href="{{ route('vehicleTransportDetail') }}" class="service-link text-decoration-none">
                    <div class="tj-service-item"
                        data-bg-image="{{ asset('frontend/images/service/CAR-CARD.webp') }}">
                        <div class="icon-box">
                            <i class="fa-light fa-car-side fa-2xs"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="text-white">VEHICLE TRANSPORTATION</h4>
                            <p>Everything you need to know about 100% insured
                                and secured vehicle transportation.</p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-outline-secondary btn-sm ms-2 mt-2" href="{{ route('vehicleTransportDetail') }}" style="background: #8fc445;color: white;">
                                    Read More<i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                <a href="{{ route('heavy-transport-detail') }}" class="service-link text-decoration-none">
                    <div class="tj-service-item"
                        data-bg-image="{{ asset('frontend/images/service/HEAVY-CARD.webp') }}">
                        <div class="icon-box">
                            <i class="fa-light fa-tractor fa-2xs"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="text-white">HEAVY TRANSPORTATION</h4>
                            <p>Ship A1 is your trusted partner for safely and
                                efficiently handling the toughest transportation challenges.</p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-outline-secondary btn-sm ms-2 mt-2" href="{{ route('heavy-transport-detail') }}" style="background: #8fc445;color: white;">
                                    Read More<i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <a href="{{ route('freighttransport-detail') }}" class="service-link text-decoration-none">
                    <div class="tj-service-item"
                        data-bg-image="{{ asset('frontend/images/service/FREIGHT-CARD.webp') }}">
                        <div class="icon-box">
                            <i class="fa-light fa-truck fa-2xs"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="text-white">FREIGHT TRANSPORTATION</h4>
                            <p>Unlock the door to smooth freight logistic
                                transportation with Ship A1.</p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-outline-secondary btn-sm ms-2 mt-2" href="{{ route('freighttransport-detail') }}" style="background: #8fc445;color: white;">
                                    Read More<i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@include('partials.newsletter')
@endsection