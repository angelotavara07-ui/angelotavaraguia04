@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Editar Profesor
    </h1>

    <form action="{{ route('profesores.update', $profesor->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label text-light">Nombre</label>

            <input type="text"
                   name="nombre"
                   value="{{ $profesor->nombre }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Apellidos</label>

            <input type="text"
                   name="apellidos"
                   value="{{ $profesor->apellidos }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Especialidad</label>

            <input type="text"
                   name="especialidad"
                   value="{{ $profesor->especialidad }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <button class="btn btn-warning">
            Actualizar Profesor
        </button>

    </form>

</div>

@endsection