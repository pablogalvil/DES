<?php 
namespace App\Controller;

use App\Utils\Utils;
use App\Model\Organizacion;
use App\Model\Unidad;

class OrganizacionController
{

    public function mostrarOrganizaciones($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $organizacionM = new Organizacion($con);
        //Cargamos los entrenadores
        $organizaciones = $organizacionM->cargarTodoPaginado($datos['pagina'],10);
        $contarOrganizaciones = $organizacionM->contarTotalRegistros();
        $pagina = $datos['pagina'];

        $totalPaginas = ceil($contarOrganizaciones / 10);

        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("organizaciones", "pagina", "totalPaginas");

        
        //Cargamos la vista
       Utils::render('listaOrganizaciones',$datos);
        
    }

    public function mostrarOrganizacion($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $organizacionM = new Organizacion($con);
        $unidadM = new Unidad($con);
        //Cargamos los entrenadores
        $organizacion = $organizacionM->cargar($datos['id']);
        $unidades = $unidadM->cargarTodoPaginadoDetalle(1, 20, $datos['id'], "unidad", "organizacion");
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("organizacion", "unidades");
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

        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            // Obtener el nombre del archivo y su extensión
            $nombreArchivo = basename($_FILES['imagen']['name']);
            $rutaFinal = $_SERVER['DOCUMENT_ROOT'] . "\img\\" . $nombreArchivo;
    
            // Mover la imagen desde la carpeta temporal a la definitiva
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaFinal)) {
                $organizacion['imagen'] = $nombreArchivo; // Guardamos solo la ruta en la BD
            } else {
                $organizacion['imagen'] = null; // Si falla, guardamos NULL
            }
        } else {
            $organizacion['imagen'] = null; // Si no hay imagen, guardamos NULL
        }

        //Creamos el modelo
        $organizacionM = new Organizacion($con);
        //Cargamos los entrenadores
        $organizacion = $organizacionM->insertar($organizacion);
        //Cargamos la vista
        Utils::redirect('/listaOrganizaciones/1');

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

        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            // Obtener el nombre del archivo y su extensión
            $nombreArchivo = basename($_FILES['imagen']['name']);
            $rutaFinal = $_SERVER['DOCUMENT_ROOT'] . "\img\\" . $nombreArchivo;
    
            // Mover la imagen desde la carpeta temporal a la definitiva
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaFinal)) {
                $organizacion['imagen'] = $nombreArchivo; // Guardamos solo la ruta en la BD
            } else {
                $organizacion['imagen'] = null; // Si falla, guardamos NULL
            }
        } else {
            $organizacion['imagen'] = null; // Si no hay imagen, guardamos NULL
        }
        
        //Creamos el modelo
        $organizacionM = new Organizacion($con);
        //Cargamos los entrenadores
        $organizacion = $organizacionM->modificar($organizacion);
         //Cargamos la vista
        Utils::redirect('/listaOrganizaciones/1');
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
       Utils::redirect('/listaOrganizaciones/1');
    }

}
?>