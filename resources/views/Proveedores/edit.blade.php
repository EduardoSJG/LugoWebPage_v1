@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Proveedor</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
                {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/proveedores/'.$proveedor->id]) !!}
					<thead>
						<tr>
                            <th>Nombre</th>
                            <th>RFC</th> 			
                            <th>Razon Social</th>
                            <th>Direccion</th>
                            <th>Email</th>
                            <th>Contacto</th>
                            <th>Pais</th>
                            <th>{!! Form::label ('id_entidad','Entidad') !!}</th>
                            <th>CP</th>
                            <th>Colonia</th>
                            <th>Telefono</th>
                            <th>Estatus</th>
                            <th>Acción</th>
						</tr>
					</thead>
                    <tbody>
                        <tr>
                            <td>
                            {!! Form::text ('nombre',$proveedor->nombre,
                            ['placeholder'=>'Ingresa nombre del Proveedor','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('rfc',$proveedor->rfc,
                            ['placeholder'=>'Ingresa el RFC','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('razon_social',$proveedor->razon_social,
                            ['placeholder'=>'Ingresa la razon social','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('direccion',$proveedor->direccion,
                            ['placeholder'=>'Ingresa la dirección','required']) !!}
                            </td>
                            <td>
                            {!! Form::email ('email',$proveedor->email,
                            ['placeholder'=>'Ingresa el e-mail','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('contacto',$proveedor->contacto,
                            ['placeholder'=>'Ingresa el contacto','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , $proveedor->id_pais ,
                            ['placeholder'=>'Selecciona Pais...','onchange'=>'llenar_entidades(this.value)','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all() , 
                            $proveedor->id_entidad ,['placeholder'=>'Selecciona Entidad...','required']) !!}
							</td>
							<td>
                            {!! Form::number ('cp',$proveedor->cp,
                            ['placeholder'=>'Ingresa el codigo Postal','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('colonia',$proveedor->colonia,
                            ['placeholder'=>'Ingresa la colonia','required']) !!}
                            </td>
                            <td>
                            {!! Form::text ('telefono',$proveedor->telefono,
                            ['placeholder'=>'Ingresa el telefono','required']) !!}
		                    </td>
							<td>
							{!! Form::select ('status', 
                            array('1'=>'Activo','0'=>'Baja') , $proveedor->status ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
							<td>
							{!! Form::submit('Editar Proveedor') !!}
							</td>
						{!! Form::close() !!}
						</tr>
                    </tbody>
				</table>
            </div>
        </div>    
				<br />
				<h2><a href="{!! asset('proveedores') !!}">REGRESAR</a></h2>
				<br />    
    </div> 
@endsection()