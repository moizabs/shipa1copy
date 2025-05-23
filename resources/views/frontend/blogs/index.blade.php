@extends('frontend.layouts.app')
@section('title', 'Blog')
@section('meta_description',
    'Discover insightful articles, expert tips on auto shipping and transportation at SHIPA1
    Blog. Stay informed and enhance your knowledge.')
@section('canonical')
    <link rel="canonical" href="{{ request()->url() }}{{ request()->getQueryString() ? '?' . request()->getQueryString() : '' }}">
@endsection
@section('content')
    <style>
        font {
            display: contents;
        }

        .name-bar {
            background-color: #6a9c2f;
            color: #ffffff;
            font-size: 18px;
            font-weight: 500;
            width: 90%;
            font-family: "DM Sans", sans-serif;
            border-top-right-radius: 15px;
            border-bottom-left-radius: 25px;

            clip-path: polygon(0 0, 95% 0, 100% 95%, 0% 100%);
        }

        .zoom-out-image {
            transition: transform 0.3s ease;
        }

        .zoom-out-image:hover {
            transform: scale(1.1);
        }

        .tj-details-header2 a:hover {
            color: #6a9c2f;
            text-decoration: none;
        }

        .tj-details-header2 a {
            color: #004056;
            transition: 0.4s;
            /* font-size: 18px; */
        }

        .btn{
          background-color: #fff;
          color: #6a9c2f;
          border: 1px solid #6a9c2f;
          border-radius: 25px;
          padding: 12px 25px;
          transition: 1s;

        }
        .btn:hover{
          background-color: #004056;
          color: #fff;
          border: 1px solid #004056;
        }
      
    </style>
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Blog</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span>Blog</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->
    <!--========== blog details Start ==============-->
    <section class="tj-blog-standard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-details-wrapper">
                        @foreach ($blogs as $blog)
                            <div class="tj-blog-item-three" data-sal="slide-left" data-sal-duration="800"
                                data-sal-delay="100">
                                <div class="tj-blog-image">
                                    <a
                                        @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}"
                                        @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                        <img loading="lazy" src="{{ asset($blog->post_image) }}" alt="Blog" />
                                        {{-- <img loading="lazy"
                                            src="https://upload.wikimedia.org/wikipedia/commons/f/f0/2018_Ford_F-150_XLT_Crew_Cab%2C_front_11.10.19.jpg"
                                            alt="Blog" /> --}}
                                    </a>
                                </div>
                                <div class="active-text w-100">
                                    <div class="name-bar w-50  py-2 pl-5">
                                        <span><i class="fa-light fa-user"></i></span> <span
                                            style="margin-right: 10px;">{{ $blog->user->name }}</span>
                                        <span><i class="flaticon-calendar"></i></span>
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                    </div>
                                </div>
                                <div class="tj-content-box" style="position:absolute; top:96%; ">
                                    <div class="blog-content-area ">
                                        <div class="blog-header">
                                            <h2>
                                                <a class="title-link fs-4  pt-3"
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                                    href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                    {{ $blog->post_name }}
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="blog-meta">
                                        </div>
                                    </div>
                                    <p style="color: rgb(136, 136, 136);">
                                        {!! Illuminate\Support\Str::limit($blog->meta_description, 200, '...') !!}
                                    </p>
                                   
                                         <a class="btn my-3"
                                            @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}"
                                            @else href="{{ route('blog.details', $blog->slug_name) }}" @endif
                                            > Read
                                            More<i class="fa-light fa-arrow-right"></i>
                                        </a>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details-sidebar-inner">
                        <div class="tj-sidebar-widget sidebar-post" data-sal="slide-left" data-sal-duration="800"
                            data-sal-delay="100">
                            <h5 class="details_title">Recent Blogs</h5>
                            @foreach ($recent_blogs as $blog)
                                <div class="tj-post-content">
                                    <div class="tj-auother-img">
                                        <a href="">
                                            <img loading="lazy" class="zoom-out-image" src="{{ asset($blog->post_image) }}" alt="Blog Image"></a>
                                            {{-- <img loading="lazy" class="zoom-out-image"
                                                src="https://media.ed.edmunds-media.com/ford/f-150/2025/oem/2025_ford_f-150_crew-cab-pickup_lariat_fq_oem_1_1600.jpg"
                                                alt="Blog Image"></a> --}}
                                    </div>
                                    <div class="tj-details-text">
                                        <div class="tj-details-header2">
                                            <span
                                                style="color: rgb(136, 136, 136); font-size: 13px">{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                            <h6 class="fs-6">
                                                <a
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                                        href="{{ route('blog.details', $blog->slug_name) }}" @endif
                                                        title="{{ $blog->post_name }}" >

                                                    {{-- {{ $blog->post_name }} --}}
                                                    {!! Illuminate\Support\Str::limit($blog->post_name, 50, '...') !!}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="tj-appointment-box" data-bg-image="/assets/images/service/service-15.jpg"
                            data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                            <div class="tj-appointment-bg" data-bg-image="/assets/images/banner/service_shape.png"></div>
                            <div class="tj-appointment-body">
                                <div class="appointment-percent text-center">
                                    <span class="text-uppercase fa-beat-fade">100% <br />Quality
                                    </span>
                                </div>
                                <div class="appointment-content text-center">
                                    <h4 class="title">Make An Appointment</h4>

                                    <a class="tel-link" href="tel:+18444744721">1 (844) 474-4721</a>
                                    <p>Perfectly simple & easy to distinguish free hour when power.</p>
                                    <div class="tj-theme-button">
                                        <a href="{{ route('quote.form.combine') }}" target="_blank">
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
                {{ $blogs->links('partials.custom_pagination') }}
            </div>
        </div>
    </section>
    @include('partials.newsletter')
@endsection
