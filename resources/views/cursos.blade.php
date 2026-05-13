@extends('layouts.dashboard')

@section('dashboard-content')

<style>

    .container{
        padding:40px;
    }

    h1{
        margin-bottom:25px;
        color:white;
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
        background:#1e293b;
        border-radius:12px;
        overflow:hidden;
    }

    th, td{
        padding:14px;
        text-align:left;
    }

    th{
        background:#0f172a;
        color:#cbd5e1;
    }

    tr{
        border-bottom:1px solid rgba(255,255,255,0.05);
    }

    tr:hover{
        background:#334155;
    }

    td{
        color:#f1f5f9;
    }

    .actions{
        display:flex;
        gap:10px;
    }

</style>

<div class="container">

    <div class="top-actions">

        <h1>Tabla de Cursos</h1>

        <a href="#" class="btn btn-add">
            + Agregar Curso
        </a>

    </div>

    <table>

        <thead>

            <tr>
                <th>ID</th>
                <th>Nombre Curso</th>
                <th>Código</th>
                <th>Créditos</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($cursos as $curso)

                <tr>

                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nombre_curso }}</td>
                    <td>{{ $curso->codigo_curso }}</td>
                    <td>{{ $curso->creditos }}</td>
                    <td>{{ $curso->descripcion }}</td>

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
                        No hay cursos registrados
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection