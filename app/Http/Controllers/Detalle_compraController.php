<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalle_compra;
use App\Compras;
use App\Productos;

class Detalle_compraController extends Controller
{
    public function __construct()
    {
        //$this->middleware('web'); <--Cualquier sesion, no importa si no esta logeado
        //$this->middleware('auth'); <-- Cualquier usuario logeado
        $this->middleware('authAdministrador');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $var = Detalle_compra::where('status', 1)
                  ->orderBy('id')->get();
        return view('Detalle_compra.index')->with('detalle_compra', $var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $varC = Compras::select('id')
                  ->orderBy('id')->get();
        $varP = Productos::select('id','nombre','precio_compra','precio_venta')
                  ->orderBy('id')->get();
        return view('Detalle_compra.create')
                ->with('compras',$varC)
                ->with('productos',$varP);
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
        Detalle_compra::create($datos);
        return redirect('/detalle_compra');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Detalle_compra::find($id);
        return view('Detalle_compra.read')->with('detalle_compra', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Detalle_compra::find($id);
        $varC = Compras::select('id')
                  ->orderBy('id')->get();
        $varP = Productos::select('id','nombre','precio_compra','precio_venta')
                  ->orderBy('id')->get();
        return view('Detalle_compra.edit')
               ->with('detalle_compra', $var)
               ->with('compras',$varC)
               ->with('productos',$varP);
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
        $var = Detalle_compra::find($id);
        $var->update($datos);
        return redirect('/detalle_compra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Detalle_compra::find($id);
        $var->status = 0;
        $var->save();
        return redirect('/detalle_compra');
    }
}
