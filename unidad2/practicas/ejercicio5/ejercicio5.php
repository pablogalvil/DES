<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Miramos si ya se ha creado el numero aleatorio o no, el cual guardo en el form
        if (isset($_POST["num_aleatorio"])){
            $num_aleatorio = $_POST["num_aleatorio"];
            $num_intentos = $_POST["num_intentos"];
        } else{
            $num_intentos = 0;
            $num_aleatorio = rand(1, 100);
        }
        if (isset($_POST["numero"])){
            $numero_usuario = $_POST["numero"];

            $diferencia = abs($numero_usuario - $num_aleatorio);

            if ($num_aleatorio == $numero_usuario){
                echo "Ganaste";
                $num_intentos = 0;
                $num_aleatorio = rand(1, 100);
            }else if ($num_intentos == 5){
                echo "Te quedaste sin intentos";
                $num_intentos = 0;
                $num_aleatorio = rand(1, 100);
            }else if ($diferencia <= 5){
                echo "Calentito totalis!";
                $num_intentos++;
            }else if ($num_aleatorio > $numero_usuario){
                echo "El numero es mayor!";
                $num_intentos++;
            }else{
                echo "El numero es menor!";
                $num_intentos++;
            }
        }
    ?>
    <form action="ejercicio5.php" method="post">
        <input type="hidden" name="num_aleatorio" value="<?php echo $num_aleatorio;?>">
        <input type="hidden" name="num_intentos" value="<?php echo $num_intentos;?>">
        <div>
            <label for="numero">Escribe un numero de 1 a 100</label>
            <input type="number" id="numero" name="numero">
        </div>
        <button type="submit">Intentar</button>
    </form>
</body>
</html>