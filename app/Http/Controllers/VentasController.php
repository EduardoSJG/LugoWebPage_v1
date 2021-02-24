<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventas;
use App\Users;
use App\Tipos_pago;

class VentasController extends Controller
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
        $var = Ventas::where('status', 1)
                  ->orderBy('id')->get();
        return view('Ventas.index')->with('ventas', $var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $var1 = Users::select('id','nombre')
                  ->orderBy('id')->get();
        $var2 = Tipos_pago::select('id','nombre')
                  ->orderBy('id')->get();
        $var3 = Users::select('id','nombre')
                  ->orderBy('id')->get();
        return view('Ventas.create')
                ->with('clientes',$var1)
                ->with('tipos_pago',$var2)
                ->with('users',$var3);
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
        Ventas::create($datos);
        return redirect('/ventas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Ventas::find($id);
        return view('Ventas.read')->with('venta', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Ventas::find($id);
        $var1 = Users::select('id','nombre')
                  ->orderBy('id')->get();
        $var2 = Tipos_pago::select('id','nombre')
                  ->orderBy('id')->get();
        $var3 = Users::select('id','nombre')
                  ->orderBy('id')->get();
        return view('Ventas.edit')
               ->with('venta', $var)
               ->with('clientes',$var1)
               ->with('tipos_pago',$var2)
               ->with('users',$var3);
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
        $var = Ventas::find($id);
        $var->update($datos);
        return redirect('/ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Ventas::find($id);
        $var->status = 0;
        $var->save();
        return redirect('/ventas');
    }
}
