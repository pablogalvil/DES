<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Organizaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color:rgb(137, 255, 235);
        }
        .navbar .nav-link {
            color:rgb(0, 0, 0);
            margin-right: 15px;
        }
        .navbar .nav-link:hover {
            color: rgb(255, 252.4647887324, 215);
        }
        .navbar .navbar-brand {
            font-weight: bold;
            color:rgb(0, 0, 0);
        }
        .navbar .navbar-brand:hover {
            color: rgb(255, 252.4647887324, 215);
        }
        .margen{
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Organizaciones</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/unidades">Unidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/locales">Locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rivalidades">Rivalidades</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="margen text-center">Lista de Organizaciones</h1>
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