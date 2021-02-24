<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
    protected $table = 'detalle_venta';
    
    protected $fillable = ['venta_id','producto_id','cantidad','precio_compra','precio_venta','status'];

    public function ventas()
    {
    	return $this->belongsTo('App\Ventas', 'venta_id', 'id');
    }
    
    public function productos()
    {
    	return $this->belongsTo('App\Productos', 'producto_id', 'id');
    }
}
