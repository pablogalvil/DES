<?php 
namespace App\Model;

use App\Model\Model;
use App\Model\EquipoM;
use PDO;
use PDOException;

class JugadorM extends Model
{
    function __construct($con)
    {
        parent::__construct($con);
        $this->table="jugador";

    }

    /**
     * Funcion que cambia el equipo al que pertenece el jugador, 
     * pero primero debe de comprobar que el equipo no tenga 
     * contando al nuevo jugador más de 20 jugadores, y que 
     * exista el equipo y el jugador, utilizando las funciones 
     * de la clase padre model.
     */
    public function ficharPorEquipo($idEquipo, $idJugador){
        try {

            //query que saca los datos a partir del id de la otra tabla
            $sql = "UPDATE jugador SET Equipo_idEquipo = :idEquipo WHERE idJugador = :idJugador";

            $stmt = $this->con->prepare($sql);

            $stmt->bindParam(':idEquipo', $idEquipo, PDO::PARAM_INT);
            $stmt->bindParam(':idJugador', $idJugador, PDO::PARAM_INT);
            $equipoM = new EquipoM($this->con);
            var_dump($idEquipo);
            var_dump($idJugador);
            if ($equipoM->cargar($idEquipo) && $this->cargar($idJugador)){
                $resultado = $stmt->execute();
            }

            //Si ha ido bien devolvemos los datos
            if($resultado) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo 'Hubo un problema al obtener los registros: ' . $e->getMessage();
            return false;
        }
    }

    /**
     * El equipo quiere despedir a un jugador con el id que recibe, 
     * primero debe de comprobar que el jugador existe y después lo 
     * elimina de la tabla jugadores. Puede haber problemas al eliminarlo 
     * por la fk constraint, el alumno deberá de solucionar el problema sin eliminar la fk.
     */
    public function despedirJugador($idJugador)
    {

        try {

            //Vamos a hacer un ejemplo en el cual borramos el entrenador numero 4
            $sql = "delete from jugador where idJugador = :idJugador";

            //Utilizamos la conexion activa de nuestro objeto
            //Para crear la sentencia sql
            $stmt = $this->con->prepare($sql);

            $stmt->bindParam(":idJugador", $idJugador, PDO::PARAM_INT);

            //Ejecutamos la sentencia substituyendo las interrogacions por los valores
            //Que metemos dentro del array que le pasamos a execute
            if ($this->cargar($idJugador)){
                $resultado = $stmt->execute();
            }

            //Devolvemos el resultado de la ejecucion de la sentencia
            if($resultado) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            //Hubo un problema al eliminar el registro
            echo 'Hubo un problema al eliminar el registro: ' . $e->getMessage();
            return false;
        }
    }

    /**
     * Funcion que carga todos los jugadores de un equipo
     */
    public function cargarJugadoresEquipo($idEquipo){
        try {

            //query que saca los datos a partir del id de la otra tabla
            $sql = "select * from jugador WHERE equipo_idEquipo = :id";

            $stmt = $this->con->prepare($sql);

            //Asignamos la forma de devolver los datos
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $stmt->bindParam(':id', $idEquipo, PDO::PARAM_INT);
            $resultado = $stmt->execute();

            //Si ha ido bien devolvemos los datos
            if ($resultado) return $stmt->fetchAll();
            else return -1;
        } catch (PDOException $e) {
            echo 'Hubo un problema al obtener los registros: ' . $e->getMessage();
            return -1;
        }
    }
}


?>