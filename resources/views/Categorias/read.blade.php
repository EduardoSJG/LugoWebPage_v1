@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Categoria</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Estatus</th>   
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $categoria->id !!}</td>
							<td>{!! $categoria->nombre !!}</td>
							<td>{!! $categoria->descripcion !!}</td>
							<td>{!! $categoria->status !!}</td>
						</tr>
                    </tbody>
				</table>
            </div>
        </div>  
				<br />
				<h2><a href="{!! asset('categorias') !!}">REGRESAR</a></h2>
				<br />      
    </div> 
@endsection()