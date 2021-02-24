<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidades extends Model
{
    protected $table = 'entidades';
    
    protected $fillable = ['clave_pais','id_pais','nombre','status'];

    public function paises()
    {
    	return $this->belongsTo('App\Paises', 'id_pais', 'id');
    }
}
