@extends('dashboard.admin.layouts.app')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Blog</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="post_name">Post Name</label>
                    <input type="text" class="form-control" id="post_name" name="post_name" value="{{ $blog->post_name }}" required>
                </div>

                <div class="form-group">
                    <label for="slug_name">Slug Name</label>
                    <input type="text" class="form-control" id="slug_name" name="slug_name" value="{{ $blog->slug_name }}">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select name="category" class="form-control" required>
                        <option value="">Select Category</option>
                        <option value="Marketing" {{ $blog->category == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                        <option value="Blogs" {{ $blog->category == 'Blogs' ? 'selected' : '' }}>Blogs</option>
                        <option value="Trailer & Trucks" {{ $blog->category == 'Trailer & Trucks' ? 'selected' : '' }}>Trailer & Trucks</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="post_short_description">Short Description</label>
                    <textarea class="form-control" id="post_short_description" name="post_short_description" rows="3">{{ $blog->post_short_description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="post_description">Blog Long Description</label>
                    <textarea class="summernote form-control" id="post_description" name="post_description" rows="5">{{ $blog->post_description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $blog->meta_title }}">
                </div>

                <div class="form-group">
                    <label for="canonical_url">Canonical URL</label>
                    <input type="text" class="form-control" id="canonical_url" name="canonical_url" value="{{ $blog->canonical_url }}">
                </div>

                <div class="form-group">
                    <label for="meta_keyword">Meta Keyword</label>
                    <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="{{ $blog->meta_keyword }}">
                </div>

                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ $blog->meta_description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</div>
    <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection
