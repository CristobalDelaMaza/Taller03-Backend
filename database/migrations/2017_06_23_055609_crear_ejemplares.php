<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearEjemplares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejemplares', function (Blueprint $table) {
            // se definen las respectivas columnas de la tabla
            $table->increments('id');
            $table->string('fecha_prestamo');
            $table->string('fecha_devolucion');
            $table->integer('libro_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->foreign('libro_id')->references('id')->on('libros');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejemplares');
    }
}
