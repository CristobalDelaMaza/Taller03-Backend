<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    protected $table = 'ejemplares';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'fecha_prestamo',
    	'fecha_devolucion',
    	'libro_id',
    	'estado_id',
    	'usuario_id',
    ];
}