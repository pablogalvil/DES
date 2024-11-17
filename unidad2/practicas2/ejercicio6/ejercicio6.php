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
    //Si el orden esta puesto hacemos los filtros con el orden
    if (isset($_POST['orden'])) {
        $resultado = filtro($_POST["texto"], $_POST["orden"]);
        $resultado_funciones = filtro_funciones($_POST["texto"], $_POST["orden"]);
    } else {
        //Si no está puesto, dejamos el orden default
        $resultado = filtro($_POST["texto"]);
        $resultado_funciones = filtro_funciones($_POST["texto"]);
    }
    ?>

    <div class="bd-example">
        <table class="table table-bordered">
            <?php
            //Creamos la tabla y mostramos los resultados
            echo "<thead>";
            echo "<tr>";
            echo '<th scope="col">Tipo de filtro</th>';
            //foreach para la clave
            foreach ($resultado as $clave => $valor) {
                echo '<th scope="col">' . $clave . '</th>';
            }
            echo "</tr>";
            echo "</thead>";
            
            echo "<tbody>";
            echo "<tr>";
            echo "<td scope='row'>Filtro sin funciones</td>";
            //foreach para el valor
            foreach ($resultado as $clave => $valor) {
                echo '<td scope="row">' . $valor . '</td>';
            }
            echo "</tr>";
            echo "<tr>";
            echo "<td scope='row'>Filtro con funciones</td>";
            //foreach para el valor
            foreach ($resultado_funciones as $clave => $valor) {
                echo '<td scope="row">' . $valor . '</td>';
            }
            echo "</tr>";
            echo "</tbody>";
            ?>
        </table>
    </div>
</body>
</html>