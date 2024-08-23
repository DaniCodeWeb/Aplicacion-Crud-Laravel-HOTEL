@extends('layouts.app')

@section('content')
<div class="details">
    <div class="login-card-list">
        <h1>Detalles del Cliente</h1>
        <ul class="details-list">
            <li><strong>Nombre:</strong> {{ $cliente->nombre }}</li>
            <li><strong>Apellido Paterno:</strong> {{ $cliente->apellido_paterno }}</li>
            <li><strong>Apellido Materno:</strong> {{ $cliente->apellido_materno }}</li>
            <li><strong>Fecha de Llegada:</strong> {{ $cliente->fecha_llegada }}</li>
            <li><strong>Fecha de Salida:</strong> {{ $cliente->fecha_salida }}</li>
            <li><strong>Tipo de Habitación:</strong> {{ $cliente->tipo_habitacion }}</li>
            <li><strong>Número de Personas:</strong> {{ $cliente->numero_personas }}</li>
            <li><strong>Correo Electrónico:</strong> {{ $cliente->correo_electronico }}</li>
            <li><strong>Teléfono:</strong> {{ $cliente->telefono }}</li>
            <li><strong>Dirección:</strong> {{ $cliente->direccion }}</li>
        </ul>
        <a href="{{ route('clientes.index') }}" class="btn-clientes">Volver a la lista</a>
    </div>
</div>
@endsection
