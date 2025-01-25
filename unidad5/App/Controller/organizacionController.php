<?php 
namespace App\Controller;

use App\Utils\Utils;
use App\Model\Organizacion;

class OrganizacionController
{

    public function mostrarOrganizaciones()
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $organizacionM = new Organizacion($con);
        //Cargamos los entrenadores
        $organizaciones = $organizacionM->cargarTodoPaginado(1,200);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("organizaciones");

        
        //Cargamos la vista
       Utils::render('listaOrganizaciones',$datos);
        
    }

    public function mostrarOrganizacion($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $organizacionM = new Organizacion($con);
        //Cargamos los entrenadores
        $organizacion = $organizacionM->cargar($datos['id']);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("organizacion");
         //Cargamos la vista
        Utils::render('verOrganizacion',$datos);
    }

    public function crearOrganizacion()
    {
        Utils::render('crearOrganizacion', []);
    }

    public function insertarOrganizacion()
    {
       //Guardo los datos del formulario de creaccion de entrenadores 
       $organizacion=$_POST;

      // Kint::dump($entrenador);
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $organizacionM = new Organizacion($con);
        //Cargamos los entrenadores
        $organizacion = $organizacionM->insertar($organizacion);
        //Cargamos la vista
        Utils::redirect('/');

    }

    public function editarOrganizacion($id)
    {
        Utils::render('editarOrganizacion', $id);
    }

    public function modificarOrganizacion()
    {
       //Guardo los datos del formulario de creaccion de entrenadores 
       $organizacion=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $organizacionM = new Organizacion($con);
        //Cargamos los entrenadores
        $organizacion = $organizacionM->modificar($organizacion);
         //Cargamos la vista
        Utils::redirect('/');
    }

    public function eliminarOrganizacion($datos)
    {

       //Nos conectamos a la bd
       $con = Utils::getConnection();
       //Creamos el modelo
       $organizacionM = new Organizacion($con);
       //borramos el entrenador
       $organizacionM->borrar($datos['id']);
       //Cargamos la vista
       Utils::redirect('/');
    }

}
?>