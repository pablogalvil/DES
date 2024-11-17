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
        $nombre_completo = explode(' ', trim($_POST['nombre']));

        //Bucle para borrar espacios innecesarios
        for ($i = 0; $i < count($nombre_completo); $i++) {
            $nombre_completo[$i] = trim($nombre_completo[$i]);
        }

        $vocales = ['a', 'e', 'i', 'o', 'u'];

        $resultado = [];

        //Bucle para pasar por el array del nombre
        for ($i = 0; $i < count($nombre_completo); $i++) {
            $num_consonantes = 0;

            //Guardamos las letras que tiene
            $num_letras = strlen($nombre_completo[$i]);
            
            //Separamos en letras la palabra
            $nombre = str_split($nombre_completo[$i]);
            
            //Pasamos por cada letra y si no es vocal, aumentamos el numero de consonantes
            for ($j = 0; $j < count($nombre); $j++) {
                if(!in_array($nombre[$j], $vocales)){
                    $num_consonantes++;
                }
            }

            //Guardamos cada uno con su respectivo nombre en un array asociativo
            $resultado['Palabra ' . ($i + 1)] = $num_consonantes." consonantes y ".$num_letras." letras";
        }
        
        //Mostramos los valores
        echo '<div class="container-lg">';
        foreach ($resultado as $clave => $valor) {
            echo '<p>' . $clave . ': ' . $valor . '</p>';
        }
        echo '</div>';
    }
    ?>
</body>

</html>