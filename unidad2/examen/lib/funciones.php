<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function plantas_tienda($tienda, $num_plantas, $plantas)
    {
        $contador = 0;
        for ($j = 0; $j < count($plantas); $j++) {
            $datos_planta = explode("-", $plantas[$j]);
            if ($tienda == $datos_planta[0]) {
                $contador++;
            }
        }

        if ($contador == $num_plantas) {
            return true;
        }else{
            return false;
        }
    }

    function plantas_sevilla($tienda, $ciudad, $plantas){
        $hay_orquideas = false;
        $hay_rosas = false;
        if (strtolower($ciudad) == "sevilla"){
            for($i = 0; $i < count($plantas);$i++){
                $datos_planta = explode("-", $plantas[$i]);
                if ($datos_planta[0] == $tienda){
                    if(strtolower($datos_planta[1]) == "orquidea"){
                        if($datos_planta[3] >= 10){
                            return false;
                        }
                        $hay_orquideas = true;
                    }else if (strtolower($datos_planta[1] == "rosa")){
                        if($datos_planta[3] >= 10){
                            return false;
                        }
                        $hay_rosas = true;
                    }
                }
            }
        }else{
            return true;
        }

        if($hay_orquideas && $hay_rosas){
            return true;
        }else{
            return false;
        }
    }

    function una_planta($tiendas, $plantas){
        for($i = 0; $i < count($tiendas); $i++){
            $datos_tienda = explode("-", $tiendas[$i]);
            $contador = 0;
            for ($j = 0; $j < count($plantas); $j++) {
                $datos_planta = explode("-", $plantas[$j]);
                if ($datos_tienda[0] == $datos_planta[0]) {
                    $contador++;
                }
            }
            if ($contador == 0){
                return false;
            }
        }

        return true;
    }

    function listado_plantas($tiendas, $plantas){
        $listado = array();
        $cantidad_total = 0;
        for($i = 0; $i < count($tiendas); $i++){
            $datos_tienda = explode("-", $tiendas[$i]);
            $cantidad = 0;
            for ($j = 0; $j < count($plantas); $j++) {
                $datos_planta = explode("-", $plantas[$j]);
                if ($datos_tienda[0] == $datos_planta[0]) {
                    $cantidad += $datos_planta[2];
                }
            }
            
            $cantidad_total += $cantidad;
            $listado[$datos_tienda[0]] = $cantidad;
        }

        $listado["suma total"] = $cantidad_total;

        return $listado;
    }

    function recaudacion($tiendas){
        $listado = "";
        $mayor = PHP_INT_MIN;
        $nombre_mayor = "";
        $menor = PHP_INT_MAX;
        $nombre_menor = "";
        for($i = 0; $i < count($tiendas); $i++){
            $datos_tienda = explode("-", $tiendas[$i]);
            if ($datos_tienda[4] > $mayor){
                $mayor = $datos_tienda[4];
                $nombre_mayor = $datos_tienda[0];
            }

            if ($datos_tienda[4] < $menor){
                $menor = $datos_tienda[4];
                $nombre_menor = $datos_tienda[0];
            }
        }

        $listado = "La que mas recaudó es ".$nombre_mayor." con ".$mayor." y la que menos recaudó es ".$nombre_menor." con ".$menor;

        return $listado;
    }
    ?>
</body>

</html>