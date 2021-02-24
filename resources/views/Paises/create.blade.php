@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Crear Pais</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
								<th>Nombre del Pais</th>
								<th>Clave del Pais</th>
								<th>Estatus</th>
								<th>Acción</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open(['url'=>'/paises']) !!}
							<td>
							{!! Form::text ('nombre',null,
							['placeholder'=>'Ingresa nombre del pais','required']) !!}
							</td>
							<td>
							{!! Form::text ('clave',null,
							['placeholder'=>'Ingresa clave del pais','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Guardar Pais') !!}
							</td>
						{!! Form::close() !!}   
						</tr>
                    </tbody>
				</table>
            </div>
        </div>     
				<br />
				<h2><a href="{!! asset('paises') !!}">REGRESAR</a></h2>
				<br />   
    </div> 
@endsection()