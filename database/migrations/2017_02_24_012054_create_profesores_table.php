<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Profesores', function(Blueprint $table){
            $table->increments('idProfesor');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('cubiculo');
            $table->string('correoElectronico')->unique();
            $table->float('calificacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
