<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        function posicion_x_ocurrencia($texto, $palabra, $numero_ocurrencia){
            $contador = 0;
            $pos = 0;
            while($contador<$numero_ocurrencia){
                $pos = strpos($texto, $palabra);
                //Si no encuentra la palabra indica que no hay hasta esa ocurrencia/repeticion
                if (!$pos) return -1;

                //Incrementamos el contador
                $contador++;
            }
        }
        $nombre = "Juanjo";
        $nota = 8.65456456;
        $texto = sprintf("%s tiene una nota jamon y 2 de jamos de %.2f. <br>", $nombre, $nota);

        $cantidad = 0;
        $texto2 = str_replace("jamon","pavo",$texto,$cantidad);

        echo $texto;
        echo $texto2;
        print "Se han encontrado $cantidad jamones en el texto y reemplazado";

        $texto3 = "Tenia yo una piña muy amarilla y otro una piña muy piña, que resulto una piña verde";
        
        $letra = chr(145);
    ?>
</body>
</html>