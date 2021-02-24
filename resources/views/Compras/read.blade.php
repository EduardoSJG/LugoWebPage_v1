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
							<th>Proveedor</th>
                            <th>Fecha</th>
                            <th>Subtotal</th>
                            <th>IVA</th>
                            <th>Total</th>
                            <th>Users</th>
							<th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $compra->id !!}</td>
							<td>{!! $compra->id_proveedor !!}</td>
                            <td>{!! $compra->fecha !!}</td>
                            <td>{!! $compra->subtotal !!}</td>
                            <td>{!! $compra->iva !!}</td>
                            <td>{!! $compra->total !!}</td>
                            <td>{!! $compra->user_id !!}</td>
							<td>{!! $compra->status !!}</td>
						</tr>
                    </tbody>
				</table>
            </div>
        </div>  
				<br />
				<h2><a href="{!! asset('compras') !!}">REGRESAR</a></h2>
				<br />      
    </div> 
@endsection()