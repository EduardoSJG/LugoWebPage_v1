@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Leer la Venta</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
                            <th>ID</th>
							<th>Cliente</th>
                            <th>Fecha</th>
                            <th>Subtotal</th>
                            <th>IVA</th>
                            <th>Total</th>
                            <th>Tipo de Pago</th>
                            <th>Usuario</th>
							<th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $venta->id !!}</td>
							<td>{!! $venta->id_cliente !!}</td>
                            <td>{!! $venta->fecha !!}</td>
                            <td>{!! $venta->subtotal !!}</td>
                            <td>{!! $venta->iva !!}</td>
                            <td>{!! $venta->total !!}</td>
                            <td>{!! $venta->id_tipo_pago !!}</td>
                            <td>{!! $venta->user_id !!}</td>
							<td>{!! $venta->status !!}</td>
						</tr>
                    </tbody>
				</table>
				
            </div>
        </div>  
        <br />
		<h2><a href="{!! asset('ventas') !!}">REGRESAR</a></h2>
		<br />      
    </div> 
@endsection()