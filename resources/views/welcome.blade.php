<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Página con Tarjeta Semitransparente</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('/img/font_cecytem.jpeg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #ffffff; /* Cambiar color del texto según sea necesario */
            position: relative;
        }

        .card-container {
            text-align: center;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.7); /* Semitransparente */
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.9); /* Efecto de sombra más evidente */
        }

        .card h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #000000; /* Color negro */
        }

        .card p {
            font-size: 1.2em;
            margin-top: 20px;
        }

        .login-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .login-button {
            background-color: #38763c;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .login-links {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }

        .login-links a {
            margin-left: 10px;
            color: #38763c;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <a href="{{ route('login') }}" class="login-button">Iniciar Sesión</a>
    </div>

    <div class="card-container">
        <div class="card">
            <h1>Registro de Asistencia<br>CECyTEM - Plantel LERMA</h1>
        </div>
    </div>
</body>

</html>
