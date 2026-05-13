@extends('layouts.dashboard')

@section('dashboard-content')

<div class="welcome-card">

    <h2>
        Welcome back, {{ Auth::user()->name }}
    </h2>

    <p>
        Manage your educational system quickly and efficiently.
    </p>

    <div class="cards">

        <div class="mini-card">
            <h5>Students</h5>
            <p>Manage enrolled students.</p>
        </div>

        <div class="mini-card">
            <h5>Courses</h5>
            <p>View and manage courses.</p>
        </div>

        <div class="mini-card">
            <h5>Schedules</h5>
            <p>Organize class schedules.</p>
        </div>

    </div>

</div>

@endsection