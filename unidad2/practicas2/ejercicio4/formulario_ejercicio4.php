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
        <form action="ejercicio4.php" method="POST">
            <div class="mb-3">
                <label for="limite" class="form-label">Elige un limite del 1 al 10 : </label>
                <input type="range" name="limite" id="limite" min="1" max="10" step="1" class="form-range">
            </div>
            <div class="mb-3">
                <label for="media" class="form-label">Media</label>
                <input type="checkbox" name="media" id="media" class="form-check-input">
            </div>
            <div class="mb-3">
                <label for="sucesion" class="form-label">Sucesion aritmetica</label>
                <input type="checkbox" name="sucesion" id="sucesion" class="form-check-input">
            </div>
            <div class="mb-3">
                <label for="factorial" class="form-label">Factorial</label>
                <input type="checkbox" name="factorial" id="factorial" class="form-check-input">
            </div>
            <div class="mb-3">
                <label for="texto" class="form-label">Introduce los datos, separados por comas</label>
                <textarea name="texto" id="texto" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
