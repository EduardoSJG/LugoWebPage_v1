<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalle_venta;
use App\Ventas;
use App\Productos;

class Detalle_ventaController extends Controller
{
    public function __construct()
    {
        //$this->middleware('web'); <--Cualquier sesion, no importa si no esta logeado
        //$this->middleware('auth'); //<-- Cualquier usuario logeado
        $this->middleware('authAdministrador');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $var = Detalle_venta::where('status', 1)
                  ->orderBy('id')->get();
        return view('Detalle_venta.index')->with('detalle_venta', $var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $var1 = Ventas::select('id')
                  ->orderBy('id')->get();
        $var2 = Productos::select('id','nombre','precio_compra','precio_venta')
                  ->orderBy('id')->get();
        return view('Detalle_venta.create')
                ->with('ventas',$var1)
                ->with('productos',$var2);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Detalle_venta::create($datos);
        return redirect('/detalle_venta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Detalle_venta::find($id);
        return view('Detalle_venta.read')->with('detalle_venta', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Detalle_venta::find($id);
        $var1 = Ventas::select('id')
                  ->orderBy('id')->get();
        $var2 = Productos::select('id','nombre','precio_compra','precio_venta')
                  ->orderBy('id')->get();
        return view('Detalle_venta.edit')
               ->with('detalle_venta', $var)
               ->with('ventas',$var1)
               ->with('productos',$var2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $var = Detalle_venta::find($id);
        $var->update($datos);
        return redirect('/detalle_venta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Detalle_venta::find($id);
        $var->status = 0;
        $var->save();
        return redirect('/detalle_venta');
    }
}
