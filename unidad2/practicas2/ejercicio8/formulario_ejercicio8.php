<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>
        <h1>Listado de peliculas</h1>
        <ul>
            <li>El golpe</li>
            <li>El padrino</li>
            <li>El pianista</li>
            <li>El senor de los anillos</li>
            <li>El silencio de los corderos</li>
            <li>Fallen</li>
            <li>Interestelar</li>
            <li>La milla verde</li>
            <li>Oppenheimer</li>
            <li>Shutter island</li>
        </ul>
    </div>
    <div>
        <form action="ejercicio8.php" method="POST">
            <div class="mb-3">
                <label for="texto" class="form-label">Introduce la imagen con este formato : ancho-alto-estilo(separado por # entre borde, color borde y sombra y opcionalmente efecto hover (S o N))-nombre</label>
                <textarea name="texto" id="texto" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>