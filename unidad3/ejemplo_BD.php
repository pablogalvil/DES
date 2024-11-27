<?php 
//Importamos el codigo con la clase entrenador
require_once("./model/entrenador.php");
require_once("config.php");
try {
    $con = new PDO($dsn, $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falló la conexión: " . $e->getMessage();
}


echo "La base de datos que utilizamos es : ".Entrenador::$nombreBD."<br>";

$entrenadorM = new Entrenador($con);
?>