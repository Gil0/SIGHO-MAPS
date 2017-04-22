<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacionLaboralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('InformacionLaboral', function(Blueprint $table){
            $table->increments('idInformacionLaboral');
            $table->string('lugar_trabajo');
            $table->string('puesto');
            $table->string('periodo');
            $table->integer('idProfesor')->unsigned();
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
