@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add New User</h1>
                            </div>
                            <form method="POST" action="{{ route('users.store') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="role"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control @error('role') is-invalid @enderror" name="role"
                                            required>
                                            <option value="user" selected>User</option>
                                            <option value="admin">Admin</option>
                                            <option value="manager">Manager</option>
                                            <option value="blog">Blog Posting</option>
                                        </select>
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="text-center mt-5">
                                    <h1 class="h4 text-gray-900 mb-4">Permissions</h1>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="checkbox" id="emp_access_ship_all6"
                                                    class="emp_access_ship_all"><label class="ml-2"
                                                    for="emp_access_ship_all6">All Options</label>
                                            </div>
                                            <br>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access1" value="1"><label class="ml-2"
                                                    for="sidebar_access1">Users Management</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access2" value="2"><label class="ml-2"
                                                    for="sidebar_access2">Blogs</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access3" value="3"><label class="ml-2"
                                                    for="sidebar_access3">Edit Frontend NavBar</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access4" value="4"><label class="ml-2"
                                                    for="sidebar_access4">Services</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access5" value="5"><label class="ml-2"
                                                    for="sidebar_access5">Service Categories</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access6" value="6"><label class="ml-2"
                                                    for="sidebar_access6">Reviews</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access7" value="7"><label class="ml-2"
                                                    for="sidebar_access7">Add Site Reviews</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access8" value="8"><label class="ml-2"
                                                    for="sidebar_access8">FAQs</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access9" value="9"><label class="ml-2"
                                                    for="sidebar_access9">Contact Messages</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access10" value="10"><label class="ml-2"
                                                    for="sidebar_access10">Newsletter Emails</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="sidebar_access[]"
                                                    id="sidebar_access11" value="11"><label class="ml-2"
                                                    for="sidebar_access11">Port To Ports</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
