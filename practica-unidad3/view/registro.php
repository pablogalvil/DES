<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("../img/fondo.jpg");
            background-size: cover;
        }
    </style>
</head>
<body>
<div class="card align-self-center text-center border border-black" style="width: 30rem; margin: auto; margin-top: 5%;">
    <h1 class="card-title">Registrarse</h1>

    <form method="POST" action="/registro" class="mt-4 card-body">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre (apodo)</label>
            <input type="text" name="nombre" id="nombre" class="form-control border border-black" required>
        </div>
        <div class="mb-3">
            <label for="importancia" class="form-label">Importancia</label>
            <select name="importancia" id="importancia" class="form-select border border-black">
                <?php
                for($i = 1; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="form-control border border-black" required>
        </div>
        <div>
            <label for="idunidad" class="form-label">ID de la Unidad</label>
            <select name="idunidad" id="idunidad" class="form-select border border-black">
                <?php 
                foreach ($unidades as $unidad) {
                    echo "<option value='".$unidad['idunidad']."'>".$unidad['idunidad']."</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="contrasenia" class="form-label">Contraseña</label>
            <input type="password" name="contrasenia" id="contrasenia" class="form-control border border-black" required>
        </div>
        <button type="submit" class="btn btn-success">Registrarse</button>
        <a href="/" class="btn btn-link">¿Ya tienes cuenta?</a>
    </form>
</div>
</body>
</html>