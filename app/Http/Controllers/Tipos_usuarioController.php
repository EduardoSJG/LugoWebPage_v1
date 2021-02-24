<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipos_usuario;

class Tipos_usuarioController extends Controller
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
        $tipos_usuario = Tipos_usuario::where('status', 1)
                  ->orderBy('id')
                  ->get();          
        return view('Tipos_usuario.index')->with('tipos_usuario', $tipos_usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tipos_usuario.create');
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
        Tipos_usuario::create($datos);
        return redirect('/tipos_usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipos_usuario = Tipos_usuario::find($id);
        return view('Tipos_usuario.read')->with('tipo_usuario', $tipos_usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipos_usuario = Tipos_usuario::find($id);
        return view('Tipos_usuario.edit')->with('tipo_usuario', $tipos_usuario);
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
        $tipos_usuario = Tipos_usuario::find($id);
        $tipos_usuario->update($datos);
        return redirect('/tipos_usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipos_usuario = Tipos_usuario::find($id);
        $tipos_usuario->status = 0;
        $tipos_usuario->save();
        
        return redirect('/tipos_usuario');
    }
}
