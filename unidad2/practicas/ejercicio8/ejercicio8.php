<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <!--Creo un formulario con todas las opciones, cada una con el valor de su fichero correspondiente en value-->
    <form method="post">
        <div class="border border-light container-lg">
            <select class="form-select" name="encabezado" id="encabezado">
                <option selected>Encabezado</option>
                <option value="encabezado1.php">Encabezado 1</option>
                <option value="encabezado2.php">Encabezado 2</option>
                <option value="encabezado3.php">Encabezado 3</option>
            </select>
        </div>
        <div class="border border-light container-lg">
            <select class="form-select" name="cuerpo" id="cuerpo">
                <option selected>Cuerpo</option>
                <option value="cuerpo1.php">Cuerpo 1</option>
                <option value="cuerpo2.php">Cuerpo 2</option>
                <option value="cuerpo3.php">Cuerpo 3</option>
            </select>
        </div>
        <div class="border border-light container-lg">
            <select class="form-select" name="pie" id="pie">
                <option selected>Pie</option>
                <option value="pie1.php">Pie 1</option>
                <option value="pie2.php">Pie 2</option>
                <option value="pie3.php">Pie 3</option>
            </select>
        </div>
        <div class="border border-light container-lg">
            <select class="form-select" name="estilo" id="estilo">
                <option selected>Estilo</option>
                <option value="estilo1.php">Estilo 1</option>
                <option value="estilo2.php">Estilo 2</option>
                <option value="estilo3.php">Estilo 3</option>
            </select>
        </div>
        <div class="container-lg">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>
    <?php 
        //Si hay escogido un encabezado, cuerpo, pie o estilo, los muestra con include.
        if(isset($_POST["encabezado"])){
            include 'encabezados/'.$_POST["encabezado"];
        }
        if(isset($_POST["cuerpo"])){
            include 'cuerpos/'.$_POST["cuerpo"];
        }
        if(isset($_POST["pie"])){
            include 'pies/'.$_POST["pie"];
        }
        if(isset($_POST["estilo"])){
            include 'estilos/'.$_POST["estilo"];
        }
    ?>
</body>
</html>