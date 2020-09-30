<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['id', 'donorName', 'donationType', 'incomes_id'];

    public function Income()
    {
     return $this->belongsTo('App\Income');
    }
}