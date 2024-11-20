<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="examen.php" method="post">
        <div>
            <label for="pais" class="form-check-label">Elige un pais</label>
            <select class="form-select" name="pais" id="pais">
                <option value="espana">Espana</option>
                <option value="francia">Francia</option>
                <option value="italia">Italia</option>
            </select>
        </div>
        <div>
            <label for="comunidad" class="form-check-label">Elige una comunidad autonoma</label>
            <select class="form-select" name="comunidad" id="comunidad">
                <option value="andalucia">Andalucia</option>
                <option value="valencia">Valencia</option>
                <option value="madrid">Madrid</option>
                <option value="galicia">Galicia</option>
            </select>
        </div>
        <div>
            <label for="tienda" class="form-check-label">Elige una tienda</label>
            <select class="form-select" name="tienda" id="tienda">
                <option value="natural">Tienda natural</option>
                <option value="plantar">Tienda plantar</option>
                <option value="regar">Tienda regar</option>
            </select>
        </div>
        <div>
            <label for="eliminar" class="form-label">Eliminar</label>
            <input type="checkbox" name="eliminar" id="eliminar" class="form-check-input">
        </div>
        <div>
            <label for="tiendas" class="form-label">Introduce las tiendas</label>
            <textarea name="tiendas" id="tiendas"></textarea>
        </div>
        <div>
            <label for="plantas" class="form-label">Introduce las plantas</label>
            <textarea name="plantas" id="plantas"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>