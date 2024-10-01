<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="get" action="leer_numeros.php">
            <div>
                <label for="num1">Introduce el primer número</label>
                <input type="number" step="any" name="num1" id="num1">
            </div>
            <div>
                <label for="num2">Introduce el segundo número</label>
                <input type="number" step="any" name="num2" id="num2">
            </div>
            <button type="submit">Submit</button>
        </form>
        <?php
        if (isset($_GET["num1"]) && isset($_GET["num2"])) {
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];

            echo "<br>Tus números son " . (int)$num1 . " y " . round($num2, 0);
        }
        ?>
    </div>
</body>

</html>