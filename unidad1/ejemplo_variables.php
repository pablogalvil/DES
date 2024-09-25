<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 23;
    $num2 = "24";
    $num3 = $num1 + $num2;

    print "La suma de $num1 y $num2 es $num3<br>";

    $num1 = "veintitres";

    $texto = "estamos en la clase daw de 2 daw";

    print $num1;

    if(2>=2){
        //nombre esta declarado dentro del if solo accesible dentro del if
        $nombre = "pepe";
        print "<br> Entra";
    }

    //Si utilizamos comillas simples para las cadenas de texto
    //no se pueden meter variables dentro
    print '<br> El nombre es $nombre';
    echo "<br> El nombre es $nombre <br>";

    //strlen nos dice cuantos caracteres tiene un string
    print "El nombre tiene ".strlen($nombre)." caracteres <br>";

    var_dump($nombre);

    echo "<br>";

    $empleado = array("pedro", 34, 2345.4, "soltero");

    //count nos cuenta la cantidad de elementos que tiene un array
    print "<br>El array empleado tiene ".count($empleado)." elementos<br>";

    var_dump($empleado);

    print "<br> $texto <br>";

    //str_replace solo lo devuelve, no modifica la variable original
    print (str_replace("daw", "smr", $texto));

    print "<br> $texto <br>";
    
    //exploode corta una cadena y devuelve un array de secciones de dicha cadena
    //Hay que indicarle el caracter que los separa.
    var_dump(explode(" ", $texto));
    ?>
</body>
</html>