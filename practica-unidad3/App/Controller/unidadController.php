<?php 
namespace App\Controller;

use App\Utils\Utils;
use App\Model\Unidad;

class UnidadController
{

    public function mostrarUnidades()
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $unidadM = new Unidad($con);
        //Cargamos los entrenadores
        $unidades = $unidadM->cargarTodoPaginado(1,200);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("unidades");

        
        //Cargamos la vista
        Utils::render('listaUnidades',$datos);
        
    }

    public function mostrarUnidad($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $unidadM = new Unidad($con);
        //Cargamos los entrenadores
        $unidad = $unidadM->cargar($datos['id']);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("unidad");
         //Cargamos la vista
        Utils::render('verUnidad',$datos);
    }

    public function crearUnidad()
    {
        Utils::render('crearUnidad');
    }

    public function insertarUnidad()
    {
        //Guardo los datos del formulario de creaccion de entrenadores 
        $unidad=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $unidadM = new Unidad($con);
        //Cargamos los entrenadores
        $unidad = $unidadM->insertar($unidad);
         //Cargamos la vista
        Utils::redirect('/unidades');

    }

    public function editarUnidad($id)
    {
        Utils::render('editarUnidad', $id);
    }

    public function modificarUnidad()
    {
        //Guardo los datos del formulario de creaccion de entrenadores 
        $unidad=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $unidadM = new Unidad($con);
        //Cargamos los entrenadores
        $unidad = $unidadM->modificar($unidad);
         //Cargamos la vista
        Utils::redirect('/unidades');

    }

    public function eliminarUnidad($datos)
    {

       //Nos conectamos a la bd
       $con = Utils::getConnection();
       //Creamos el modelo
       $unidadM = new Unidad($con);
       //borramos el entrenador
       $unidadM->borrar($datos['id']);
       //Cargamos la vista
       Utils::redirect('/unidades');
    }

}

?>