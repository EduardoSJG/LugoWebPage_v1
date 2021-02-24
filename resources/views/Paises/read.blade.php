@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Pais</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
							<th>Nombre</th>
							<th>Clave</th>
							<th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
							<td>{!! $pais->nombre !!}</td>
							<td>{!! $pais->clave !!}</td>
							<td>{!! $pais->status !!}</td>
						</tr>
                    </tbody>
				</table>
            </div>
        </div>      
				<br />
				<h2><a href="{!! asset('paises') !!}">REGRESAR</a></h2>
				<br />  
    </div> 
@endsection()