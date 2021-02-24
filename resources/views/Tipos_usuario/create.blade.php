@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Crear Tipo de Usuario</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
                                <th>Nombre</th>
                                <th>Nivel</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open(['url'=>'/tipos_usuario']) !!}
							<td>
							{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del pais','required']) !!}
							</td>
							<td>
							{!! Form::number ('nivel',null,['placeholder'=>'Ingresa clave del pais','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Guardar Tipo de Usuario') !!}
							</td>
						{!! Form::close() !!}   
						</tr>
                    </tbody>
				</table>
            </div>
        </div>   
				<br />
				<h2><a href="{!! asset('tipos_usuario') !!}">REGRESAR</a></h2>
				<br />     
    </div> 
@endsection()