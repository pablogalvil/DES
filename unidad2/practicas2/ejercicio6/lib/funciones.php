<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /**
     * Funcion que hace el filtro sin funciones
     * 
     * @param $texto
     * @param $orden opcional
     * @return array
     */
    function filtro($texto, $orden = true)
    {
        //Declaramos variables
        $lista_numeros = array();
        $es_espacio = false;
        $numero = "";

        $primos = array(2, 3, 5, 7, 11);

        $media = 0;

        $minimo = PHP_INT_MAX;

        $resultado = array("nprimos" => "", "media" => 0, "minimo" => 0);
        $resultado_ordenado = array();

        //Recorremos el texto
        for ($i = 0; $i < strlen($texto); $i++) {

            //Comprobamos si es un espacio
            if ($texto[$i] != " ") {
                $numero .= $texto[$i];
            } else {
                $es_espacio = true;
            }

            //Si es un espacio, añadimos el numero guardado a la lista y reiniciamos
            if ($es_espacio) {
                $lista_numeros[] = (int) $numero;
                $es_espacio = false;
                $numero = "";
                //Si es el ultimo elemento, lo ponemos en la lista
            } else if ($i == strlen($texto) - 1) {
                $lista_numeros[] = (int) $numero;
            }
        }

        //Recorremos la lista
        for ($i = 0; $i < count($lista_numeros); $i++) {
            $es_primo = true;

            //Comprobamos si es primo
            for ($j = 0; $j < count($primos); $j++) {
                if ($lista_numeros[$i] % $primos[$j] == 0 && $lista_numeros[$i] != $primos[$j]) {
                    $es_primo = false;
                    break;
                }
            }

            //Sumamos para la media
            $media += $lista_numeros[$i];

            //Comprobamos el minimo
            if ($lista_numeros[$i] < $minimo) {
                $minimo = $lista_numeros[$i];
            }

            //Si es primo lo guardamos
            if ($es_primo) {
                $resultado["nprimos"] .= $lista_numeros[$i] . " ";
            }

            //Si es el ultimo, ponemos la media y el minimo
            if ($i == count($lista_numeros) - 1) {
                $resultado["media"] = $media / count($lista_numeros);
                $resultado["minimo"] = $minimo;
            }
        }

        //Ordenamos
        if ($orden) {
            $resultado_ordenado = $resultado;
        } else {
            $resultado_ordenado["minimo"] = $resultado["minimo"];
            $resultado_ordenado["media"] = $resultado["media"];
            $resultado_ordenado["nprimos"] = $resultado["nprimos"];
        }

        return $resultado_ordenado;
    }

    /**
     * Funcion que hace el filtro con funciones
     * 
     * @param $texto
     * @param $orden opcional
     * @return array
     */
    function filtro_funciones($texto, $orden = true)
    {
        //Declaramos variables
        $lista_numeros = explode(" ", $texto);

        $primos = array(2, 3, 5, 7, 11);

        $media = 0;

        $minimo = min($lista_numeros);

        $resultado = array("nprimos" => "", "media" => 0, "minimo" => 0);
        $resultado_ordenado = array();

        //Recorremos la lista
        for ($i = 0; $i < count($lista_numeros); $i++) {
            $es_primo = true;

            //Sumamos para la media
            $media += $lista_numeros[$i];

            //Comprobamos si es primo
            for ($j = 0; $j < count($primos); $j++) {
                if ($lista_numeros[$i] % $primos[$j] == 0 &&  !in_array($lista_numeros[$i], $primos)) {
                    $es_primo = false;
                    break;
                }
            }

            //Si es primo lo guardamos
            if ($es_primo) {
                $resultado["nprimos"] .= $lista_numeros[$i] . " ";
            }
        }

        //Ponemos la media y el minimo
        $resultado["media"] = $media / count($lista_numeros);
        $resultado["minimo"] = $minimo;

        //Ordenamos
        if ($orden) {
            $resultado_ordenado = $resultado;
        } else {
            $resultado_ordenado["minimo"] = $minimo;
            $resultado_ordenado["media"] = $resultado["media"];
            $resultado_ordenado["nprimos"] = $resultado["nprimos"];
        }

        return $resultado_ordenado;
    }
    ?>
</body>

</html>