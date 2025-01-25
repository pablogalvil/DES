<?php namespace App\Controller;

use App\Utils\Utils;
use App\Model\Miembro;

class MiembroController
{

    public function mostrarMiembros()
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $miembroM = new Miembro($con);
        //Cargamos los entrenadores
        $miembro = $miembroM->cargarTodoPaginado(1,200);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("miembro");

        
        //Cargamos la vista
        Utils::render('listaMiembros',$datos);
        
    }

    public function mostrarMiembro($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $miembroM = new Miembro($con);
        //Cargamos los entrenadores
        $miembro = $miembroM->cargar($datos['id']);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("miembro");
         //Cargamos la vista
        Utils::render('verMiembro',$datos);
    }

    public function crearMiembro()
    {
        Utils::render('crearMiembro');
    }

    public function insertarMiembro()
    {
        //Guardo los datos del formulario de creaccion de entrenadores 
        $miembro=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $miembroM = new Miembro($con);
        //Cargamos los entrenadores
        $miembro = $miembroM->insertar($miembro);
         //Cargamos la vista
        Utils::redirect('/');

    }

    public function editarMiembro($id)
    {
        Utils::render('editarMiembro', $id);
    }

    public function modificarMiembro()
    {
        //Guardo los datos del formulario de creaccion de entrenadores 
        $miembro=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $miembroM = new Miembro($con);
        //Cargamos los entrenadores
        $miembro = $miembroM->modificar($miembro);
         //Cargamos la vista
        Utils::redirect('/');

    }

    public function eliminarMiembro($datos)
    {

       //Nos conectamos a la bd
       $con = Utils::getConnection();
       //Creamos el modelo
       $miembroM = new Miembro($con);
       //borramos el entrenador
       $miembroM->borrar($datos['id']);
       //Cargamos la vista
       Utils::redirect('/');
    }

}
?>