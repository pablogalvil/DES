<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Locales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Lista de Locales</h1>
    <a href="/locales/crear" class="btn btn-success mb-3">Agregar Nuevo Local</a>

    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Ubicacion</th>
            <th>Año de Creacion</th>
            <th>ID de su Organizacion</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($locales as $local): ?>
            <tr>
                <td><?= $local['idlocal'] ?></td>
                <td><?= $local['nombre'] ?></td>
                <td><?= $local['tipo'] ?></td>
                <td><?= $local['ubicacion'] ?></td>
                <td><?= $local['aniocreacion'] ?></td>
                <td><?= $local['idorganizacion']?></td>
                <td>
                    <a href="/locales/<?= $local['idlocal'] ?>" class="btn btn-info btn-sm">Ver</a>
                    <a href="/locales/<?= $local['idlocal'] ?>/modificar" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/locales/<?= $local['idlocal'] ?>/eliminar" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </div>
</body>
</html>