<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacionAcademicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('formacionAcademica', function(Blueprint $table){
            $table->increments('idFormacionAcademica');
            $table->string('escuela');
            $table->string('estudios');
            $table->string('periodo');
            $table->integer('idProfesor');


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
