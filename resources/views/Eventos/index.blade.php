@extends('template.tableMaster')
@section('contenido_central')

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Eventos <b>Index</b></h2></div>
                        <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href='eventos/create';"><i class="fa fa-plus"></i> &nbsp;&nbsp;Crear un nuevo Evento</button>
					</div>
                    </div>
				</div>
				<br />
                <table id="tabla" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
							<th>ID</th>
							<th>Nombre</th>
                            <th>Descripción</th>
                            <th>Dirección</th>
                            <th>Fecha</th>
							<th>ID Boleto</th>
							<th>Estatus</th>
							<th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($eventos as $evento)
                        <tr>
							<td>{!! $evento->id !!}</td>
                            <td>{!! $evento->nombre !!}</td>
                            <td>{!! $evento->descripcion !!}</td>
                            <td>{!! $evento->direccion !!}</td>
                            <td>{!! $evento->fecha !!}</td>
                            <td>{!! $evento->id_boleto !!}</td>
                            <td>{!! $evento->status !!}</td>
                            <td>
                                <a href="{!! 'eventos/'.$evento->id !!}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{!! 'eventos/'.$evento->id.'/edit' !!}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <!--<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>-->
								{!! Form::open(['method' => 'DELETE' , 'url' => '/eventos/'.$evento->id]) !!}
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

