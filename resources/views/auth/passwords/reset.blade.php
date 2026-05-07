@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">

        <div class="col-md-7 col-lg-6">

            <div class="card bg-dark border-0 shadow-lg rounded-4 text-light">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <h1 class="fw-bold">
                            Reset Password
                        </h1>

                        <p class="text-secondary">
                            Create a new password for your account.
                        </p>

                    </div>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        {{-- EMAIL --}}
                        <div class="mb-4">

                            <label for="email" class="form-label">
                                Email Address
                            </label>

                            <input id="email"
                                   type="email"
                                   class="form-control bg-black text-light border-secondary @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ $email ?? old('email') }}"
                                   required
                                   autocomplete="email"
                                   autofocus>

                            @error('email')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        {{-- PASSWORD --}}
                        <div class="mb-4">

                            <label for="password" class="form-label">
                                Password
                            </label>

                            <input id="password"
                                   type="password"
                                   class="form-control bg-black text-light border-secondary @error('password') is-invalid @enderror"
                                   name="password"
                                   required
                                   autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        {{-- CONFIRM --}}
                        <div class="mb-4">

                            <label for="password-confirm" class="form-label">
                                Confirm Password
                            </label>

                            <input id="password-confirm"
                                   type="password"
                                   class="form-control bg-black text-light border-secondary"
                                   name="password_confirmation"
                                   required
                                   autocomplete="new-password">

                        </div>

                        <div class="d-grid">

                            <button type="submit"
                                    class="btn btn-danger rounded-3 py-2 fw-semibold">

                                Reset Password

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection