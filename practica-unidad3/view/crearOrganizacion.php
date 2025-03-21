<!DOCTYPE html>
<html lang="en">
<?php 
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Organizacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Agregar Nueva Organizacion</h1>

    <form method="POST" action="/organizaciones/crear" enctype="multipart/form-data" class="mt-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
  
        <div class="mb-3">
            <label for="numrivales" class="form-label">Numero de rivales</label>
            <input type="number" name="numrivales" id="numrivales" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="pais" class="form-label">Pais</label>
            <input type="text" name="pais" id="pais" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="territorio" class="form-label">Territorio</label>
            <input type="text" name="territorio" id="territorio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">imagen</label>
            <input type="file" name="imagen" id="imagen" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/listaOrganizaciones/1" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>