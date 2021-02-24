<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <h2>Fecha: <?= $date ?></h2>
    <table id="tabla" class="table table-striped table-hover table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Email</th>
            <th>Pais</th>
            <th>Entidad</th>
            <th>Colonia</th>
            <th>Usuario</th>
        </tr>
        <?php foreach ($data as $var) 
        {
            
        ?>
        <tr>
            <td><?= $var->id ?></td>
            <td><?= $var->nombre ?></td>
            <td><?= $var->ap_pat ?></td>
            <td><?= $var->email ?></td>
            <td><?= $var->paises->nombre ?></td>
            <td><?= $var->entidades->nombre ?></td>
            <td><?= $var->colonia ?></td>
            <td><?= $var->username ?></td>

        </tr>
    <?php } ?>
    </table>
</body>
</html>
    