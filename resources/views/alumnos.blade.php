<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>

        body{
            margin:0;
            padding:0;
            background:#0f0f0f;
            color:white;
            font-family: Arial, Helvetica, sans-serif;
        }

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

        .badge{
            padding:5px 10px;
            border-radius:8px;
            font-size:12px;
            font-weight:bold;
        }

        .activo{
            background:#16a34a;
        }

        .inactivo{
            background:#6b7280;
        }

    </style>

</head>
<body>

<div class="container">

    <div class="top-actions">
        <h1>Tabla de Alumnos</h1>

        <a href="#" class="btn btn-add">
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
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellidos }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->dni }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->email }}</td>

                    <td>
                        <span class="badge {{ $alumno->estado_matricula == 'matriculado' ? 'activo' : 'inactivo' }}">
                            {{ $alumno->estado_matricula }}
                        </span>
                    </td>

                    <td class="actions">
                        <a href="#" class="btn btn-edit">Editar</a>

                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-delete">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>

</body>
</html>