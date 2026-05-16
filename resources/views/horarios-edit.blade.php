@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Editar Horario
    </h1>

    <form action="{{ route('horarios.update', $horario->id_horario) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label class="form-label text-light">
                Curso
            </label>

            <select name="id_curso"
                    class="form-control bg-dark text-light border-secondary"
                    required>

                @foreach($cursos as $curso)

                    <option value="{{ $curso->id }}"
                        {{ $horario->id_curso == $curso->id ? 'selected' : '' }}>

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
                   value="{{ $horario->dia_semana }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Hora Inicio
            </label>

            <input type="time"
                   name="hora_inicio"
                   value="{{ $horario->hora_inicio }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Hora Fin
            </label>

            <input type="time"
                   name="hora_fin"
                   value="{{ $horario->hora_fin }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <button class="btn btn-warning">
            Actualizar Horario
        </button>

    </form>

</div>

@endsection