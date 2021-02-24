<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Paises;
use App\Users;

class PdfController extends Controller
{
    public function __construct()
    {
        //$this->middleware('web'); <--Cualquier sesion, no importa si no esta logeado
        //$this->middleware('auth'); <-- Cualquier usuario logeado
        $this->middleware('authAdministrador');
    }
    public function ver_reportes()
    {
        return view('Reportes.reportes_disponibles');
    }
    public function crearPDF($datos,$vistautl,$tipo)
    {
    	$data=$datos;
    	$date=date('Y-m-d');
    	$view=\View::make($vistautl,compact('data','date'))->render();
    	$pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
    	if($tipo==1){return $pdf->stream('reporte');}
    	if($tipo==2){return $pdf->download('reporte.pdf');}
    }
    public function crear_reporte_x_nombre($tipo)
    {
        $vista = "Reportes.repo_prod_x_nombre";
        $productos = Productos::where('status',1)
        ->orderBy('nombre')->get();
        return $this->crearPDF($productos,$vista,$tipo);

    }
    public function crear_reporte_id($tipo)
     {
    	$v1="Reportes.crear_reporte_id";
    	$productos=Productos::orderBy('id')->get();
    	return $this->crearPDF($productos,$v1,$tipo);
    }

    public function pdf_paises($tipo)
     {
    	$v1="Reportes.pdf_paises";
        $v2 = Paises::orderBy('id')->get();
        return $this->crearPDF($v2,$v1,$tipo);
    }
    public function pdf_users($tipo)
     {
    	$v1="Reportes.pdf_users";
        $v2 = Users::orderBy('id')->get();
        return $this->crearPDF($v2,$v1,$tipo);
    }
}
