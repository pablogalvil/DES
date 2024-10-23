<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $tipos = ["Azul", "Rojo"];

        if(isset($_POST["carta_centro"])){
            $carta_centro = $_POST["carta_centro"];
        }else{
            $num_aleatorio = rand(1, 5);
            $tipo_aleatorio = rand(0, 1);
            $carta_centro = '<img src="img/'.$num_aleatorio.'_'.$tipos[$tipo_aleatorio].'.png">';
        }

        echo $carta_centro."<br>";

        if(isset($_POST["pulsada1"])){
            if($_POST["numero1"] == $num_aleatorio){
                echo "Ganaste";
            }else if($_POST["tipo1"] == $tipo_aleatorio){
                echo "Ganaste";
            }else{
                echo "Perdiste";
            }
        }else if(isset($_POST["pulsada2"])){
            if($_POST["numero2"] == $num_aleatorio){
                echo "Ganaste";
            }else if($_POST["tipo2"] == $tipo_aleatorio){
                echo "Ganaste";
            }else{
                echo "Perdiste";
            }
        }else if(isset($_POST["pulsada3"])){
            if($_POST["numero3"] == $num_aleatorio){
                echo "Ganaste";
            }else if($_POST["tipo3"] == $tipo_aleatorio){
                echo "Ganaste";
            }else{
                echo "Perdiste";
            }
        }else if(isset($_POST["pulsada4"])){
            if($_POST["numero4"] == $num_aleatorio){
                echo "Ganaste";
            }else if($_POST["tipo4"] == $tipo_aleatorio){
                echo "Ganaste";
            }else{
                echo "Perdiste";
            }
        }
    ?>
    <form action="ejercicio7.php" method="post">
        <input type="hidden" name="carta_centro" value="<?php echo $carta_centro?>">
        <div>
            <?php 
                $num_aleatorio1 = rand(1, 5);
                $tipo_aleatorio1 = rand(0, 1);
                echo '<input type="hidden" name="numero1" value="'.$num_aleatorio1.'">';
                echo '<input type="hidden" name="tipo1" value="'.$tipo_aleatorio1.'">';
                echo '<button type="submit" name="pulsada1">';
                    echo '<img src="img/'.$num_aleatorio1.'_'.$tipos[$tipo_aleatorio1].'.png">';
                echo '</button>';

                $num_aleatorio2 = rand(1, 5);
                $tipo_aleatorio2 = rand(0, 1);
                echo '<input type="hidden" name="numero2" value="'.$num_aleatorio2.'">';
                echo '<input type="hidden" name="tipo2" value="'.$tipo_aleatorio2.'">';
                echo '<button type="submit" name="pulsada2">';
                    echo '<img src="img/'.$num_aleatorio2.'_'.$tipos[$tipo_aleatorio2].'.png">';
                echo '</button>';

                $num_aleatorio3 = rand(1, 5);
                $tipo_aleatorio3 = rand(0, 1);
                echo '<input type="hidden" name="numero3" value="'.$num_aleatorio3.'">';
                echo '<input type="hidden" name="tipo3" value="'.$tipo_aleatorio3.'">';
                echo '<button type="submit" name="pulsada3">';
                    echo '<img src="img/'.$num_aleatorio3.'_'.$tipos[$tipo_aleatorio3].'.png">';
                echo '</button>';

                $num_aleatorio4 = rand(1, 5);
                $tipo_aleatorio4 = rand(0, 1);
                echo '<input type="hidden" name="numero4" value="'.$num_aleatorio4.'">';
                echo '<input type="hidden" name="tipo4" value="'.$tipo_aleatorio4.'">';
                echo '<button type="submit" name="pulsada4">';
                    echo '<img src="img/'.$num_aleatorio4.'_'.$tipos[$tipo_aleatorio4].'.png">';
                echo '</button>';
            ?>
        </div>
        <div>
            <button type="submit">Repetir baraja</button>
        </div>
    </form>
</body>
</html>