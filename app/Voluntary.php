<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntary extends Model
{
    protected $fillable = [
        'id', 'Nombre', 'Apellido 1', 'Apellido 2',
        'Telefono', 'Direccion', 'Email', 'Descripcion',

    ];
}
