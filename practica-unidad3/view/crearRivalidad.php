<!DOCTYPE html>
<html lang="en">
<?php 
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Rivalidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Agregar Nueva Rivalidad</h1>

    <form method="POST" action="/rivalidades/crear" class="mt-4">
        <div class="mb-3">
            <label for="idorganizacion" class="form-label">ID de la Organizacion</label>
            <input type="number" name="idorganizacion" id="idorganizacion" maxlength="3" class="form-control" required>
        </div>
  
        <div class="mb-3">
            <label for="idorganizacionrival" class="form-label">ID de la Organizacion Rival</label>
            <input type="number" name="idorganizacionrival" id="idorganizacionrival" maxlength="3" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="zonaconflicto" class="form-label">Zona de conflicto</label>
            <input type="text" name="zonaconflicto" id="zonaconflicto" maxlength="50" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/listaRivalidades/1" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>