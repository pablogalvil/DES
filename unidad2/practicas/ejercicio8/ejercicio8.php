<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div>
            <select name="encabezado" id="encabezado">
                <option selected>Encabezado</option>
                <option value="encabezado1.php">Encabezado 1</option>
                <option value="encabezado2.php">Encabezado 2</option>
                <option value="encabezado3.php">Encabezado 3</option>
            </select>
        </div>
        <div>
            <select name="cuerpo" id="cuerpo">
                <option selected>Cuerpo</option>
                <option value="cuerpo1.php">Cuerpo 1</option>
                <option value="cuerpo2.php">Cuerpo 2</option>
                <option value="cuerpo3.php">Cuerpo 3</option>
            </select>
        </div>
        <div>
            <select name="pie" id="pie">
                <option selected>Pie</option>
                <option value="pie1.php">Pie 1</option>
                <option value="pie2.php">Pie 2</option>
                <option value="pie3.php">Pie 3</option>
            </select>
        </div>
        <div>
            <select name="estilo" id="estilo">
                <option selected>Estilo</option>
                <option value="estilo1.php">Estilo 1</option>
                <option value="estilo2.php">Estilo 2</option>
                <option value="estilo3.php">Estilo 3</option>
            </select>
        </div>
        <button type="submit">Enviar</button>
    </form>
    <?php 
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