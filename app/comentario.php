<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    protected $filleable=[
        'comentario', 'calificacion'
    ];

    public function profesor(){
        return $this-> belongsTo('App\profesor', 'idProfesor', 'idProfesor');
    }
    public function user(){
        return $this->belongsTo('App\User', 'id','idUsuario');
    }
}
