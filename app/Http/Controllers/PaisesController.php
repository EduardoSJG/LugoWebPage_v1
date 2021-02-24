<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;

class PaisesController extends Controller
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
        //$paises = Paises::all();
        //$paises = Paises::orderBy('id')->get();
        //$paises = Paises::orderBy('nombre')->get();
        //$paises = Paises::where('status', '=' ,1)
                  //->orderBy('nombre')->get();
        //$paises = Paises::where('status', 1)
                  //->orderBy('nombre','desc')->get();
        //$paises = Paises::where('status', 1)
                  //->where('clave','MX')
                  //->orderBy('nombre','asc')->get();
        //$paises = Paises::where('status', 1)
                  //->orwhere('clave','MX')
                  //->orderBy('nombre','asc')->get();          
        $paises = Paises::where('status', 1)
                  ->orderBy('id')->get();          


        return view('Paises.index')->with('paises', $paises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Paises.create');
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
        Paises::create($datos);
        return redirect('/paises');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pais = Paises::find($id);
        return view('Paises.read')->with('pais', $pais);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pais = Paises::find($id);
        return view('Paises.edit')->with('pais', $pais);
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
        $pais = Paises::find($id);
        $pais->update($datos);
        return redirect('/paises');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$pais = Paises::find($id);
        //$pais->destroy($id);
        
        $pais = Paises::find($id);
        $pais->status = 0;
        $pais->save();
        
        return redirect('/paises');
    }
}
