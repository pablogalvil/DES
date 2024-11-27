<?php
//function insertar($con, $entrenador)
//{
//    $sql = "INSERT INTO 'entrenador' ('identrenador', 'nif', 'nombre', 'edad', 'altura') VALUES (:nif, :nombre, :edad, :altura)";
//
//    $stmt = $con->prepare($sql);
//
//    $stmt->bindValue(':nif', $entrenador['nif'], PDO::PARAM_STR);
//    $stmt->bindValue(':nombre', $entrenador['nombre'], PDO::PARAM_STR);
//    $stmt->bindValue(':edad', $entrenador['edad'], PDO::PARAM_INT);
//    $stmt->bindValue(':altura', $entrenador['altura'], PDO::PARAM_INT);
//
//    $resultado = $stmt->execute();
//
//    if ($resultado) {
//        return true;
//    } else {
//        return false;
//    }
//}
//function borrar($con, $id_entrenador)
//{
//    $sql = "delete from entrenador where idEntrenador = ?";
//
//    $stmt = $con->prepare($sql);
//
//    $stmt->bindValue(1, $id_entrenador);
//
//    $resultado = $stmt->execute();
//
//    if ($resultado) {
//        return true;
//    } else {
//        return false;
//    }
//}
//function modificarTodo($con, $entrenador)
//{
//    $sql = "UPDATE 'entrenador' SET nif=:nif ,nombre=:nombre ,edad=:edad ,altura=:altura WHERE identrenador=?";
//
//    $stmt = $con->prepare($sql);
//
//    $stmt->bindValue(':nif', $entrenador['nif'], PDO::PARAM_STR);
//    $stmt->bindValue(':nombre', $entrenador['nombre'], PDO::PARAM_STR);
//    $stmt->bindValue(':edad', $entrenador['edad'], PDO::PARAM_INT);
//    $stmt->bindValue(':altura', $entrenador['altura'], PDO::PARAM_INT);
//    $stmt->bindValue(':identrenador', $entrenador['idEntrenador'], PDO::PARAM_INT);
//
//    $resultado = $stmt->execute();
//
//    if ($resultado) {
//        echo "<br>El entrenador 5 ha sido modificado";
//    } else {
//        echo "<br>Ha habido un error al modificar";
//    }
//}
//function modificar($con, $entrenador) {}
//function mostrarTodo($con)
//{
//    $sql = "select * from entrenador";
//
//    $stmt = $con->prepare($sql);
//
//    $stmt->setFetchMode(PDO::FETCH_ASSOC);
//
//    $stmt->execute();
//
//    $entrenadores = $stmt->fetchAll();
//
//    for ($i = 0; $i < count($entrenadores); $i++) {
//        echo "Entrenador numero : " . $entrenadores[$i]["identrenador"] .
//            ", nif : " . $entrenadores[$i]["nif"] .
//            ", nombre : " . $entrenadores[$i]["nombre"] .
//            ", edad : " . $entrenadores[$i]["edad"] .
//            ", altura : " . $entrenadores[$i]["altura"] . "<br>";
//    }
//}
//function mostrarTodoPaginado($con, $num_pag, $elem_pag) {}
//function mostrarTodoFiltrado($con, $filtro) {}
//function mostrarTodoFiltradoPaginado($con, $filtro, $num_pag, $elem_pag) {}
class Entrenador
{
    private $con;

    public static $nombreBD = "puertoBaloncesto";

    function __construct($con)
    {
        //asignamos la conexion activa
        if ($con != null) $this->con = $con;
    }
    
    /**
     * borrar
     *
     * @param  mixed $con
     * @param  mixed $id_entrenador
     * @return void
     */
    function borrar($con, $id_entrenador)
    {
        $sql = "delete from entrenador where idEntrenador = ?";

        $stmt = $con->prepare($sql);

        $stmt->bindValue(1, $id_entrenador);

        $resultado = $stmt->execute();

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
}
?>