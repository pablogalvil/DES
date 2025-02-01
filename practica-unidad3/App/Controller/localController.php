<?php 
namespace App\Controller;

use App\Utils\Utils;
use App\Model\Local;

class LocalController
{

    public function mostrarLocales()
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $localM = new Local($con);
        //Cargamos los entrenadores
        $locales = $localM->cargarTodoPaginado(1,200);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("locales");

        
        //Cargamos la vista
        Utils::render('listaLocales',$datos);
        
    }

    public function mostrarLocal($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $localM = new Local($con);
        //Cargamos los entrenadores
        $local = $localM->cargar($datos['id']);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("local");
         //Cargamos la vista
        Utils::render('verLocal',$datos);
    }

    public function crearLocal()
    {
        Utils::render('crearLocal');
    }

    public function insertarLocal()
    {
        //Guardo los datos del formulario de creaccion de entrenadores 
        $local=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $localM = new Local($con);
        //Cargamos los entrenadores
        $local = $localM->insertar($local);
         //Cargamos la vista
        Utils::redirect('/locales');

    }

    public function editarLocal($id)
    {
        Utils::render('editarLocal', $id);
    }

    public function modificarLocal()
    {
        //Guardo los datos del formulario de creaccion de entrenadores 
        $local=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $localM = new Local($con);
        //Cargamos los entrenadores
        $local = $localM->modificar($local);
         //Cargamos la vista
        Utils::redirect('/locales');

    }

    public function eliminarLocal($datos)
    {

       //Nos conectamos a la bd
       $con = Utils::getConnection();
       //Creamos el modelo
       $localM = new Local($con);
       //borramos el entrenador
       $localM->borrar($datos['id']);
       //Cargamos la vista
       Utils::redirect('/');
    }

}

?>