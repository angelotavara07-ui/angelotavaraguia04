<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>

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
            max-width:1000px;
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
        }

        tr{
            border-bottom:1px solid rgba(255,255,255,0.05);
        }

        tr:hover{
            background:#222;
        }

        td{
            color:#ddd;
        }

        .actions{
            display:flex;
            gap:10px;
        }

    </style>

</head>
<body>

<div class="container">

    <div class="top-actions">
        <h1>Tabla de Profesores</h1>

        <a href="#" class="btn btn-add">
            + Agregar Profesor
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($profesores as $profesor)
                <tr>
                    <td>{{ $profesor->id }}</td>
                    <td>{{ $profesor->nombre }}</td>
                    <td>{{ $profesor->apellidos }}</td>
                    <td>{{ $profesor->especialidad }}</td>

                    <td class="actions">
                        <a href="#" class="btn btn-edit">Editar</a>

                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-delete">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay profesores registrados</td>
                </tr>
            @endforelse
        </tbody>

    </table>

</div>

</body>
</html>