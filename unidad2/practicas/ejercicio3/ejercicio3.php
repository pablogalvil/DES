<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        img{
            width: 200px;
        }
    </style>
    <?php 
        //Genera la carta
        $num_aleatorio = (int) rand(1, 13);
        $tipo_aleatorio = (int) rand(0, 3);
        $num_aleatorio2 = (int) rand(1, 13);
        $tipo_aleatorio2 = (int) rand(0, 3);

        //Array que guarda los tipos de las cartas.
        $tipos = ["clubs", "diamonds", "hearts", "spades"];

        //Mostramos las cartas usando img y poniendo la ruta de cada carta.
        echo 'Tus cartas son : <br> <img src="img/'.$num_aleatorio.'_of_'.$tipos[$tipo_aleatorio].'.png"> 
        <img src="img/'.$num_aleatorio2.'_of_'.$tipos[$tipo_aleatorio2].'.png">';

        //Cambio el valor para que salga 1 como la mayor
        if ($num_aleatorio == 1){
            $num_aleatorio = 14;
        }

        if ($num_aleatorio2 == 1){
            $num_aleatorio2 = 14;
        }

        //Condicional para ver cual es mayor, o si son iguales.
        if ($num_aleatorio == $num_aleatorio2){
            echo "<br>Las dos cartas tienen un valor similar";
        } else if ($num_aleatorio > $num_aleatorio2){
            //Condicion para mostrar 1 debido al cambio anterior
            if ($num_aleatorio == 14){
                echo "<br>La carta 1 es la mayor";
            }else{
                echo "<br>La carta ".$num_aleatorio." es la mayor";
            }
        } else{
            //Condicion para mostrar 1 debido al cambio anterior
            if ($num_aleatorio2 == 14){
                echo "<br>La carta 1 es la mayor";
            }else{
                echo "<br>La carta ".$num_aleatorio2." es la mayor";
            }
        }
    ?>
</body>
</html>