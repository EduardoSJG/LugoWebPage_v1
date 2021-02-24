@extends('template.tableMaster')
@section('contenido_central')

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Ventas <b>Index</b></h2></div>
                        <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href='ventas/create';"><i class="fa fa-plus"></i> &nbsp;&nbsp;Crear nueva venta</button>
					</div>
                    </div>
				</div>
				<br />
                <table id="tabla" class="table table-striped table-hover table-bordered">
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
							<th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($ventas as $venta)
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
                            <td>
                                <a href="{!! 'ventas/'.$venta->id !!}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{!! 'ventas/'.$venta->id.'/edit' !!}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <!--<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>-->
								{!! Form::open(['method' => 'DELETE' , 'url' => '/ventas/'.$venta->id]) !!}
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

