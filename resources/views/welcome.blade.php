<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>

        body{
            margin:0;
            padding:0;
            background:#0f0f0f;
            color:white;
            font-family: Arial, Helvetica, sans-serif;
            min-height:100vh;
        }

        .topbar{
            width:100%;
            display:flex;
            justify-content:flex-end;
            padding:25px 40px;
            gap:15px;
        }

        .topbar a{
            text-decoration:none;
            color:white;
            border:1px solid rgba(255,255,255,0.2);
            padding:10px 18px;
            border-radius:10px;
            transition:0.3s;
            font-size:14px;
        }

        .topbar a:hover{
            background:white;
            color:black;
        }

        .hero{
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:80vh;
            padding:20px;
        }

        .hero-card{
            width:100%;
            max-width:950px;
            background:#181818;
            border-radius:18px;
            overflow:hidden;
            display:flex;
            box-shadow:0 10px 40px rgba(0,0,0,0.5);
        }

        .hero-left{
            flex:1;
            padding:60px;
            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .hero-left h1{
            font-size:3rem;
            font-weight:bold;
            margin-bottom:20px;
        }

        .hero-left p{
            color:#b5b5b5;
            line-height:1.7;
            margin-bottom:30px;
        }

        .hero-right{
            flex:1;
            background:linear-gradient(135deg,#ff2d20,#7a0000);
            display:flex;
            justify-content:center;
            align-items:center;
            position:relative;
        }

        .hero-right h2{
            font-size:5rem;
            font-weight:bold;
            opacity:0.15;
            position:absolute;
        }

        .btn-main{
            width:fit-content;
            padding:12px 28px;
            border-radius:12px;
            background:#ff2d20;
            border:none;
            color:white;
            text-decoration:none;
            transition:0.3s;
            font-weight:bold;
        }

        .btn-main:hover{
            background:#ff4d42;
            color:white;
        }

        @media(max-width:768px){

            .hero-card{
                flex-direction:column;
            }

            .hero-left{
                padding:40px;
            }

            .hero-left h1{
                font-size:2rem;
            }

            .hero-right{
                min-height:220px;
            }

            .hero-right h2{
                font-size:3rem;
            }

        }

    </style>

</head>

<body>

    <div class="topbar">

        @if (Route::has('login'))

            @auth

                <a href="{{ url('/home') }}">
                    Home
                </a>

            @else

                <a href="{{ route('login') }}">
                    Log in
                </a>

                @if (Route::has('register'))

                    <a href="{{ route('register') }}">
                        Register
                    </a>

                @endif

            @endauth

        @endif

    </div>

    <section class="hero">

        <div class="hero-card">

            <div class="hero-left">

                <h1>
                    Bienvenido
                </h1>

                <p>
                    Sistema web desarrollado con Laravel y autenticación integrada.
                    Puedes iniciar sesión o registrarte para acceder al sistema.
                </p>

                <a href="{{ route('login') }}" class="btn-main">
                    Empezar
                </a>

            </div>

            <div class="hero-right">

                <h2>
                    Laravel
                </h2>

            </div>

        </div>

    </section>

</body>
</html>