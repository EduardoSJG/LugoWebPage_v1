@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Foro del Producto</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
                            <th>ID</th>
							<th>Producto</th>
							<th>Ruta</th>
							<th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $foto_productos->id !!}</td>
							<td>{!! $foto_productos->producto_id !!}</td>
							<td>{!! $foto_productos->ruta !!}</td>
							<td>{!! $foto_productos->status !!}</td>
						</tr>
                    </tbody>
				</table>
            </div>
        </div>        
				<br />
				<h2><a href="{!! asset('fotos_productos') !!}">REGRESAR</a></h2>
				<br />
    </div> 
@endsection()