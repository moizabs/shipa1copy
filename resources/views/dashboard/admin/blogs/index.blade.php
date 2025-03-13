@extends('dashboard.admin.layouts.app')

@section('content')
    <style>
        /* Stylish Heading */
        /* .page-heading {
                font-size: 2rem;
                color: #062E39;
                font-weight: bold;
                text-align: center;
                margin-bottom: 1.5rem;
                padding: 1rem;
                background: linear-gradient(to right, #062E39, #8FC445);
                color: white;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .page-heading span {
                display: block;
                font-size: 1.2rem;
                color: #e2e6ea;
            } */

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

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-center text-gray-80">Blogs<!-- <span>Manage your blog posts</span> --></h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- <h6 class="m-0 font-weight-bold text-primary">All Blogs</h6> --}}
                <a href="{{ route('blogs.create') }}" class="m-0 btn btn-primary btn-icon">
                    <i class="fas fa-pencil-alt"></i> Add Blog
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th nowrap><i class="fas fa-user"></i> Name</th>
                                <th nowrap><i class="fas fa-align-left"></i> Description</th>
                                <th nowrap><i class="fas fa-list"></i> Category</th>
                                <th nowrap><i class="fas fa-eye"></i> Preview</th>
                                <th nowrap><i class="fas fa-image"></i> Image</th>
                                <th nowrap><i class="fas fa-toggle-on"></i> Status</th>
                                <th nowrap><i class="fas fa-cogs"></i> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr class="table-row">
                                    <td>{{ $blog->post_name }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($blog->post_short_description, 50, '...') }}</td>
                                    <td>{{ $blog->category }}</td>
                                    <td nowrap>
                                        <a class="title" target="_blank"
                                            @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                        href="{{ route('blog.details', $blog->slug_name) }}" @endif>Open
                                            Link</a>
                                    </td>
                                    <td>
                                        <img src="{{ asset($blog->post_image) }}" alt="{{ $blog->post_name }}"
                                            class="img-thumbnail">
                                    </td>
                                    <td class="text-center">
                                        @if ($blog->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td nowrap>
                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm"
                                            title="Edit">
                                            <i class="fas fa-edit pr-1"></i>Edit
                                        </a>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this blog?')">
                                                <i class="fas fa-trash-alt pr-1"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-5">
                        {{ $blogs->links('pagination.simple-number') }}
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
