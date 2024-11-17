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
    require_once("lib/funciones.php");
    //Sacamos los distintos resultados
    $resultado_funciones = valor_palabra_funciones($_POST["palabra1"]);
    $resultado_asociativo = valor_palabra_asociativos($_POST["palabra1"]);
    $resultado_funciones2 = valor_palabra_funciones($_POST["palabra2"]);
    $resultado_asociativo2 = valor_palabra_asociativos($_POST["palabra2"]);
    $palabra_mayor = mayor_valor($_POST["palabra1"], $_POST["palabra2"]);
    ?>
    <div class="bd-example">
        <table class="table table-bordered">
            <?php
            //Creamos la tabla y mostramos los resultados
            echo "<thead>";
            echo "<tr>";
            echo '<th scope="col">Valor de palabra 1 con funciones</th>';
            echo '<th scope="col">Valor de palabra 1 con asociativos</th>';
            echo '<th scope="col">Valor de palabra 2 con funciones</th>';
            echo '<th scope="col">Valor de palabra 2 con asociativos</th>';
            echo '<th scope="col">Palabra con mayor valor</th>';
            echo "</tr>";
            echo "</thead>";

            echo "<tbody>";
            echo "<tr>";
            echo '<td scope="row">' . $resultado_funciones . '</td>';
            echo '<td scope="row">' . $resultado_asociativo . '</td>';
            echo '<td scope="row">' . $resultado_funciones2 . '</td>';
            echo '<td scope="row">' . $resultado_asociativo2 . '</td>';
            echo '<td scope="row">' . $palabra_mayor . '</td>';
            echo "</tr>";
            echo "</tbody>";
            ?>
        </table>
    </div>
</body>

</html>