<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    
    protected $fillable = ['nombre','ap_pat','ap_mat','email','telefono','direccion','id_pais','id_entidad','id_tipo_usu','colonia','cp','fecha_naci','username','password','status'];

    public function paises()
    {
    	return $this->belongsTo('App\Paises', 'id_pais', 'id');
    }
    
    public function entidades()
    {
    	return $this->belongsTo('App\Entidades', 'id_entidad', 'id');
    }
    
    public function tipos_usuario()
    {
    	return $this->belongsTo('App\Tipos_usuario', 'id_tipo_usu', 'id');
    }
}
