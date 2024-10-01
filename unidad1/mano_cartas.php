<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mano de poker</title>
</head>

<body>
    <?php
    //Array de cartas
    $carta = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K");
    //Array de tipos
    $tipo = array("diamantes","picas","corazones","treboles");
    //Array para las cartas usadas
    $carta_anterior = array(-1,-1,-1,-1,-1);
    //Array para los tipos usados
    $tipo_anterior = array(-1,-1,-1,-1,-1);

    //Bucle para generar las cartas
    for ($i = 0; $i < 5; $i++) {
        $seleccion_aleatoria = rand(0, 12);
        $seleccion_tipo = rand(0, 3);

        //Comprobamos que la carta dada no este entre las anteriores
        if(in_array($seleccion_aleatoria, $carta_anterior) && in_array($seleccion_tipo, $tipo_anterior)){
            //Si está, restamos a la i para que el bucle siga funcionando hasta que no salgan las mismas
            $i--;
            continue;
        } else {
            echo "Tu carta es " . $carta[$seleccion_aleatoria] . " de ".$tipo[$seleccion_tipo];

            //Guardamos la carta en el array
            $carta_anterior[$i] = $seleccion_aleatoria;
            $tipo_anterior[$i] = $seleccion_tipo;
        }
        echo "<br>";
    }
    ?>
</body>

</html>