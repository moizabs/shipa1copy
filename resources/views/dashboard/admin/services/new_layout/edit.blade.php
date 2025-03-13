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
                                <h1 class="h4 text-gray-900 mb-4">Edit Service (New Layout)</h1>
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
                            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="layout_type" value="new">
                                <div class="form-group">
                                    <label for="name">Service Name</label>
                                    <input id="name" class="form-control" type="text" name="name" value="{{ $service->name }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="display_name">Service Display Name</label>
                                    <input id="display_name" class="form-control" type="text" name="display_name" value="{{ $service->display_name }}" required />
                                </div>
                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <input class="form-control" type="file" name="banner_image" placeholder="Banner Image" />
                                    @if ($service->banner_image)
                                        <img src="{{ asset('storage/' . $service->banner_image) }}" alt="Banner Image" width="100">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <input class="form-control" type="file" name="image2" placeholder="Image 2" />
                                    @if ($service->image2)
                                        <img src="{{ asset('storage/' . $service->image2) }}" alt="Image 2" width="100">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <input class="form-control" type="file" name="image3" placeholder="Image 3" />
                                    @if ($service->image3)
                                        <img src="{{ asset('storage/' . $service->image3) }}" alt="Image 3" width="100">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Heading One</label>
                                    <input class="form-control" type="text" name="heading_one" value="{{ $service->heading_one }}" placeholder="Heading One" />
                                </div>
                                <div class="form-group">
                                    <label>Text To Show</label>
                                    <textarea class="form-control" name="text_to_show" rows="4" placeholder="Text To Show">{{ $service->text_to_show }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description One</label>
                                    <textarea class="form-control" name="desc_one" rows="4" placeholder="Description One">{{ $service->desc_one }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Heading Two</label>
                                    <input class="form-control" type="text" name="heading_two" value="{{ $service->heading_two }}" placeholder="Heading Two" />
                                </div>
                                <div class="form-group">
                                    <label>Descriptions of Heading Two</label>
                                    <textarea class="form-control" name="desc_two_one" rows="4" placeholder="Description Two">{{ $service->desc_two_one }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Heading Three</label>
                                    <input class="form-control" type="text" name="heading_three" value="{{ $service->heading_three }}" placeholder="Heading Three" />
                                </div>
                                <div class="form-group">
                                    <label>Descriptions of Heading Three</label>
                                    <textarea class="form-control" name="desc_three" rows="4" placeholder="Description Three">{{ $service->desc_three }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Heading Four</label>
                                    <input class="form-control" type="text" name="heading_four" value="{{ $service->heading_four }}" placeholder="Heading Four" />
                                </div>
                                <div class="form-group">
                                    <label>Descriptions of Heading Four</label>
                                    <textarea class="form-control" name="desc_four" rows="4" placeholder="Description Four">{{ $service->desc_four }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="" disabled>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $service->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Heading five</label>
                                    <input class="form-control" type="text" name="heading_five" value="{{ $service->heading_five }}" placeholder="Heading five" />
                                </div>
                                <div class="form-group">
                                    <label>Heading six</label>
                                    <input class="form-control" type="text" name="heading_six" value="{{ $service->heading_six }}" placeholder="Heading six" />
                                </div>
                                <div class="form-group">
                                    <label>Descriptions of Heading six</label>
                                    <textarea class="form-control" name="desc_six" rows="4" placeholder="Description six">{{ $service->desc_six }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Heading seven</label>
                                    <input class="form-control" type="text" name="heading_seven" value="{{ $service->heading_seven }}" placeholder="Heading seven" />
                                </div>
                                <div class="form-group">
                                    <label>Descriptions of Heading seven</label>
                                    <textarea class="form-control" name="desc_seven" rows="4" placeholder="Description seven">{{ $service->desc_seven }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Heading eight</label>
                                    <input class="form-control" type="text" name="heading_eight" value="{{ $service->heading_eight }}" placeholder="Heading eight" />
                                </div>
                                <div class="form-group">
                                    <label>Descriptions of Heading eight</label>
                                    <textarea class="form-control" name="desc_eight" rows="4" placeholder="Description eight">{{ $service->desc_eight }}</textarea>
                                </div>
                                <h1>FAQs</h1>
                                <div class="form-group">
                                    <label>FAQs Image</label>
                                    <input class="form-control" type="file" name="faq_image" placeholder="Faq Image" />
                                    @if ($service->faq_image)
                                        <img src="{{ asset('storage/' . $service->faq_image) }}" alt="FAQ Image" width="100">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>FAQ Q1</label>
                                    <input class="form-control" type="text" name="faq_q1" value="{{ $service->faq_q1 }}" placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label>Ans of FAQ Q1</label>
                                    <textarea class="form-control" name="ans_faq1" rows="4" placeholder="">{{ $service->ans_faq1 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>FAQ Q2</label>
                                    <input class="form-control" type="text" name="faq_q2" value="{{ $service->faq_q2 }}" placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label>Ans of FAQ Q2</label>
                                    <textarea class="form-control" name="ans_faq2" rows="4" placeholder="">{{ $service->ans_faq2 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>FAQ Q3</label>
                                    <input class="form-control" type="text" name="faq_q3" value="{{ $service->faq_q3 }}" placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label>Ans of FAQ Q3</label>
                                    <textarea class="form-control" name="ans_faq3" rows="4" placeholder="">{{ $service->ans_faq3 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $service->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Service</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
