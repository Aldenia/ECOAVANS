<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['id', 'reservationDate', 'reservationHour', 'adultQuantity', 'childrenQuantity', 'tourType', 'tourPrice', 'user_id'];

    public function Usuario()
    {
     return $this->belongsTo('App\Usuario');
    }
}