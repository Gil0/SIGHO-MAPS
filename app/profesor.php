<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    protected $filleable =[
        'nombre', 'apellido', 'cubiculo', 'correoElectronico'
    ];

    public function formacion_Academica(){
        return $this->hasMany('App\academica', 'idProfesor', 'idProfesor');
    }
    public function informacionLaboral(){
        return $this->hasMany('App\InformacionLaboralModel', 'idProfesor', 'idProfesor');
    }
    public function comantario(){
        return $this->hasMany('App\comentario', 'idProfesor', 'idProfesor');
    }
}
