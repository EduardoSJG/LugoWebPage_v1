@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Editar Compra</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
                                <th>Proveedor</th>
                                <th>Fecha</th>
                                <th>Subtotal</th>
                                <th>IVA</th>
                                <th>Total</th>
                                <th>Users</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/compras/'.$compra->id]) !!}
                            <td>
                            {!! Form::select ('id_proveedor', $proveedores->pluck('nombre','id')->all() , 
                            $compra->id_proveedor ,['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
                            <td>
                            {!! Form::date ('fecha',$compra->fecha,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('subtotal',$compra->subtotal,
                            ['placeholder'=>'Ingresa la información',
                            'step'=>'0.01','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('iva',$compra->iva,
                            ['placeholder'=>'Ingresa la información',
                            'step'=>'0.01','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('total',$compra->total,
                            ['placeholder'=>'Ingresa la información',
                            'step'=>'0.01','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('user_id', $users->pluck('nombre','id')->all() , 
                            $compra->user_id ,['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
							<td>
							{!! Form::select ('status', 
                            array('1'=>'Activo','0'=>'Baja') , $compra->status ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Editar Compra') !!}
							
							</td>
						{!! Form::close() !!}
						</tr>
                    </tbody>
				</table>
            </div>
        </div>       
				<br />
				<h2><a href="{!! asset('compras') !!}">REGRESAR</a></h2>
				<br /> 
    </div> 
@endsection()