<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
use App\Proveedores;

class ProductosController extends Controller
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
        $var = Productos::where('status', 1)
                  ->orderBy('id')->get();
        return view('Productos.index')->with('productos', $var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $varCat = Categorias::select('id','nombre')
                  ->orderBy('id')->get();
        $varProv = Proveedores::select('id','nombre')
                  ->orderBy('id')->get();
        return view('Productos.create')
                ->with('categorias',$varCat)
                ->with('proveedores',$varProv);
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
        Productos::create($datos);
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Productos::find($id);
        return view('Productos.read')->with('producto', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Productos::find($id);
        $varCat = Categorias::select('id','nombre')
                  ->orderBy('id')->get();
        $varProv = Proveedores::select('id','nombre')
                  ->orderBy('id')->get();
        return view('Productos.edit')
               ->with('producto', $var)
               ->with('categorias',$varCat)
               ->with('proveedores',$varProv);
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
        $var = Productos::find($id);
        $var->update($datos);
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Productos::find($id);
        $var->status = 0;
        $var->save();
        return redirect('/productos');
    }
}
