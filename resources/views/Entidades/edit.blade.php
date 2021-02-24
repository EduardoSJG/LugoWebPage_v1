@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Entidad</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
								<th>Nombre del Pais</th>
								<th>Nombre de la Entidad</th>
								<th>Estatus</th>
								<th>Acción</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/entidades/'.$entidad->id]) !!}
							<td>
							{!! Form::select ('clave_pais', $paises->pluck('nombre','clave')->all() , 
							$entidad->clave_pais ,['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::text ('nombre',$entidad->nombre,
							['placeholder'=>'Ingresa nombre de la entidad','required']) !!}
		                    </td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , $entidad->status ,
							['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
							<td>
							{!! Form::submit('Editar Entidad') !!}
							</td>
						{!! Form::close() !!}
						</tr>
                    </tbody>
				</table>
            </div>
        </div>      
				<br />
				<h2><a href="{!! asset('entidades') !!}">REGRESAR</a></h2>
				<br />  
    </div> 
@endsection()