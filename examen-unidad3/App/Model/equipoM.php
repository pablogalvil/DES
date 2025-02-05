<?php 
namespace App\Model;

use App\Model\Model;
use App\Model\Entrenador;
use PDO;
use PDOException;

class EquipoM extends Model
{
    function __construct($con)
    {
        parent::__construct($con);
        $this->table="equipo";

    }

    /**
     * Funcion que carga todos los equipos que ha entrenado el entrenador cuyo id
     *  se recibe como parámetro.  Devuelve un array asociativo con los equipos  
     * o -1 si hubo un fallo o no hay datos. En EquipoM
     */
    public function cargarEquiposEntrenador($idEntrenador){
        try {

            //query que saca los datos a partir del id de la otra tabla
            $sql = "select * from equipo WHERE entrenador_idEntrenador = :id";

            $stmt = $this->con->prepare($sql);

            //Asignamos la forma de devolver los datos
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $stmt->bindParam(':id', $idEntrenador, PDO::PARAM_INT);
            $resultado = $stmt->execute();

            //Si ha ido bien devolvemos los datos
            if ($resultado) return $stmt->fetchAll();
            else return -1;
        } catch (PDOException $e) {
            echo 'Hubo un problema al obtener los registros: ' . $e->getMessage();
            return -1;
        }
    }

    /**
     * Cambia el entrenador del equipo, al igual que el anterior, primero 
     * comprobará que el equipo existe y el entrenador existe y luego 
     * actualiza el entrenador del equipo seleccionado.
     */
    public function cambiarEntrenador($idEquipo, $idEntrenador){
        try {
            //query que saca los datos a partir del id de la otra tabla
            $sql = "UPDATE equipo SET entrenador_idEntrenador = :idEntrenador WHERE idEquipo = :idEquipo";

            $stmt = $this->con->prepare($sql);

            $stmt->bindParam(':idEntrenador', $idEntrenador, PDO::PARAM_INT);
            $stmt->bindParam(':idEquipo', $idEquipo, PDO::PARAM_INT);
            $entrenadorM = new Entrenador($this->con);
            if ($entrenadorM->cargar($idEntrenador) && $this->cargar($idEquipo)){
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
}


?>