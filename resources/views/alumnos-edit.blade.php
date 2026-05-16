@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Editar Alumno
    </h1>

    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label class="form-label text-light">
                Nombre
            </label>

            <input type="text"
                   name="nombre"
                   value="{{ $alumno->nombre }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Apellidos
            </label>

            <input type="text"
                   name="apellidos"
                   value="{{ $alumno->apellidos }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Fecha Nacimiento
            </label>

            <input type="date"
                   name="fecha_nacimiento"
                   value="{{ $alumno->fecha_nacimiento }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                DNI
            </label>

            <input type="text"
                   name="dni"
                   value="{{ $alumno->dni }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Dirección
            </label>

            <input type="text"
                   name="direccion"
                   value="{{ $alumno->direccion }}"
                   class="form-control bg-dark text-light border-secondary">

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Teléfono
            </label>

            <input type="text"
                   name="telefono"
                   value="{{ $alumno->telefono }}"
                   class="form-control bg-dark text-light border-secondary">

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Email
            </label>

            <input type="email"
                   name="email"
                   value="{{ $alumno->email }}"
                   class="form-control bg-dark text-light border-secondary">

        </div>

        <div class="mb-4">

            <label class="form-label text-light">
                Estado Matrícula
            </label>

            <select name="estado_matricula"
                    class="form-control bg-dark text-light border-secondary">

                <option value="matriculado"
                    {{ $alumno->estado_matricula == 'matriculado' ? 'selected' : '' }}>

                    Matriculado

                </option>

                <option value="inactivo"
                    {{ $alumno->estado_matricula == 'inactivo' ? 'selected' : '' }}>

                    Inactivo

                </option>

            </select>

        </div>

        <button class="btn btn-warning">
            Actualizar Alumno
        </button>

    </form>

</div>

@endsection