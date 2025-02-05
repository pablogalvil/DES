<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Entrenadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nif</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Puntos</th>
            <th>Posicion</th>
            <th>Altura</th>
            <th>ID Equipo</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($jugadores as $jugador): ?>
            <tr>
                <td><?= $jugador['idJugador'] ?></td>
                <td><?= $jugador['nif'] ?></td>
                <td><?= $jugador['nombre'] ?></td>
                <td><?= $jugador['edad'] ?> años</td>
                <td><?= $jugador['puntos'] ?></td>
                <td><?= $jugador['posicion'] ?></td>
                <td><?= $jugador['altura']?> cm</td>
                <td><?= $jugador['Equipo_idEquipo'] ?></td>
                <td>
                    <a href="/jugadores/<?= $jugador['idJugador'] ?>/traspasar" class="btn btn-warning btn-sm">Traspasar</a>
                    <a href="/entrenadores/<?= $entrenador["idEntrenador"] ?>/equipo/<?= $idTeam ?>/jugadores/<?= $jugador['idJugador'] ?>/despedir" class="btn btn-danger btn-sm">Despedir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a href="/jugadores/insertar" class="btn btn-success">Fichar Jugador</a>

    </div>
</body>
</html>