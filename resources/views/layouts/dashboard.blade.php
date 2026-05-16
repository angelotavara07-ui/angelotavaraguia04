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
    font-family:'Segoe UI', sans-serif;
    background:#0b1120;
    color:white;
    overflow-x:hidden;
}

.dashboard{
    display:flex;
    min-height:100vh;
}

/* SIDEBAR */

.sidebar{
    width:270px;
    background:linear-gradient(180deg,#0f172a,#111827);
    padding:30px 20px;
    border-right:1px solid rgba(255,255,255,0.05);
    box-shadow:5px 0 25px rgba(0,0,0,0.25);
}

.logo{
    margin-bottom:45px;
    padding-left:10px;
}

.logo h2{
    color:#ff2d20;
    font-size:30px;
    font-weight:800;
    letter-spacing:1px;
}

.menu{
    display:flex;
    flex-direction:column;
    gap:12px;
}

.menu a{
    color:#cbd5e1;
    text-decoration:none;
    padding:15px 18px;
    border-radius:14px;
    transition:.3s;
    font-size:15px;
    font-weight:500;
    display:flex;
    align-items:center;
    gap:12px;
}

.menu a:hover{
    background:#1e293b;
    color:white;
    transform:translateX(5px);
}

/* MAIN */

.main{
    flex:1;
    display:flex;
    flex-direction:column;
}

/* TOPBAR */

.topbar{
    height:85px;
    background:rgba(17,24,39,0.95);
    backdrop-filter:blur(10px);
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 40px;
    border-bottom:1px solid rgba(255,255,255,0.05);
    position:sticky;
    top:0;
    z-index:100;
}

.topbar h1{
    margin:0;
    font-size:24px;
    font-weight:700;
    color:#f8fafc;
}

.user-section{
    display:flex;
    align-items:center;
    gap:20px;
}

.username{
    color:#f8fafc;
    font-weight:600;
    background:#1e293b;
    padding:10px 18px;
    border-radius:10px;
}

.logout-btn{
    background:#dc2626;
    border:none;
    color:white;
    padding:10px 18px;
    border-radius:10px;
    cursor:pointer;
    transition:.3s;
    font-weight:600;
}

.logout-btn:hover{
    background:#ef4444;
    transform:translateY(-2px);
}

/* CONTENT */

.content{
    padding:40px;
}

/* DASHBOARD CARDS */

.welcome-card{
    background:#111827;
    border-radius:24px;
    padding:45px;
    border:1px solid rgba(255,255,255,0.05);
    box-shadow:0 10px 40px rgba(0,0,0,0.35);
}

.welcome-card h2{
    margin-bottom:12px;
    font-size:34px;
    font-weight:800;
}

.welcome-card p{
    color:#94a3b8;
    margin-bottom:35px;
    font-size:15px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:22px;
}

.mini-card{
    background:#0f172a;
    padding:28px;
    border-radius:18px;
    border:1px solid rgba(255,255,255,0.05);
    transition:.3s;
    cursor:pointer;
}

.mini-card:hover{
    transform:translateY(-6px);
    border-color:rgba(255,45,32,0.3);
    box-shadow:0 10px 25px rgba(0,0,0,0.25);
}

.mini-card h5{
    color:#ff2d20;
    margin-bottom:12px;
    font-size:19px;
    font-weight:700;
}

.mini-card p{
    color:#94a3b8;
    font-size:14px;
    line-height:1.5;
}

/* FORMS */

.form-control{
    background:#111827 !important;
    color:white !important;
    border:1px solid #374151 !important;
    border-radius:12px !important;
    padding:12px !important;
}

.form-control:focus{
    box-shadow:none !important;
    border-color:#ff2d20 !important;
    background:#111827 !important;
}

/* TABLES */

table{
    box-shadow:0 10px 25px rgba(0,0,0,0.25);
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