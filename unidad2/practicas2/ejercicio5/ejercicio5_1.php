<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-lg">
        <form action="ejercicio5_1.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Introduce tu nombre completo</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <?php
    if (isset($_POST['nombre'])) {
        //Le quitamos los espacios inutiles y lo guardamos
        $nombre_completo = array();
        $nombre_formulario = trim($_POST['nombre']);
        $ultimo_espacio = 0;
        for ($i = 0; $i < strlen($nombre_formulario); $i++) {
            if ($nombre_formulario[$i] == ' ') {
                $substring = substr($nombre_formulario, $ultimo_espacio, $i - $ultimo_espacio);
                $nombre_completo[] = $substring;
                $ultimo_espacio = $i;
            }else if ($i == strlen($nombre_formulario)-1) {
                $substring = substr($nombre_formulario, $ultimo_espacio, $i - $ultimo_espacio + 1);
                $nombre_completo[] = $substring;
            }
        }

        //Bucle para borrar espacios innecesarios
        for ($i = 0; $i < count($nombre_completo); $i++) {
            $nombre_completo[$i] = trim($nombre_completo[$i]);
        }

        $vocales = ['a', 'e', 'i', 'o', 'u'];

        $resultado = [];

        //Bucle para pasar por el array del nombre
        for ($i = 0; $i < count($nombre_completo); $i++) {
            $num_consonantes = 0;
            $num_letras = 0;
            
            //Bucle para pasar por cada letra
            for ($j = 0; $j < strlen($nombre_completo[$i]); $j++) {
                $es_consonante = true;

                //Pasamos por el bucle de vocales y vamos comprobando si en algun caso es una vocal
                for ($k = 0; $k < count($vocales); $k++) {
                    if ($nombre_completo[$i][$j] == $vocales[$k]) {
                        $es_consonante = false;
                    }
                }

                //Si no es una vocal, aumentamos el numero de consonantes
                if ($es_consonante) {
                    $num_consonantes++;
                }

                //Aumentamos el numero de letras
                $num_letras++;
            }

            //Guardamos cada uno con su respectivo nombre en un array asociativo
            $resultado['Palabra '.($i+1)] = $num_consonantes." consonantes y ".$num_letras." letras";
            
        }
        
        //Mostramos el resultado
        echo '<div class="container-lg">';
        foreach ($resultado as $clave => $valor) {
            echo '<p>' . $clave . ': ' . $valor . '</p>';
        }
        echo '</div>';
    }
    ?>
</body>

</html>