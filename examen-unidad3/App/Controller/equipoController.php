<?php 
namespace App\Controller;

use App\Utils\Utils;
use App\Model\Entrenador;
use App\Model\EquipoM;

class EquipoController{

    /**
     * Funcion que muestra el detalle de entrenador y le pasa 
     * los datos de ese entrenador y los equipos a los que ha entrenado
     */
    public function mostrarEntrenador($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos los modelos
        $entrenadorM = new Entrenador($con);
        $equipoM = new EquipoM($con);
        //Cargamos el entrenador y los equipos
        $entrenador = $entrenadorM->cargar($datos['id']);
        $equipos = $equipoM->cargarEquiposEntrenador($datos['id']);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("entrenador", "equipos");
        //Cargamos la vista
        Utils::render('detalleEntrenador',$datos);
    }
}
?>