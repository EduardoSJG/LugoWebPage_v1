@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Entidad</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
							<th>Clave de Pais</th>
							<th>Nombre de Entidad</th>
							<th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
							<td>{!! $entidad->clave_pais !!}</td>
							<td>{!! $entidad->nombre !!}</td>
							<td>{!! $entidad->status !!}</td>
                        </tr>
                    </tbody>
				</table>
            </div>
        </div>     
				<br />
				<h2><a href="{!! asset('entidades') !!}">REGRESAR</a></h2>
				<br />   
    </div> 
@endsection()