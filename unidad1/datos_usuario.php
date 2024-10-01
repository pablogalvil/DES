<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <div>
        <form metohd="get" action="datos_usuario.php">
            <div>
                <label for="dni">Introduce el dni</label>
                <input type="text" name="dni" id="dni">
            </div>
            <div>
                <label for="telefono">Introduce el telefono</label>
                <input type="number" name="telefono" id="telefono">
            </div>
            <div>
                <label for="estado_social">Introduce el estado social</label>
                <select name="estado_social" id="estado_social">
                    <option value="soltero">soltero</option>
                    <option value="pareja">pareja</option>
                    <option value="casado">casado</option>
                    <option value="viudo">viudo</option>
                </select>
            </div>
            <div>
                <label for="vehiculo">Introduce el vehiculo que utilizas</label>
                <div>
                    <input type="radio" name="vehiculo" id="coche" value="coche">
                    <label for="coche">
                        Coche
                    </label>
                </div>
                <div>
                    <input type="radio" name="vehiculo" id="moto" value="moto">
                    <label for="moto">
                        Moto
                    </label>
                </div>
                <div>
                    <input type="radio" name="vehiculo" id="bici" value="bicicleta">
                    <label for="bici">
                        Bicicleta
                    </label>
                </div>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <?php 
    //Compruebo que estan todos los valores antes de mostrar nada
    if (isset($_GET["dni"]) && isset($_GET["telefono"]) && isset($_GET["estado_social"]) && isset($_GET["vehiculo"])){
        
        //Guardo los valores
        $dni = $_GET["dni"];
        $telefono = $_GET["telefono"];
        $estado_social = $_GET["estado_social"];
        $vehiculo = $_GET["vehiculo"];
        
        //Muestro la frase
        echo "<br>_El usuario con $dni responde al $telefono es $estado_social y viaja en $vehiculo";
    }
    ?>
</body>
</html>