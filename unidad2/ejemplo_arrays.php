<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    //En php los arrays tienen un tamaño dinamico, le podemos añadir elementos sin problema
    //También puede combinar datos de distinto tipo, incluso arrays dentro de otros
    $alumno = ["jose", 23, false, 6.78, ["petito", 23, 11500]];
    //Para acceder a los elementos del array utilizamos el operador []
    //Si dentro de un array hay otro array y queremos acceder a algún elemento del array interno
    //Utilizamos dos veces [] el primero es la posición del array interno y el segundo 
    //es el elemento dentro del array interno
    print $alumno[4][2] . "<br>";

    //Si lo hago sin los corchetes deja de ser un array
    $alumno[] = "final";

    print_r($alumno);

    $numeros = [];

    for ($i = 0; $i < 20; $i++) {
        $numeros[] = rand(1, 100);
    }

    $maximo = PHP_INT_MIN;
    $minimo = PHP_INT_MAX;
    $media = 0;

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] > $maximo) {
            $maximo = $numeros[$i];
        }

        if ($numeros[$i] < $minimo) {
            $minimo = $numeros[$i];
        }

        $media += $numeros[$i];
    }

    $media = $media / count($numeros);

    print "<br>Maximo: $maximo<br>";

    print "Minimo: $minimo<br>";

    print "Media: $media<br>";

    $lista_letras = ["a", "e", "z"];
    
    print "<br>";
    print_r($lista_letras);
    unset($lista_letras[1]);
    print "<br>";
    print_r($lista_letras);
    print "<br>";
    $lista_letras[] = "e";
    print_r($lista_letras);
    print "<br>";

    if (isset($lista_letras[2])) {
        print "La posición 2 del array existe<br>";
    }
    if (isset($lista_letras[4])) {
        print "La posición 4 del array existe<br>";
    }
    ?>
</body>

</html>