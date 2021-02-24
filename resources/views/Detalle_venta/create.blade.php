@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Crear Detalle de Venta</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
                                <th>Venta</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio de Compra</th>
                                <th>Precio de Venta</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open(['url'=>'/detalle_venta']) !!}
                        <td>
							{!! Form::select ('venta_id', $ventas->pluck('id')->all() , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
                            <td>
							{!! Form::select ('producto_id', $productos->pluck('nombre','id')->all() , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
                            <td>
							{!! Form::number ('cantidad', null ,
							['placeholder'=>'Ingresa la información','required']) !!}
							</td>
							<td>
							{!! Form::select ('precio_compra', 
							$productos->pluck('nombre','precio_compra')->all() , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
                            <td>
							{!! Form::select ('precio_venta', 
							$productos->pluck('nombre','precio_venta')->all() , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , null ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Guardar Detalle de Venta') !!}
							</td>
						{!! Form::close() !!}   
						</tr>
                    </tbody>
				</table>
            </div>
        </div>        
				<br />
				<h2><a href="{!! asset('detalle_venta') !!}">REGRESAR</a></h2>
				<br />
    </div> 
@endsection()