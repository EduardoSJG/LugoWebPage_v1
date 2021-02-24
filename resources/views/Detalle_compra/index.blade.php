
@extends('template.tableMaster')
@section('contenido_central')

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Compra <b>Index</b></h2></div>
                        <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href='detalle_compra/create';"><i class="fa fa-plus"></i> &nbsp;&nbsp;Crear nuevo Detalle de Compra</button>
					</div>
                    </div>
				</div>
				<br />
                <table id="tabla" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
							<th>ID</th>
							<th>Compra</th>
							<th>Producto</th>
							<th>Cantidad</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>
                            <th>Estatus</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($detalle_compra as $detalle_compra)
                        <tr>
							<td>{!! $detalle_compra->id !!}</td>
							<td>{!! $detalle_compra->compra_id !!}</td>
                            <td>{!! $detalle_compra->productos->nombre !!}</td>
                            <td>{!! $detalle_compra->cantidad !!}</td>
                            <td>{!! $detalle_compra->precio_compra !!}</td>
                            <td>{!! $detalle_compra->precio_venta !!}</td>
							<td>{!! $detalle_compra->status !!}</td>
                            <td>
                                <a href="{!! 'detalle_compra/'.$detalle_compra->id !!}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{!! 'detalle_compra/'.$detalle_compra->id.'/edit' !!}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <!--<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>-->
								{!! Form::open(['method' => 'DELETE' , 'url' => '/detalle_compra/'.$detalle_compra->id]) !!}
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

