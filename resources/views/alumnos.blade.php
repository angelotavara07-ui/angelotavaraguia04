@extends('layouts.dashboard')

@section('dashboard-content')

<style>

    .container{
        padding:40px;
        max-width:1400px;
        margin:auto;
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
        font-weight:600;
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

    .btn-edit:hover{
        opacity:.9;
    }

    .btn-delete{
        background:#dc2626;
        color:white;
    }

    .btn-delete:hover{
        background:#ef4444;
    }

    table{
        width:100%;
        border-collapse:collapse;
        background:#181818;
        border-radius:16px;
        overflow:hidden;
    }

    th, td{
        padding:16px;
        text-align:left;
    }

    th{
        background:#222;
        color:#cbd5e1;
        font-size:14px;
        font-weight:600;
    }

    tr{
        border-bottom:1px solid rgba(255,255,255,0.05);
        transition:.2s;
    }

    tr:hover{
        background:#222;
    }

    td{
        font-size:14px;
        color:#f1f5f9;
    }

    .actions{
        display:flex;
        gap:10px;
    }

    .badge{
        padding:6px 12px;
        border-radius:8px;
        font-size:12px;
        font-weight:bold;
        text-transform:capitalize;
    }

    .activo{
        background:#14532d;
        color:#86efac;
    }

    .inactivo{
        background:#7f1d1d;
        color:#fca5a5;
    }

</style>

<div class="container">

    <div class="top-actions">

        <h1>Tabla de Alumnos</h1>

        <a href="{{ route('alumnos.create') }}" class="btn btn-add">
            + Agregar Alumno
        </a>

    </div>

    <table>

        <thead>

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>DNI</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($alumnos as $alumno)

                <tr>

                    <td>{{ $alumno->id }}</td>

                    <td>{{ $alumno->nombre }}</td>

                    <td>{{ $alumno->apellidos }}</td>

                    <td>
                        {{ \Carbon\Carbon::parse($alumno->fecha_nacimiento)->format('d/m/Y') }}
                    </td>

                    <td>{{ $alumno->dni }}</td>

                    <td>{{ $alumno->telefono }}</td>

                    <td>{{ $alumno->email }}</td>

                    <td>

                        <span class="badge {{ $alumno->estado_matricula == 'matriculado' ? 'activo' : 'inactivo' }}">

                            {{ ucfirst($alumno->estado_matricula) }}

                        </span>

                    </td>

                    <td class="actions">

                        <a href="{{ route('alumnos.edit', $alumno->id) }}"
                           class="btn btn-edit">

                            Editar

                        </a>

                        <form action="{{ route('alumnos.destroy', $alumno->id) }}"
                              method="POST">

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

                    <td colspan="9">
                        No hay alumnos registrados
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection