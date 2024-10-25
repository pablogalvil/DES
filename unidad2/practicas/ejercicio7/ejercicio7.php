<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    //Array con los tipos de cartas
    $tipos = ["Azul", "Rojo"];

    //Si el numero aleatorio del centro ya existe (guardado en el form al repetir baraja) lo guardamos y mostramos su carta
    if (isset($_POST["num_aleatorio_centro"])) {
        $num_aleatorio_centro = $_POST["num_aleatorio_centro"];
        $tipo_aleatorio_centro = $_POST["tipo_aleatorio_centro"];
        echo '<img class="rounded" src="img/' . $num_aleatorio_centro . '_' . $tipos[$tipo_aleatorio_centro] . '.png"><br>';
    } else {
        //Si no existe lo creamos y mostramos
        $num_aleatorio_centro = rand(1, 5);
        $tipo_aleatorio_centro = rand(0, 1);
        echo '<img class="rounded" src="img/' . $num_aleatorio_centro . '_' . $tipos[$tipo_aleatorio_centro] . '.png"><br>';
    }

    //Creamos formulario para los botones
    echo '<form action="ejercicio7.php" method="post">';
    //Bucle para generar los botones
    for ($i = 0; $i < 4 ; $i++){
        //Cada boton tiene un numero y tipo concreto, el cual mostramos dentro del boton
        $num_aleatorio = rand(1, 5);
        $tipo_aleatorio = rand(0, 1);
        echo '<button class="btn" type="submit" name="pulsada" value="'.$num_aleatorio.' '.$tipo_aleatorio.' '.$num_aleatorio_centro.' '.$tipo_aleatorio_centro.'">';
        echo '<img class="rounded" src="img/' . $num_aleatorio . '_' . $tipos[$tipo_aleatorio] . '.png">';
        echo '</button>';
    }
    echo '</form>';

    //Si el boton ha sido pulsado
    if (isset($_POST["pulsada"])) {
        //Usamos explode para sacar los valores del boton, guardados en el value del boton
        $pulsada = explode(" ", $_POST["pulsada"]);
        $num_pulsada = $pulsada[0];
        $tipo_pulsada = $pulsada[1];
        $num_centro = $pulsada[2];
        $tipo_centro = $pulsada[3];
        //Si el numero o el tipo de la carta pulsada es igual al del centro, gana
        if ($num_pulsada == $num_centro || $tipo_pulsada == $tipo_centro) {
            echo "Ganaste";
        } else {
            //Si no, pierde
            echo "Perdiste";
        }
    } 
    ?>
    <form action="ejercicio7.php" method="post">
        <!--Input escondido para poder pasar el valor de la carta del centro en caso de repetir baraja-->
        <input type="hidden" name="num_aleatorio_centro" value="<?php echo $num_aleatorio_centro ?>">
        <input type="hidden" name="tipo_aleatorio_centro" value="<?php echo $tipo_aleatorio_centro ?>">
        <div>
            <button type="submit">Repetir baraja</button>
        </div>
    </form>
</body>

</html>