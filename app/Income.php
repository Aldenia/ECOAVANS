<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['id', 'description', 'quantity', 'incomeData'];

    public function Donation()
    {
        return $this->hasMany('App\Donation');
    }
}