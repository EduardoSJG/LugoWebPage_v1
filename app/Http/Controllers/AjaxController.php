<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidades;
use App\Productos;

class AjaxController extends Controller
{
    public function __construct()
    {
        //$this->middleware('web'); <--Cualquier sesion, no importa si no esta logeado
        //$this->middleware('auth'); <-- Cualquier usuario logeado
        $this->middleware('authAdministrador');
    }

    public function combo_entidades_x_pais($id_pais)
    {
        $entidades = Entidades::select('id', 'nombre')
            ->where('id_pais', $id_pais)
            ->where('status', 1)
            ->get();
        return $entidades;
    }

    public function actualiza_productos()
    {
            
        $productos = Productos::where('status', 1)
            ->orderBy('nombre')->get();

        return view('ajax_productos')
            ->with('productos', $productos);
    }

    public function actualiza($tipo, $valor, $id)
    {
        
        $producto = Productos::where('id', $id)->first();
        $anterior_exis = $producto->existencia;
        if ($tipo == 1) {
            Productos::where('id', $id)
                ->increment('existencia', $valor);
        } else {
            Productos::where('id', $id)
                ->decrement('existencia', $valor);
        }
        $tot_exis = 0;
        $producto = Productos::where('id', $id)->first();
        $nom_prod = $producto->nombre;
        $tot_exis = $producto->existencia;
        return "<h3 style=''>Valor previo: " . $anterior_exis . " de ".$nom_prod."<br/>
        Valor actual: " . $tot_exis . "</h3>";
    }

    public function llenar_campos($id)
    {
        $producto = Productos::where('id', $id)->first();
        $tot_exis = $producto->existencia;
        $pc = $producto->precio_compra;
        $pv = $producto->precio_venta;
        $c_html = "<br />";
        $c_html .= "<div class='form-group'>
        
            <label for='exis'>Existencia actual del producto: " . $tot_exis . "</label>
            </div>";
        $c_html .= "<div class='form-group'>
            <label for='exis'>Cantidad para agregar a la existencia actual:</label>
            <input type='number' name='exis' id='exis' value='0'
            placeholder='Ingresa Existencia'
            class='form-control' />
            </div>";
        $c_html .= "<div class='form-group'>
            <label for='pc'>Precio de Compra:</label>
            <input type='text' name='pc' id='pc' value='" . $pc . "'
            placeholder='Ingresa Precio de Compra'
            class='form-control' />
            </div>";
        $c_html .= "<div class='form-group'>
            <label for='pv'>Precio de Venta:</label>
            <input type='text' name='pv' id='pv' value='" . $pv . "'
            placeholder='Ingresa Precio de Venta'
            class='form-control' />
            </div>";
        return $c_html;
    }
    public function actualizar_prod($id, $exis, $pc, $pv)
    {
        Productos::where('id', $id)
            ->increment('existencia', $exis);

        $prod = Productos::find($id);
        $prod->precio_compra = $pc;
        $prod->precio_venta = $pv;
        $prod->save();

        $producto = Productos::where('id',$id)->first();
        $nom_prod = $producto->nombre;
        $tot_exis = $producto->existencia;
        $pc_n = $producto->precio_compra;
        $pv_n = $producto->precio_venta;

        return "<h3 style=''>El producto ".$nom_prod." se actualizó de forma correcta con
        los datos: <br/> Existencia: ".$tot_exis."<br/>
        Precio de Compra: ".$pc_n."<br/>
        Precio de Venta: ".$pv_n."
        </h3>";
    }
}
