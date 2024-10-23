<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $empezado = 1;
        if(isset($_POST["empezado"])){
            $tipos = ["piedra", "papel", "tijeras", "lagarto", "spock"];

            $tipo_aleatorio = rand(0, 4);

            $tipo_aleatorio2 = rand(0, 4);

            echo "<h1>Las manos son :</h1><br>";
            echo '<img src="img/'.$tipos[$tipo_aleatorio].'.png">';
            echo '<img src="img/'.$tipos[$tipo_aleatorio2].'.png">';

            echo "<br>";

            if ($tipo_aleatorio == $tipo_aleatorio2){
                echo "<h1>Empate</h1>";

            }else if (($tipo_aleatorio == 0 && $tipo_aleatorio2 == 2) || 
            ($tipo_aleatorio == 0 && $tipo_aleatorio2 == 3)){
                echo "<h1>Gana el usuario 1</h1>";

            }else if (($tipo_aleatorio == 1 && $tipo_aleatorio2 == 0) ||
            ($tipo_aleatorio == 1 && $tipo_aleatorio2 == 4)){
                echo "<h1>Gana el usuario 1</h1>";

            }else if (($tipo_aleatorio == 2 && $tipo_aleatorio2 == 1) ||
            ($tipo_aleatorio == 2 && $tipo_aleatorio2 == 3)){
                echo "<h1>Gana el usuario 1</h1>";

            }else if (($tipo_aleatorio == 3 && $tipo_aleatorio2 == 4) ||
            ($tipo_aleatorio == 3 && $tipo_aleatorio2 == 1)){
                echo "<h1>Gana el usuario 1</h1>";

            }else if (($tipo_aleatorio == 4 && $tipo_aleatorio2 == 2) ||
            ($tipo_aleatorio == 4 && $tipo_aleatorio2 == 0)){
                echo "<h1>Gana el usuario 1</h1>";

            }else{
                echo "<h1>Gana el usuario 2</h1>";
            }
        }
    ?>
    <form action="ejercicio6.php" method="post">
        <input type="hidden" name="empezado" value="<?php echo $empezado; ?>">
        <button type="submit">Jugar</button>
    </form>
</body>
</html>