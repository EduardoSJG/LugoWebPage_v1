<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fotos_productos;
use App\Productos;
use Storage;
use Illuminate\Support\Facades\Validator;

class Fotos_productosController extends Controller
{
    public function __construct()
    {
        //$this->middleware('web'); //<--Cualquier sesion, no importa si no esta logeado
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
        $var = Fotos_productos::where('status', 1)
            ->orderBy('id')->get();
        return view('Fotos_productos.index')->with('fotos_productos', $var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $var = Productos::select('id', 'nombre')
            ->orderBy('id')->get();
        return view('Fotos_productos.create')
            ->with('productos', $var);
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

        $rutaarchivos   = "../storage/productos/";
        $hora           = date("h_i_s");
        $fecha          = date("d-m-Y");
        $prefijo        = $fecha . "_" . $hora;
        $archivo        = $request->file('file');
        $input          = array('file' => $archivo);
        $reglas         = array('file' => 'required|mimes:jpeg,png,gif|max:50000');

        $validacion = Validator::make($input, $reglas);
        if ($validacion->fails()) {
            $ruta = $prefijo . '_' . $archivo->getClientOriginalName();
            return view('Error')
                ->with('msj', 'El archivo no es una imágen o es demasiado grande para almacenar= ' . $ruta);
        } else {

            $ruta = $prefijo . '_' . $archivo->getClientOriginalName();
            $r1 = Storage::disk('productos')->put($ruta,  \File::get($archivo));
            if ($r1) {
                $datos['ruta'] = $rutaarchivos.$ruta;
                Fotos_productos::create($datos);
                return redirect('/fotos_productos');
            } else {
                return view('Error')
                    ->with('msj', 'El archivo no se guardo, favor de comprobar la información');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Fotos_productos::find($id);
        return view('Fotos_productos.read')->with('foto_productos', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Fotos_productos::find($id);
        $varForaneo = Productos::select('id', 'nombre')
            ->orderBy('id')->get();
        return view('Fotos_productos.edit')
            ->with('foto_productos', $var)
            ->with('productos', $varForaneo);
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
        $foto_productos = Fotos_productos::find($id);

        $rutaarchivos   = "../storage/productos/";
        $hora           = date("h_i_s");
        $fecha          = date("d-m-Y");
        $prefijo        = $fecha . "_" . $hora;
        $archivo        = $request->file('file');
        $input          = array('file' => $archivo);
        $reglas         = array('file' => 'required|mimes:jpeg,png,gif|max:50000');

        $validacion = Validator::make($input, $reglas);
        if ($validacion->fails()) {
            return view('error')
                ->with('msj', 'Error de validación');
        } else {

            $ruta = $prefijo . '_' . $archivo->getClientOriginalName();
            $r1 = Storage::disk('productos')->put($ruta,  \File::get($archivo));
            if ($r1) {
                $datos['ruta'] = $rutaarchivos.$ruta;
                $foto_productos->update($datos);
                return redirect('/fotos_productos');
            } else {
                return view('error')
                    ->with('msj', 'El archivo no se guardo, favor de comprobar la información');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Fotos_productos::find($id);
        $var->status = 0;
        $var->save();
        return redirect('/fotos_productos');
    }
}
