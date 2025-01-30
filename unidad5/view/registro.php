<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Registrarse</h1>

    <form method="POST" action="/registro" class="mt-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre (apodo)</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="importancia" class="form-label">Importancia</label>
            <select name="importancia" id="importancia">
                <?php

use Dotenv\Parser\Value;

                for($i = 1; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
        </div>
        <div>
            <label for="idunidad" class="form-label">ID de la Unidad</label>
            <select name="idunidad" id="idunidad">
                <?php 
                foreach ($unidades as $unidad) {
                    $selected = ($unidad['idunidad'] == $idunidad) ? "selected" : "";
                    if ($unidad['idunidad'] == $idunidad) {
                        $idorganizacion = $unidad['idorganizacion']; // Guarda la organización de la unidad seleccionada
                    }
                    echo "<option value='".$unidad['idunidad']."' $selected>".$unidad['idunidad']."</option>";
                }
                ?>
            </select>
        </div>
        <input type="hidden" name="idorganizacion" value="<?php echo $idorganizacion ?? '';?>">
        <div class="mb-3">
            <label for="contrasenia" class="form-label">Contrasenia</label>
            <input type="password" name="contrasenia" id="contrasenia" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Registrarse</button>
        <a href="/" class="btn btn-link">¿Ya tienes cuenta?</a>
    </form>
</div>
</body>
</html>