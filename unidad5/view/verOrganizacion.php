<!DOCTYPE html>
<html lang="en">
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
    </table>

    <a href="/" class="btn btn-secondary">Volver al listado</a>
</div>
</body>
</html>