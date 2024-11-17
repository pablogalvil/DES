<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once("lib/funciones.php");
    //Dividimos el texto en lineas
    $texto = explode("\n", $_POST["texto"]);

    $estilo_div= explode("-", $texto[0]);
    $contador = 0;
    //estilo del div que contiene los margenes
    echo "<style>
        div{
            margin-top: ".$estilo_div[0]."px;
            margin-left: ".$estilo_div[1]."px;
        }
        </style>";
    echo "<div>";
    //LLamamos a la funcion para crear la galeria
    for($i = 1; $i < count($texto); $i++){
        crearGaleria($texto[$i], $i);
        $contador++;
        //Cada vez que llega al limite de imagenes, se cierra el div y se crea otro
        if($contador == $estilo_div[2]){
            $contador = 0;
            echo "</div>";
            echo "<div>";
        }
    }
    echo "</div>";
    ?>
</body>
</html>