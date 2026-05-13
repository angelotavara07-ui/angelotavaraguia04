@extends('layouts.dashboard')

@section('dashboard-content')

<style>

    .container{
        padding:40px;
        max-width:1200px;
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
        font-size:14px;
        color:#ddd;
    }

    .actions{
        display:flex;
        gap:10px;
    }

</style>

<div class="container">

    <div class="top-actions">

        <h1>Tabla de Horarios</h1>

        <a href="#" class="btn btn-add">
            + Agregar Horario
        </a>

    </div>

    <table>

        <thead>

            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Día</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($horarios as $horario)

                <tr>

                    <td>
                        {{ $horario->id_horario }}
                    </td>

                    <td>
                        {{ $horario->curso->nombre_curso ?? 'Sin curso' }}
                    </td>

                    <td>
                        {{ $horario->dia_semana }}
                    </td>

                    <td>
                        {{ \Carbon\Carbon::parse($horario->hora_inicio)->format('H:i') }}
                    </td>

                    <td>
                        {{ \Carbon\Carbon::parse($horario->hora_fin)->format('H:i') }}
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

                    <td colspan="6">
                        No hay horarios registrados
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection