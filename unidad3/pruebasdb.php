<?php 
require_once("config.php");
try {
    $con = new PDO($dsn, $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Falló la conexión: " . $e->getMessage();
}

$sql = "select * from entrenador";

try {
    //Ejecutamos la sentencia sql
    $stmt = $con->prepare($sql);

    //Decidimos de que forma queremos que se recuperen los datos principalmente hay dos
    //FETCH_ASSOC devuelve los datos como un array asociativo
    //FETCH_OBJ devuelve cada registro de bd como un objeto
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $entrenadores = $stmt->fetchAll();

    echo "Nombre del quinto entrenador: " . $entrenadores[5]["nombre"];

    $con = null;
} catch (PDOException $e) {
    echo "Error al ejecutar la sentencia SQL: " . $e->getMessage();
}


?>