<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class MDusuCliente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //users
        $usuario_actual = \Auth::user();

        //otras tablas de user, password
        //$usuario_actual = Session::get('usuarioactual');
        if(isset($usuario_actual)){
            if($usuario_actual->id_tipo_usu!=2){
                return redirect('sin_acceso2');
            }
        }else
        return redirect('login');
        
        return $next($request);
    }
}
