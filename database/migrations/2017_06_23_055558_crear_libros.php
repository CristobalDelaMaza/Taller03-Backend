<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearLibros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            // se definen las respectivas columnas de la tabla
            $table->increments('id');
            $table->string('titulo');
            $table->string('anno');
            $table->integer('autor_id')->unsigned();
            $table->integer('genero_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('autores');
            $table->foreign('genero_id')->references('id')->on('generos');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
