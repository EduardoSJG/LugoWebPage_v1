<!DOCTYPE html>
<html>

<head>

    <title>Inicio de Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{!!  asset('js/scriptLogin.js') !!}" type="text/javascript"></script>
    <!-- jQuery -->
    <script src="{!!  asset('vendor/jquery/jquery.min.js') !!}"></script>

</head>
<body>
    <div class="container mt-2 mb-4">
        <div class="row justify-content-md-center">
            <div class="col-sm-4 border border-primary shadow rounded pt-2">
                <div class="text-center">
                    <img src="{!!  asset('images/icon-1.png') !!}" class="rounded-circle border p-1" height="50">
                </div>
                <div class="col-sm-12">
                    <br />
                    <a>¿No estas registrado?</a>
                    <script>
                        var url = "{!!  asset('register') !!}";
                    </script>
                    <button type="button" class="btn btn-primary float-right" onclick="window.location.href=url;">Registrate</button>
                    <br /><br />
                    <label class="font-weight-bold">
                        <h4>Iniciar Sesión</h4>
                    </label>
                        {!! Form::open(['url'=>'/login',
                        'action'=>'login',
                        'method'=>'post']) !!}
                        <fieldset>
                            {!! Form::label('email', 'Email', ['class' => 'font-weight-bold']) !!}
                            {!! Form::email('email', null, ['class' => 'form-control','required']) !!}

                            {!! Form::label ('password','Contraseña',['class'=>'font-weight-bold']) !!}
                            {!! Form::text ('password',null,
                            ['class'=>'form-control',
                            'placeholder'=>'***********',
                            'input type'=>'password','required']) !!}
                            
                            <br />
                            {!! Form::submit('Iniciar Sesión',
                            ['class'=>'btn btn-block btn-danger']) !!}
                            <!--/.next-form-->
                            <br />
                        </fieldset>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</body>

</html>