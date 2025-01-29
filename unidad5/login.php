<?php
session_start();
use App\utils\Utils;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $contrasenia = $_POST['contrasenia'];
    $stmt = $pdo->prepare("SELECT idmiembro, contrasenia FROM miembro WHERE nombre = :nombre");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->execute();

    $miembro = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($miembro && password_verify($contrasenia, $miembro['contrasenia'])) {
        $_SESSION['miembro_id'] = $miembro['idmiembro'];
        header("Location: index.php");
        exit;
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <h2>Iniciar Sesión</h2>
        <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="contrasenia">Contraseña:</label>
        <input type="password" name="contrasenia" required>
        <br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>