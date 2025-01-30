<!DOCTYPE html>
<html lang="es">
<?php 
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Locales</title>
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
            <a class="navbar-brand" href="#">Locales</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Organizaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/unidades">Unidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rivalidades">Rivalidades</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="margen text-center">Lista de Locales</h1>
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