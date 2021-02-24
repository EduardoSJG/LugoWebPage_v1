@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Compra</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
                            <th>ID</th>
							<th>Compra</th>
							<th>Producto</th>
							<th>Cantidad</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>
                            <th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $detalle_compra->id !!}</td>
							<td>{!! $detalle_compra->compra_id !!}</td>
                            <td>{!! $detalle_compra->producto_id !!}</td>
                            <td>{!! $detalle_compra->cantidad !!}</td>
                            <td>{!! $detalle_compra->precio_compra !!}</td>
                            <td>{!! $detalle_compra->precio_venta !!}</td>
							<td>{!! $detalle_compra->status !!}</td>
						</tr>
                    </tbody>
				</table>
            </div>
        </div>     
				<br />
				<h2><a href="{!! asset('detalle_compra') !!}">REGRESAR</a></h2>
				<br />   
    </div> 
@endsection()