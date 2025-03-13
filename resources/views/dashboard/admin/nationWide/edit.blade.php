@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit NationWide Transport</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('nationwide-transports.index') }}" class="m-0 btn btn-primary">Back to List</a>
            </div>
            <div class="card-body">
                <form action="{{ route('nationwide-transports.update', $nationWideTransport->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name', $nationWideTransport->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status"
                            required>
                            <option value="1" {{ old('status', $nationWideTransport->status) == 1 ? 'selected' : '' }}>
                                Active</option>
                            <option value="0" {{ old('status', $nationWideTransport->status) == 0 ? 'selected' : '' }}>
                                Inactive</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" class="form-control" required>
                            <option value="Vehicle"
                                {{ old('category', $nationWideTransport->category) == 'Vehicle' ? 'selected' : '' }}>Vehicle
                            </option>
                            <option value="Heavy"
                                {{ old('category', $nationWideTransport->category) == 'Heavy' ? 'selected' : '' }}>Heavy
                            </option>
                            <option value="Freight"
                                {{ old('category', $nationWideTransport->category) == 'Freight' ? 'selected' : '' }}>Freight
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Details</label>
                        <div id="details-container">
                            @foreach ($nationWideTransport->details as $index => $detail)
                                <div class="detail-container mb-3">
                                    <input type="hidden" name="details[{{ $index }}][id]"
                                        value="{{ $detail->id }}">
                                    <button type="button" class="btn btn-danger remove-btn">Remove</button>
                                    <div class="form-group">
                                        <label for="details[{{ $index }}][heading]">Heading</label>
                                        <input type="text" class="form-control"
                                            name="details[{{ $index }}][heading]" value="{{ $detail->heading }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="details[{{ $index }}][description]">Description</label>
                                        <textarea class="form-control" name="details[{{ $index }}][description]" rows="3" required>{{ $detail->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="details[{{ $index }}][image]">Image</label>
                                        <input type="file" class="form-control"
                                            name="details[{{ $index }}][image]">
                                        @if ($detail->image)
                                            <img src="{{ asset($detail->image) }}" alt="Image" class="img-preview mt-2"
                                                style="max-height: 100px; max-width: 100%; height: auto; display: block;">
                                        @endif
                                    </div>
                                    <hr>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <button type="button" id="add-detail" class="btn btn-outline-secondary btn-sm">Add
                        Detail</button>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Display existing images on page load
            $('.img-preview').each(function() {
                if ($(this).attr('src')) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.detail-container').remove();
            });

            $(document).on('click', '#add-detail', function() {
                var detailCount = $('#details-container').length;
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
                $('#details-container').append(newDetail);
            });

            $(document).on('click', '.remove-detail', function() {
                $(this).closest('.detail').remove();
            });

            // Image preview functionality for file inputs
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
