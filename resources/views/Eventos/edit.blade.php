@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Eventos</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Dirección</th>
                                <th>Fecha</th>
                                <th>ID Boleto</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/eventos/'.$evento->id]) !!}
							<td>
							{!! Form::text ('nombre',$evento->nombre,
							['placeholder'=>'Ingresa la información','required']) !!}
							</td>
							<td>
							{!! Form::text ('descripcion',$evento->descripcion,
							['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
							{!! Form::text ('direccion',$evento->direccion,
							['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
							{!! Form::date ('fecha',$evento->fecha,
							['placeholder'=>'Ingresa la información',
							'type'=>'datetime-local','required']) !!}
                            </td>
                            <td>
							{!! Form::select ('id_boleto', $productos->pluck('nombre','id')->all() , 
							$evento->id_boleto ,['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , $evento->status ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Editar Evento') !!}
							
							</td>
						{!! Form::close() !!}
						</tr>
                    </tbody>
				</table>
            </div>
        </div>     
				<br />
				<h2><a href="{!! asset('eventos') !!}">REGRESAR</a></h2>
				<br />   
    </div> 
@endsection()