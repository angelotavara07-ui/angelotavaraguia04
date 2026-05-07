@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card bg-dark border-0 shadow-lg rounded-4 text-light">

                <div class="card-body p-5">

                    <div class="mb-4">

                        <h1 class="fw-bold">
                            Dashboard
                        </h1>

                        <p class="text-secondary mb-0">
                            Welcome back, {{ Auth::user()->name }}.
                        </p>

                    </div>

                    @if (session('status'))

                        <div class="alert alert-success border-0 rounded-3">

                            {{ session('status') }}

                        </div>

                    @endif

                    <div class="row g-4">

                        <div class="col-md-4">

                            <div class="p-4 rounded-4 bg-black border border-secondary h-100">

                                <h5 class="fw-bold text-danger">
                                    Profile
                                </h5>

                                <p class="text-secondary mb-0">
                                    Manage your account information.
                                </p>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="p-4 rounded-4 bg-black border border-secondary h-100">

                                <h5 class="fw-bold text-danger">
                                    Security
                                </h5>

                                <p class="text-secondary mb-0">
                                    Update your credentials securely.
                                </p>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="p-4 rounded-4 bg-black border border-secondary h-100">

                                <h5 class="fw-bold text-danger">
                                    Activity
                                </h5>

                                <p class="text-secondary mb-0">
                                    Track your recent actions.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection