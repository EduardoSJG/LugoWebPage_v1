@extends('template.tableMaster')
@section('contenido_central')

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Proveedores <b>Index</b></h2></div>
                        <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href='proveedores/create';"><i class="fa fa-plus"></i> &nbsp;&nbsp;Crear un nuevo Proveedor</button>
					</div>
                    </div>
				</div>
				<br />
                <table id="tabla" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
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
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($proveedores as $proveedor)
                        <tr>
                            <td>{!! $proveedor->id !!}</td>
                            <td>{!! $proveedor->nombre !!}</td>
                            <td>{!! $proveedor->rfc !!}</td> 			
                            <td>{!! $proveedor->razon_social !!}</td>
                            <td>{!! $proveedor->direccion !!}</td> 
                            <td>{!! $proveedor->email !!}</td> 
                            <td>{!! $proveedor->contacto !!}</td>
                            <td>{!! $proveedor->paises->nombre !!}</td>
                            <td>{!! $proveedor->entidades->nombre !!}</td>
                            <td>{!! $proveedor->cp !!}</td> 
                            <td>{!! $proveedor->colonia !!}</td> 
                            <td>{!! $proveedor->telefono !!}</td>
                            <td>{!! $proveedor->status !!}</td> 
                            <td>
                                <a href="{!! 'proveedores/'.$proveedor->id !!}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{!! 'proveedores/'.$proveedor->id.'/edit' !!}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <!--<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>-->
								{!! Form::open(['method' => 'DELETE' , 'url' => '/proveedores/'.$proveedor->id]) !!}
                                <!--{!! Form::submit('Eliminar') !!}-->
                                {!! Form::button('<i class="material-icons">&#xE872;</i>',['type' => 'submit']) !!}
                                {!! Form::close() !!}
							</td>
						</tr>
						@endforeach
                    </tbody>
				</table>
            </div>
        </div>   
				<br />
				<h2><a href="{!! asset('index') !!}">REGRESAR AL INDEX</a></h2>
				<br />
    </div>     
@endsection()

