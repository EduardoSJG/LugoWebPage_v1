<?php

namespace App\Http\Controllers\Auth;

use App\Users;
use App\Paises;
use App\Entidades;
use Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest')->except('getLogout');
    }


    public function getLogin()
    {
        return view("Login/login");
    }
    public function postLogin(Request $request)
    {
        /*
        $credentials = $request
        ->only('email','password');

        if($this->auth->attempt())
        {

        }
        */
        ///*
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember'))) {

            $usuarioactual = \Auth::user();
            return view('lugoIndex')->with("usuario", $usuarioactual);
        }
        return view('error')
            ->with("msj", "Usuario o Contraseña incorrectas");
        //*/
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre'    => ['required', 'string', 'max:255'],
            'ap_pat'    => ['required', 'string', 'max:255'],
            'ap_mat'    => ['required', 'string', 'max:255'],
            'email'     => [
                'required', 'string', 'email',
                'max:255', 'unique:users'
            ],
            'telefono'  => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'id_pais'   => ['required', 'int', 'max:255'],
            'id_entidad' => ['required', 'int', 'max:255'],
            'colonia'   => ['required', 'string', 'max:255'],
            'cp'        => ['required', 'int', 'max:255'],
            'fecha_naci' => ['required', 'date'],
            'username'  => ['required', 'string', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    public function getRegister()
    {
        
        $varPais = Paises::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $varEnti = Entidades::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view("Login/register")
            ->with('paises', $varPais)
            ->with('entidades', $varEnti);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function postRegister(Request $request)
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
            'id_tipo_usu'   => 2,
            'colonia'       => $data['colonia'],
            'cp'            => $data['cp'],
            'fecha_naci'    => $data['fecha_naci'],
            'username'      => $data['username'],
            'password'      => Hash::make($data['password']),
            'status'        => 1,
        ]);

        //mandar un correo electronico

        return redirect("login");
    }
    public function getLogout()
    {
        $this->auth->logout();
        Session::flush();

        return redirect("lugoIndex");
    }
}
