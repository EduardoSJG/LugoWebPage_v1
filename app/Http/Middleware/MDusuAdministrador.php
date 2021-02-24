<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class MDusuAdministrador
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
            if($usuario_actual->id_tipo_usu!=1){
                return redirect('sin_acceso');
            }
        }else
        return redirect('login');
        
        return $next($request);
    }
}
