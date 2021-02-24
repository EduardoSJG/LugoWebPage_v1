@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Tipo de Usuario</h2></div>
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
						{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/tipos_usuario/'.$tipo_usuario->id]) !!}
							<td>
							{!! Form::text ('nombre',$tipo_usuario->nombre,
							['placeholder'=>'Ingresa nombre del tipo de usuario','required']) !!}
							</td>
							<td>
							{!! Form::number ('nivel',$tipo_usuario->nivel,
							['placeholder'=>'Ingresa el nivel','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , $tipo_usuario->status ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Editar Tipo de Usuario') !!}
							
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