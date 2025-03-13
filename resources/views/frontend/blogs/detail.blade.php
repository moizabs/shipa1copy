@extends('frontend.layouts.app')
@section('title')
{{-- {{ $blog->meta_title }} --}}
{{ $blog->meta_title ? $blog->meta_title : 'Opps Title is Not Availabe' }}
@endsection
@section('meta_description')
{{ $blog->meta_description }}
@endsection
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
                            </div>
                            <div class="active-text">
                                <span class="p-2">
                                    <span><i class="fa-light fa-user"></i></span> <span style="margin-right: 10px;">{{ $blog->user->name }}</span>
                                    <span><i class="flaticon-calendar"></i></span> <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                </span>
                                
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
                                            <img loading="lazy" src="{{ asset($blog->post_image) }}" alt="Blog" /></a>
                                    </div>
                                    <div class="tj-details-text">
                                        <div class="tj-details-header">
                                            <h6>
                                                <a
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                    {{ $blog->post_name }}
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