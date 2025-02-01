<?php 
namespace App\Controller;

use App\Utils\Utils;
use App\Model\Organizacion;
use App\Model\Unidad;

class OrganizacionController
{

    /**
     * Funcion que carga las organizaciones paginadas en la vista
     * @return void (carga la vista)
     */
    public function mostrarOrganizaciones($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $organizacionM = new Organizacion($con);
        //Cargamos las organizaciones
        $organizaciones = $organizacionM->cargarTodoPaginado($datos['pagina'],10);

        //Cargamos el total de organizaciones para calcular la paginacion
        $contarOrganizaciones = $organizacionM->contarTotalRegistros();
        $pagina = $datos['pagina'];

        $totalPaginas = ceil($contarOrganizaciones / 10);

        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("organizaciones", "pagina", "totalPaginas");

        
        //Cargamos la vista
        Utils::render('listaOrganizaciones',$datos);
        
    }

    /**
     * Funcion que carga el detalle de una organizacion
     * @return void (carga la vista)
     */
    public function mostrarOrganizacion($datos)
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();

        //Creamos los modelos
        $organizacionM = new Organizacion($con);
        $unidadM = new Unidad($con);

        //Cargamos la organizacion y las unidades
        $organizacion = $organizacionM->cargar($datos['id']);
        $unidades = $unidadM->cargarTodoDetalle($datos['id'], "unidad", "organizacion");

        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("organizacion", "unidades");
        //Cargamos la vista
        Utils::render('verOrganizacion',$datos);
    }

    /**
     * Funcion que carga la vista para crear una organizacion
     * @return void (carga la vista)
     */
    public function crearOrganizacion()
    {
        //Cargamos la vista sin datos
        Utils::render('crearOrganizacion', []);
    }

    /**
     * Funcion que recibe los datos del formulario de crearOrganizacion y los inserta en la bd
     * @return void (carga de nuevo el listado de organizaciones)
     */
    public function insertarOrganizacion()
    {
        //Guardo los datos del formulario de creaccion de organizaciones 
        $organizacion=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();

        //Miramos que la imagen este puesta y no sea un error
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            // Obtenemos el nombre del archivo y su extensión
            $nombreArchivo = basename($_FILES['imagen']['name']);
            $rutaFinal = $_SERVER['DOCUMENT_ROOT'] . "\img\\" . $nombreArchivo;
    
            // Movemos la imagen a la carpeta en nuestro proyecto
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
        //Insertamos la organizacion
        $organizacion = $organizacionM->insertar($organizacion);

        //Redirigimos la pagina a la lista de organizaciones
        Utils::redirect('/listaOrganizaciones/1');

    }

    /**
     * Funcion que carga la vista para editar una organizacion
     * @return void (carga la vista)
     */
    public function editarOrganizacion($id)
    {
        //Cargamos la vista de editarOrganizacion
        Utils::render('editarOrganizacion', $id);
    }

    /**
     * Funcion que recibe los datos del formulario de editarOrganizacion y los modifica en la bd
     * @return void (carga de nuevo el listado de organizaciones)
     */
    public function modificarOrganizacion()
    {
        //Guardo los datos del formulario de creaccion de entrenadores 
        $organizacion=$_POST;

        //Nos conectamos a la bd
        $con = Utils::getConnection();

        //Miramos que la imagen este puesta y no sea un error
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            // Obtenemos el nombre del archivo y su extensión
            $nombreArchivo = basename($_FILES['imagen']['name']);
            $rutaFinal = $_SERVER['DOCUMENT_ROOT'] . "\img\\" . $nombreArchivo;
    
            // Movemos la imagen a la carpeta en nuestro proyecto
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
        //Modificamos la organizacion en la bd
        $organizacion = $organizacionM->modificar($organizacion);

        //Redirigimos la pagina a la lista de organizaciones
        Utils::redirect('/listaOrganizaciones/1');
    }

    /**
     * Funcion que elimina una organizacion de la bd
     * @return void (carga de nuevo el listado de organizaciones)
     */
    public function eliminarOrganizacion($datos)
    {
       //Nos conectamos a la bd
       $con = Utils::getConnection();

       //Creamos el modelo
       $organizacionM = new Organizacion($con);
       //Borramos la organizacion
       $organizacionM->borrar($datos['id']);

       //Redirigimos la pagina a la lista de organizaciones
       Utils::redirect('/listaOrganizaciones/1');
    }

}
?>