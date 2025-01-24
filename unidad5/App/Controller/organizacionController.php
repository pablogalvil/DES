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
        $entrenadores = $organizacionM->cargarTodoPaginado(1,200);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("organizacion");

        
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
        Utils::render('ver',$datos);
    }

    public function crearOrganizacion()
    {
        Utils::render('crear');
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

    public function modificarOrganizacion()
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