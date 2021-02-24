<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'compras';
    
    protected $fillable = ['id_proveedor','fecha','subtotal','iva','total','user_id','status'];

    public function proveedores()
    {
    	return $this->belongsTo('App\Proveedores', 'id_proveedor', 'id');
    }
    
    public function users()
    {
    	return $this->belongsTo('App\Users', 'user_id', 'id');
    }
}
