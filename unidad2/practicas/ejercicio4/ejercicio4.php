<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $monedas = ["Cara", "Cruz"];

        $moneda1_user1 = rand(0, 1);
        $moneda2_user1 = rand(0, 1);

        $moneda1_user2 = rand(0, 1);
        $moneda2_user2 = rand(0, 1);

        echo "Monedas del usuario 1 : <br>";

        echo '<img src="img/'.$monedas[$moneda1_user1].'.png">';
        echo '<img src="img/'.$monedas[$moneda2_user1].'.png">';

        echo "<br>Monedas del usuario 2 : <br>";

        echo '<img src="img/'.$monedas[$moneda1_user2].'.png">';
        echo '<img src="img/'.$monedas[$moneda2_user2].'.png">';
        
        echo "<br>";

        if ($moneda1_user1 == 0 && $moneda2_user1 == 0 && ($moneda1_user2 != 0 || $moneda2_user2 != 0)){
            echo ("El ganador es el jugador 1");
        }else if ($moneda1_user2 == 0 && $moneda2_user2 == 0 && ($moneda1_user1 != 0 || $moneda2_user1 != 0)){
            echo ("El ganador es el jugador 2");
        }else{
            echo ("Empate");
        }
    ?>
</body>
</html>