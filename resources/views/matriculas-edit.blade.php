@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Editar Matrícula
    </h1>

    <form action="{{ route('matriculas.update', $matricula->id_matricula) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label class="form-label text-light">
                Alumno
            </label>

            <select name="id_alumno"
                    class="form-control bg-dark text-light border-secondary"
                    required>

                @foreach($alumnos as $alumno)

                    <option value="{{ $alumno->id }}"
                        {{ $matricula->id_alumno == $alumno->id ? 'selected' : '' }}>

                        {{ $alumno->nombre }}
                        {{ $alumno->apellidos }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Curso
            </label>

            <select name="id_curso"
                    class="form-control bg-dark text-light border-secondary"
                    required>

                @foreach($cursos as $curso)

                    <option value="{{ $curso->id }}"
                        {{ $matricula->id_curso == $curso->id ? 'selected' : '' }}>

                        {{ $curso->nombre_curso }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Profesor
            </label>

            <select name="id_profesor"
                    class="form-control bg-dark text-light border-secondary">

                <option value="">
                    Sin profesor
                </option>

                @foreach($profesores as $profesor)

                    <option value="{{ $profesor->id }}"
                        {{ $matricula->id_profesor == $profesor->id ? 'selected' : '' }}>

                        {{ $profesor->nombre }}
                        {{ $profesor->apellidos }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Horario
            </label>

            <select name="id_horario"
                    class="form-control bg-dark text-light border-secondary">

                <option value="">
                    Sin horario
                </option>

                @foreach($horarios as $horario)

                    <option value="{{ $horario->id_horario }}"
                        {{ $matricula->id_horario == $horario->id_horario ? 'selected' : '' }}>

                        {{ $horario->curso->nombre_curso }}
                        -
                        {{ $horario->dia_semana }}
                        -
                        {{ \Carbon\Carbon::parse($horario->hora_inicio)->format('H:i') }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Semestre
            </label>

            <input type="text"
                   name="semestre"
                   value="{{ $matricula->semestre }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Fecha Matrícula
            </label>

            <input type="date"
                   name="fecha_matricula"
                   value="{{ $matricula->fecha_matricula }}"
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Nota Final
            </label>

            <input type="number"
                   step="0.01"
                   name="nota_final"
                   value="{{ $matricula->nota_final }}"
                   class="form-control bg-dark text-light border-secondary">

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Estado
            </label>

            <select name="estado_matricula"
                    class="form-control bg-dark text-light border-secondary"
                    required>

                <option value="cursando"
                    {{ $matricula->estado_matricula == 'cursando' ? 'selected' : '' }}>

                    Cursando

                </option>

                <option value="aprobado"
                    {{ $matricula->estado_matricula == 'aprobado' ? 'selected' : '' }}>

                    Aprobado

                </option>

                <option value="reprobado"
                    {{ $matricula->estado_matricula == 'reprobado' ? 'selected' : '' }}>

                    Reprobado

                </option>

            </select>

        </div>

        <button class="btn btn-warning">
            Actualizar Matrícula
        </button>

    </form>

</div>

@endsection