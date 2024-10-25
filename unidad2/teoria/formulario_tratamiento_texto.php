<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg">
        <form action="ejemplo_tratamiento_texto.php" method="post">
            <div class="mb-3">
                <label for="palabra" class="form-label">Introduce una palabra</label>
                <input type="text" name="palabra" id="palabra" class="form-control">
            </div>
            <div class="mb-3 col-sm-6">
                <label for="texto" class="form-label">Introduce un texto</label>
                <textarea name="texto" id="texto" rows="4" cols="50" class="form-control"></textarea>
            </div>
            <div class="mb-3 form-check">
                <label for="ignorarMayusculas" class="form-label">¿Quieres ignorar mayúsculas?</label>
                <input type="checkbox" name="ignorarMayusculas" id="ignorarMayusculas" class="form-check-input">
            </div>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>