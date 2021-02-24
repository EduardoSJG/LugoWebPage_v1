
@extends('template.tableMaster')
@section('contenido_central')

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Tipos de Pago <b>Index</b></h2></div>
                        <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href='tipos_pago/create';"><i class="fa fa-plus"></i> &nbsp;&nbsp;Crear un nuevo Tipo de Pago</button>
					</div>
                    </div>
				</div>
				<br />
                <table id="tabla" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Estatus</th>
							<th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($tipos_pago as $tipos_pago)
                        <tr>
							<td>{!! $tipos_pago->id !!}</td>
							<td>{!! $tipos_pago->nombre !!}</td>
							<td>{!! $tipos_pago->status !!}</td>
                            <td>
                                <a href="{!! 'tipos_pago/'.$tipos_pago->id !!}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{!! 'tipos_pago/'.$tipos_pago->id.'/edit' !!}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <!--<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>-->
								{!! Form::open(['method' => 'DELETE' , 'url' => '/tipos_pago/'.$tipos_pago->id]) !!}
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

