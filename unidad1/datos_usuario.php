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
                <label for="dni">Introduce el primer número</label>
                <input type="text" name="dni" id="dni">
            </div>
            <div>
                <label for="telefono">Introduce el primer número</label>
                <input type="number" name="telefono" id="telefono">
            </div>
            <div>
                <label for="estado_social">Introduce el primer número</label>
                <select name="estado_social" id="estado_social">
                    <option value="soltero"></option>
                    <option value="pareja"></option>
                    <option value="casado"></option>
            </div>
            <div>
                <label for="vehiculo">Introduce el vehiculo que utilizas</label>
                <div>
                    <input type="radio" name="vehiculo" id="coche">
                    <label for="coche">
                        Coche
                    </label>
                </div>
                <div>
                    <input type="radio" name="vehiculo" id="moto">
                    <label for="moto">
                        Moto
                    </label>
                </div>
                <div>
                    <input type="radio" name="vehiculo" id="bici">
                    <label for="bici">
                        Bicicleta
                    </label>
                </div>
            </div>
        </form>
    </div>
    <?php 
    
    ?>
</body>
</html>