<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_pago extends Model
{
    protected $table = 'tipos_pago';
    
    protected $fillable = ['nombre','status'];
}
