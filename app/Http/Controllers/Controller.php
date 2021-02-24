<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function adminMain()
    {
        echo "<script>alert('asd');</script>";
        $usuarioactual = \Auth::user();
            
        return view('welcome')
        ->with("usuario", $usuarioactual);
    }

    public function lugoIndex()
    {
        $usuarioactual = \Auth::user();
            
        return view('lugoIndex')
        ->with("usuario", $usuarioactual);
    }
    
    public function biografia()
    {
        $usuarioactual = \Auth::user();
            
        return view('biografia')
        ->with("usuario", $usuarioactual);
    }
}
