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
        <form action="ejercicio7.php" method="post">
            <div class="mb-3">
                <label for="palabra1" class="form-label">Palabra 1:</label>
                <input type="text" class="form-control" name="palabra1" id="palabra1">
            </div>
            <div class="mb-3">
                <label for="palabra2" class="form-label">Palabra 2:</label>
                <input type="text" class="form-control" name="palabra2" id="palabra2">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>