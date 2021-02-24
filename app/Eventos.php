<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = 'eventos';
    
    protected $fillable = ['nombre','descripcion','direccion','fecha','id_boleto','status'];

    public function paises()
    {
    	return $this->belongsTo('App\Productos', 'id_boleto', 'id');
    }
}
