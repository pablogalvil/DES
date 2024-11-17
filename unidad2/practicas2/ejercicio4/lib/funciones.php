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
         * Funcion para sumar enteros
         * @param array $array_enteros array de enteros
         * @return int con el total
         */
        function suma_enteros($array_enteros){
            $total = 0;
            for($i = 0; $i < count($array_enteros); $i++){
                $total += $array_enteros[$i];
            }

            return $total;
        }

        /**
         * Funcion para sumar floats
         * @param array $array_float array de floats
         * @return int con el total
         */
        function suma_float($array_float){
            $total = 0;
            for($i = 0; $i < count($array_float); $i++){
                $total += $array_float[$i];
            }

            return $total;
        }

        /**
         * Funcion para sumar enteros y floats
         * @param array $array_enteros array de enteros
         * @param array $array_float array de floats
         * @return int con el total
         */
        function suma_total($array_enteros, $array_float){
            $total = 0;
            for($i = 0; $i < count($array_enteros); $i++){
                $total += $array_enteros[$i];
            }
            for($i = 0; $i < count($array_float); $i++){
                $total += $array_float[$i];
            }

            return $total;  
        }

        /**
         * Funcion para sacar la media
         * @param array $array_enteros array de enteros
         * @param array $array_float array de floats
         * @return float con la media
         */
        function media($array_enteros, $array_float){
            //Llamamos a la funcion que hace la suma total y la divimos por la cantidad de elementos de ambos arrays
            $media = suma_total($array_enteros, $array_float) / (count($array_enteros) + count($array_float));
            
            return $media;
        }

        /**
         * Funcion para sacar la sucesion aritmetica con 10 valores
         * @param int $limite numero elegido para la sucesion
         * @return string con la sucesion
         */
        function sucesion_aritmetica($limite){
            $sucesion = [];
            //Bucle para sacar la sucesion
            for($i = 0; $i < 10; $i++){
                if($i == 0){
                    $sucesion[$i] = $limite;
                }
                else{
                    $sucesion[$i] = $sucesion[$i - 1] + $limite;
                }
            }

            $sucesion_string = "";

            //Bucle para pasar la sucesion a string
            for($i = 0; $i < count($sucesion); $i++){
                if ($i == count($sucesion) - 1) {
                    $sucesion_string .= $sucesion[$i];
                } else {
                    $sucesion_string .= $sucesion[$i] . ", ";
                }
            }
            
            return $sucesion_string;
        }

        /**
         * Funcion para sacar el factorial
         * @param int $numero numero elegido para el factorial
         * @return int con el factorial
         */
        function factorial($numero){
            $factorial = 1;
            for($i = 1; $i <= $numero; $i++){
                $factorial *= $i;
            }

            return $factorial;
        }

        /**
         * Funcion para sacar la palabra mas larga
         * @param array $array_palabras array de palabras
         * @return string con la palabra mas larga
         */
        function palabra_mas_larga($array_palabras){
            $longitud = 0;
            $palabra = "";

            for($i = 0; $i < count($array_palabras); $i++){
                //Si la longitud de la palabra es mayor que la que tenemos guardada, la guardamos
                if(strlen($array_palabras[$i]) > $longitud){
                    $longitud = strlen($array_palabras[$i]);
                    $palabra = $array_palabras[$i];
                }
            }

            return $palabra;
        }
    ?>
</body>
</html>