<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Landing Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #f8a170, #fdc173), url('/public/img/beautiful-sunset.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .header {
            text-align: center;
            padding: 10px 20px;
            background-image: url('/public/img/beautiful-sunset.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
        }

        .header h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .header p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .btn-clientes {
            background-color: #ffffff;
            color: #333;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-clientes:hover {
            background-color: #ff5722;
            color: #fff;
        }

        .about {
            text-align: center;
            padding: 50px 20px;
            background: rgba(255, 255, 255, 0.1);
            margin: 50px;
            border-radius: 10px;
        }

        .about h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .about p {
            font-size: 1.2em;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            margin: 50px;
        }

        .footer p {
            font-size: 0.9em;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.5);
            color: #25323f;
            border-bottom: 1px solid #ddd;

        }

        th {
            background-color: #2c3e50;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.3);
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.7);
        }

        /* Opcional: Añadir un borde redondeado al primer y último td/th */
        tr:first-child th:first-child {
            border-top-left-radius: 10px;
        }

        tr:first-child th:last-child {
            border-top-right-radius: 10px;
        }

        tr:last-child td:first-child {
            border-bottom-left-radius: 10px;
        }

        tr:last-child td:last-child {
            border-bottom-right-radius: 10px;
        }

        /* Opcional: Añadir estilo a los botones en las tablas */
        .table-btn{
            padding: 10px;
            margin: 0px;
            border-radius: 5px;
            border: none;
            color: #fff;
            background-color: #286826;
            cursor: pointer;
            text-decoration: none;
            min-width: 100%;
        }
        .table-btn-details {
            background-color: #286826;
        }
        .table-btn-succes {
            background-color: #2c3e50;

        }
        .table-btn-delete {
            background-color: #ff5722;

        }
        .table-btn:hover {
            background-color: #70757a;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Bienvenidos al Hotel Paraíso</h1>
        <p>Disfruta de una estancia de lujo con vistas increíbles y un servicio excepcional.</p>
        <a href="{{ route('clientes.create') }}" class="btn-clientes">¡Reserva ahora!</a>
        <section class="header">
            <h2>Reservas realizadas</h2>
            <p>En Hotel Paraíso, nos esforzamos por ofrecer una experiencia inolvidable a todos nuestros huéspedes.</p>
            <div class="">
                <table >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Fecha de Llegada</th>
                            <th>Fecha de Salida</th>
                            <th>Tipo de habitacion</th>
                            <th>Número de Personas</th>
                            <th>Correo Electrónico</th>
                            <th>telefono</th>
                            <th>Direccion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->apellido_paterno }}</td>
                            <td>{{ $cliente->apellido_materno }}</td>
                            <td>{{ $cliente->fecha_llegada }}</td>
                            <td>{{ $cliente->fecha_salida }}</td>
                            <td>{{ $cliente->tipo_habitacion }}</td>
                            <td>{{ $cliente->numero_personas }}</td>
                            <td>{{ $cliente->correo_electronico }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>{{ $cliente->direccion }}</td>
                            <td id="btn-a">

                                <a href="{{ route('clientes.show', $cliente->id) }}" class="btn-clientes table-btn-details" >
                                    <img src="{{ asset('icons/detalle.ico') }}" alt="Icono Volver" style="width: 1.5rem; height: 1.5rem; margin-right: 5px;"></a>
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn-clientes table-btn-succes">
                                    <img src="{{ asset('icons/editar-informacion.ico') }}" alt="Icono Editar" style="width: 1.5rem; height: 1.5rem; margin-right: 5px;"></a>
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-clientes table-btn-delete"> <img src="{{ asset('icons/borrar.ico') }}" alt="Icono Borrar" style="width: 1.5rem; height: 1.5rem; margin-right: 5px;"> </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>

    <section class="about">
        <h2>Enterate mas aqui!</h2>
        <p>En Hotel Paraíso, nos esforzamos por ofrecer una experiencia inolvidable a todos nuestros huéspedes. Desde nuestras amplias habitaciones hasta nuestras exquisitas opciones gastronómicas, cada detalle ha sido diseñado para su comodidad y placer.</p>
    </section>
    <footer class="footer">
        <p>&copy; 2024 Hotel Paraíso. Todos los derechos clientedos.</p>
    </footer>

</body>
</html>





