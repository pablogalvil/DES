<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <?php
    //Vamos a hacer un ejemplo en el que validamos si una ip esta bien
    $ip = "123.168.255.2";
    //Presuponemos que está bien, vamos a ir comprobando si hay algun fallo
    $formato_correcto = true;

    //Con explode separamos los puntos y devuelve un array con los elementos
    $numeros_ip = explode(".", $ip);

    //Si es distinto a cuatro está mal el formato
    //Con count podemos saber la cantidad de elementos del array
    if(count($numeros_ip) != 4){
        echo "La ip no tiene el formato correcto, ya que no hay 3 puntos que separan los números";
        $formato_correcto = false;
    }

    //Bucles para recorrer un array
    //Ejemplo de recorrido utilizando un indice ($i)
    //for($i=0;$i<count($numeros_ip);$i++){
    //
    //}

    foreach($numeros_ip as $numero){
        //Si no es un número alguno de los componentes de la ip, no es válido el formato
        if (!is_numeric($numero)){
            echo "La ip no tiene el formato correcto, alguno de los componentes no es numérico";
            $formato_correcto = false;
            break;
        }//Tambien comprobamos que el número este entre 0 y 254
        else if ($numero < 0 || $numero > 255){
            echo "La ip no tiene el formato correcto, valores fuera de rango";
            $formato_correcto = false;
            break;
        }else if(strlen($numero) > 1 && $numero[0] === "0"){
            
        }
    }

    if($numeros_ip[0] === 0 || $numeros_ip[0] === 255 || $numeros_ip[3] === 0 || $numeros_ip[3] === 255){
        echo "La ip no tiene el formato correcto, no puede ser 0 ni 255 al principio ni al final";
        $formato_correcto = false;
    }

    //Por último sacamos por pantalla el mensaje de que ha ido bien
    if ($formato_correcto)
        echo "La ip es válida";
    ?>
</body>
</html>