<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Paises;
use App\Entidades;
use App\Detalle_venta;
use App\Ventas;
use App\Users;

class GraficasController extends Controller
{
    public function __construct()
    {
        //$this->middleware('web'); <--Cualquier sesion, no importa si no esta logeado
        //$this->middleware('auth'); <-- Cualquier usuario logeado
        $this->middleware('authAdministrador');
    }
    public function graficas()
    {
        return view("graficas.selecciona_grafica");
    }
    public function grafica_areas()
    {
        
        $var = Ventas::orderBy('id')
        ->get();
        $var2 = Detalle_venta::orderBy('id')
        ->get();
        $var3 = Productos::orderBy('id')
        ->get();

        return view("graficas.grafica_areas")
        ->with('ventas',$var)
        ->with('detalle_venta',$var2)
        ->with('productos',$var3);
    }
    public function grafica_barras()
    {
        $var = Paises::orderBy('nombre')
        ->get();
        $var2 = Entidades::orderBy('id')
        ->get();
        return view("graficas.grafica_barras")
        ->with('paises',$var)
        ->with('entidades',$var2);
    }
    public function grafica_pie()
    {
        $var = Users::orderBy('id')
        ->get();
        return view("graficas.grafica_pie")
        ->with('users',$var);
    }
}
