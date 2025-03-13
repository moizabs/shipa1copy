@extends('frontend.layouts.app')
@section('title', 'Blog')
@section('meta_description', 'Discover insightful articles, expert tips on auto shipping and transportation at SHIPA1 Blog. Stay informed and enhance your knowledge.')
@section('content')
    <style>
        font {
        display: contents;
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
                            <div class="tj-blog-item-three"  data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                                <div class="tj-blog-image">
                                    <a
                                        @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}"
                                        @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                        <img loading="lazy" src="{{ asset($blog->post_image) }}" alt="Blog" />
                                    </a>
                                </div>
                                <div class="active-text">
                                    <span class="p-2">
                                        <span><i class="fa-light fa-user"></i></span> <span
                                            style="margin-right: 10px;">{{ $blog->user->name }}</span>
                                        <span><i class="flaticon-calendar"></i></span>
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                    </span>
                                </div>
                                <div class="tj-content-box">
                                    <div class="blog-content-area">
                                        <div class="blog-header">
                                            <h2>
                                                <a class="title-link fs-3"
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                                    href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                    {{ $blog->post_name }}
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="blog-meta">
                                        </div>
                                    </div>
                                    <p>
                                        {!! Illuminate\Support\Str::limit($blog->post_short_description, 200, '...') !!}
                                    </p>
                                    <div class="read-more">
                                        <a
                                            @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}"
                                            @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                             More About {{ $blog->slug_name }} <i class="fa-light fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details-sidebar-inner">
                        <div class="tj-sidebar-widget sidebar-post"   data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                            <h5 class="details_title">Recent Blogs</h5>
                            @foreach ($recent_blogs as $blog)
                                <div class="tj-post-content">
                                    <div class="tj-auother-img">
                                        <a href="">
                                            <img loading="lazy" src="{{ asset($blog->post_image) }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="tj-details-text">
                                        <div class="tj-details-header">
                                            <h6>
                                                <a
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                                        href="{{ route('blog.details', $blog->slug_name) }}" @endif>

                                                    {{ $blog->post_name }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="tj-appointment-box" data-bg-image="/assets/images/service/service-15.jpg"   data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
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