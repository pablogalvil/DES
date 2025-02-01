<!DOCTYPE html>
<html lang="en">
<?php 
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Rivalidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Detalles de la Rivalidad</h1>

    <table class="table table-bordered mt-4">
        <tr>
            <th>ID</th>
            <td><?= $rivalidad['idrivalidad'] ?></td>
        </tr>
        <tr>
            <th>ID de la Organizacion</th>
            <td><?= $rivalidad['idorganizacion'] ?></td>
        </tr>
        <tr>
            <th>ID de la Organizacion Rival</th>
            <td><?=$rivalidad['idorganizacionrival'] ?></td>
        </tr>
        <tr>
            <th>Zona de Conflicto</th>
            <td><?= $rivalidad['zonaconflicto'] ?></td>
        </tr>
    </table>

    <a href="/rivalidades" class="btn btn-secondary">Volver al listado</a>
</div>
</body>
</html>