<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $moneda1_user1 = rand(1, 2);
        $moneda2_user1 = rand(1, 2);

        $moneda1_user2 = rand(1, 2);
        $moneda2_user2 = rand(1, 2);

        if ($moneda1_user1 == 1 && $moneda2_user1 == 1 && ($moneda1_user2 != 1 || $moneda2_user2 != 1)){
            echo ("El ganador es el jugador 1");
        }else if ($moneda1_user2 == 1 && $moneda2_user2 == 1 && ($moneda1_user1 != 1 || $moneda2_user1 != 1)){
            echo ("El ganador es el jugador 2");
        }else{
            echo ("Empate");
        }
    ?>
</body>
</html>