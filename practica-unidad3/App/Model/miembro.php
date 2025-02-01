<?php 
namespace App\Model;

use App\Model\Model;
use PDO;

class Miembro extends Model
{
    function __construct($con)
    {
        parent::__construct($con);
        $this->table="miembro";

    }

    public function cargarMiembro($con, $nombre) {
        $stmt = $con->prepare("SELECT idmiembro, contrasenia FROM miembro WHERE nombre = :nombre");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        $miembro = $stmt->fetch(PDO::FETCH_ASSOC);
        return $miembro;
    }

}

?>