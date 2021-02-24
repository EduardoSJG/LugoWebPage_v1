<!DOCTYPE html>
<html>

<head>

  <title>Registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="{!! asset('js/scriptLogin.js') !!}" type="text/javascript"></script>

</head>
<script>
  function llenar_entidades(id_pais) {
    alert("asg");
    $("#id_entidad").empty();
    var asset = '{{ asset('
    ') }}';
    var ruta = asset + 'combo_entidades_x_pais/' + id_pais;
    $.ajax({
      type: 'GET',
      url: ruta,
      success: function(data) {
        var entidades = data;
        for (var i = 0; i < entidades.length; i++) {
          $('#id_entidad').append('<option value="' +
            entidades[i].id + '">' +
            entidades[i].nombre +
            '</option>');
        }
      }
    });
  }
</script>

<body>
  <div class="container mt-2 mb-4">
    <div class="row justify-content-md-center">
      <div class="col-sm-4 border border-primary shadow rounded pt-2">
        <div class="text-center">
          <img src="{!! asset('images/icon-1.png') !!}" class="rounded-circle border p-1" height="50">
        </div>
        <div class="col-sm-12">
          <br />
          <a>¿Ya estas registrado?</a>
          <script>
            var url = "{!! asset('login') !!}";
          </script>
          <button type="button" class="btn btn-primary float-right" onclick="window.location.href=url;">Inicia sesión</button>
          <br /><br />
          <label class="font-weight-bold">
            <h4>Registro</h4>
          </label>
          {!! Form::open(['url'=>'/register']) !!}
          <!--EMAIL-->
          <div class="form-group">
            {!! Form::label ('email','Email',
            ['class'=>'font-weight-bold']) !!}
            <div class="input-group">
              {!! Form::email ('email',null,
              ['class'=>'form-control',
              'placeholder'=>'example@example.com','required']) !!}
              <div class="input-group-append">
                <button type="button" class="btn btn-primary" onClick="return emailCheck();">
                  <i class="fa fa-envelope"></i>
                </button>
              </div>
            </div>
          </div>

          <div id="next-form" class="collapse">
            <small class="text-danger">
              <em>Es importante que recuerdes el correo y la contraseña</em>
            </small>

            <div class="form-group">
              {!! Form::label ('nombre','Nombre',['class'=>'font-weight-bold']) !!}
              {!! Form::text ('nombre',null,
              ['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('ap_pat','Apellido Paterno',['class'=>'font-weight-bold']) !!}
              {!! Form::text ('ap_pat',null,
              ['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('ap_mat','Apellido Materno',['class'=>'font-weight-bold']) !!}
              {!! Form::text ('ap_mat',null,
              ['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('telefono','Telefono',['class'=>'font-weight-bold']) !!}
              {!! Form::text ('telefono',null,
              ['class'=>'tel form-control',
              'placeholder'=>'(722)-xxx-xxxx',
              'x-autocompletetype'=>'tel','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('direccion','Dirección',['class'=>'font-weight-bold']) !!}
              {!! Form::text ('direccion',null,
              ['class'=>'form-control',
              'placeholder'=>'','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('id_pais','Pais',['class'=>'font-weight-bold']) !!}
              
              {!! Form::number ('id_pais', null,
              ['class'=>'form-control','required']) !!}

              
              
            </div>
            <div class="form-group">
              {!! Form::label ('id_entidad','Entidad',['class'=>'font-weight-bold']) !!}
              {!! Form::number ('id_entidad',null,
              ['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('colonia','Colonia',['class'=>'font-weight-bold']) !!}
              {!! Form::text ('colonia',null,
              ['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('cp','Codigo Postal',['class'=>'font-weight-bold']) !!}
              {!! Form::number ('cp',null,
              ['class'=>'form-control',
              'placeholder'=>'52000','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('fecha_naci','Fecha de Nacimiento',['class'=>'font-weight-bold']) !!}
              {!! Form::date ('fecha_naci',null,
              ['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('username','Usuario',['class'=>'font-weight-bold']) !!}
              {!! Form::text ('username',null,
              ['class'=>'form-control',
              'placeholder'=>'Nombre de usuario','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('password','Contraseña',['class'=>'font-weight-bold']) !!}
              {!! Form::text ('password',null,
              ['class'=>'form-control',
              'placeholder'=>'***********',
              'input type'=>'password','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label ('cpassword','Confirma Contraseña',['class'=>'font-weight-bold']) !!}
              {!! Form::text ('cpassword',null,
              ['class'=>'form-control',
              'placeholder'=>'***********',
              'input type'=>'password']) !!}
            </div>
            {!! Form::submit('Registrame',
            ['class'=>'btn btn-block btn-danger',
            'onClick'=>'return validation()']) !!}
            <br />
            {!! Form::close() !!}
          </div>
        </div>
        <!--/.next-form-->
      </div>
    </div>
  </div>
  </div>
</body>

</html>