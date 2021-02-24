<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipos_pago;

class Tipos_pagoController extends Controller
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
        $var = Tipos_pago::where('status', 1)
                  ->orderBy('id')->get();
        return view('Tipos_pago.index')->with('tipos_pago', $var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tipos_pago.create');
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
        Tipos_pago::create($datos);
        return redirect('/tipos_pago');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Tipos_pago::find($id);
        return view('Tipos_pago.read')->with('tipos_pago', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Tipos_pago::find($id);
        return view('Tipos_pago.edit')->with('tipos_pago', $var);
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
        $var = Tipos_pago::find($id);
        $var->update($datos);
        return redirect('/tipos_pago');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Tipos_pago::find($id);
        $var->status = 0;
        $var->save();
        
        return redirect('/tipos_pago');
    }
}
