<!DOCTYPE html>
<html lang="en">
<?php 
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Organizacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Detalles de la Organizacion</h1>

    <table class="table table-bordered mt-4">
        <tr>
            <th>ID</th>
            <td><?= $organizacion['idorganizacion'] ?></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><?= $organizacion['nombre'] ?></td>
        </tr>
        <tr>
            <th>Numero de rivales</th>
            <td><?=$organizacion['numrivales'] ?></td>
        </tr>
        <tr>
            <th>Pais</th>
            <td><?= $organizacion['pais'] ?></td>
        </tr>
        <tr>
            <th>Territorio</th>
            <td><?= $organizacion['territorio'] ?></td>
        </tr>
        <tr>
            <th>Imagen</th>
            <td><img src='../img/<?php echo $organizacion['imagen'] ?>'></td>
        </tr>
    </table>
    <div class="container mt-4">
    <h1 class="text-center">Lista de Unidades</h1>
    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Rango</th>
            <th>Ubicacion</th>
            <th>Antiguedad</th>
            <th>ID de su Organizacion</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($unidades as $unidad): ?>
            <tr>
                <td><?= $unidad['idunidad'] ?></td>
                <td><?= $unidad['rango'] ?></td>
                <td><?= $unidad['ubicacion'] ?></td>
                <td><?= $unidad['antiguedad'] ?></td>
                <td><?= $unidad['idorganizacion']?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </div>

    <a href="/listaOrganizaciones/1" class="btn btn-secondary">Volver al listado</a>
</div>
</body>
</html>