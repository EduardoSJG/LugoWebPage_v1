<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Paises;
use App\Entidades;
use App\Tipos_usuario;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
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
        $var = Users::where('status', 1)
                  ->orderBy('id')->get();
        return view('Users.index')->with('users', $var);
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
        $varTipUsu = Tipos_usuario::select('id','nombre')
                    ->orderBy('nombre')->get();
        return view('Users.create')
                ->with('paises',$varPais)
                ->with('entidades',$varEnti)
                ->with('tipos_usuario',$varTipUsu);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Users::create([
            'nombre'        => $data['nombre'],
            'ap_pat'        => $data['ap_pat'],
            'ap_mat'        => $data['ap_mat'],
            'email'         => $data['email'],
            'telefono'      => $data['telefono'],
            'direccion'     => $data['direccion'],
            'id_pais'       => $data['id_pais'],
            'id_entidad'    => $data['id_entidad'],
            'id_tipo_usu'   => $data['id_tipo_usu'],
            'colonia'       => $data['colonia'],
            'cp'            => $data['cp'],
            'fecha_naci'    => $data['fecha_naci'],
            'username'      => $data['username'],
            'password'      => Hash::make($data['password']),
            'status'        => $data['status'],
        ]);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Users::find($id);
        return view('Users.read')->with('user', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Users::find($id);
        $varPais = Paises::select('id','nombre')
                  ->orderBy('nombre')->get();
        $varEnti = Entidades::select('id','nombre')
                  ->orderBy('nombre')->get();
        $varTipUsu = Tipos_usuario::select('id','nombre')
                    ->orderBy('nombre')->get();
        return view('Users.edit')
               ->with('user', $var)
               ->with('paises',$varPais)
               ->with('entidades',$varEnti)
               ->with('tipos_usuario',$varTipUsu);
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
        $data = $request->all();
        $var = Users::find($id);
        $var->update([
            'nombre'        => $data['nombre'],
            'ap_pat'        => $data['ap_pat'],
            'ap_mat'        => $data['ap_mat'],
            'email'         => $data['email'],
            'telefono'      => $data['telefono'],
            'direccion'     => $data['direccion'],
            'id_pais'       => $data['id_pais'],
            'id_entidad'    => $data['id_entidad'],
            'id_tipo_usu'   => $data['id_tipo_usu'],
            'colonia'       => $data['colonia'],
            'cp'            => $data['cp'],
            'fecha_naci'    => $data['fecha_naci'],
            'username'      => $data['username'],
            'password'      => Hash::make($data['password']),
            'status'        => $data['status'],
        ]);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Users::find($id);
        $var->status = 0;
        $var->save();
        return redirect('/users');
    }
}
