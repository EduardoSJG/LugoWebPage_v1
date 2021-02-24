@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Detalle de Venta</h2></div>
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
						{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/detalle_venta/'.$detalle_venta->id]) !!}
                            <td>
							{!! Form::select ('venta_id', $ventas->pluck('id')->all() , $detalle_venta->venta_id ,
							['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
                            <td>
							{!! Form::select ('producto_id', $productos->pluck('nombre','id')->all() , $detalle_venta->producto_id ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
                            <td>
							{!! Form::number ('cantidad',$detalle_venta->cantidad,
							['placeholder'=>'Ingresa la información','required']) !!}
							</td>
							<td>
							{!! Form::select ('precio_compra', 
							$productos->pluck('nombre','precio_compra')->all() , $detalle_venta->precio_compra ,
							['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
                            <td>
							{!! Form::select ('precio_venta', 
							$productos->pluck('nombre','precio_venta')->all() , $detalle_venta->precio_venta ,
							['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , $detalle_venta->status ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Editar Detalle Venta') !!}
							
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