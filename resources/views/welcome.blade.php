<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lugo Webpage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ asset('/index') }}">Home</a>
                    @else
                        <a href="{{ asset('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ asset('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                Lugo Webpage 
                <img src="{!! asset('images/icon-1.png') !!}" alt="" >
                
                </div>

                <div class="links">
                <b><a href="lugoIndex" style="text-decoration:none;"><h2>LUGO Index</h2></a></b>
                    <h3>Base de Datos</h3>
                    <a href="paises">Paises</a>
                    <a href="entidades">Entidades</a>
                    <a href="tipos_usuario">Tipos de Usuario</a>
                    <a href="users">Users</a>
                    <a href="proveedores">Proveedores</a>
                    <br />
                    <a href="categorias">Categorias</a>
                    <a href="productos">Productos</a>
                    <a href="fotos_productos">Fotos Productos</a>
                    <a href="compras">Compras</a>
                    <a href="detalle_compra">Detalle Compra</a>
                    <br />
                    <a href="tipos_pago">Tipo Pago</a>
                    <a href="ventas">Ventas</a>
                    <a href="detalle_venta">Detalle Venta</a>
                    <a href="eventos">Eventos</a>
                    <br />
                    <br />
                    <h3>Graficas</h3>
                    <a href="grafica_barras">Barras</a>
                    <a href="grafica_areas">Areas</a>
                    <a href="grafica_pie">Pastel</a>
                    <br />
                    <br />
                    <h3>PDF & Correos</h3>
                    <a href="ver_reportes">Reportes Disponibles</a>
                    <a href="form_enviar_correo">Enviar Correo</a>
                </div>
            </div>
        </div>
    </body>
</html>
