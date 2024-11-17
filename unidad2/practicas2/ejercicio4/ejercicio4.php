<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once("./lib/funciones.php");
    //Guardo el texto y reemplazo los saltos de linea por comas
    $textarea = explode("\n", trim($_POST["texto"]));

    //Creo arrays para almacenar los datos
    $array_enteros = explode(",", $textarea[0]);
    $array_float = explode(",", $textarea[1]);
    $array_palabras = explode(",", $textarea[2]);

    //Bucle para borrar los espacios innecesarios
    for ($i = 0; $i < count($array_enteros); $i++) {
        $array_enteros[$i] = trim($array_enteros[$i]);
    }

    //Bucle para borrar los espacios innecesarios
    for ($i = 0; $i < count($array_float); $i++) {
        $array_float[$i] = trim($array_float[$i]);
    }

    //Bucle para borrar los espacios innecesarios
    for ($i = 0; $i < count($array_palabras); $i++) {
        $array_palabras[$i] = trim($array_palabras[$i]);
    }
  
    //Creo el limite y lo asigno al numero para el factorial.
    $limite = $_POST["limite"];
    
    //Si el limite es mayor que el tamaño del array de enteros, el numero especificado en el limite no es entero
    if(count($array_enteros) < $limite){
        $num_factorial = $limite;
    }else{
        $num_factorial = $array_enteros[$limite - 1];
    }
    

    //Llamamos a las distintas funciones que hay que hacer
    $suma_enteros = suma_enteros($array_enteros);

    $suma_float = suma_float($array_float);

    $suma_total = suma_total($array_enteros, $array_float);

    $media = 0;
    //Si el boton está pulsado, llamamos a la funcion correspondiente
    if (isset($_POST["media"])) {
        $media = media($array_enteros, $array_float);
    }

    $sucesion_aritmetica = 0;
    if (isset($_POST["sucesion"])) {
        $sucesion_aritmetica = sucesion_aritmetica($limite);
    }

    $factorial = 0;
    if (isset($_POST["factorial"])) {
        $factorial = factorial($num_factorial);
    }

    $palabra_mas_larga = palabra_mas_larga($array_palabras);

    //Guardamos los resultados en un array asociativo
    $resultado = array(
        'suma enteros' => $suma_enteros,
        'suma float' => $suma_float,
        'suma total' => $suma_total,
        'media' => $media,
        'sucesion aritmetica' => $sucesion_aritmetica,
        'factorial' => $factorial,
        'palabra mas larga' => $palabra_mas_larga
    );
    ?>

    <div class="bd-example">
        <table class="table table-bordered">
            <?php
            //Creamos la tabla y mostramos los resultados
            echo "<thead>";
            echo "<tr>";
            //foreach para la clave
            foreach ($resultado as $clave => $valor) {
                echo '<th scope="col">' . $clave . '</th>';
            }
            echo "</tr>";
            echo "</thead>";
            
            echo "<tbody>";
            echo "<tr>";
            //foreach para el valor
            foreach ($resultado as $clave => $valor) {
                echo '<td scope="row">' . $valor . '</td>';
            }
            echo "</tr>";
            echo "</tbody>";
            ?>
        </table>
    </div>
</body>

</html>