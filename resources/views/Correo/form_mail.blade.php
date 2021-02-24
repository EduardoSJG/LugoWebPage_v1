<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{!! asset('images/icons/favicon.ico') !!}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('correo/vendor/bootstrap/css/bootstrap.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('correo/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('correo/vendor/animate/animate.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('correo/vendor/css-hamburgers/hamburgers.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('correo/vendor/select2/select2.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('correo/css/util.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('correo/css/main.css') !!}">
<!--===============================================================================================-->
</head>
<body>
    <div class="bg-contact100">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="{!! asset('correo/img-01.png') !!}" alt="IMG">
				</div>

                {!! Form::open(['url'=>'/enviar_correo',
                'role'=>'form',
                'class'=>'contact100-form validate-form',
                'enctype'=>'multipart/form-data']) !!}
					<span class="contact100-form-title">
						Envia un Correo
					</span>

                    {!! Form::label ('destinatario','Destinatario',['class'=>'focus-input100']) !!}
					<div class="wrap-input100 validate-input" data-validate = "Requiere email valido: example@example.com">
                        
                        {!! Form::email ('destinatario',null,
                                ['placeholder'=>'Email Destinatario',
                                'required',
                                'class'=>'form-control, input100']) !!}
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    {!! Form::label ('asunto','Asunto',['class'=>'focus-input100']) !!}
					<div class="wrap-input100 validate-input" data-validate = "Asunto Requerido">
                        {!! Form::text ('asunto',null,
                        ['placeholder'=>'Asunto','required', 'class'=>'form-control, input100']) !!}
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						</span>
					</div>
                    {!! Form::label ('contenido_mail','Contenido',['class'=>'focus-input100']) !!}
					<div class="wrap-input100 validate-input" data-validate = "Mensaje requerido">
                        {!! Form::textarea ('contenido_mail',null,
                        ['placeholder'=>'Contenido...','required', 'class'=>'input100','rows' => 8, 'cols' => 100]) !!}
						
						<span class="focus-input100"></span>
					</div>

                        {!! Form::submit ('Enviar Correo', 
                        ['class' => 'contact100-form-btn', 'name' => 'save-draft'])!!}
                        {!! Form::close() !!}
			</div>
		</div>
	</div>


    <!--===============================================================================================-->
    <script src="{!! asset('correo/vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
    <!--===============================================================================================-->
        <script src="{!! asset('correo/vendor/bootstrap/js/popper.js') !!}"></script>
        <script src="{!! asset('correo/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
    <!--===============================================================================================-->
        <script src="{!! asset('correo/vendor/select2/select2.min.js') !!}"></script>
    <!--===============================================================================================-->
        <script src="{!! asset('correo/vendor/tilt/tilt.jquery.min.js') !!}"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
    <!--===============================================================================================-->
        <script src="{!! asset('correo/js/main.js') !!}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

</body>
</html>

