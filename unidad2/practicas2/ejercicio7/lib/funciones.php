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
     * Función que devuelve el valor de una palabra con funciones
     * @param string $palabra Palabra a evaluar
     * @return string Devuelve el valor de la palabra
     */
    function valor_palabra_funciones($palabra)
    {
        //Array con los valores de cada letra
        $valores = "abcdefghijklmnopqrstuvwxyz";
        $resultado = 0;

        //Bucle para recorrer la palabra
        for ($i = 0; $i < strlen($palabra); $i++) {
            //Cogemos la letra de la palabra
            $letra = substr($palabra, $i, 1);

            //Cogemos la posicion de la letra en el array para saber su valor
            $resultado += (strpos($valores, $letra) + 1);
        }

        return $resultado;
    }

    /**
     * Función que devuelve el valor de una palabra con arrays asociativos
     * @param string $palabra Palabra a evaluar
     * @return string Devuelve el valor de la palabra
     */
    function valor_palabra_asociativos($palabra)
    {
        //Array con los valores de cada letra
        $valores = [
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 4,
            'e' => 5,
            'f' => 6,
            'g' => 7,
            'h' => 8,
            'i' => 9,
            'j' => 10,
            'k' => 11,
            'l' => 12,
            'm' => 13,
            'n' => 14,
            'o' => 15,
            'p' => 16,
            'q' => 17,
            'r' => 18,
            's' => 19,
            't' => 20,
            'u' => 21,
            'v' => 22,
            'w' => 23,
            'x' => 24,
            'y' => 25,
            'z' => 26
        ];

        $resultado = 0;

        //Bucle para recorrer la palabra
        for ($i = 0; $i < strlen($palabra); $i++) {
            $letra = $palabra[$i];
            //Sacamos el valor de la letra
            $resultado += $valores[$letra];
        }

        return $resultado;
    }

    /**
     * Función que devuelve la palabra con mayor valor
     * @param string $palabra1 Palabra a evaluar
     * @param string $palabra2 Palabra a evaluar
     * @return string Devuelve la palabra con mayor valor
     */
    function mayor_valor($palabra1, $palabra2)
    {
        $valor1 = valor_palabra_funciones($palabra1);
        $valor2 = valor_palabra_funciones($palabra2);

        if ($valor1 > $valor2) {
            return $palabra1;
        } else {
            return $palabra2;
        }
    }
    ?>
</body>

</html>