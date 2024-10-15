<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $jose = ["nombre" => "Jose", "edad" => 23, "notaM" => 6.78, "repetidor" => false];
    $juan = ["nombre" => "Juan", "edad" => 23, "notaM" => 6.78, "repetidor" => false];
    $pedro = ["nombre" => "Pedro", "edad" => 23, "notaM" => 6.78, "repetidor" => false];
    $sofia = ["nombre" => "Sofia", "edad" => 23, "notaM" => 6.78, "repetidor" => false];

    for ($i = 0; $i < 40; $i++) {
        //Vamos creando un array asociativo
        $alumnos[$i]["nombre"] = "Alumno " . ($i + 1);
        $alumnos[$i]["edad"] = rand(1, 100);
        $alumnos[$i]["notaM"] = rand(1.0, 10.0);
        $alumnos[$i]["repetidor"] = rand(1, 6) > 1 ? false : true;
    }
    for ($i = 0; $i < 40; $i++) {
        var_dump($alumnos[$i]);
        print "<br>";
    }

    print "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";

    //Con foreach podemos recorrer cada uno de los elementos del array
    foreach ($alumnos as $alumno) {
        print_r($alumno);
        print "<br>";
    }

    print "<br>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";

    //Con foreach podemos recorrer cada uno de los elementos del array.
    foreach ($alumnos as $alumno) {
        //Para cada alumno, que es un array asociativo
        //Puedo recorrer sus valores utilizando foreach y
        //acceder a las claves y los valores por separado.
        foreach ($alumno as $clave => $valor) {
            //Podemos usar condiciones o cambiar el formato  en que lo mostramos, 
            //así como crear condiciones concretas.
            print $clave . ": " . $valor . "<br>";
        }
        print "<br>";
    }
    ?>
</body>

</html>