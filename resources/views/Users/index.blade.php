@extends('template.tableMaster')
@section('contenido_central')

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Users <b>Index</b></h2></div>
                        <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href='users/create';"><i class="fa fa-plus"></i> &nbsp;&nbsp;Crear un nuevo Usuario</button>
					</div>
                    </div>
				</div>
				<br />
                <table id="tabla" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
							<th>ID</th>
                            <th>Nombre</th>
                            <th>Ap. Paterno</th>
                            <th>Ap. Materno</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Pais</th>
                            <th>Entidad</th>
                            <th>Tipo</th>
                            <th>Colonia</th>
                            <th>CP</th>
                            <th>Fecha Nac.</th>
                            <th>Username</th>
                            <th>Password</th>
							<th>Estatus</th>
							<th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($users as $user)
                        <tr>
							<td>{!! $user->id !!}</td>
                            <td>{!! $user->nombre !!}</td>
                            <td>{!! $user->ap_pat !!}</td>
                            <td>{!! $user->ap_mat !!}</td>
                            <td>{!! $user->email !!}</td>
                            <td>{!! $user->telefono !!}</td>
                            <td>{!! $user->direccion !!}</td>
                            <td>{!! $user->paises->nombre !!}</td>
                            <td>{!! $user->entidades->nombre !!}</td>
                            <td>{!! $user->tipos_usuario->nombre !!}</td>
                            <td>{!! $user->colonia !!}</td>
                            <td>{!! $user->cp !!}</td>
                            <td>{!! $user->fecha_naci !!}</td>
                            <td>{!! $user->username !!}</td>
                            <td>{!! $user->password !!}</td>
							<td>{!! $user->status !!}</td>
                            <td>
                                <a href="{!! 'users/'.$user->id !!}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{!! 'users/'.$user->id.'/edit' !!}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <!--<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>-->
								{!! Form::open(['method' => 'DELETE' , 'url' => '/users/'.$user->id]) !!}
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

