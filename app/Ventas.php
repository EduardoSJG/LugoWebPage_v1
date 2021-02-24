<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'ventas';
    
    protected $fillable = ['id_cliente','fecha','subtotal','iva','total','id_tipo_pago','user_id','status'];

    public function clientes()
    {
    	return $this->belongsTo('App\Users', 'id_cliente', 'id');
    }
    
    public function users()
    {
    	return $this->belongsTo('App\Users', 'user_id', 'id');
    }
}
