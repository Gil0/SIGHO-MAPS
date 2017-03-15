<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class academica extends Model
{
    protected $filleable = [
        'escuela', 'estudios', 'periodo'
    ];

    public function profesor(){
        return $this->belongsTo('App\profesor', 'idProfesor','idProfesor');
    }
}
