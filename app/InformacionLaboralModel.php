<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionLaboralModel extends Model
{
    protected $filleable = [
        'lugar_trabajo', 'puesto', 'periodo'
    ];
    public function profesor(){
        return $this->belongsTo('App\profesor', 'idProfesor', 'idProfesor');
    }
}
