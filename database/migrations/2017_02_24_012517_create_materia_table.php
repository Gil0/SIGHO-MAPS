<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('materia', function(Blueprint $table){
            $table->integer('nrc');
            $table->string('nombre');
            $table->string('salon');
            $table->string('dias');
            $table->string('horas');
            $table->string('clave');
            $table->integer('idProfesor');

            $table->primary('nrc');
            $table->foreign('idProfesor')->references('idProfesor')->on('Profesores')->onDelete('cascade');

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
