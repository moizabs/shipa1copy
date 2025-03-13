@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Port to Ports</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('port-to-ports.create') }}" class="m-0 btn btn-primary">Create New Port to Port</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pickup Country</th>
                                <th>Pickup Zipcode</th>
                                <th>Pickup Latitude</th>
                                <th>Pickup Longitude</th>
                                <th>Delivery Country</th>
                                <th>Delivery Zipcode</th>
                                <th>Delivery Latitude</th>
                                <th>Delivery Longitude</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portToPorts as $portToPort)
                                <tr>
                                    <td>{{ $portToPort->id }}</td>
                                    <td>{{ $portToPort->pickup_country }}</td>
                                    <td>{{ $portToPort->pickup_zipcode }}</td>
                                    <td>{{ $portToPort->pickup_latitude }}</td>
                                    <td>{{ $portToPort->pickup_longitude }}</td>
                                    <td>{{ $portToPort->delivery_country }}</td>
                                    <td>{{ $portToPort->delivery_zipcode }}</td>
                                    <td>{{ $portToPort->delivery_latitude }}</td>
                                    <td>{{ $portToPort->delivery_longitude }}</td>
                                    <td>{{ $portToPort->price }}</td>
                                    <td nowrap>
    <a href="{{ route('port-to-ports.edit', $portToPort->id) }}" class="btn btn-primary btn-sm">
        <i class="fas fa-edit"></i> Edit
    </a>
    <form action="{{ route('port-to-ports.destroy', $portToPort->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this port to port?')">
            <i class="fas fa-trash-alt"></i> Delete
        </button>
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
