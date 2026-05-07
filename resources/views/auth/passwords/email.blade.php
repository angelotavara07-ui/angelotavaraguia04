@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">

        <div class="col-md-6 col-lg-5">

            <div class="card bg-dark border-0 shadow-lg rounded-4 text-light">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <h1 class="fw-bold">
                            Forgot Password
                        </h1>

                        <p class="text-secondary">
                            We'll send you a reset link.
                        </p>

                    </div>

                    @if (session('status'))

                        <div class="alert alert-success rounded-3 border-0">

                            {{ session('status') }}

                        </div>

                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-4">

                            <label for="email" class="form-label">
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

                        <div class="d-grid">

                            <button type="submit"
                                    class="btn btn-danger rounded-3 py-2 fw-semibold">

                                Send Reset Link

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection