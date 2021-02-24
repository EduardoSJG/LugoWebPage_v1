<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use App\Order;
use App\Mail\OrderShipped;
use App\Mail\Message;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    public function __construct()
    {
        //$this->middleware('authAdministrador');
    }
    public function create()
    {
        return view("Correo.form_mail");
        
    }
    public function enviar(Request $request)
    {
        $pathToFile = "";
        $containfile = false;
        $destinatario = $request->input("destinatario");
        $asunto = $request->input("asunto");
        $contenido = $request->input("contenido_mail");
        
        
        $data = array('contenido' => $contenido);
        $r = Mail::send(
            'correo.plantilla_correo',
            $data,
            function ($message) use ($asunto, $destinatario, $containfile, $pathToFile) {
                $message->from('eddyfake01@gmail.com', 'LUGO Mx Web');
                $message->to($destinatario)->subject($asunto);
            }
        );

        if (!$r) {
            return view("Mensajes.plantillamensaje")
                ->with('var', '1')
                ->with('ruta_boton', '')
                ->with('mensaje_boton', 'Nuevo')
                ->with('msj', 'Correo enviado correctamente');
        } else 
        {
            return view("Mensajes.plantillamensaje")
                ->with('var', '2')
                ->with('ruta_boton', 'ver_archivos')
                ->with('mensaje_boton', 'Ver Archivos')
                ->with('msj', 'Error al enviar Correo');
        }
    }
}
