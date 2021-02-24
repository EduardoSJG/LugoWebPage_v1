@extends('template.tableMaster')
@section('contenido_central')

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Fotos Productos <b>Index</b></h2></div>
                        <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href='fotos_productos/create';"><i class="fa fa-plus"></i> &nbsp;&nbsp;Crear nueva foto de producto</button>
					</div>
                    </div>
				</div>
				<br />
                <table id="tabla" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
							<th>ID</th>
							<th>Producto</th>
							<th>Ruta</th>
                            <th>Fotos</th>
							<th>Estatus</th>
							<th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($fotos_productos as $foto_productos)
                        <tr>
							<td>{!! $foto_productos->id !!}</td>
							<td>{!! $foto_productos->productos->nombre !!}</td>
							<td>{!! $foto_productos->ruta !!}</td>
                            <td><img src="{!!$foto_productos->ruta !!}" alt="" width="200px" /></td>
							<td>{!! $foto_productos->status !!}</td>
                            <td>
                                <a href="{!! 'fotos_productos/'.$foto_productos->id !!}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{!! 'fotos_productos/'.$foto_productos->id.'/edit' !!}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <!--<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>-->
								{!! Form::open(['method' => 'DELETE' , 'url' => '/fotos_productos/'.$foto_productos->id]) !!}
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

