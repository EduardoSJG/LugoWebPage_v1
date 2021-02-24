<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_compra extends Model
{
    protected $table = 'detalle_compra';
    
    protected $fillable = ['compra_id','producto_id','cantidad','precio_compra','precio_venta','status'];

    public function compras()
    {
    	return $this->belongsTo('App\Compras', 'compra_id', 'id');
    }
    
    public function productos()
    {
    	return $this->belongsTo('App\Productos', 'producto_id', 'id');
    }
}