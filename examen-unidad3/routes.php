<?php
use FastRoute\RouteCollector;

return(function (RouteCollector $r) {

    //Listado de entrenadores
    $r->addRoute('GET', '/', ['App\Controlador\EntrenadorController', 'mostrarEntrenadores']);
    $r->addRoute('GET', '/listaEntrenadores/{pagina:\d+}', ['App\Controlador\EntrenadorController', 'mostrarEntrenadores']);
    $r->addRoute('POST', '/', ['App\Controlador\EntrenadorController', 'mostrarEntrenadoresFiltrado']);
    //Mostrar detalle de entrenador
    $r->addRoute('GET', '/entrenadores/{id:\d+}', ['App\Controlador\EntrenadorController', 'mostrarEntrenador']);
    $r->addRoute('GET','/entrenadores/crear',['App\Controlador\EntrenadorController', 'crearEntrenador']);
    $r->addRoute('POST','/entrenadores/crear',['App\Controlador\EntrenadorController', 'insertarEntrenador']);
    $r->addRoute('GET','/entrenadores/{id:\d+}/eliminar',['App\Controlador\EntrenadorController', 'eliminarEntrenador']);
    $r->addRoute('GET','/entrenadores/{id:\d+}/editar',['App\Controlador\EntrenadorController', 'editarEntrenador']);
    $r->addRoute('POST','/entrenadores/editar',['App\Controlador\EntrenadorController', 'modificarEntrenador']);
});
?>