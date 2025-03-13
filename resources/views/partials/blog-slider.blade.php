<section class="tj-blog-section pt-4">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <span class="sub-title active-shape">Latest News</span>
                <h2 class="title">Latest News & Blog</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                @php
                    $blogUrl = $blog->type === 'old' ? route('blog.details.noSlug', $blog->slug_name) : route('blog.details', $blog->slug_name);
                    $postName = Str::limit($blog->post_name ?? '', 45, '...');
                    $postImage = $blog->post_image ? asset($blog->post_image) : '';
                @endphp
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="tj-blog-item">
                        <div class="tj-blog-image">
                            <a href="{{ $blogUrl }}" aria-label="Learn more about vehicle transportation Blog" title="Vehicle Transportation Blog">
                                <img loading="lazy" src="{{ $postImage }}" alt="Blog" />
                            </a>
                        </div>
                        <div class="blog-content-area">
                            <div class="blog-text-box">
                                <div class="blog-header">
                                    <h6>
                                        <a class="title-link fs-5" href="{{ $blogUrl }}" aria-label="Learn more about vehicle transportation Blog" title="Vehicle Transportation Blog">
                                            {{ $postName }}
                                        </a>
                                    </h6>
                                </div>
                                <div class="blog-button">
                                    <div class="blog-info d-flex justify-content-between">
                                        <span class="date-icon">
                                            <i class="fa-regular fa-calendar"></i> 
                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}
                                        </span>
                                        <a class="ms-3" href="{{ $blogUrl }}" aria-label="Learn more about vehicle transportation Blog" title="Vehicle Transportation Blog">
                                            Read More <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>