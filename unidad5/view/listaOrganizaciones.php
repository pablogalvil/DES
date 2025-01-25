<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Organizaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Lista de Organizaciones</h1>
    <a href="/organizaciones/crear" class="btn btn-success mb-3">Agregar Nueva Organizacion</a>

    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Numero de Rivales</th>
            <th>Pais</th>
            <th>Territorio</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($organizaciones as $organizacion): ?>
            <tr>
                <td><?= $organizacion['idorganizacion'] ?></td>
                <td><?= $organizacion['nombre'] ?></td>
                <td><?= $organizacion['numrivales'] ?></td>
                <td><?= $organizacion['pais'] ?></td>
                <td><?= $organizacion['territorio']?></td>
                <td>
                    <a href="/organizaciones/<?= $organizacion['idorganizacion'] ?>" class="btn btn-info btn-sm">Ver</a>
                    <a href="/organizaciones/<?= $organizacion['idorganizacion'] ?>/modificar" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/organizaciones/<?= $organizacion['idorganizacion'] ?>/eliminar" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </div>
</body>
</html>