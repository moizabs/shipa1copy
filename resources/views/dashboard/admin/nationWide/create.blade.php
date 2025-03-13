@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add New Nation Wide Transport</h1>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('nationwide-transports.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" class="form-control" type="text" name="name" required />
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="Vehicle">Vehicle</option>
                                        <option value="Heavy">Heavy</option>
                                        <option value="Freight">Freight</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <hr class="my-4">
                                <h4 class="text-gray-800">Details</h4>
                                <div id="details">
                                    <div class="detail mb-3 p-3 border rounded">
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input class="form-control" type="text" name="details[0][heading]"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="details[0][description]" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control image-input" type="file" name="details[0][image]" />
                                            <img class="img-preview mt-2" src="" alt="Image preview" style="display: none; max-width: 100%; height: auto;" />
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="add-detail" class="btn btn-outline-secondary btn-sm">Add
                                    Detail</button>
                                <hr class="my-4">
                                <button type="submit" class="btn btn-primary">Add Nation Wide Transport</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#add-detail').on('click', function() {
                var detailCount = $('#details .detail').length;
                var newDetail = `
                    <div class="detail mb-3 p-3 border rounded">
                        <div class="form-group">
                            <label>Heading</label>
                            <input class="form-control" type="text" name="details[${detailCount}][heading]" required />
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="details[${detailCount}][description]" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control image-input" type="file" name="details[${detailCount}][image]" />
                            <img class="img-preview mt-2" src="" alt="Image preview" style="display: none; max-width: 100%; height: auto;" />
                        </div>
                        <button type="button" class="btn btn-danger btn-sm remove-detail">Remove Detail</button>
                    </div>
                `;
                $('#details').append(newDetail);
            });

            $(document).on('click', '.remove-detail', function() {
                $(this).closest('.detail').remove();
            });

            // Image preview functionality
            $(document).on('change', '.image-input', function() {
                var file = this.files[0];
                var reader = new FileReader();
                var preview = $(this).siblings('.img-preview');

                reader.onload = function(e) {
                    preview.attr('src', e.target.result);
                    preview.show();
                };

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.hide();
                }
            });
        });
    </script>
@endsection
