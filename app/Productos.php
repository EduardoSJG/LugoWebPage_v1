<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    
    protected $fillable = ['nombre','descripcion','existencia','precio_compra','precio_venta','categoria_id','id_proveedor','status'];
    
    public function categorias()
    {
    	return $this->belongsTo('App\Categorias', 'categoria_id', 'id');
    }
    
    public function proveedores()
    {
    	return $this->belongsTo('App\Proveedores', 'id_proveedor', 'id');
    }
}
