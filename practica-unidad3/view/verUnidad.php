<!DOCTYPE html>
<html lang="en">
<?php 
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Unidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Detalles de la Unidad</h1>

    <table class="table table-bordered mt-4">
        <tr>
            <th>ID</th>
            <td><?= $unidad['idunidad'] ?></td>
        </tr>
        <tr>
            <th>Rango</th>
            <td><?= $unidad['rango'] ?></td>
        </tr>
        <tr>
            <th>Ubicacion</th>
            <td><?= $unidad['ubicacion'] ?></td>
        </tr>
        <tr>
            <th>Antiguedad</th>
            <td><?= $unidad['antiguedad'] ?></td>
        </tr>
        <tr>
            <th>ID de la Organizacion</th>
            <td><?= $unidad['idorganizacion'] ?></td>
        </tr>
    </table>

    <a href="/unidades" class="btn btn-secondary">Volver al listado</a>
</div>
</body>
</html>