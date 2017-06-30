<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['nombre','apellido'];
}

