<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>altura</title>
</head>

<body>
    <div>
        <form method="get" action="altura.php">
            <div>
                <label for="nom1">Introduce el primer nombre</label>
                <input type="text" name="nom1" id="nom1">
                <br>
                <label for="altura1">Introduce su altura</label>
                <input type="number" step="0.001" name="altura1" id="altura1">
            </div>
            <br>
            <div>
                <label for="nom2">Introduce el segundo nombre</label>
                <input type="text" name="nom2" id="nom2">
                <br>
                <label for="altura2">Introduce su altura</label>
                <input type="number" step="0.001" name="altura2" id="altura2">
            </div>
            <br>
            <div>
                <label for="nom3">Introduce el tercer nombre</label>
                <input type="text" name="nom3" id="nom3">
                <br>
                <label for="altura3">Introduce su altura</label>
                <input type="number" step="0.001" name="altura3" id="altura3">
            </div>
            <br>
            <div>
                <label for="nom4">Introduce el cuarto nombre</label>
                <input type="text" name="nom4" id="nom4">
                <br>
                <label for="altura4">Introduce su altura</label>
                <input type="number" step="0.001" name="altura4" id="altura4">
            </div>
            <br>
            <div>
                <label for="nom5">Introduce el quinto nombre</label>
                <input type="text" name="nom5" id="nom5">
                <br>
                <label for="altura5">Introduce su altura</label>
                <input type="number" step="0.001" name="altura5" id="altura5">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <?php
    //Compruebo que estan todos los valores antes de mostrar nada
    if (isset($_GET["nom1"]) && isset($_GET["altura1"]) && isset($_GET["nom2"]) && isset($_GET["altura2"]) && isset($_GET["nom3"]) && isset($_GET["altura3"]) && isset($_GET["nom4"]) && isset($_GET["altura4"]) && isset($_GET["nom5"]) && isset($_GET["altura5"])){
        
        //Guardo las alturas
        $altura1 = (float)$_GET["altura1"];
        $altura2 = (float)$_GET["altura2"];
        $altura3 = (float)$_GET["altura3"];
        $altura4 = (float)$_GET["altura4"];
        $altura5 = (float)$_GET["altura5"];
        
        //Hago la media
        $media = ($altura1+$altura2+$altura3+$altura4+$altura5)/5;
        
        //Guardo la altura máxima
        $altura_max = max($altura1, $altura2, $altura3, $altura4, $altura5);

        echo "<br>La altura media es : ".round($media,3);
        
        //Compruebo cual es la altura máxima y mostramos el nombre del más alto
        if ($altura_max == $altura1){
            //Le pongo int para que no tenga decimales ya que deja 3 decimales
            echo "<br>El más alto es ".$_GET["nom1"]." con ".(int)($altura1*100)."cm";
        }else if ($altura_max == $altura2){
            echo "<br>El más alto es ".$_GET["nom2"]." con ".(int)($altura2*100)."cm";
        }else if ($altura_max == $altura3){
            echo "<br>El más alto es ".$_GET["nom3"]." con ".(int)($altura3*100)."cm";
        }else if ($altura_max == $altura4){
            echo "<br>El más alto es ".$_GET["nom4"]." con ".(int)($altura4*100)."cm";
        }else{
            echo "<br>El más alto es ".$_GET["nom5"]." con ".(int)($altura5*100)."cm";
        }
    }
    ?>
</body>

</html>