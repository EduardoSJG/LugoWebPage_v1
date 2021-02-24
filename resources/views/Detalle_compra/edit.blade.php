@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Detalle de Compra</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
                                <th>ID de Compra</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio Compra</th>
                                <th>Precio Venta</th>
                                <th>Estatus</th>
                                <th>Accion</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/detalle_compra/'.$detalle_compra->id]) !!}
                            <td>
                            {!! Form::select ('compra_id', $compras->pluck('id')->all() , 
                            $detalle_compra->compra_id ,['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('producto_id', $productos->pluck('nombre','id')->all() , 
                            $detalle_compra->producto_id ,['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
                            {!! Form::number ('cantidad',$detalle_compra->cantidad,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('precio_compra', 
                            $productos->pluck('nombre','precio_compra')->all() , 
                            $detalle_compra->precio_compra ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('precio_venta', 
                            $productos->pluck('nombre','precio_venta')->all() , 
                            $detalle_compra->precio_venta ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
							<td>
							{!! Form::select ('status', 
                            array('1'=>'Activo','0'=>'Baja') , $detalle_compra->status ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Editar Detalle de Compra') !!}
							
							</td>
						{!! Form::close() !!}
						</tr>
                    </tbody>
				</table>
            </div>
        </div>      
				<br />
				<h2><a href="{!! asset('detalle_compra') !!}">REGRESAR</a></h2>
				<br />  
    </div> 
@endsection()