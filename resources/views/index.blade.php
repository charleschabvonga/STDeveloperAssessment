@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('List of Users') }}</div>
                    <div class="card-body">
                        <button
                            type="button"
                            class="btn btn-info mb-3"
                            data-toggle="modal"
                            data-target="#addModal">
                            Create User
                        </button>
                        <button
                            type="button"
                            class="delete-row btn btn-danger mb-3 ml-3">Delete checked Row(s)</button>
                        <table class="table table-hover table-sm table-responsive-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile Number</th>
                                <th scope="col">Actions</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td><input type="checkbox" name="record"></td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}">
                                            <button
                                                type="button"
                                                class="btn
                                                btn-primary
                                                float-left
                                                mr-2">
                                                Edit
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Create User Modal -->
                        <div class="col-md-12 modal fade" id="addModal" role="dialog">
                            <div class="card modal-dialog">
                                <div class="modal-content">
                                    <div class="card-header modal-header">
                                        {{ __('Create Users') }}
                                        <button
                                            type="button"
                                            class="close"
                                            data-dismiss="modal">
                                            &times;
                                        </button>
                                    </div>
                                    <div class="card-body modal-body">
                                        <form method="POST"
                                              action="{{ route('users.store') }}"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group row">
                                                <label
                                                    for="username"
                                                    class="col-md-4
                                                    col-form-label
                                                    text-md-right">
                                                    {{ __('Username') }}
                                                </label>
                                                <div class="col-md-6">
                                                    <input
                                                        id="username"
                                                        type="text"
                                                        class="form-control
                                                        @error('username') is-invalid @enderror"
                                                        name="username"
                                                        value="{{ old('username') }}"
                                                        placeholder="Enter the user's username"
                                                        autocomplete="username"
                                                        required
                                                        autofocus>
                                                    @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label
                                                    for="email"
                                                    class="col-md-4
                                                    col-form-label
                                                    text-md-right">
                                                    {{ __('Email') }}
                                                </label>
                                                <div class="col-md-6">
                                                    <input
                                                        id="email"
                                                        type="email"
                                                        class="form-control
                                                        @error('email') is-invalid @enderror"
                                                        name="email"
                                                        value="{{ old('email') }}"
                                                        placeholder="Enter the user's email"
                                                        autocomplete="email"
                                                        required
                                                        autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label
                                                    for="password"
                                                    class="col-md-4
                                                    col-form-label
                                                    text-md-right">
                                                    {{ __('Password') }}
                                                </label>
                                                <div class="col-md-6">
                                                    <input
                                                        id="password"
                                                        type="password"
                                                        class="form-control
                                                        @error('password') is-invalid @enderror"
                                                        name="password"
                                                        value="{{ old('password') }}"
                                                        placeholder="Enter the user's password"
                                                        autocomplete="password"
                                                        required
                                                        autofocus>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label
                                                    for="password-confirm"
                                                    class="col-md-4
                                                    col-form-label
                                                    text-md-right">
                                                    {{ __('Confirm Password') }}
                                                </label>
                                                <div class="col-md-6">
                                                    <input
                                                        id="password-confirm"
                                                        type="password"
                                                        class="form-control"
                                                        placeholder="Enter confirmation password"
                                                        name="password_confirmation"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label
                                                    for="mobile"
                                                    class="col-md-4
                                                    col-form-label
                                                    text-md-right">
                                                    {{ __('Mobile') }}
                                                </label>
                                                <div class="col-md-6">
                                                    <input
                                                        id="mobile"
                                                        type="text"
                                                        class="form-control
                                                        @error('mobile') is-invalid @enderror"
                                                        name="mobile"
                                                        value="{{ old('mobile') }}"
                                                        placeholder="Enter the user's mobile"
                                                        autocomplete="mobile"
                                                        required
                                                        autofocus>
                                                    @error('mobile')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label
                                                    for="name"
                                                    class="col-md-4
                                                    col-form-label
                                                    text-md-right">
                                                    {{ __('Name') }}
                                                </label>
                                                <div class="col-md-6">
                                                    <input
                                                        id="name"
                                                        type="text"
                                                        class="form-control
                                                        @error('name') is-invalid @enderror"
                                                        name="name"
                                                        value="{{ old('name') }}"
                                                        placeholder="Enter the user's name"
                                                        autocomplete="name"
                                                        required
                                                        autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label
                                                    for="surname"
                                                    class="col-md-4
                                                    col-form-label
                                                    text-md-right">
                                                    {{ __('Surname') }}
                                                </label>
                                                <div class="col-md-6">
                                                    <input
                                                        id="surname"
                                                        type="text"
                                                        class="form-control
                                                        @error('surname') is-invalid @enderror"
                                                        name="surname"
                                                        value="{{ old('surname') }}"
                                                        placeholder="Enter the user's surname"
                                                        autocomplete="surname"
                                                        required
                                                        autofocus>
                                                    @error('surname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label
                                                    for="job_title"
                                                    class="col-md-4
                                                    col-form-label
                                                    text-md-right">
                                                    {{ __('JobTitle') }}
                                                </label>
                                                <div class="col-md-6">
                                                    <input
                                                        id="job_title"
                                                        type="text"
                                                        class="form-control
                                                        @error('job_title') is-invalid @enderror"
                                                        name="job_title"
                                                        value="{{ old('job_title') }}"
                                                        placeholder="Enter the user's job_title"
                                                        autocomplete="job_title"
                                                        required
                                                        autofocus>
                                                    @error('job_title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label
                                                    for="bio"
                                                    class="col-md-4
                                                    col-form-label
                                                    text-md-right">
                                                    {{ __('Bio') }}
                                                </label>
                                                <div class="col-md-6">
                                                    <input
                                                        id="bio"
                                                        type="text"
                                                        class="form-control
                                                        @error('bio') is-invalid @enderror"
                                                        name="bio"
                                                        value="{{ old('bio') }}"
                                                        placeholder="Enter the user's bio"
                                                        autocomplete="bio"
                                                        required
                                                        autofocus>
                                                    @error('bio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary">
                                                    Save
                                                </button>
                                                <button
                                                    type="button"
                                                    class="btn btn-outline-primary"
                                                    data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    Optional code to make use of some jquery. It deletes row with checkbox checked.--}}
    <script>
        $(document).ready(function(){
            // Find and remove selected table rows
            $(".delete-row").click(function(){
                $("table tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });
            });
        });
    </script>
@endsection
