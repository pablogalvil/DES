<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form method="POST" action="/">
        <h2>Iniciar Sesión</h2>
        <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
        <br>
        <label for="contrasenia" class="form-label">Contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia" class="form-control" required>
        <br>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        <a href="/registro" class="btn btn-secondary">¿No tienes cuenta?</a>
    </form>
</body>
</html>