@extends('template.tableMaster')
@section('contenido_central')

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Reportes <b>Index</b></h2>
                    </div>
                </div>
                <br />
            </div>

            <table id="tabla" class="table table-striped table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Reporte</th>
                    <th>Acciones</th>

                </tr>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Reporte Productos por Nombre</td>
                        <td><a href="{!! asset ('crear_reporte_x_nombre/1') !!}" >
                        <button  class="btn btn-primary">ver</button></a>
                        &nbsp;
                        <a href="{!! asset ('crear_reporte_x_nombre/2') !!}" >
                        <button class="btn btn-primary">Descargar</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Reporte Productos por ID</td>
                        <td><a href="{!! asset ('crear_reporte_id/1') !!}" >
                        <button  class="btn btn-primary">ver</button></a>
                       &nbsp;
                        <a href="{!! asset ('crear_reporte_id/2') !!}" >
                        <button  class="btn btn-primary">Descargar</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Reporte Paises</td>
                        <td><a href="{!! asset ('pdf_paises/1') !!}" >
                        <button  class="btn btn-primary">ver</button></a>
                       &nbsp;
                        <a href="{!! asset ('pdf_paises/2') !!}" >
                        <button  class="btn btn-primary">Descargar</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Reporte de Usuarios</td>
                        <td><a href="{!! asset ('pdf_users/1') !!}" >
                        <button  class="btn btn-primary">ver</button></a>
                       &nbsp;
                        <a href="{!! asset ('pdf_users/2') !!}" >
                        <button  class="btn btn-primary">Descargar</button></a>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
    
    <br />
            <br />
            <h2><a href="{!! asset('index') !!}">REGRESAR AL INDEX</a></h2>
            <br />
</div>
@endsection()