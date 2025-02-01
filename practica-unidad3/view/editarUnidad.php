<!DOCTYPE html>
<html lang="en">
<?php 
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Unidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Actualizar una Unidad</h1>

    <form method="POST" action="/unidades/modificar" class="mt-4">
        <div class="mb-3">
            <label for="rango" class="form-label">Rango</label>
            <input type="number" name="rango" id="rango" maxlength="2" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicacion</label>
            <input type="text" name="ubicacion" id="ubicacion" maxlength="50" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="antiguedad" class="form-label">Antiguedad</label>
            <input type="number" name="antiguedad" id="antiguedad" maxlength="3" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="idorganizacion" class="form-label">ID de la Organizacion</label>
            <input type="number" name="idorganizacion" id="idorganizacion" maxlength="3" class="form-control" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/unidades" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>