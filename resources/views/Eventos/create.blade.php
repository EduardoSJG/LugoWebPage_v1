@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Crear Evento</h2></div>
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
						{!! Form::open(['url'=>'/eventos']) !!}
                            <td>
							{!! Form::text ('nombre',null,
							['placeholder'=>'Ingresa la información','required']) !!}
							</td>
							<td>
							{!! Form::text ('descripcion',null,
							['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
							{!! Form::text ('direccion',null,
							['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
							{!! Form::date ('fecha',null,
							['placeholder'=>'Ingresa la información',
							'type'=>'datetime-local','required']) !!}
                            </td>
                            <td>
							{!! Form::select ('id_boleto', $productos->pluck('nombre','id')->all() , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Guardar Evento') !!}
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