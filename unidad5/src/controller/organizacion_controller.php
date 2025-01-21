<?php 
require_once('./unidad5/src/model/organizacion_model.php');
require_once('./unidad5/src/utils/utils.php');
try {
    $con = new PDO($dsn, $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falló la conexión: " . $e->getMessage();
}

function listaOrganizacionesPaginado(){
    
}
?>