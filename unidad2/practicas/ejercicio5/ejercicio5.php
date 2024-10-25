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
        //Miramos si ya se ha creado el numero aleatorio o no, el cual guardo en el form
        if (isset($_POST["num_aleatorio"])){
            //Le damos el valor del form
            $num_aleatorio = $_POST["num_aleatorio"];
            $num_intentos = $_POST["num_intentos"];
        } else{
            //Si no los hay, significa que es el primer intento, por lo cual los creamos
            $num_intentos = 0;
            $num_aleatorio = rand(1, 100);
        }
        //Si el usuario ha introducido un numero
        if (isset($_POST["numero"])){
            //Guardo su numero
            $numero_usuario = $_POST["numero"];
            
            //Hacemos la diferencia entre el numero del usuario y el aleatorio
            $diferencia = abs($numero_usuario - $num_aleatorio);

            //Si son iguales, gana el usuario
            if ($num_aleatorio == $numero_usuario){
                echo "Ganaste";
                $num_intentos = 0;
                $num_aleatorio = rand(1, 100);
            }else if ($num_intentos == 5){
                //Si está en el último intento, miramos primero que haya ganado, y en caso de no ganar cambiamos el numero aleatorio y
                //Reiniciamos el numero de intentos, haciendo así el juego infinito hasta que el usuario cierre la página
                echo "Te quedaste sin intentos";
                $num_intentos = 0;
                $num_aleatorio = rand(1, 100);
            }else if ($diferencia <= 5){
                //Si el valor absoluto de la diferencia es menor o igual a 5, mostramos Calentito totalis!
                echo "Calentito totalis!";
                $num_intentos++;
            }else if ($num_aleatorio > $numero_usuario){
                //Si el numero aleatorio es mayor que el numero del usuario, mostramos que es mayor
                echo "El numero es mayor!";
                $num_intentos++;
            }else{
                //Si no se ha cumplido ninguna condición, significa que el numero aleatorio es menor que el numero del usuario
                //Por lo que mostramos que es menor
                echo "El numero es menor!";
                $num_intentos++;
            }
        }
    ?>
    <form action="ejercicio5.php" method="post">
        <!--Input escondido donde guardo el valor del numero y de los intentos hechos por el usuario cada vez que se introduce un numero-->
        <input type="hidden" name="num_aleatorio" value="<?php echo $num_aleatorio;?>">
        <input type="hidden" name="num_intentos" value="<?php echo $num_intentos;?>">
        <div>
            <label class="form-label" for="numero">Escribe un numero de 1 a 100</label>
            <br>
            <input class="form-control-sm" type="number" id="numero" name="numero">
        </div>
        <br>
        <button class="btn btn-success" type="submit">Intentar</button>
    </form>
</body>
</html>