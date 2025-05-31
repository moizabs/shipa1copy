@extends('frontend.layouts.app')
@section('title')
    {{-- {{ $blog->meta_title }} --}}
    {{ $blog->meta_title ? $blog->meta_title : 'Understand Auto Transport Types with ShipA1' }}
@endsection
@section('meta_description')
    {{ $blog->meta_description }}
@endsection
@section('canonical')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection
@section('content')

{{ $blog->blog_schema }}

    <style>
        font {
            display: contents;
        }

        .name-bar2 {
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
    </style>
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">{{ $blog->post_name }}</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
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
    <section class="tj-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-details-wrapper">
                        <div class="tj-blog-item-three">
                            <div class="tj-blog-image">
                                <img loading="lazy" src="{{ asset($blog->post_image) }}" alt="Blog" />
                                {{-- <img loading="lazy"
                                    src="https://media.ed.edmunds-media.com/ford/f-150/2025/oem/2025_ford_f-150_crew-cab-pickup_lariat_fq_oem_1_1600.jpg"
                                    alt="Blog" /> --}}
                                <div class="active-text w-100">
                                    <div class="name-bar2 w-50  py-2 pl-5">
                                        <span><i class="fa-light fa-user"></i></span> <span
                                            style="margin-right: 10px;">{{ $blog->user->name }}</span>
                                        <span><i class="flaticon-calendar"></i></span>
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                    </div>

                                </div>
                            </div>

                            <div class="blog-content-area">
                                <div class="blog-header">
                                    <h3>
                                        {{-- <a class="title-link" href="blog-details.html"> --}}
                                        {{-- {{ $blog->post_name }} --}}
                                        {{-- </a> --}}
                                    </h3>
                                </div>
                                <div class="blog-meta">
                                </div>
                            </div>
                            <p>
                                {!! $blog->post_description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details-sidebar-inner">
                        <div class="tj-sidebar-widget sidebar-post">
                            <h5 class="details_title">Recent Blogs</h5>
                            @foreach ($recent_blogs as $blog)
                                <div class="tj-post-content">
                                    <div class="tj-auother-img">
                                        <a
                                            @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                            <img loading="lazy" class="zoom-out-image" src="{{ asset($blog->post_image) }}" alt="Blog" /></a>
                                            {{-- <img loading="lazy" class="zoom-out-image" src="https://media.ed.edmunds-media.com/ford/f-150/2025/oem/2025_ford_f-150_crew-cab-pickup_lariat_fq_oem_1_1600.jpg" alt="Blog" /></a> --}}
                                    </div>
                                    <div class="tj-details-text">
                                        <div class="tj-details-header2">
                                              <span
                                                style="color: rgb(136, 136, 136);font-size: 13px">{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                            <h6>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== blog details End ==============-->
    <!--=========== Newsletter Section Start =========-->
    @include('partials.newsletter')
    <!--=========== Newsletter Section End =========-->
@endsection
