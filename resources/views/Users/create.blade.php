@extends('template.tableMaster')

@section('contenido_central')

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Crear Usuario</h2>
                    </div>
                </div>
            </div>
            <br />
            <table class="table table-striped table-hover table-bordered">
                
                {!! Form::open(['url'=>'/users']) !!}
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Ap. Paterno</th>
                        <th>Ap. Materno</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Pais</th>
                        <th>{!! Form::label ('id_entidad','Entidad') !!}</th>
                        <th>Tipo</th>
                        <th>Colonia</th>
                        <th>CP</th>
                        <th>Fecha Nac.</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {!! Form::text ('nombre',null,
                            ['placeholder'=>'Ingresa nombre','required']) !!}
                        </td>
                        <td>
                            {!! Form::text ('ap_pat',null,
                            ['placeholder'=>'Ingresa apellido Paterno','required']) !!}
                        </td>
                        <td>
                            {!! Form::text ('ap_mat',null,
                            ['placeholder'=>'Ingresa apellido materno','required']) !!}
                        </td>
                        <td>
                            {!! Form::email ('email',null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                        </td>
                        <td>
                            {!! Form::text ('telefono',null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                        </td>
                        <td>
                            {!! Form::text ('direccion',null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                        </td>
                        <td>
							{!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , null,
                            ['placeholder'=>'Selecciona Pais...','onchange'=>'llenar_entidades(this.value)','required']) !!}
                        </td>
                        <td>
							{!! Form::select ('id_entidad', array('0'=>'Selecciona') , 
                            null ,['placeholder'=>'Selecciona Entidad...','required']) !!}
						</td>
                        <td>
                            {!! Form::select ('id_tipo_usu', $tipos_usuario->pluck('nombre','id')->all() ,null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                        </td>
                        <td>
                            {!! Form::text ('colonia',null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                        </td>
                        <td>
                            {!! Form::number ('cp',null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                        </td>
                        <td>
                            {!! Form::date ('fecha_naci',null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                        </td>
                        <td>
                            {!! Form::text ('username',null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                        </td>
                        <td>
                            {!! Form::text ('password',null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                        </td>
                        <td>
                            {!! Form::select ('status',
                            array('1'=>'Activo','0'=>'Baja') , null ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
                        </td>
                        <td>
                            {!! Form::submit('Guardar Usuario') !!}
                        </td>
                        {!! Form::close() !!}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br />
    <h2><a href="{!! asset('users') !!}">REGRESAR</a></h2>
    <br />
</div>
@endsection()