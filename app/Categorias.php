<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    
    protected $fillable = ['nombre','descripcion','status'];
}
