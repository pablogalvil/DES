<?php
require_once("config.php");
try {
    $con = new PDO($dsn, $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falló la conexión: " . $e->getMessage();
}

try {
    $sql = "select * from entrenador";

    //Ejecutamos la sentencia sql
    $stmt = $con->prepare($sql);

    //Decidimos de que forma queremos que se recuperen los datos principalmente hay dos
    //FETCH_ASSOC devuelve los datos como un array asociativo
    //FETCH_OBJ devuelve cada registro de bd como un objeto
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //fetchColumn para coger solo un campo
    $stmt->execute();

    $entrenadores = $stmt->fetchAll();

    echo "Nombre del quinto entrenador: " . $entrenadores[4]["nombre"];

    $id_entrenador = 4;
    //Vamos a hacer un ejemplo en el cual borramos el entrenador numero 4
    $sql = "delete from entrenador where idEntrenador = ?";

    $stmt = $con->prepare($sql);

    //Para asociar los valores a las interrogaciones que hay en la query
    //utilizamos bindValue
    $stmt->bindValue(1, $id_entrenador);

    $resultado = $stmt->execute();

    //Ejecutamos sentencia
    if ($resultado) {
        echo "<br>Se ha borrado correctamente";
    } else {
        echo "<br>No se ha borrado correctamente";
    }

    //ACTUALIZAMOS
    $entrenador = [
        'idEntrenador' => 7,
        'nif' => "23424323D",
        'nombre' => "Perlita Durango",
        'edad' => 35,
        'altura' => 199,
    ];
    //Podemos sustituir las interrogaciones por nombres para los valores con :
    $sql = "UPDATE 'entrenador' SET nif=:nif ,nombre=:nombre ,edad=:edad ,altura=:altura WHERE identrenador=?";

    $stmt = $con->prepare($sql);

    $stmt->bindValue(':nif', $entrenador['nif'], PDO::PARAM_STR);
    $stmt->bindValue(':nombre', $entrenador['nombre'], PDO::PARAM_STR);
    $stmt->bindValue(':edad', $entrenador['edad'], PDO::PARAM_INT);
    $stmt->bindValue(':altura', $entrenador['altura'], PDO::PARAM_INT);
    $stmt->bindValue(':identrenador', $entrenador['idEntrenador'], PDO::PARAM_INT);

    $resultado = $stmt->execute();

    if ($resultado) {
        echo "<br>El entrenador 5 ha sido modificado";
    } else {
        echo "<br>Ha habido un error al modificar";
    }

    //INSERTAR
    $sql = "INSERT INTO 'entrenador' ('identrenador', 'nif', 'nombre', 'edad', 'altura') VALUES (:nif, :nombre, :edad, :altura)";

    $entrenador = [
        'nif' => "23424323D",
        'nombre' => "Perlita Durango",
        'edad' => 35,
        'altura' => 199,
    ];

    $stmt = $con->prepare($sql);

    $stmt->bindValue(':nif', $entrenador['nif'], PDO::PARAM_STR);
    $stmt->bindValue(':nombre', $entrenador['nombre'], PDO::PARAM_STR);
    $stmt->bindValue(':edad', $entrenador['edad'], PDO::PARAM_INT);
    $stmt->bindValue(':altura', $entrenador['altura'], PDO::PARAM_INT);

    $resultado = $stmt->execute();

    if($resultado){
        echo "<br>todo ha ido bien";
    }else{
        echo "<br>Ha habido un error";
    }

    $stmt = null;
    $con = null;
} catch (PDOException $e) {
    echo "Error al ejecutar la sentencia SQL: " . $e->getMessage();
}
