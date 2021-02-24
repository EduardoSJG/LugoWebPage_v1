<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;
use App\Paises;
use App\Entidades;

class ProveedoresController extends Controller
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
        $varPais = Paises::select('id','nombre')
                  ->orderBy('nombre')->get();
        $varEnti = Entidades::select('id','nombre')
                  ->orderBy('nombre')->get();
        $var = Proveedores::where('status', 1)
                  ->orderBy('id')->get();
        return view('Proveedores.index')
                ->with('proveedores', $var)
                ->with('paises',$varPais)
                ->with('entidades',$varEnti);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $varPais = Paises::select('id','nombre')
                  ->orderBy('nombre')->get();
        $varEnti = Entidades::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Proveedores.create')
                ->with('paises',$varPais)
                ->with('entidades',$varEnti);
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
        Proveedores::create($datos);
        return redirect('/proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Proveedores::find($id);
        return view('Proveedores.read')->with('proveedor', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Proveedores::find($id);
        $varPais = Paises::select('id','nombre')
                  ->orderBy('nombre')->get();
        $varEnti = Entidades::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Proveedores.edit')
               ->with('proveedor', $var)
               ->with('paises',$varPais)
               ->with('entidades',$varEnti);
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
        $var = Proveedores::find($id);
        $var->update($datos);
        return redirect('/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Proveedores::find($id);
        $var->status = 0;
        $var->save();
        return redirect('/proveedores');
    }
}
