@extends('layouts.dashboard')

@section('dashboard-content')

<div class="container py-4">

    <h1 class="text-light mb-4">
        Agregar Matrícula
    </h1>

    <form action="{{ route('matriculas.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label class="form-label text-light">
                Alumno
            </label>

            <select name="id_alumno"
                    class="form-control bg-dark text-light border-secondary"
                    required>

                @foreach($alumnos as $alumno)

                    <option value="{{ $alumno->id }}">
                        {{ $alumno->nombre }} {{ $alumno->apellidos }}
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

                    <option value="{{ $curso->id }}">
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

                    <option value="{{ $profesor->id }}">
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

                    <option value="{{ $horario->id_horario }}">

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
                   class="form-control bg-dark text-light border-secondary"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Fecha Matrícula
            </label>

            <input type="date"
                   name="fecha_matricula"
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
                   class="form-control bg-dark text-light border-secondary">

        </div>

        <div class="mb-3">

            <label class="form-label text-light">
                Estado
            </label>

            <select name="estado_matricula"
                    class="form-control bg-dark text-light border-secondary"
                    required>

                <option value="cursando">
                    Cursando
                </option>

                <option value="aprobado">
                    Aprobado
                </option>

                <option value="reprobado">
                    Reprobado
                </option>

            </select>

        </div>

        <button class="btn btn-danger">
            Guardar Matrícula
        </button>

    </form>

</div>

@endsection