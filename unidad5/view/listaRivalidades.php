<!DOCTYPE html>
<html lang="en">
    <?php 
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Rivalidades</title>
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
            <a class="navbar-brand" href="#">Rivalidades</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/listaOrganizaciones/1">Organizaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/unidades">Unidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/locales">Locales</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="margen text-center">Lista de Rivalidades</h1>
        <a href="/rivalidades/crear" class="btn btn-success mb-3">Agregar Nueva Rivalidad</a>

        <table class="table table-bordered">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>ID de la organizacion</th>
                <th>ID de la Organizacion Rival</th>
                <th>Zona de conflicto</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($rivalidades as $rivalidad): ?>
                <tr>
                    <td><?= $rivalidad['idrivalidad'] ?></td>
                    <td><?= $rivalidad['idorganizacion'] ?></td>
                    <td><?= $rivalidad['idorganizacionrival'] ?></td>
                    <td><?= $rivalidad['zonaconflicto'] ?></td>
                    <td>
                        <a href="/rivalidades/<?= $rivalidad['idrivalidad'] ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="/rivalidades/<?= $rivalidad['idrivalidad'] ?>/modificar" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/rivalidades/<?= $rivalidad['idrivalidad'] ?>/eliminar" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</body>
</html>