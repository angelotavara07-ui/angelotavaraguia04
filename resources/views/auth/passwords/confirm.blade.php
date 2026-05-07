@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">

        <div class="col-md-6 col-lg-5">

            <div class="card bg-dark border-0 shadow-lg rounded-4 text-light">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <h1 class="fw-bold">
                            Confirm Password
                        </h1>

                        <p class="text-secondary">
                            Please confirm your password before continuing.
                        </p>

                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="mb-4">

                            <label for="password" class="form-label">
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

                        <div class="d-grid mb-3">

                            <button type="submit"
                                    class="btn btn-danger rounded-3 py-2 fw-semibold">

                                Confirm Password

                            </button>

                        </div>

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