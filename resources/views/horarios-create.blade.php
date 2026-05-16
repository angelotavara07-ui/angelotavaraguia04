@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Agregar Horario
    </h1>

    <form action="{{ route('horarios.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label class="form-label text-light">
                Curso
            </label>

            <select name="id_curso"
                    class="form-control bg-dark text-light border-secondary"
                    required>

                <option value="">
                    Seleccione un curso
                </option>

                @foreach($cursos as $curso)

                    <option value="{{ $curso->id }}">
                        {{ $curso->nombre_curso }}
                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Día de Semana
            </label>

            <input type="text"
                   name="dia_semana"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Hora Inicio
            </label>

            <input type="time"
                   name="hora_inicio"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Hora Fin
            </label>

            <input type="time"
                   name="hora_fin"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <button class="btn btn-danger">
            Guardar Horario
        </button>

    </form>

</div>

@endsection