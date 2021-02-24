@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Foto de Producto</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/fotos_productos/'.$foto_productos->id,'enctype' => 'multipart/form-data']) !!}
					<thead>
							<tr>
								<th>{!! Form::label ('producto_id','Producto') !!}</th>
								<th>{!! Form::label ('file','Foto') !!}</th>
                                <th>{!! Form::label ('ruta','Ruta') !!}</th>
                                <th>{!! Form::label ('status','Estatus') !!}</th>
                                <th>Acciones</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
                            <td>
							{!! Form::select ('producto_id', $productos->pluck('nombre','id')->all() , 
							$foto_productos->producto_id ,['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::file ('file',$foto_productos->file,
							['class'=>'form-control','required']) !!}
							</td>
							<td>
							{!! Form::text ('ruta',$foto_productos->ruta,
							['placeholder'=>'Ingresa la información','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
							array('1'=>'Activo','0'=>'Baja') , $foto_productos->status ,
							['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Editar foto de producto') !!}
							
							</td>
						{!! Form::close() !!}
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