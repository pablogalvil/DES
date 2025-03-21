<?php 
namespace App\Controller;

use App\Utils\Utils;
use App\Model\Rivalidad;

class RivalidadController
{

    public function mostrarRivalidades($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $rivalidadM = new Rivalidad($con);
        //Cargamos los entrenadores
        $rivalidades = $rivalidadM->cargarTodoPaginado($datos['pagina'],10);

        $contarRivalidades = $rivalidadM->contarTotalRegistros();
        $pagina = $datos['pagina'];

        $totalPaginas = ceil($contarRivalidades / 10);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("rivalidades", "pagina", "totalPaginas");

        
        //Cargamos la vista
        Utils::render('listaRivalidades',$datos);
        
    }

    public function mostrarRivalidad($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $rivalidadM = new Rivalidad($con);
        //Cargamos los entrenadores
        $rivalidad = $rivalidadM->cargar($datos['id']);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("rivalidad");
         //Cargamos la vista
        Utils::render('verRivalidad',$datos);
    }

    public function crearRivalidad()
    {
        Utils::render('crearRivalidad');
    }

    public function insertarRivalidad()
    {
        //Guardo los datos del formulario de creaccion de entrenadores 
        $rivalidad=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $rivalidadM = new Rivalidad($con);
        //Cargamos los entrenadores
        $rivalidad = $rivalidadM->insertar($rivalidad);
         //Cargamos la vista
        Utils::redirect('/listaRivalidades/1');

    }

    public function editarRivalidad($id)
    {
        Utils::render('editarRivalidad', $id);
    }

    public function modificarRivalidad()
    {
        //Guardo los datos del formulario de creaccion de entrenadores 
        $rivalidad=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $rivalidadM = new Rivalidad($con);
        //Cargamos los entrenadores
        $rivalidad = $rivalidadM->modificar($rivalidad);
         //Cargamos la vista
        Utils::redirect('/listaRivalidades/1');

    }

    public function eliminarRivalidad($datos)
    {

       //Nos conectamos a la bd
       $con = Utils::getConnection();
       //Creamos el modelo
       $rivalidadM = new Rivalidad($con);
       //borramos el entrenador
       $rivalidadM->borrar($datos['id']);

       //Cargamos la vista
       Utils::redirect('/listaRivalidades/1');
    }

}

?>