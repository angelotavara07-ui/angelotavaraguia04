@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Editar Curso
    </h1>

    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label text-light">Nombre Curso</label>

            <input type="text"
                   name="nombre_curso"
                   value="{{ $curso->nombre_curso }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Código Curso</label>

            <input type="text"
                   name="codigo_curso"
                   value="{{ $curso->codigo_curso }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Créditos</label>

            <input type="number"
                   name="creditos"
                   value="{{ $curso->creditos }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Descripción</label>

            <textarea name="descripcion"
                      class="form-control bg-dark text-light border-secondary">{{ $curso->descripcion }}</textarea>
        </div>

        <button class="btn btn-warning">
            Actualizar Curso
        </button>

    </form>

</div>

@endsection