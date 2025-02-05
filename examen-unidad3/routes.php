<?php
use FastRoute\RouteCollector;

return(function (RouteCollector $r) {

    //Listado de entrenadores
    $r->addRoute('GET', '/', ['App\Controller\EntrenadorController', 'mostrarEntrenadores']);
    $r->addRoute('GET', '/listaEntrenadores/{pagina:\d+}', ['App\Controller\EntrenadorController', 'mostrarEntrenadores']);
    $r->addRoute('POST', '/', ['App\Controller\EntrenadorController', 'mostrarEntrenadoresFiltrado']);
    //Mostrar detalle de entrenador
    $r->addRoute('GET','/entrenadores/crear',['App\Controller\EntrenadorController', 'crearEntrenador']);
    $r->addRoute('POST','/entrenadores/crear',['App\Controller\EntrenadorController', 'insertarEntrenador']);
    $r->addRoute('GET','/entrenadores/{id:\d+}/eliminar',['App\Controller\EntrenadorController', 'eliminarEntrenador']);
    $r->addRoute('GET','/entrenadores/{id:\d+}/editar',['App\Controller\EntrenadorController', 'editarEntrenador']);
    $r->addRoute('POST','/entrenadores/editar',['App\Controller\EntrenadorController', 'modificarEntrenador']);

    /*****************RUTAS EXAMEN******************/
    //Rutas detalle
    $r->addRoute('GET', '/entrenadores/{id:\d+}', ['App\Controller\EquipoController', 'mostrarEntrenador']);
    $r->addRoute('POST', '/entrenadores/{idEntrenador:\d+}/cargarJugadores', ['App\Controller\JugadorController', 'mostrarJugadoresEquipo']);
    $r->addRoute('GET', '/entrenadores/{idEntrenador:\d+}/equipo/{idEquipo:\d+}/cargarJugadores', ['App\Controller\JugadorController', 'mostrarJugadoresEquipoDespido']);

    //Rutas traspaso y despido
    $r->addRoute('GET', '/jugadores/{id:\d+}/traspasar', ['App\Controller\JugadorController', 'cargarTraspaso']);
    $r->addRoute('POST', '/jugadores/traspasar', ['App\Controller\JugadorController', 'traspasar']);
    $r->addRoute('GET', '/entrenadores/{idEntrenador:\d+}/equipo/{idEquipo:\d+}/jugadores/{id:\d+}/despedir', ['App\Controller\JugadorController', 'despedir']);

    //Rutas insertar
    $r->addRoute('GET', '/jugadores/insertar', ['App\Controller\JugadorController', 'cargarInsertar']);
    $r->addRoute('POST', '/jugadores/insertar', ['App\Controller\JugadorController', 'insertarJugador']);
});
?>