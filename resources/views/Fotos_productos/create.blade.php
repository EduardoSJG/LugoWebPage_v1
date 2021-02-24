@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Crear Foto de Producto</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					{!! Form::open(['url'=>'/fotos_productos','enctype' => 'multipart/form-data']) !!}
					<thead>
							<tr>
                                <th>Producto</th>
                                <th>{!! Form::label ('file','Foto JPG, PNG, GIF') !!}</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
                            <td>
							{!! Form::select ('producto_id', $productos->pluck('nombre','id')->all() , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
		                    </td>
							<td>
							{!! Form::file ('file',null,
							['class'=>'form-control','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Guardar Foto de Producto') !!}
							</td>
						{!! Form::close() !!}   
						</tr>
                    </tbody>
				</table>
            </div>
        </div>       
				<br />
				<h2><a href="{!! asset('fotos_productos') !!}">REGRESAR</a></h2>
				<br /> 
    </div> 
@endsection()