<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#111827;
            color:white;
        }

        .dashboard{
            display:flex;
            min-height:100vh;
        }

        /* SIDEBAR */

        .sidebar{
            width:260px;
            background:#0f172a;
            padding:30px 20px;
            border-right:1px solid rgba(255,255,255,0.05);
        }

        .logo{
            margin-bottom:40px;
        }

        .logo h2{
            color:#ff2d20;
            font-size:28px;
        }

        .menu{
            display:flex;
            flex-direction:column;
            gap:10px;
        }

        .menu a{
            color:#cbd5e1;
            text-decoration:none;
            padding:14px 16px;
            border-radius:12px;
            transition:.3s;
            font-size:15px;
        }

        .menu a:hover{
            background:#1e293b;
            color:white;
        }

        /* MAIN */

        .main{
            flex:1;
            display:flex;
            flex-direction:column;
        }

        /* TOPBAR */

        .topbar{
            height:80px;
            background:#1e293b;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 40px;
            border-bottom:1px solid rgba(255,255,255,0.05);
        }

        .topbar h1{
            font-size:24px;
        }

        .user-section{
            display:flex;
            align-items:center;
            gap:20px;
        }

        .username{
            color:#f8fafc;
            font-weight:bold;
        }

        .logout-btn{
            background:#dc2626;
            border:none;
            color:white;
            padding:10px 16px;
            border-radius:10px;
            cursor:pointer;
            transition:.3s;
        }

        .logout-btn:hover{
            background:#ef4444;
        }

        /* CONTENT */

        .content{
            padding:40px;
        }

        .welcome-card{
            background:#1e293b;
            border-radius:20px;
            padding:40px;
            box-shadow:0 10px 30px rgba(0,0,0,0.3);
        }

        .welcome-card h2{
            margin-bottom:10px;
            font-size:32px;
        }

        .welcome-card p{
            color:#94a3b8;
            margin-bottom:30px;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
        }

        .mini-card{
            background:#0f172a;
            padding:25px;
            border-radius:16px;
            border:1px solid rgba(255,255,255,0.05);
            transition:.3s;
        }

        .mini-card:hover{
            transform:translateY(-5px);
        }

        .mini-card h5{
            color:#ff2d20;
            margin-bottom:10px;
            font-size:18px;
        }

        .mini-card p{
            color:#94a3b8;
            font-size:14px;
        }

    </style>

</head>
<body>

<div class="dashboard">

    {{-- SIDEBAR --}}
    <aside class="sidebar">

        <div class="logo">
            <h2>EduSystem</h2>
        </div>

        <div class="menu">

            <a href="{{ route('home') }}">
                Dashboard
            </a>

            <a href="{{ route('alumnos.index') }}">
                Alumnos
            </a>

            <a href="{{ route('cursos.index') }}">
                Cursos
            </a>

            <a href="{{ route('profesores.index') }}">
                Profesores
            </a>

            <a href="{{ route('horarios.index') }}">
                Horarios
            </a>

            <a href="{{ route('matriculas.index') }}">
                Matrículas
            </a>

        </div>

    </aside>

    {{-- MAIN --}}
    <main class="main">

        {{-- TOPBAR --}}
        <div class="topbar">

            <h1>Panel Administrativo</h1>

            <div class="user-section">

                <span class="username">
                    {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="logout-btn">
                        Logout
                    </button>
                </form>

            </div>

        </div>

        {{-- CONTENT --}}
        <div class="content">

            @yield('dashboard-content')

        </div>

    </main>

</div>

</body>
</html>