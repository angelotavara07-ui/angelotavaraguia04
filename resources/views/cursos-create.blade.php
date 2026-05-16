@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Agregar Curso
    </h1>

    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label text-light">Nombre Curso</label>

            <input type="text"
                   name="nombre_curso"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Código Curso</label>

            <input type="text"
                   name="codigo_curso"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Créditos</label>

            <input type="number"
                   name="creditos"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Descripción</label>

            <textarea name="descripcion"
                      class="form-control bg-dark text-light border-secondary"></textarea>
        </div>

        <button class="btn btn-danger">
            Guardar Curso
        </button>

    </form>

</div>

@endsection