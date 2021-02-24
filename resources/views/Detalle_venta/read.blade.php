@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Venta</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
                            <th>ID</th>
							<th>Venta</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio de Compra</th>
                            <th>Precio de Venta</th>
							<th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $detalle_venta->id !!}</td>
							<td>{!! $detalle_venta->venta_id !!}</td>
                            <td>{!! $detalle_venta->producto_id !!}</td>
                            <td>{!! $detalle_venta->cantidad !!}</td>
                            <td>{!! $detalle_venta->precio_compra !!}</td>
                            <td>{!! $detalle_venta->precio_venta !!}</td>
							<td>{!! $detalle_venta->status !!}</td>
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