<?php 
namespace App\Controller;

use App\Utils\Utils;
use App\Model\Entrenador;
use App\Model\EquipoM;
use App\Model\JugadorM;

class JugadorController{

    /**
     * Funcion que muestra los jugadores de un equipo, 
     * asi como cargar un entrenador por su id y todos 
     * los equipos de dicho entrenador
     */
    public function mostrarJugadoresEquipo($datos){
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Sacamos el id del equipo que nos llega por el select
        $idTeam = $_POST["equipo"];
        
        //Creamos los modelos
        $entrenadorM = new Entrenador($con);
        $equipoM = new EquipoM($con);
        $jugadorM = new JugadorM($con);

        //Cargamos los entrenadores, equipos y jugadores
        $entrenador = $entrenadorM->cargar($datos['idEntrenador']);
        $equipos = $equipoM->cargarEquiposEntrenador($datos['idEntrenador']);
        $jugadores = $jugadorM->cargarJugadoresEquipo($idTeam);

        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("entrenador", "equipos", "jugadores", "idTeam");
        //Cargamos la vista
        Utils::render('detalleEntrenador',$datos);
    }

    /**
     * Funcion que muestra los jugadores de un equipo, 
     * asi como cargar un entrenador por su id y todos 
     * los equipos de dicho entrenador
     */
    public function mostrarJugadoresEquipoDespido($datos){
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Sacamos el id del equipo que nos llega por el select
        $idTeam = $datos["idEquipo"];
        
        //Creamos los modelos
        $entrenadorM = new Entrenador($con);
        $equipoM = new EquipoM($con);
        $jugadorM = new JugadorM($con);

        //Cargamos los entrenadores, equipos y jugadores
        $entrenador = $entrenadorM->cargar($datos['idEntrenador']);
        $equipos = $equipoM->cargarEquiposEntrenador($datos['idEntrenador']);
        $jugadores = $jugadorM->cargarJugadoresEquipo($idTeam);

        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("entrenador", "equipos", "jugadores", "idTeam");
        //Cargamos la vista
        Utils::render('detalleEntrenador',$datos);
    }

    /**
     * Funcion que recibe el id de un jugador y lo despide (elimina) en la base de datos
     */
    public function despedir($datos){
        $con = Utils::getConnection();

        $jugadorM = new JugadorM($con);

        $jugadorM->despedirJugador($datos['id']);

        Utils::redirect('/entrenadores/'.$datos["idEntrenador"].'/equipo/'.$datos["idEquipo"].'/cargarJugadores');
    }

    /**
     * Funcion que carga la vista de los traspasos pasandole el id del jugador y 
     * todos los equipos
     */
    public function cargarTraspaso($id){
        $con = Utils::getConnection();

        $equipoM = new EquipoM($con);

        $equipos = $equipoM->cargarTodoPaginado(1, 200);

        $datos = compact("id", "equipos");

        Utils::render('traspasoJugador', $datos);
    }

    /**
     * Funcion que recibe los datos del formulario de traspasoJugador y 
     * modifica la base de datos con ellos
     */
    public function traspasar(){
        $con = Utils::getConnection();

        $datos = $_POST;

        $jugadorM = new JugadorM($con);

        $jugadorM->ficharPorEquipo($datos['idEquipo'], $datos['idJugador']);

        Utils::redirect('/');
    }

    /**
     * Funcion que carga la vista de insertar
     */
    public function cargarInsertar(){
        Utils::render('insertarJugador');
    }

    /**
     * Funcion que recibe los datos del formulario de insertarJugador y 
     * los inserta en la base de datos
     */
    public function insertarJugador(){
        $con = Utils::getConnection();

        $datos = $_POST;

        $jugadorM = new JugadorM($con);

        $jugadorM->insertar($datos);

        Utils::redirect('/');
    }
}
?>