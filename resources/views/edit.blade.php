@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit User') }} {{ $user->name }}</div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user) }}" method="POST">
                            @csrf

                            {{ method_field('PUT') }}
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
                                        value="{{ $user->username }}"
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
                                        value="{{ $user->email }}"
                                        required
                                        autofocus
                                        disabled>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
                                        value="{{ $user->mobile }}"
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
                                        value="{{ $user->name }}"
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
                                        value="{{ $user->surname }}"
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
                                        value="{{ $user->job_title }}"
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
                                        value="{{ $user->bio }}"
                                        required
                                        autofocus>
                                    @error('bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
