@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar reservacion</h1>
    <div class="login-card">
        <form action="{{route('clientes.update', $cliente)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group">
                <label for="nombre"><i class="fas fa-user"></i>Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{$cliente->nombre}}" required>
            </div>
            <div class="input-group">
                <label for="apellido_paterno"><i class="fas fa-user"></i>Apellidos paterno</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" value="{{$cliente->apellido_paterno}}"  >
                 {{-- Apedllido paterno_apellido materno --}}
                <label for="apellido_materno"><i class="fas fa-user"></i>Apellidos materno</label>
                <input type="text" id="apellido_materno" name="apellido_materno" value="{{$cliente->apellido_materno}}" >
            </div>
            <div class="input-group">
                <label for="fecha_llegada"><i class="fas fa-calendar"></i>Fecha de llegada</label>
                <input type="date" id="fecha_llegada" name="fecha_llegada"  value="{{$cliente->fecha_llegada}}" required>
                 {{-- fecha llegada_fecha salida --}}
                <label for="fecha_salida"><i class="fas fa-calendar"></i>Fecha de salida</label>
                <input type="date" id="fecha_salida" name="fecha_salida"  value="{{$cliente->fecha_salida}}" required>
            </div>
            <div class="input-group">
                <label for="tipo_habitacion"><i class="fas fa-calendar"></i>Tipo de habitacion</label>
                <input type="text" id="tipo_habitacion" name="tipo_habitacion" value="{{$cliente->tipo_habitacion}}" required>
            </div>
            <div class="input-group">
                <label for="numero_personas"><i class="fas fa-users"></i>Número de personas</label>
                <select name="numero_personas" id="numero_personas" value="{{$cliente->numero_personas}}"  required>
                    <option value="">Seleccione el número de personas</option>
                    @for ($i = 1; $i <= 20; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                {{-- Numero de personas_Correo electronico --}}
                <label for="correo_electronico"><i class="fas fa-envelope"></i>Correo Electrónico</label>
                <input type="email" id="correo_electronico" name="correo_electronico" value="{{$cliente->correo_electronico}}" required>
            </div>
            <div class="input-group">
                <label for="telefono"><i class="fas fa-phone"></i>Teléfono</label>
                <input type="text" id="telefono" name="telefono" value="{{$cliente->telefono}}"  required>
                {{-- telefono_direccion --}}
                <label for="direccion"><i class="fas fa-map-marker-alt"></i>Dirección</label>
                <input type="text" id="direccion" name="direccion" value="{{$cliente->direccion}}"  required>
            </div>
            <div class="options">
                <label><input type="checkbox" required> Acepto los términos y condiciones</label>
            </div>
            <button type="submit" class="login-btn">Guardar nueva reservación</button>

            </div>
            <a href="{{ route('clientes.index') }}" class="reservas-btn">Volver</a>
        </form>
    </div>
</div>
@stop




