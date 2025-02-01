<!DOCTYPE html>
<html lang="en">
<?php 
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del local</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Detalles del local</h1>

    <table class="table table-bordered mt-4">
        <tr>
            <th>ID</th>
            <td><?= $local['idlocal'] ?></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><?= $local['nombre'] ?></td>
        </tr>
        <tr>
            <th>Tipo</th>
            <td><?= $local['tipo'] ?></td>
        </tr>
        <tr>
            <th>Ubicacion</th>
            <td><?=$local['ubicacion'] ?></td>
        </tr>
        <tr>
            <th>Año de creacion</th>
            <td><?= $local['aniocreacion'] ?></td>
        </tr>
        <tr>
            <th>ID de la Organizacion</th>
            <td><?= $local['idorganizacion'] ?></td>
        </tr>
    </table>

    <a href="/locales" class="btn btn-secondary">Volver al listado</a>
</div>
</body>
</html>