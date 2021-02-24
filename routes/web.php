<?php

use Illuminate\Support\Facades\Route;

///*
//este grupo tiene todos las url que NO necesitan login
Route::group(['middleware' => 'web'], function () {
    //Auth::routes();
    

    Route::get('login', function () {
        return view('Login/login');
    });
    Route::get('login', 'Auth\LoginController@getLogin');
    Route::post('login', 'Auth\LoginController@postLogin');

    Route::get('register', function () {
        return view('Login/register');
    });
    Route::get('register', 'Auth\LoginController@getRegister');
    Route::post('register', 'Auth\LoginController@postRegister');


    Route::get('lugoIndex', 'Controller@lugoIndex');
    Route::get('/', 'Controller@lugoIndex');
    Route::get('biografia', 'Controller@biografia');


    Route::get('error', function () {
        return view('error');
    });
    Route::get('sin_acceso', function () {
        return view("error")
            ->with('msj', 'Privilegios insuficientes para acceder a esta sección. 
            <br />Es necesario iniciar sesión como administrador para tener acceso a esta sección.');
    });
    Route::get('sin_acceso2', function () {
        return view("error")
            ->with('msj', 'Privilegios insuficientes para acceder a esta sección. <br />Es necesario iniciar sesión como usuario basico para tener acceso a esta sección.');
    });
});

//este grupo tiene todas las url que necesitan tener logeo sin importar si son de algun tipo de usuario
Route::group(['middleware' => 'auth'], function () {
    
    Route::get('logout', 'Auth\LoginController@getLogout');
    Route::post('cerrarsesion', 'Auth\LoginController@cerrarsesion');

    Route::get('usa_control', 'InicioController@usa_control');
    Route::get('usa_control_y_param/{var}', 'InicioController@usa_control_y_param');
});

Route::group(['middleware' => 'authAdministrador'], function () {

    Route::get('adminMain', function () {
        return view("welcome");
    });
    Route::get('index', function () {
        return view('welcome');
    });

    Route::resource('paises', 'PaisesController');
    Route::resource('entidades', 'EntidadesController');
    Route::resource('tipos_usuario', 'Tipos_usuarioController');
    Route::resource('users', 'UsersController');
    Route::resource('proveedores', 'ProveedoresController');
    Route::resource('categorias', 'CategoriasController');
    Route::resource('productos', 'ProductosController');
    Route::resource('fotos_productos', 'Fotos_productosController');
    Route::resource('compras', 'ComprasController');
    Route::resource('detalle_compra', 'Detalle_compraController');
    Route::resource('tipos_pago', 'Tipos_pagoController');
    Route::resource('ventas', 'VentasController');
    Route::resource('detalle_venta', 'Detalle_ventaController');
    Route::resource('eventos', 'EventosController');

    Route::get('ver_reportes', 'PdfController@ver_reportes');
    Route::get('genera_pdf', 'PdfController@genera_pdf');
    Route::get('crear_reporte_x_nombre/{tipo}', 'PdfController@crear_reporte_x_nombre');
    Route::get('crear_reporte_id/{tipo}', 'PdfController@crear_reporte_id');
    Route::get('pdf_paises/{tipo}', 'PdfController@pdf_paises');
    Route::get('pdf_users/{tipo}', 'PdfController@pdf_users');



    Route::get('combo_entidades_x_pais/{id_pais}', 'AjaxController@combo_entidades_x_pais');
    Route::get('ajax_productos', 'AjaxController@actualiza_productos');
    Route::get('ejecutar_ajax/{tipo}/{valor}/{id}', 'AjaxController@actualiza');
    Route::get('llenar_campos/{id}', 'AjaxController@llenar_campos');
    Route::get('actualizar_prod/{id}/{exis}/{pc}/{pv}', 'AjaxController@actualizar_prod');

    Route::get('graficas', 'GraficasController@graficas');
    Route::get('grafica_areas', 'GraficasController@grafica_areas');
    Route::get('grafica_barras', 'GraficasController@grafica_barras');
    Route::get('grafica_pie', 'GraficasController@grafica_pie');

    Route::get('form_enviar_correo','CorreoController@create');
    Route::post('enviar_correo','CorreoController@enviar');
    
});
//*/

/* 
Route::group(['middleware' => 'web'], function () {
    //Auth::routes();
    Route::get('login', function () {
        return view('Login/login');
    });
    Route::get('login', 'Auth\LoginController@getLogin');
    Route::post('login', 'Auth\LoginController@postLogin');

    Route::get('register', function () {
        return view('Login/register');
    });
    Route::get('register', 'Auth\LoginController@getRegister');
    Route::post('register', 'Auth\LoginController@postRegister');

    Route::get('error', function () {
        return view('error');
    });

    Route::get('lugoIndex', 'Controller@lugoIndex');
    Route::get('/', 'Controller@lugoIndex');
    Route::get('biografia', 'Controller@biografia');

    Route::get('sin_acceso', function () {
        return view("error")
            ->with('msj', 'Privilegios insuficientes para acceder a esta sección. <br />Es necesario iniciar sesión como administrador para tener acceso a esta sección.');
    });

    Route::get('sin_acceso2', function () {
        return view("error")
            ->with('msj', 'Privilegios insuficientes para acceder a esta sección. <br />Es necesario iniciar sesión como usuario basico para tener acceso a esta sección.');
    });
    Route::post('cerrarsesion', 'Auth\LoginController@cerrarsesion');

    Route::get('usa_control', 'InicioController@usa_control');
    Route::get('usa_control_y_param/{var}', 'InicioController@usa_control_y_param');
    Route::get('adminMain', 'Controller@adminMain');
    Route::get('index', 'Controller@adminMain');

    Route::resource('paises', 'PaisesController');
    Route::resource('entidades', 'EntidadesController');
    Route::resource('tipos_usuario', 'Tipos_usuarioController');
    Route::resource('users', 'UsersController');
    Route::resource('proveedores', 'ProveedoresController');
    Route::resource('categorias', 'CategoriasController');
    Route::resource('productos', 'ProductosController');
    Route::resource('fotos_productos', 'Fotos_productosController');
    Route::resource('compras', 'ComprasController');
    Route::resource('detalle_compra', 'Detalle_compraController');
    Route::resource('tipos_pago', 'Tipos_pagoController');
    Route::resource('ventas', 'VentasController');
    Route::resource('detalle_venta', 'Detalle_ventaController');
    Route::resource('eventos', 'EventosController');

    Route::get('ver_reportes', 'PdfController@ver_reportes');
    Route::get('genera_pdf', 'PdfController@genera_pdf');
    Route::get('crear_reporte_x_nombre/{tipo}', 'PdfController@crear_reporte_x_nombre');
    Route::get('crear_reporte_id/{tipo}', 'PdfController@crear_reporte_id');
    Route::get('pdf_paises/{tipo}', 'PdfController@pdf_paises');
    Route::get('pdf_users/{tipo}', 'PdfController@pdf_users');

    Route::get('combo_entidades_x_pais/{id_pais}', 'AjaxController@combo_entidades_x_pais');
    Route::get('ajax_productos', 'AjaxController@actualiza_productos');
    Route::get('ejecutar_ajax/{tipo}/{valor}/{id}', 'AjaxController@actualiza');
    Route::get('llenar_campos/{id}', 'AjaxController@llenar_campos');
    Route::get('actualizar_prod/{id}/{exis}/{pc}/{pv}', 'AjaxController@actualizar_prod');

    Route::get('graficas', 'GraficasController@graficas');
    Route::get('grafica_areas', 'GraficasController@grafica_areas');
    Route::get('grafica_barras', 'GraficasController@grafica_barras');
    Route::get('grafica_pie', 'GraficasController@grafica_pie');

    Route::get('form_enviar_correo','CorreoController@create');
    Route::post('enviar_correo','CorreoController@enviar');

});
*/
