@extends('template.tableMaster')
@section('contenido_central')

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Venta <b>Index</b></h2></div>
                        <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href='detalle_venta/create';"><i class="fa fa-plus"></i> &nbsp;&nbsp;Crear nuevo Detalle de Venta</button>
					</div>
                    </div>
				</div>
				<br />
                <table id="tabla" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
							<th>ID</th>
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
					@foreach($detalle_venta as $detalle_venta)
                        <tr>
							<td>{!! $detalle_venta->id !!}</td>
							<td>{!! $detalle_venta->venta_id !!}</td>
                            <td>{!! $detalle_venta->productos->nombre !!}</td>
                            <td>{!! $detalle_venta->cantidad !!}</td>
                            <td>{!! $detalle_venta->precio_compra !!}</td>
                            <td>{!! $detalle_venta->precio_venta !!}</td>
							<td>{!! $detalle_venta->status !!}</td>
                            <td>
                                <a href="{!! 'detalle_venta/'.$detalle_venta->id !!}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{!! 'detalle_venta/'.$detalle_venta->id.'/edit' !!}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <!--<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>-->
								{!! Form::open(['method' => 'DELETE' , 'url' => '/detalle_venta/'.$detalle_venta->id]) !!}
								<!--{!! Form::submit('Eliminar') !!}-->
                                {!! Form::button('<i class="material-icons">&#xE872;</i>',['type' => 'submit']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
                    </tbody>
				</table>
            </div>
        </div>
				<br />
				<h2><a href="{!! asset('index') !!}">REGRESAR AL INDEX</a></h2>
				<br />
    </div>     
@endsection()

