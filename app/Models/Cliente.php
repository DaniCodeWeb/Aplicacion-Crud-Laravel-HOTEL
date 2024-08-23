<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_llegada',
        'fecha_salida',
        'tipo_habitacion',
        'numero_personas',
        'correo_electronico',
        'telefono',
        'direccion'];

}
