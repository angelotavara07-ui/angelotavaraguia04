@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-6 col-lg-5">

            <div class="card border-0 shadow-lg bg-dark text-light rounded-4">
                <div class="card-body p-5">

                    <div class="text-center mb-4">
                        <h1 class="fw-bold mb-2">Welcome Back</h1>
                        <p class="text-secondary">
                            Login to continue using the platform.
                        </p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                            <label for="password" class="form-label text-light">
                                Password
                            </label>

                            <input id="password"
                                   type="password"
                                   class="form-control bg-black text-light border-secondary @error('password') is-invalid @enderror"
                                   name="password"
                                   required
                                   autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- REMEMBER --}}
                        <div class="mb-4 form-check">
                            <input class="form-check-input"
                                   type="checkbox"
                                   name="remember"
                                   id="remember"
                                   {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label text-secondary" for="remember">
                                Remember Me
                            </label>
                        </div>

                        {{-- BUTTON --}}
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-danger rounded-3 fw-semibold py-2">
                                Login
                            </button>
                        </div>
                                                {{-- DIVIDER --}}
                        <div class="d-flex align-items-center my-4">
                            <hr class="flex-grow-1 border-secondary">
                            <span class="px-3 text-secondary small">OR</span>
                            <hr class="flex-grow-1 border-secondary">
                        </div>

                        {{-- GOOGLE LOGIN --}}
                        <div class="d-grid mb-3">
                            <a href="{{ url('/login/google') }}"
                            class="btn btn-outline-light rounded-3 fw-semibold py-2 d-flex align-items-center justify-content-center gap-2">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 48 48">
                                    <path fill="#EA4335"
                                        d="M24 9.5c3.54 0 6.69 1.22 9.18 3.6l6.85-6.85C35.91 2.38 30.36 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                    <path fill="#4285F4"
                                        d="M46.5 24.5c0-1.64-.15-3.21-.43-4.72H24v8.94h12.69c-.55 2.96-2.22 5.47-4.72 7.15l7.3 5.67C43.91 37.18 46.5 31.41 46.5 24.5z"/>
                                    <path fill="#FBBC05"
                                        d="M10.54 28.41A14.48 14.48 0 0 1 9.5 24c0-1.53.27-3 .76-4.41l-7.98-6.19A23.94 23.94 0 0 0 0 24c0 3.87.93 7.53 2.58 10.78l7.96-6.37z"/>
                                    <path fill="#34A853"
                                        d="M24 48c6.48 0 11.91-2.13 15.88-5.81l-7.3-5.67c-2.03 1.36-4.64 2.16-8.58 2.16-6.21 0-11.48-4.2-13.37-9.87l-7.96 6.37C6.59 42.55 14.67 48 24 48z"/>
                                </svg>

                                Continue with Google
                            </a>
                        </div>
                        <div class="d-grid mb-3">
                            <a href="{{ url('login/github') }}"
                            class="btn btn-dark rounded-3 fw-semibold py-2">
                                Continue with GitHub
                            </a>
                        </div>
                        {{-- FORGOT PASSWORD --}}
                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="text-decoration-none text-secondary"
                                   href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        @endif
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection