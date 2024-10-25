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
        $empezado = 1;
        //Si empezado existe, significa que el jugador ha pulsado el boton
        if(isset($_POST["empezado"])){
            //Array con los tipos
            $tipos = ["piedra", "papel", "tijeras", "lagarto", "spock"];

            //Generamos una entre piedra, papel, tijeras, lagarto y spock aleatoriamente
            $tipo_aleatorio = rand(0, 4);

            $tipo_aleatorio2 = rand(0, 4);

            //Mostramos lo que ha sacado cada uno
            echo "<h1>Las manos son :</h1><br>";
            echo '<img class="rounded" src="img/'.$tipos[$tipo_aleatorio].'.png">';
            echo '<img class="rounded" src="img/'.$tipos[$tipo_aleatorio2].'.png">';

            echo "<br>";

            //Si son iguales, empatan
            if ($tipo_aleatorio == $tipo_aleatorio2){
                echo "<h1>Empate</h1>";

            }else if (($tipo_aleatorio == 0 && $tipo_aleatorio2 == 2) || 
            ($tipo_aleatorio == 0 && $tipo_aleatorio2 == 3)){
                //Si el usuario 1 tiene piedra y el 2 tiene tijeras o lagarto, gana el usuario 1
                echo "<h1>Gana el usuario 1</h1>";

            }else if (($tipo_aleatorio == 1 && $tipo_aleatorio2 == 0) ||
            ($tipo_aleatorio == 1 && $tipo_aleatorio2 == 4)){
                //Si el usuario 1 tiene papel y el 2 tiene piedra o spock, gana el usuario 1
                echo "<h1>Gana el usuario 1</h1>";

            }else if (($tipo_aleatorio == 2 && $tipo_aleatorio2 == 1) ||
            ($tipo_aleatorio == 2 && $tipo_aleatorio2 == 3)){
                //Si el usuario 1 tiene lagarto y el 2 tiene papel o lagarto, gana el usuario 1
                echo "<h1>Gana el usuario 1</h1>";

            }else if (($tipo_aleatorio == 3 && $tipo_aleatorio2 == 4) ||
            ($tipo_aleatorio == 3 && $tipo_aleatorio2 == 1)){
                //Si el usuario 1 tiene lagarto y el 2 tiene spock o papel, gana el usuario 1
                echo "<h1>Gana el usuario 1</h1>";

            }else if (($tipo_aleatorio == 4 && $tipo_aleatorio2 == 2) ||
            ($tipo_aleatorio == 4 && $tipo_aleatorio2 == 0)){
                //Si el usuario 1 tiene spock y el 2 tiene tijeras o piedra, gana el usuario 1
                echo "<h1>Gana el usuario 1</h1>";

            }else{
                //Si no se ha cumplido ninguna de las condiciones anteriores, significa que no gana el usuario 1 y tampoco hay empate.
                //Por ello el ganador es el usuario 2, el cual cumpliría alguna de las condiciones anteriormente mencionadas.
                echo "<h1>Gana el usuario 2</h1>";
            }
        }
    ?>
    <form action="ejercicio6.php" method="post">
        <!--Input escondido para saber si el jugador ha decidido empezar o no-->
        <input type="hidden" name="empezado" value="<?php echo $empezado; ?>">
        <button class="btn btn-success" type="submit">Jugar</button>
    </form>
</body>
</html>