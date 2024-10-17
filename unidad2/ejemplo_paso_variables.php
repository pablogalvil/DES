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
     * La función recibe un numero y una potencia y devuelve el numero elevado a esa potencia
     * @param int $numero
     * @param int $potencia
     * @return 
     */ 
    function powertotalis($numero, $potencia){
        $numero = $numero ** $potencia;
        echo $numero."<br>";
    }

    //Para parsar el valor  de una variable a una función hay que poner el &
    //Esto hace que yo pueda modificar el valor de esa variable y se queda modificado
    //Despues de la ejecucion de la función
    function powertotalis_ref(&$numero, $potencia){
        $numero = $numero ** $potencia;
        echo $numero."<br>";
    }

    $valor = 3;
    $potencia = 2;
    powertotalis($valor, $potencia);

    echo $valor."<br>";

    $valor = 3;
    $potencia = 2;
    powertotalis_ref($valor, $potencia);

    echo $valor."<br>";

    /**
     * Ejercicio 4 realizar un programa en php que lea los siguientes datos de un formulario
     * limite un numero de 1 a 10 utilizando range de html
     * 3 checkbox, uno denominado media, otro sucesión aritmetica y otro factorial
     * Un textarea con tres lineas llenas de datos de tipo int float y string, separados por comas
     * Debe de tener un diseño cuco con bootstrap
     * 
     * El programa php debe de realizar lo siguiente:
     * La suma de todos los enteros, y los float, por separado y juntos.
     * La media de todos los numeros si el checkbox está marcado.
     * La sucesión aritmetica del numero definido en el range, 10 valores, si el checkbox está marcado.
     * El factorial del numero entero que este en la posición que marca el range, si no hay del mismo valor del range
     * solo si el checkbox está marcado.
     * La palabra más larga de la última fila
     * 
     * Todos los valores deben de almacenarse en un array asociativo con claves de texto con nombre lógico.
     */
    ?>
</body>
</html>