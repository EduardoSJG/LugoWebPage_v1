@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Proovedores</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
				<thead>
                        <tr>
                            <th>Nombre</th>
                            <th>RFC</th> 			
                            <th>Razon Social</th>
                            <th>Direccion</th>
                            <th>Email</th>
                            <th>Contacto</th>
                            <th>Pais</th>
                            <th>Entidad</th>
                            <th>CP</th>
                            <th>Colonia</th>
                            <th>Telefono</th>
                            <th>Estatus</th>
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $proveedor->nombre !!}</td>
                            <td>{!! $proveedor->rfc !!}</td> 			
                            <td>{!! $proveedor->razon_social !!}</td>
                            <td>{!! $proveedor->direccion !!}</td> 
                            <td>{!! $proveedor->email !!}</td> 
                            <td>{!! $proveedor->contacto !!}</td>
                            <td>{!! $proveedor->id_pais !!}</td>
                            <td>{!! $proveedor->id_entidad !!}</td>
                            <td>{!! $proveedor->cp !!}</td> 
                            <td>{!! $proveedor->colonia !!}</td> 
                            <td>{!! $proveedor->telefono !!}</td>
                            <td>{!! $proveedor->status !!}</td>
                        </tr>
                    </tbody>
				</table>
            </div>
        </div>    
				<br />
				<h2><a href="{!! asset('proveedores') !!}">REGRESAR</a></h2>
				<br />    
    </div> 
@endsection()