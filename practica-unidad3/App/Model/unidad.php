<?php 
namespace App\Model;

use App\Model\Model;
use PDO;

class Unidad extends Model
{
    function __construct($con)
    {
        parent::__construct($con);
        $this->table="unidad";

    }

    /**
     * Funcion que devuelve el id de la organizacion de una unidad
     * @return int id de la organizacion
     */
    public function cargarIdOrganizacion($con, $idUnidad) {
        $stmt = $con->prepare("SELECT idorganizacion FROM unidad WHERE idunidad = :idunidad");
        $stmt->bindParam(':idunidad', $idUnidad);
        $stmt->execute();
        $id = $stmt->fetch(PDO::FETCH_ASSOC);

        return $id["idorganizacion"];
    }
}

?>