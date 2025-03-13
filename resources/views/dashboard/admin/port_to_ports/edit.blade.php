@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Port to Port</h1>
                            </div>
                            <form action="{{ route('port-to-ports.update', $portToPort->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Pickup Country</label>
                                    <input class="form-control" type="text" name="pickup_country"
                                        placeholder="Pickup Country"
                                        value="{{ old('pickup_country', $portToPort->pickup_country) }}" />
                                </div>
                                <div class="form-group">
                                    <label>Pickup Zipcode</label>
                                    <input class="form-control" type="text" name="pickup_zipcode" id="pickup_zipcode"
                                        placeholder="Pickup Zipcode"
                                        value="{{ old('pickup_zipcode', $portToPort->pickup_zipcode) }}"
                                        onkeyup="getZipcodeSuggestions('pickup_zipcode')" required />
                                    <ul id="pickup_zipcode_suggestions" class="list-group"></ul>
                                </div>
                                <div class="form-group">
                                    <label>Pickup Latitude</label>
                                    <input class="form-control" type="number" step="any" name="pickup_latitude"
                                        placeholder="Pickup Latitude"
                                        value="{{ old('pickup_latitude', $portToPort->pickup_latitude) }}" />
                                </div>
                                <div class="form-group">
                                    <label>Pickup Longitude</label>
                                    <input class="form-control" type="number" step="any" name="pickup_longitude"
                                        placeholder="Pickup Longitude"
                                        value="{{ old('pickup_longitude', $portToPort->pickup_longitude) }}" />
                                </div>
                                <div class="form-group">
                                    <label>Delivery Country</label>
                                    <input class="form-control" type="text" name="delivery_country"
                                        placeholder="Delivery Country"
                                        value="{{ old('delivery_country', $portToPort->delivery_country) }}" />
                                </div>
                                <div class="form-group">
                                    <label>Delivery Zipcode</label>
                                    <input class="form-control" type="text" name="delivery_zipcode" id="delivery_zipcode"
                                        placeholder="Delivery Zipcode"
                                        value="{{ old('delivery_zipcode', $portToPort->delivery_zipcode) }}"
                                        onkeyup="getZipcodeSuggestions('delivery_zipcode')" required />
                                    <ul id="delivery_zipcode_suggestions" class="list-group"></ul>
                                </div>
                                <div class="form-group">
                                    <label>Delivery Latitude</label>
                                    <input class="form-control" type="number" step="any" name="delivery_latitude"
                                        placeholder="Delivery Latitude"
                                        value="{{ old('delivery_latitude', $portToPort->delivery_latitude) }}" />
                                </div>
                                <div class="form-group">
                                    <label>Delivery Longitude</label>
                                    <input class="form-control" type="number" step="any" name="delivery_longitude"
                                        placeholder="Delivery Longitude"
                                        value="{{ old('delivery_longitude', $portToPort->delivery_longitude) }}" />
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="form-control" type="number" step="0.01" name="price"
                                        placeholder="Price" value="{{ old('price', $portToPort->price) }}" required />
                                </div>
                                <button type="submit" class="btn btn-primary">Update Port to Port</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('extraScript')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getZipcodeSuggestions(fieldId) {
            let input = $('#' + fieldId).val();
            let suggestionsList = $('#' + fieldId + '_suggestions');
            if (input.length < 1) {
                suggestionsList.empty();
                return;
            }

            $.ajax({
                url: '/zipcode-suggestions',
                type: 'GET',
                data: {
                    input: input
                },
                success: function(data) {
                    suggestionsList.empty();
                    data.forEach(function(zipcode) {
                        let li = $('<li></li>').addClass('list-group-item list-group-item-action').text(
                            zipcode);
                        li.on('click', function() {
                            $('#' + fieldId).val(zipcode);
                            suggestionsList.empty();
                        });
                        suggestionsList.append(li);
                    });
                },
                error: function(error) {
                    console.error('Error fetching zipcode suggestions:', error);
                }
            });
        }
    </script>
@endsection
