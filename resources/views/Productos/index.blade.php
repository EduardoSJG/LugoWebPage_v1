@extends('template.tableMaster')

@section('contenido_central')
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Productos <b>Index</b></h2>
                    </div>
                    <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" onclick="window.location.href='productos/create';"><i class="fa fa-plus"></i> &nbsp;&nbsp;Crear un nuevo Producto</button>
                    </div>
                </div>
            </div>
            <br />
            <table id="tabla" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
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
                    @foreach($productos as $producto)
                    <tr>
                        <td>{!! $producto->id !!}</td>
                        <td>{!! $producto->nombre !!}</td>
                        <td>{!! $producto->descripcion !!}</td>
                        <td>{!! $producto->existencia !!}</td>
                        <td>{!! $producto->precio_compra !!}</td>
                        <td>{!! $producto->precio_venta !!}</td>
                        <td>{!! $producto->categorias->nombre !!}</td>
                        <td>{!! $producto->proveedores->nombre !!}</td>
                        <td>{!! $producto->status !!}</td>
                        <td>
                            <a href="{!! 'productos/'.$producto->id !!}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="{!! 'productos/'.$producto->id.'/edit' !!}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <!--<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>-->
                            {!! Form::open(['method' => 'DELETE' , 'url' => '/productos/'.$producto->id]) !!}
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
    <div class="breadcrumb">
        <h3>Ajax</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="recent">
                    <h3>Selecciona producto y cantidad a editar</h3>
                </div>
                {!! Form::label
                ('cant','Cantidad a incrementar o decrementar:',
                ['class'=>'control-label']) !!}
                {!! Form::number
                ('cant',null,['required','class'=>'form-control']) !!}
                <br />
                {!! Form::label
                ('id_producto','Producto:',
                ['class'=>'control-label']) !!}
                {!! Form::select
                ('id_producto',$productos->pluck('nombre','id')->all(),
                null,['class'=>'form-control','placeholder'=>'Seleccionar...']) !!}
                <br />
                <button class="btn btn-primary" onclick="ejecutar(
                    1,
                    document.getElementById('cant').value,
                    document.getElementById('id_producto').value);">
                    <i class="fa fa-plus-circle"></i>
                    Incrementar
                </button>
                <button class="btn btn-success" onclick="ejecutar(
                        2,
                        document.getElementById('cant').value,
                        document.getElementById('id_producto').value);">
                    <i class="fa fa-minus-circle"></i>
                    Decrementar
                </button>
                <br />
                <div id="respuesta"></div>
                <br />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="recent">
                <h3>Selecciona un producto</h3>
            </div>
            {!! Form::label
            ('id_producto2','Producto:',
            ['class'=>'control-label']) !!}
            {!! Form::select
            ('id_producto2',$productos->pluck('nombre','id')->all(),
            null,['class'=>'form-control','placeholder'=>'Seleccionar...',
            'onchange'=>'llenar_campos(this.value);']) !!}
            <div id="campos">
                <div class='form-group'>
                    <label for='exis'>Cantidad para agregar a la existencia
                        actual: </label>
                    <input type='number' name='exis' id='exis' placeholder='Ingresa Existencia' class="form-control" />
                </div>
                <div class='form-group'>
                    <label for='exis'>Precio de Compra: </label>
                    <input type='text' name='pc' id='pc' value='' placeholder='Ingresa Precio de Compra' class="form-control" />
                </div>
                <div class='form-group'>
                    <label for='exis'>Precio de Venta: </label>
                    <input type='text' name='pv' id='pv' value='' placeholder='Ingresa Precio de Venta' class="form-control" />
                </div>
            </div>
            <button class="btn btn-primary" onclick="actualizar(
                    document.getElementById('id_producto2').value,
                    document.getElementById('exis').value,
                    document.getElementById('pc').value,
                    document.getElementById('pv').value);">
                Actualizar Producto
            </button>
            <br />
            <div id="respuesta_actualizar">
            </div>
        </div>
    </div>

    <br />
    <br />
    <h2><a href="{!! asset('index') !!}">REGRESAR AL INDEX</a></h2>
    <br />
</div>

@endsection()