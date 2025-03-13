@extends('dashboard.admin.layouts.app')

@section('content')
<div class="container">
    <h2>Create Marketing Post</h2>
    <form action="{{ route('marketing.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="img_thumbnail" class="form-label">Thumbnail Image</label>
            <input type="file" name="img_thumbnail" class="form-control">
        </div>
        <div class="mb-3">
            <label for="img_one" class="form-label">Image One</label>
            <input type="file" name="img_one" class="form-control">
        </div>
        <div class="mb-3">
            <label for="heading_one" class="form-label">Heading One</label>
            <input type="text" name="heading_one" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="desc_one" class="form-label">Description One</label>
            <textarea name="desc_one" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="heading_two" class="form-label">Heading Two</label>
            <input type="text" name="heading_two" class="form-control">
        </div>
        <div class="mb-3">
            <label for="desc_two" class="form-label">Description Two</label>
            <textarea name="desc_two" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="img_two" class="form-label">Image One</label>
            <input type="file" name="img_two" class="form-control">
        </div>
        <div class="mb-3">
            <label for="heading_three" class="form-label">Heading Three</label>
            <input type="text" name="heading_three" class="form-control">
        </div>
        <div class="mb-3">
            <label for="desc_three" class="form-label">Description Three</label>
            <textarea name="desc_three" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="img_three" class="form-label">Image Two</label>
            <input type="file" name="img_three" class="form-control">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" id="category" name="category" required>
                <option value="">Select Category</option>
                <option value="Vehicle Transport">Vehicle Transport</option>
                <option value="Heavy Transport">Heavy Transport</option>
                <option value="Freight Transport">Freight Transport</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
