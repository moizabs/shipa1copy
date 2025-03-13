@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Nationwide Transport</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('nationwide-transports.create') }}" class="m-0 btn btn-primary">Add New Nationwide Transport</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transports as $transport)
                                <tr>
                                    <td>{{ $transport->name }}</td>
                                    <td>{{ $transport->category }}</td>
                                    <td>
                                        @if ($transport->status == 1)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('nationwide-transports.edit', $transport->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('nationwide-transports.destroy', $transport->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this transport?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
