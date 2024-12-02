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
     * Funcion que mira si las tiendas tienen el numero de plantas que se dice que tienen.
     * 
     * Si son iguales los numeros devuelve true y sino false.
     */
    function plantas_tienda($tienda, $num_plantas, $plantas)
    {
        $contador = 0;
        //Bucle que pasa por el array de plantas pasado.
        for ($j = 0; $j < count($plantas); $j++) {
            //Sacamos los datos de cada planta.
            $datos_planta = explode("-", $plantas[$j]);
            //Si la tienda pasada es igual al nombre de la tienda de cada planta, 
            //aumentamos el contador.
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

    /**
     * Funcion que comprueba que en las tiendas de Sevilla hay orquideas y rosas 
     * y que estas cuestan menos de 10 euros.
     * 
     * Devuelve true si se cumple y false sino.
     */
    function plantas_sevilla($tienda, $ciudad, $plantas){
        $hay_orquideas = false;
        $hay_rosas = false;
        //Miramos si es de sevilla.
        if (strtolower($ciudad) == "sevilla"){
            //Bucle que pasa por el array de plantas.
            for($i = 0; $i < count($plantas);$i++){
                //Sacamos los datos de cada planta.
                $datos_planta = explode("-", $plantas[$i]);
                //Miramos que el nombre de las tiendas es el mismo.
                if ($datos_planta[0] == $tienda){
                    //Miramos si es orquidea o rosa
                    if(strtolower($datos_planta[1]) == "orquidea"){
                        //Miramos que el precio sea inferior a 10
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

    /**
     * Funcion que comprueba que en cada tienda hay al menos una planta.
     * 
     * Devuelve true si se cumple y false sino.
     */
    function una_planta($tiendas, $plantas){
        //Bucle que pasa por el array de tiendas.
        for($i = 0; $i < count($tiendas); $i++){
            //Sacamos los datos de cada tienda.
            $datos_tienda = explode("-", $tiendas[$i]);
            $contador = 0;
            //Bucle para pasar por cada planta.
            for ($j = 0; $j < count($plantas); $j++) {
                //Sacamos los datos de cada planta.
                $datos_planta = explode("-", $plantas[$j]);
                //Si los nombres de la tienda son el mismo, significa 
                //que en esa tienda hay una planta y por lo tanto aumentamos el contador.
                //NOTA : Seria mucho más óptimo cerrar el bucle cada vez que encuentre un valor.
                //En caso de no encontrarlo devolveria false.
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

    /**
     * Funcion que saca un listado con la cantidad de plantas en cada tienda y la suma total de ellas
     */
    function listado_plantas($tiendas, $plantas){
        $listado = array();
        $cantidad_total = 0;
        //Bucle que pasa por las tiendas.
        for($i = 0; $i < count($tiendas); $i++){
            //Sacamos datos de tienda.
            $datos_tienda = explode("-", $tiendas[$i]);
            $cantidad = 0;
            //Bucle que pasa por las plantas.
            for ($j = 0; $j < count($plantas); $j++) {
                //Sacamos datos de plantas.
                $datos_planta = explode("-", $plantas[$j]);
                //Si los nombres son iguales sumamos la cantidad de esa planta a la cantidad
                //de esa tienda.
                if ($datos_tienda[0] == $datos_planta[0]) {
                    $cantidad += $datos_planta[2];
                }
            }
            
            //Guardamos la cantidad total para la suma.
            $cantidad_total += $cantidad;
            //Guardamos los datos en un array asociativo.
            $listado[$datos_tienda[0]] = $cantidad;
        }

        //Guardamos la suma total en el array asociativo.
        $listado["suma total"] = $cantidad_total;

        return $listado;
    }

    /**
     * Funcion que mira que tienda ha recaudado mas y cual menos.
     * 
     * Devuelve cuanto ha recaudado y su nombre.
     */
    function recaudacion($tiendas){
        $listado = "";
        $mayor = PHP_INT_MIN;
        $nombre_mayor = "";
        $menor = PHP_INT_MAX;
        $nombre_menor = "";
        //Bucle que pasa por cada tienda.
        for($i = 0; $i < count($tiendas); $i++){
            //Sacamos datos de tienda.
            $datos_tienda = explode("-", $tiendas[$i]);
            //Si lo que ha recaudado es mayor al mayor actual, guardamos su nombre y actualizamos
            //el mayor.
            if ($datos_tienda[4] > $mayor){
                $mayor = $datos_tienda[4];
                $nombre_mayor = $datos_tienda[0];
            }

            //Si lo que ha recaudado es menor al menor actual, guardamos su nombre y actualizamos
            //el menor.
            if ($datos_tienda[4] < $menor){
                $menor = $datos_tienda[4];
                $nombre_menor = $datos_tienda[0];
            }
        }

        //Guardo los datos en una string que devolveremos.
        $listado = "La que mas recaudó es ".$nombre_mayor." con ".$mayor." y la que menos recaudó es ".$nombre_menor." con ".$menor;

        return $listado;
    }
    ?>
</body>

</html>