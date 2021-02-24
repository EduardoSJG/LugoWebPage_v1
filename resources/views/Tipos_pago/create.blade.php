@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Crear Tipo de Pago</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
                                <th>Nombre</th>
                                <th>Estatus</th>
								<th>Acción</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open(['url'=>'/tipos_pago']) !!}
                            <td>
							{!! Form::text ('nombre',null,
							['placeholder'=>'Ingresa la información','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Guardar Tipo de Pago') !!}
							</td>
						{!! Form::close() !!}   
						</tr>
                    </tbody>
				</table>
            </div>
        </div>  
				<br />
				<h2><a href="{!! asset('tipos_pago') !!}">REGRESAR</a></h2>
				<br />      
    </div> 
@endsection()