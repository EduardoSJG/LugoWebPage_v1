@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Tipos de Usuario</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
                            <th>ID</th>
							<th>Nombre</th>
							<th>Nivel</th>
							<th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
							<td>{!! $tipo_usuario->id !!}</td>
							<td>{!! $tipo_usuario->nombre !!}</td>
                            <td>{!! $tipo_usuario->nivel !!}</td>
                            <td>{!! $tipo_usuario->status !!}</td>
						</tr>
                    </tbody>
				</table>
            </div>
        </div>     
				<br />
				<h2><a href="{!! asset('tipos_usuario') !!}">REGRESAR</a></h2>
				<br />   
    </div> 
@endsection()