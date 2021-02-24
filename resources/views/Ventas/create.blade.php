@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Crear Venta</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
					<thead>
							<tr>
                                <th>Cliente</th>
                                <th>Fecha</th>
                                <th>Subtotal</th>
                                <th>IVA</th>
                                <th>Total</th>
                                <th>Tipo de Pago</th>
                                <th>Usuario</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
						{!! Form::open(['url'=>'/ventas']) !!}
                            <td>
                            {!! Form::select ('id_cliente', $clientes->pluck('nombre','id')->all() , null ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
                            {!! Form::date ('fecha',null,
                            ['placeholder'=>'Ingresa la información','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('subtotal',null,
                            ['placeholder'=>'Ingresa la información',
                            'step'=>'0.01','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('iva',null,
                            ['placeholder'=>'Ingresa la información',
                            'step'=>'0.01','required']) !!}
                            </td>
                            <td>
                            {!! Form::number ('total',null,
                            ['placeholder'=>'Ingresa la información',
                            'step'=>'0.01','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('id_tipo_pago', $tipos_pago->pluck('nombre','id')->all() , null ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
                            </td>
                            <td>
                            {!! Form::select ('user_id', $users->pluck('nombre','id')->all() , null ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::select ('status', 
                            array('1'=>'Activo','0'=>'Baja') , null ,
                            ['placeholder'=>'Seleccionar ...','required']) !!}
							</td>
							<td>
							{!! Form::submit('Guardar Venta') !!}
							</td>
						{!! Form::close() !!}   
						</tr>
                    </tbody>
				</table>
            </div>
        </div>
        <br />
		<h2><a href="{!! asset('ventas') !!}">REGRESAR</a></h2>
		<br />       
    </div> 
@endsection()