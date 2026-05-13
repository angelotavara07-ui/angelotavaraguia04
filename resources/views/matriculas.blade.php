@extends('layouts.dashboard')

@section('dashboard-content')

<style>

    .container{
        padding:40px;
        max-width:1450px;
        margin:auto;
    }

    h1{
        margin-bottom:25px;
    }

    .top-actions{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:20px;
    }

    .btn{
        padding:10px 18px;
        border-radius:10px;
        text-decoration:none;
        font-size:14px;
        transition:0.3s;
        border:none;
        cursor:pointer;
    }

    .btn-add{
        background:#ff2d20;
        color:white;
    }

    .btn-add:hover{
        background:#ff4d42;
    }

    .btn-edit{
        background:#facc15;
        color:black;
    }

    .btn-delete{
        background:#dc2626;
        color:white;
    }

    table{
        width:100%;
        border-collapse:collapse;
        background:#181818;
        border-radius:12px;
        overflow:hidden;
    }

    th, td{
        padding:14px;
        text-align:left;
    }

    th{
        background:#222;
        color:#ccc;
        font-size:14px;
    }

    tr{
        border-bottom:1px solid rgba(255,255,255,0.05);
    }

    tr:hover{
        background:#222;
    }

    td{
        color:#ddd;
        font-size:14px;
    }

    .actions{
        display:flex;
        gap:10px;
    }

    .estado{
        padding:6px 10px;
        border-radius:8px;
        font-size:12px;
        font-weight:bold;
    }

    .aprobado{
        background:#14532d;
        color:#86efac;
    }

    .reprobado{
        background:#7f1d1d;
        color:#fca5a5;
    }

    .cursando{
        background:#78350f;
        color:#fde68a;
    }

</style>

<div class="container">

    <div class="top-actions">

        <h1>Tabla de Matrículas</h1>

        <a href="#" class="btn btn-add">
            + Agregar Matrícula
        </a>

    </div>

    <table>

        <thead>

            <tr>
                <th>ID</th>
                <th>Alumno</th>
                <th>Curso</th>
                <th>Profesor</th>
                <th>Horario</th>
                <th>Semestre</th>
                <th>Fecha</th>
                <th>Nota</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($matriculas as $matricula)

                <tr>

                    <td>
                        {{ $matricula->id_matricula }}
                    </td>

                    <td>
                        {{ $matricula->alumno->nombre ?? 'Sin alumno' }}
                        {{ $matricula->alumno->apellidos ?? '' }}
                    </td>

                    <td>
                        {{ $matricula->curso->nombre_curso ?? 'Sin curso' }}
                    </td>

                    <td>
                        {{ $matricula->profesor?->nombre }}
                        {{ $matricula->profesor?->apellidos }}
                    </td>

                    <td>
                        {{ $matricula->horario?->dia_semana ?? 'Sin horario' }}
                        @if($matricula->horario)
                            -
                            {{ \Carbon\Carbon::parse($matricula->horario->hora_inicio)->format('H:i') }}
                        @endif
                    </td>

                    <td>
                        {{ $matricula->semestre }}
                    </td>

                    <td>
                        {{ \Carbon\Carbon::parse($matricula->fecha_matricula)->format('d/m/Y') }}
                    </td>

                    <td>
                        {{ $matricula->nota_final ?? 'Sin nota' }}
                    </td>

                    <td>

                        <span class="estado {{ $matricula->estado_matricula }}">
                            {{ ucfirst($matricula->estado_matricula) }}
                        </span>

                    </td>

                    <td class="actions">

                        <a href="#" class="btn btn-edit">
                            Editar
                        </a>

                        <form action="#" method="POST">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-delete">
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="10">
                        No hay matrículas registradas
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection