<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compras;
use App\Proveedores;
use App\Users;

class ComprasController extends Controller
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
        $var = Compras::where('status', 1)
                  ->orderBy('id')->get();
        return view('Compras.index')->with('compras', $var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $varP = Proveedores::select('id','nombre')
                  ->orderBy('id')->get();
        $varU = Users::select('id','nombre')
                  ->orderBy('id')->get();
        return view('Compras.create')
                ->with('proveedores',$varP)
                ->with('users',$varU);
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
        Compras::create($datos);
        return redirect('/compras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Compras::find($id);
        return view('Compras.read')->with('compra', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Compras::find($id);
        $varP = Proveedores::select('id','nombre')
                  ->orderBy('id')->get();
        $varU = Users::select('id','nombre')
                  ->orderBy('id')->get();
        return view('Compras.edit')
               ->with('compra', $var)
               ->with('proveedores',$varP)
               ->with('users',$varU);
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
        $var = Compras::find($id);
        $var->update($datos);
        return redirect('/compras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Compras::find($id);
        $var->status = 0;
        $var->save();
        return redirect('/compras');
    }
}
