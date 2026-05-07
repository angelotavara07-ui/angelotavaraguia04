@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center align-items-center" style="min-height: 75vh;">

        <div class="col-md-7 col-lg-6">

            <div class="card bg-dark border-0 shadow-lg rounded-4 text-light">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <h1 class="fw-bold mb-3">
                            Verify Your Email
                        </h1>

                        <p class="text-secondary">
                            Please verify your email address before continuing.
                        </p>

                    </div>

                    @if (session('resent'))

                        <div class="alert alert-success rounded-3 border-0">

                            A fresh verification link has been sent to your email address.

                        </div>

                    @endif

                    <div class="mb-4 text-secondary">

                        Before proceeding, please check your email for a verification link.

                    </div>

                    <form method="POST"
                          action="{{ route('verification.resend') }}">

                        @csrf

                        <div class="d-grid">

                            <button type="submit"
                                    class="btn btn-danger rounded-3 py-2 fw-semibold">

                                Resend Verification Email

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection