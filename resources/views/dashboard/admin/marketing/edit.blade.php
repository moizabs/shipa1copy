@extends('dashboard.admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Marketing Post</h2>
    <form action="{{ route('marketing.update', $marketing->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $marketing->slug }}" required>
        </div>
        <div class="mb-3">
            <label for="img_thumbnail" class="form-label">Thumbnail Image</label>
            <input type="file" name="img_thumbnail" class="form-control">
            @if($marketing->img_thumbnail)
                <img src="{{ asset($marketing->img_thumbnail) }}" width="50">
            @endif
        </div>
        <div class="mb-3">
            <label for="img_one" class="form-label">Image One</label>
            <input type="file" name="img_one" class="form-control">
            @if($marketing->img_one)
                <img src="{{ asset($marketing->img_one) }}" width="50">
            @endif
        </div>
        <div class="mb-3">
            <label for="heading_one" class="form-label">Heading One</label>
            <input type="text" name="heading_one" class="form-control" value="{{ $marketing->heading_one }}" required>
        </div>
        <div class="mb-3">
            <label for="desc_one" class="form-label">Description One</label>
            <textarea name="desc_one" class="form-control" required>{{ $marketing->desc_one }}</textarea>
        </div>
        <div class="mb-3">
            <label for="heading_two" class="form-label">Heading Two</label>
            <input type="text" name="heading_two" class="form-control" value="{{ $marketing->heading_two }}">
        </div>
        <div class="mb-3">
            <label for="desc_two" class="form-label">Description Two</label>
            <textarea name="desc_two" class="form-control">{{ $marketing->desc_two }}</textarea>
        </div>
        <div class="mb-3">
            <label for="img_two" class="form-label">Image One</label>
            <input type="file" name="img_two" class="form-control">
            @if($marketing->img_two)
                <img src="{{ asset($marketing->img_two) }}" width="50">
            @endif
        </div>
        <div class="mb-3">
            <label for="heading_three" class="form-label">Heading Three</label>
            <input type="text" name="heading_three" class="form-control" value="{{ $marketing->heading_three }}">
        </div>
        <div class="mb-3">
            <label for="desc_three" class="form-label">Description Three</label>
            <textarea name="desc_three" class="form-control">{{ $marketing->desc_three }}</textarea>
        </div>
        <div class="mb-3">
            <label for="img_three" class="form-label">Image Two</label>
            <input type="file" name="img_three" class="form-control">
            @if($marketing->img_three)
                <img src="{{ asset($marketing->img_three) }}" width="50">
            @endif
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" id="category" name="category" required>
                <option value="">Select Category</option>
                <option value="Vehicle Transport" {{ $marketing->category == 'Vehicle Transport' ? 'selected' : '' }}>Vehicle Transport</option>
                <option value="Heavy Transport" {{ $marketing->category == 'Heavy Transport' ? 'selected' : '' }}>Heavy Transport</option>
                <option value="Freight Transport" {{ $marketing->category == 'Freight Transport' ? 'selected' : '' }}>Freight Transport</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control" required>
                <option value="1" {{ $marketing->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $marketing->status == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
