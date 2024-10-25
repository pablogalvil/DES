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
        //Genera la carta
        $num_aleatorio = rand(1, 13);
        $tipo_aleatorio = rand(0, 3);
        $num_aleatorio2 = rand(1, 13);
        $tipo_aleatorio2 = rand(0, 3);

        //Array que guarda los tipos de las cartas.
        $tipos = ["clubs", "diamonds", "hearts", "spades"];

        //Mostramos las cartas usando img y poniendo la ruta de cada carta.
        echo '<h1>Tus cartas son :</h1><br><img class="rounded" src="img/'.$num_aleatorio.'_of_'.$tipos[$tipo_aleatorio].'.png"> 
        <img class="rounded" src="img/'.$num_aleatorio2.'_of_'.$tipos[$tipo_aleatorio2].'.png">';

        //Cambio el valor para que salga 1 como la mayor
        if ($num_aleatorio == 1){
            $num_aleatorio = 14;
        }

        if ($num_aleatorio2 == 1){
            $num_aleatorio2 = 14;
        }

        //Condicional para ver cual es mayor, o si son iguales.
        if ($num_aleatorio == $num_aleatorio2){
            echo "<h1><br>Las dos cartas tienen un valor similar</h1>";
        } else if ($num_aleatorio > $num_aleatorio2){
            //Condicion para mostrar 1 debido al cambio anterior
            if ($num_aleatorio == 14){
                echo "<h1><br>La carta 1 es la mayor</h1>";
            }else{
                echo "<h1><br>La carta ".$num_aleatorio." es la mayor</h1>";
            }
        } else{
            //Condicion para mostrar 1 debido al cambio anterior
            if ($num_aleatorio2 == 14){
                echo "<h1><br>La carta 1 es la mayor</h1>";
            }else{
                echo "<h1><br>La carta ".$num_aleatorio2." es la mayor</h1>";
            }
        }
    ?>
    <form action="ejercicio3.php" method="post">
        <button class="btn btn-success" type="submit">Volver a jugar</button>
    </form>
</body>
</html>