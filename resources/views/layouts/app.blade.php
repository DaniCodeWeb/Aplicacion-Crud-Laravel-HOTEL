<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url("{{ asset('img/photo2jpg (1).jpg') }}");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            min-width: 85%;
            height: 100%;
            padding-top: 2rem;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 20px;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow:
            0 8px 16px rgba(0, 0, 0, 0.4);
        }
        /* ESTILOS PARA EL SHOW */
        .details{
            display: flex;
            justify-content: center;
        }
        .login-card-list {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 20px;
            max-width: 50%;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        }
        /* ssssss */
        .user-icon {
            width: 60px;
            height: 60px;
            background-color: #2c3e50;
            border-radius: 50%;
            margin: -50px auto 20px auto;
            position: relative;
        }

        .user-icon:before {
            content: "\f007"; /* Icono de usuario en FontAwesome */
            font-family: "FontAwesome";
            font-size: 30px;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .formulario{

            padding: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-group {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items:center;
            width: 100%;
            text-align: left;
        }

        .input-group label {
            min-width: 10%;
            padding: 10px;
            font-size: 14px;
            color: #25323f;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            font-size: 14px;
        }

        .options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .options a {
            color: #2c3e50;
            text-decoration: none;
            font-size: 12px;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #2c3e50;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #34495e;
        }

        .reservas-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #2c3e50;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-size: 16px;
        }

        .reservas-btn:hover {
            background-color: #34495e;
        }
        /* estilos para el show */

        .details-list {
            list-style-type: none;
            padding: 0;
        }

        .details-list li {
            font-size: 16px;
            color: #fff;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }

        .details-list strong {
            color: #2c3e50;
        }

        .btn-clientes {
            display: inline-flex; /* Cambiado a inline-flex para alinear icono y texto */
            align-items: center; /* Centra verticalmente el contenido */
            width: 100%;
            padding: 10px;
            background-color: #2c3e50;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            text-align: center;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

        .btn-clientes:hover {
            background-color: #34495e;
        }

        #btn-a{
            max-height: 40px;

        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
