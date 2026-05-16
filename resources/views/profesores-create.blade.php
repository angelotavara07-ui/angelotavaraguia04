@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Agregar Profesor
    </h1>

    <form action="{{ route('profesores.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label text-light">Nombre</label>

            <input type="text"
                   name="nombre"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Apellidos</label>

            <input type="text"
                   name="apellidos"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Especialidad</label>

            <input type="text"
                   name="especialidad"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <button class="btn btn-danger">
            Guardar Profesor
        </button>

    </form>

</div>

@endsection