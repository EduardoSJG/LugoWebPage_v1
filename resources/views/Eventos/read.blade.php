@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Evento</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
                            <th>ID</th>
							<th>Nombre</th>
                            <th>Descripción</th>
                            <th>Dirección</th>
                            <th>Fecha</th>
							<th>ID Boleto</th>
							<th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $evento->id !!}</td>
                            <td>{!! $evento->nombre !!}</td>
                            <td>{!! $evento->descripcion !!}</td>
                            <td>{!! $evento->direccion !!}</td>
                            <td>{!! $evento->fecha !!}</td>
                            <td>{!! $evento->id_boleto !!}</td>
                            <td>{!! $evento->status !!}</td>
						</tr>
                    </tbody>
				</table>
            </div>
        </div>        
				<br />
				<h2><a href="{!! asset('eventos') !!}">REGRESAR</a></h2>
				<br />
    </div> 
@endsection()