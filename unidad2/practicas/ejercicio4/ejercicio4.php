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
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <?php
        //Array con las 2 opciones que pueden salir
        $monedas = ["Cara", "Cruz"];

        //Generamos 2 monedas para cada usuario
        $moneda1_user1 = rand(0, 1);
        $moneda2_user1 = rand(0, 1);

        $moneda1_user2 = rand(0, 1);
        $moneda2_user2 = rand(0, 1);

        //Mostramos las monedas de cada usuario
        echo "Monedas del usuario 1 : <br>";

        echo '<img class="rounded" src="img/'.$monedas[$moneda1_user1].'.png">';
        echo '<img class="rounded" src="img/'.$monedas[$moneda2_user1].'.png">';

        echo "<br>Monedas del usuario 2 : <br>";

        echo '<img class="rounded" src="img/'.$monedas[$moneda1_user2].'.png">';
        echo '<img class="rounded" src="img/'.$monedas[$moneda2_user2].'.png">';
        
        echo "<br>";

        //Si el usuario 1 tiene 2 caras y el usuario 2 tiene solo 1 o ninguna, gana el usuario 1
        if ($moneda1_user1 == 0 && $moneda2_user1 == 0 && ($moneda1_user2 != 0 || $moneda2_user2 != 0)){
            echo ("El ganador es el jugador 1");
        }else if ($moneda1_user2 == 0 && $moneda2_user2 == 0 && ($moneda1_user1 != 0 || $moneda2_user1 != 0)){
            //Si el usuario 2 tiene 2 caras y el usuario 1 tiene solo 1 o ninguna, gana el usuario 2
            echo ("El ganador es el jugador 2");
        }else{
            //Si no se cumple ninguna, quedan en empate y se muestra un formulario con un boton para volver a jugar
            echo ("Empate");
            echo '<br><form action="ejercicio4.php" method="post"><button class="btn btn-success" type="submit">Volver a jugar</button></form>';
        }
    ?>
</body>
</html>