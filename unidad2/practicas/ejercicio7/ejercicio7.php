<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tipos = ["Azul", "Rojo"];

    if (isset($_POST["num_aleatorio_centro"])) {
        $num_aleatorio_centro = $_POST["num_aleatorio_centro"];
        $tipo_aleatorio_centro = $_POST["tipo_aleatorio_centro"];
        echo '<img src="img/' . $num_aleatorio_centro . '_' . $tipos[$tipo_aleatorio_centro] . '.png"><br>';
    } else {
        $num_aleatorio_centro = rand(1, 5);
        $tipo_aleatorio_centro = rand(0, 1);
        echo '<img src="img/' . $num_aleatorio_centro . '_' . $tipos[$tipo_aleatorio_centro] . '.png"><br>';
    }

    echo '<form action="ejercicio7.php" method="post">';
    for ($i = 0; $i < 4 ; $i++){
        $num_aleatorio = rand(1, 5);
        $tipo_aleatorio = rand(0, 1);
        echo '<button type="submit" name="pulsada" value="'.$num_aleatorio.' '.$tipo_aleatorio.' '.$num_aleatorio_centro.' '.$tipo_aleatorio_centro.'">';
        echo '<img src="img/' . $num_aleatorio . '_' . $tipos[$tipo_aleatorio] . '.png">';
        echo '</button>';
    }
    echo '</form>';

    if (isset($_POST["pulsada"])) {
        $pulsada = explode(" ", $_POST["pulsada"]);
        $num_pulsada = $pulsada[0];
        $tipo_pulsada = $pulsada[1];
        $num_centro = $pulsada[2];
        $tipo_centro = $pulsada[3];
        if ($num_pulsada == $num_centro || $tipo_pulsada == $tipo_centro) {
            echo "Ganaste";
        } else {
            echo "Perdiste";
        }
    } 
    ?>
    <form action="ejercicio7.php" method="post">
        <input type="hidden" name="num_aleatorio_centro" value="<?php echo $num_aleatorio_centro ?>">
        <input type="hidden" name="tipo_aleatorio_centro" value="<?php echo $tipo_aleatorio_centro ?>">
        <div>
            <button type="submit">Repetir baraja</button>
        </div>
    </form>
</body>

</html>