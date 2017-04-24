<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('comentarios', function(Blueprint $table){
            $table->increments('idComentario');
            $table->string('comentario',300);
            $table->integer('calificacion');
            $table->dateTime('fecha')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('idProfesor')->unsigned();
            $table->integer('idUsuario')->unsigned();
            $table->boolean('status',false);
            $table->foreign('idProfesor')->references('idProfesor')->on('profesores')->onDelete('cascade');
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
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
