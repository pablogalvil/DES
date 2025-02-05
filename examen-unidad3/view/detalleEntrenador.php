<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Entrenador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center">Detalles del Entrenador</h1>

    <table class="table table-bordered mt-4">
        <tr>
            <th>ID</th>
            <td><?= $entrenador['idEntrenador'] ?></td>
        </tr>
        <tr>
            <th>Nif</th>
            <td><?= $entrenador['nif'] ?></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><?= htmlspecialchars($entrenador['nombre']) ?></td>
        </tr>
        <tr>
            <th>Edad</th>
            <td><?= $entrenador['edad'] ?> años</td>
        </tr>
        <tr>
            <th>Altura</th>
            <td><?= $entrenador['altura'] ?> cm</td>
        </tr>
    </table>

    <form action="/entrenadores/<?= $entrenador['idEntrenador'] ?>/cargarJugadores" method="POST">
        <select name="equipo" id="equipo" class="form-select">
            <?php 
            foreach($equipos as $equipo){
                echo "<option value='".$equipo["idEquipo"]."'>".$equipo["nombre"]."</option>";
            }
            ?>
        </select>
        <button type="submit" class="btn btn-success">Cargar</button>
    </form>

    <?php if(isset($jugadores)){
        include('detalleJugador.php');
    }?>

    <a href="/" class="btn btn-secondary">Volver al listado</a>
</div>
</body>
</html>