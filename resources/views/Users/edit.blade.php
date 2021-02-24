@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Usuario</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
                    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/users/'.$user->id]) !!}
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
                            {!! Form::text ('nombre',$user->nombre,
                            ['placeholder'=>'Ingresa nombre','required']) !!}
							</td>
							<td>
                            {!! Form::text ('ap_pat',$user->ap_pat,
                            ['placeholder'=>'Ingresa apellido Paterno','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('ap_mat',$user->ap_mat,
                            ['placeholder'=>'Ingresa apellido materno','required']) !!}
                            </td>
                            <td>
                            {!! Form::email ('email',$user->email,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('telefono',$user->telefono,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('direccion',$user->direccion,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , $user->id_pais,
                            ['placeholder'=>'Selecciona Pais...','onchange'=>'llenar_entidades(this.value)','required']) !!}
                            </td>
                            <td>
							{!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all(), $user->id_entidad ,
                            ['placeholder'=>'Selecciona Entidad...','onchange'=>'llenar_entidades(this.value);','required']) !!}
							</td>
                            <td>
                            {!! Form::select ('id_tipo_usu', $tipos_usuario->pluck('nombre','id')->all() ,
                            $user->id_tipo_usu,['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('colonia',$user->colonia,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('cp',$user->cp,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::date ('fecha_naci',$user->fecha_naci,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('username',$user->username,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('password',$user->password,
                            ['placeholder'=>'Ingresa la información','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
                            array('1'=>'Activo','0'=>'Baja') , $user->status ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Editar Usuario') !!}
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