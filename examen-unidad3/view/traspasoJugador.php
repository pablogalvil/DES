<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traspasar Jugador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="/jugadores/traspasar" method="POST" class="mt-4">
        <h1>Traspasar Jugador</h1>
        <div class="mb-3">
            <label for="idEquipo" class="form-label">Selecciona el equipo al que quieres traspasarlo</label>
            <select name="idEquipo" id="idEquipo" class="form-select">
                <?php 
                foreach($equipos as $equipo){
                    echo "<option value='".$equipo["idEquipo"]."'>".$equipo["nombre"]."</option>";
                }
                ?>
            </select>
        </div>
        <input type="hidden" name="idJugador" value="<?php echo $id["id"] ?>">
        <button type="submit" class="btn btn-success">Traspasar</button>
    </form>
</body>
</html>