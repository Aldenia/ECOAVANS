<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exaVol extends Model
{
    protected $fillable =[
        'Id',
        'Nombre',
        'Apellido.1', 
        'Email',
        'Descripcion'
    ];  
}
