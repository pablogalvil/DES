<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    define("MAX_HEALTH", 100);

    const MIN_ALUMNOS = 5;

    $i = 12;
    $num1 = 23;
    $num2 = "24";
    $num3 = $num1 + $num2;
    $num4 = 24;
    $array_numeros = array(12, 45, 92, 27, 9, 2, 7);

    print "La suma de $num1 y $num2 es $num3<br>";

    print PHP_INT_MAX . "<br>";
    if (is_int($num2))
        print "Es entero<br>";
    else
        print "No es entero<br>";

    $num1 = "veintitres";

    $texto = "estamos en la clase daw de 2 daw";

    print $num1;

    if (2 >= 2) {
        //nombre esta declarado dentro del if solo accesible dentro del if
        $nombre = "pepe";
        print "<br> Entra";
    }

    //Si utilizamos comillas simples para las cadenas de texto
    //no se pueden meter variables dentro
    print '<br> El nombre es $nombre';
    echo "<br> El nombre es $nombre <br>";

    //strlen nos dice cuantos caracteres tiene un string
    print "El nombre tiene " . strlen($nombre) . " caracteres <br>";

    var_dump($nombre);

    echo "<br>";

    $empleado = array("pedro", 34, 2345.4, "soltero");

    //count nos cuenta la cantidad de elementos que tiene un array
    print "<br>El array empleado tiene " . count($empleado) . " elementos<br>";

    var_dump($empleado);

    print "<br> $texto <br>";

    //str_replace solo lo devuelve, no modifica la variable original
    print(str_replace("daw", "smr", $texto));

    print "<br> $texto <br>";

    //exploode corta una cadena y devuelve un array de secciones de dicha cadena
    //Hay que indicarle el caracter que los separa.
    var_dump(explode(" ", $texto));

    print "<br>" . min($array_numeros) . "<br>";

    print round(4.50) . "<br>";

    print "Numero aleatorio: " . rand(0.0, 3.50);

    print "<br>La vida maxima es: " . MAX_HEALTH;

    if ($num2 === $num4)
        print "<br>Son iguales";
    else
        print "<br>No son iguales";

    $valor = ($num2 + $num2) / 2;

    ?>
</body>

</html>