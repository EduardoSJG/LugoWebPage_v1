<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla</title>
</head>
<body>
    <h1>Lista de productos por nombre</h1>
    <h2>Fecha: <?= $date ?></h2>
    <table id="tabla" class="table table-striped table-hover table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Existencias</th>
            <th>ID Proveedor</th>
            <th>Proveedor</th>
        </tr>
        <?php foreach ($data as $prod) 
        {
            
        ?>
        <tr>
            <td><?= $prod->id ?></td>
            <td><?= $prod->nombre ?></td>
            <td><?= $prod->existencia ?></td>
            <td><?= $prod->id_proveedor ?></td>
            <td><?= $prod->proveedores->nombre ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
    