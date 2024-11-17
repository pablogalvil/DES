<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function crearGaleria($texto, $num){
        //Separamos el texto por guiones
        $texto_separado = explode("-", $texto);
        $ancho = $texto_separado[0];
        $alto = $texto_separado[1];
        $estilo = $texto_separado[2];
        $imagen = $texto_separado[3];

        //Separamos el estilo por hashtag
        $estilo_separado = explode("#", $estilo);
        $borde = $estilo_separado[0];
        $color_borde = $estilo_separado[1];
        $sombra = $estilo_separado[2];
        if (isset($estilo_separado[3])){
            $efecto = $estilo_separado[3];
        }else{
            $efecto = " ";
        }

        //Creamos el estilo de la imagen
        echo "<style>";
        echo ".img_galeria".$num."{
                width: ".$ancho."px;
                height: ".$alto."px;
                border: ".$borde.";
                border-color: ".$color_borde.";
                box-shadow: ".$sombra.";
                margin : 20px;
                opacity: 50%;
            }";
        //Si se ha marcado el hover le damos el estilo
        if ($efecto == "S"){
            echo ".img_galeria".$num.":hover{
                    opacity: 100%;
                }";
        }
        echo "</style>";
        //Mostramos la imagen con su estilo
        echo '<img class="img_galeria'.$num.'" src="img/'.$imagen.'.jpg">';
    }
    ?>
</body>
</html>