@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Crear Producto</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Existencia</th>
                                <th>Precio de Compra</th>
                                <th>Precio de Venta</th>
                                <th>Categoria</th>
                                <th>Proveedor</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open(['url'=>'/productos']) !!}
                        <td>
                            {!! Form::text ('nombre',null,
                            ['class'=>'form-control','placeholder'=>'Ingresa la información','required']) !!}
							</td>
							<td>
                            {!! Form::text ('descripcion',null,
                            ['class'=>'form-control','placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('existencia',null,
                            ['class'=>'form-control','placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('precio_compra',null,
                            ['class'=>'form-control','placeholder'=>'Ingresa la información',
                            'step'=>'0.01','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('precio_venta',null,
                            ['class'=>'form-control','placeholder'=>'Ingresa la información',
                            'step'=>'0.01','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('categoria_id', $categorias->pluck('nombre','id')->all() ,null ,
                            ['class'=>'form-control','placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('id_proveedor', $proveedores->pluck('nombre','id')->all() ,null ,
                            ['class'=>'form-control','placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
                            array('1'=>'Activo','0'=>'Baja') , null,
                            ['class'=>'form-control','placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Guardar Producto') !!}
							</td>
						{!! Form::close() !!}   
						</tr>
                    </tbody>
				</table>
            </div>
        </div>     
				<br />
				<h2><a href="{!! asset('productos') !!}">REGRESAR</a></h2>
				<br />   
    </div> 
@endsection()