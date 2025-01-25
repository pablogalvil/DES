<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Unidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Lista de Unidades</h1>
    <a href="/unidades/crear" class="btn btn-success mb-3">Agregar Nueva Unidad</a>

    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Rango</th>
            <th>Ubicacion</th>
            <th>Antiguedad</th>
            <th>ID de su Organizacion</th>
            <th></th>
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
                <td>
                    <a href="/unidades/<?= $unidad['idunidad'] ?>" class="btn btn-info btn-sm">Ver</a>
                    <a href="/unidades/<?= $unidad['idunidad'] ?>/modificar" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/unidades/<?= $unidad['idunidad'] ?>/eliminar" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </div>
</body>
</html>