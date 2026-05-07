@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-7 col-lg-6">

            <div class="card border-0 shadow-lg bg-dark text-light rounded-4">
                <div class="card-body p-5">

                    <div class="text-center mb-4">
                        <h1 class="fw-bold mb-2">Create Account</h1>
                        <p class="text-secondary">
                            Register to start using the system.
                        </p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- NAME --}}
                        <div class="mb-4">
                            <label for="name" class="form-label text-light">
                                Name
                            </label>

                            <input id="name"
                                   type="text"
                                   class="form-control bg-black text-light border-secondary @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ old('name') }}"
                                   required
                                   autocomplete="name"
                                   autofocus>

                            @error('name')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- EMAIL --}}
                        <div class="mb-4">
                            <label for="email" class="form-label text-light">
                                Email Address
                            </label>

                            <input id="email"
                                   type="email"
                                   class="form-control bg-black text-light border-secondary @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- PASSWORD --}}
                        <div class="mb-4">
                            <label for="password" class="form-label text-light">
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

                        {{-- CONFIRM PASSWORD --}}
                        <div class="mb-4">
                            <label for="password-confirm" class="form-label text-light">
                                Confirm Password
                            </label>

                            <input id="password-confirm"
                                   type="password"
                                   class="form-control bg-black text-light border-secondary"
                                   name="password_confirmation"
                                   required
                                   autocomplete="new-password">
                        </div>

                        {{-- BUTTON --}}
                        <div class="d-grid">
                            <button type="submit"
                                    class="btn btn-danger rounded-3 fw-semibold py-2">
                                Register
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection