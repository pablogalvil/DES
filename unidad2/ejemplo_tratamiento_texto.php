<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //Creamos la funcion para saber si es palindromo
    function es_palindromo($palabra)
    {
        if ($palabra == strrev($palabra)) {
            return true;
        } else {
            return false;
        }
    }

    //function es_palindromo_pablo($palabra)
    //{
    //    $cad_inversa = "";
    //    for ($i = strlen($palabra) - 1; $i >= 0; $i--) {
    //        $cad_inversa .= $palabra[$i];
    //    }
    //    
    //    //Devolvemos la cadena inversa
    //    return $cad_inversa;
    //}

    #Este fichero recibe de un formulario html dos datos, una palabra con un type text
    #y un texto de varias líneas con un textarea y un checkbox que diga si ignora o no mayúsculas
    #El programa contará la cantidad de palabras totales, la cantidad de palabras que sean palíndromos
    #la cantidad de veces que está la palabra que se recibe, la cantidad de lineas y la cantidad
    #de frases (cada frase tiene un punto al final)
    #Se devolverá en un array asociativo con todos los valores resultados
    if (isset($_POST["palabra"])) $palabra_buscar = $_POST["palabra"];
    if (isset($_POST["texto"])) $texto = $_POST["texto"];
    $ignorar_mayusculas = false;
    if (isset($_POST["ignorarMayusculas"])) {
        $ignorar_mayusculas = true;
    }

    //Separamos en lineas
    $lineas = explode("\n", $texto);

    //Asignamos la cantidad de lineas del texto a la clave numLineas
    $resultado["numLineas"] = count($lineas);

    $num_palabras = 0;
    $num_frases = 0;
    $num_palabra_buscar = 0;
    $num_palindromos = 0;

    //Recorremos cada linea
    foreach ($lineas as $linea) {
        //Separamos en palabras cada linea
        $palabras = explode(" ", $linea);

        //Guardamos la cantidad de palabras
        $num_palabras += count($palabras);

        //Para contar la cantidad de puntos
        //hago un explode de cada linea, separando por puntos
        //si el array resultante solo tiene un elemento implicca que no hay ningun punto
        //Si hay por ejemplo 3 puntos, el  array  tendrá 4 elementos
        //implica que restando 1 al count del explode me dara la capacidad
        //puntos que hayy en esta linea
        $num_frases = $num_frases + count(explode(".", $linea)) - 1;

        foreach ($palabras as $palabra) {
            if ($palabra == $palabra_buscar) {
                $num_palabra_buscar++;
            }
            if (es_palindromo($palabra)) {
                $num_palindromos++;
            }
            //Es un palindromo si la palabra es iguual a su inversa
            //if (es_palindromo_pablo($palabra) == $palabra) {
            //    $num_palindromos++;
            //}
        }
    }

    //Guardamos la cantidad de palabras
    $resultado["numPalabras"] = $num_palabras;

    //Guardamos la cantidad de frases
    $resultado["numFrases"] = $num_frases;

    //Guardamos la cantidad de palabras que son iguales a la buscada
    $resultado["numPalabraBuscada"] = $num_palabra_buscar;

    //Guardamos la cantidad de palindromos
    $resultado["numPalindromos"] = $num_palindromos;

    var_dump($resultado);
    ?>
</body>

</html>