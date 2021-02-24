@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Producto</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
                            <th>ID</th>
							<th>Nombre</th>
                            <th>Descripción</th>
                            <th>Existencia</th>
                            <th>Precio de Compra</th>
                            <th>Precio de Venta</th>
                            <th>Categoria</th>
                            <th>Proveedor</th>
                            <th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $producto->id !!}</td>
							<td>{!! $producto->nombre !!}</td>
                            <td>{!! $producto->descripcion !!}</td>
                            <td>{!! $producto->existencia !!}</td>
                            <td>{!! $producto->precio_compra !!}</td>
                            <td>{!! $producto->precio_venta !!}</td>
                            <td>{!! $producto->categoria_id !!}</td>
                            <td>{!! $producto->id_proveedor !!}</td>
							<td>{!! $producto->status !!}</td>
						</tr>
                    </tbody>
				</table>
            </div>
        </div>     
				<br />
				<h2><a href="{!! asset('productos') !!}">REGRESAR</a></h2>
				<br />   
    </div> 
@endsection()