@extends('template.tableMaster')
@section('contenido_central')

		<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalle de Usuario</h2></div>
                    </div>
				</div>
				<br />
                <table class="table table-striped table-hover table-bordered">
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
                        </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{!! $user->id !!}</td>
                            <td>{!! $user->nombre !!}</td>
                            <td>{!! $user->ap_pat !!}</td>
                            <td>{!! $user->ap_mat !!}</td>
                            <td>{!! $user->email !!}</td>
                            <td>{!! $user->telefono !!}</td>
                            <td>{!! $user->direccion !!}</td>
                            <td>{!! $user->id_pais !!}</td>
                            <td>{!! $user->id_entidad !!}</td>
                            <td>{!! $user->id_tipo_usu !!}</td>
                            <td>{!! $user->colonia !!}</td>
                            <td>{!! $user->cp !!}</td>
                            <td>{!! $user->fecha_naci !!}</td>
                            <td>{!! $user->username !!}</td>
                            <td>{!! $user->password !!}</td>
							<td>{!! $user->status !!}</td>
						</tr>
                    </tbody>
				</table>
            </div>
        </div>
				<br />
				<h2><a href="{!! asset('users') !!}">REGRESAR</a></h2>
				<br />     
    </div> 
@endsection()