<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>

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
            max-width:1100px;
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
                    <td colspan="6">No hay cursos registrados</td>
                </tr>
            @endforelse
        </tbody>

    </table>

</div>

</body>
</html>