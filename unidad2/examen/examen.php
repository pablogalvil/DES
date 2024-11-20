<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once("lib/funciones.php");
    $tiendas = explode("\n", $_POST["tiendas"]);
    $plantas = explode("\n", $_POST["plantas"]);

    $comprobaciones = array("plantas" => false, "plantas sevilla" => false, "al menos una planta" => false, "listado recaudaciones" => "");
    $comprobacion_plantas = true;
    $comprobacion_sevilla = true;
    $comprobacion_una_planta = false;
    $listado = array();
    $recaudado = "";

    for ($i = 0; $i < count($tiendas); $i++) {
        $datos_tienda = explode("-", $tiendas[$i]);

        if(!plantas_tienda($datos_tienda[0], $datos_tienda[5], $plantas)){
            $comprobacion_plantas = false;
        }

        if(!plantas_sevilla($datos_tienda[0], $datos_tienda[2], $plantas)){
            $comprobacion_sevilla = false;
        }
    }

    $comprobacion_una_planta = una_planta($tiendas, $plantas);

    $listado = listado_plantas($tiendas, $plantas);

    $recaudado = recaudacion($tiendas);

    if ($comprobacion_plantas){
        $comprobaciones["plantas"] = "true";
    }else{
        $comprobaciones["plantas"] = "false";
    }

    if ($comprobacion_sevilla){
        $comprobaciones["plantas sevilla"] = "true";
    }else{
        $comprobaciones["plantas sevilla"] = "false";
    }

    if ($comprobacion_una_planta){
        $comprobaciones["al menos una planta"] = "true";
    }else{
        $comprobaciones["al menos una planta"] = "false";
    }

    $comprobaciones["listado recaudaciones"] = $recaudado;
    ?>

    <h1>Resultados</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Noviembre</th>
                <?php 
                echo "<th>".$_POST["comunidad"]."</th>";
                echo "<th>".$_POST["pais"]."</th>";
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($comprobaciones as $key => $value){
                echo "<tr>";
                echo "<th>".$key."</th>";
                echo "<td>".$value."</td>";
                echo "</tr>";
            }
            echo "<tr><th>Listado cantidades</th></tr>";
            foreach($listado as $key => $value){
                echo "<tr>";
                echo "<th>".$key."</th>";
                echo "<td>".$value."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>