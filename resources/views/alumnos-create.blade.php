@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Registrar Alumno
    </h1>

    <form action="{{ route('alumnos.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label class="form-label text-light">
                Nombre
            </label>

            <input type="text"
                   name="nombre"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Apellidos
            </label>

            <input type="text"
                   name="apellidos"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Fecha Nacimiento
            </label>

            <input type="date"
                   name="fecha_nacimiento"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                DNI
            </label>

            <input type="text"
                   name="dni"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Dirección
            </label>

            <input type="text"
                   name="direccion"
                   class="form-control bg-dark text-light border-secondary">

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Teléfono
            </label>

            <input type="text"
                   name="telefono"
                   class="form-control bg-dark text-light border-secondary">

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Email
            </label>

            <input type="email"
                   name="email"
                   class="form-control bg-dark text-light border-secondary">

        </div>

        <div class="mb-4">

            <label class="form-label text-light">
                Estado Matrícula
            </label>

            <select name="estado_matricula"
                    class="form-control bg-dark text-light border-secondary">

                <option value="matriculado">
                    Matriculado
                </option>

                <option value="inactivo">
                    Inactivo
                </option>

            </select>

        </div>

        <button class="btn btn-danger">
            Guardar Alumno
        </button>

    </form>

</div>

@endsection