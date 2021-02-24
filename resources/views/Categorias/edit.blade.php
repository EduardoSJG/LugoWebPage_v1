@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Categoria</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/categorias/'.$categoria->id]) !!}
							<td>
							{!! Form::text ('nombre',$categoria->nombre,
							['placeholder'=>'Ingresa nombre de Categoria','required']) !!}
							</td>
							<td>
							{!! Form::text ('descripcion',$categoria->descripcion,
							['placeholder'=>'Ingresa descripcion','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , $categoria->status ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Editar Categoria') !!}
							
							</td>
						{!! Form::close() !!}
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