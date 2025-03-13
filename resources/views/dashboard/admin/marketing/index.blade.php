@extends('dashboard.admin.layouts.app')
@section('content')
<style>
    .table th,
    .table td {
        vertical-align: middle;
    }
    .table th i {
        margin-right: 8px;
    }
    .btn-icon i {
        transition: transform 0.3s ease;
    }
    .btn-icon:hover i {
        transform: scale(1.2);
    }
    .table-row:hover {
        background-color: #f2f2f2;
    }
    .btn-sm i {
        margin-right: 5px;
    }
    .img-thumbnail {
        max-width: 150px;
        max-height: 100px;
        border: none;
    }
    .badge-success {
        background-color: #28a745;
    }
    .badge-secondary {
        background-color: #6c757d;
    }
</style>
<div class="container-fluid p-0">
    <div class="card shadow mb-4">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Marketing Posts</h6>
            <a href="{{ route('marketing.create') }}" class="m-0 btn btn-primary btn-icon">
                <i class="fas fa-pencil-alt"></i> Add New Marketing Post
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive table-striped">
                    <thead class="text-nowrap">
                        <tr>
                            <th>ID</th>
                            <th>Slug</th>
                            <th>Image One</th>
                            <th>Heading One</th>
                            <th>Description One</th>
                            <th>Heading Two</th>
                            <th>Description Two</th>
                            <th>Image Two</th>
                            <th>Heading Three</th>
                            <th>Description Three</th>
                            <th>Image Three</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($marketings as $marketing)
                            <tr>
                                <td>{{ $marketing->id }}</td>
                                <td>{{ $marketing->slug }}</td>
                                <td>
                                    @if($marketing->img_one)
                                        <img src="{{ asset($marketing->img_one) }}" width="50" class="rounded">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $marketing->heading_one }}</td>
                                <td>{{ $marketing->desc_one }}</td>
                                <td>{{ $marketing->heading_two }}</td>
                                <td>{{ $marketing->desc_two }}</td>
                                <td>
                                    @if($marketing->img_two)
                                        <img src="{{ asset($marketing->img_two) }}" width="50" class="rounded">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $marketing->heading_three }}</td>
                                <td>{{ $marketing->desc_three }}</td>
                                <td>
                                    @if($marketing->img_three)
                                        <img src="{{ asset($marketing->img_three) }}" width="50" class="rounded">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $marketing->category }}</td>
                                <td>
                                    <span class="badge {{ $marketing->status ? 'bg-success' : 'bg-danger' }}">
                                        {{ $marketing->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('marketing.edit', $marketing->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('marketing.destroy', $marketing->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="14" class="text-center">No Marketing Posts Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $marketings->links() }}
        </div>
    </div>
</div>
@endsection