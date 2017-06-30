<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'titulo',
    	'anno',
    	'autor_id',
    	'genero_id'
    ];
}
