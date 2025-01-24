<?php
    namespace rutas;
    use FastRoute\RouteCollector;

    return(function (RouteCollector $r) {

    //Con addroute voy añadiendo rutas url por get o por post a las que responderemos
    //Las que no esten aquí darán fallo
    //Listado de entrenadores
    $r->addRoute('GET', '/', ['App\Controller\OrganizacionController', 'mostrarOrganizacion']);
    $r->addRoute('GET', '/listaOrganizaciones/{pagina:\d+}', ['App\Controller\OrganizacionController', 'mostrarOrganizaciones']);
    $r->addRoute('POST', '/', ['App\Controller\OrganizacionController', 'mostrarOrganizacionesFiltrado']);
    //Mostrar detalle de entrenador
    $r->addRoute('GET', '/organizaciones/{id:\d+}', ['App\Controller\OrganizacionController', 'mostrarOrganizacion']);
    $r->addRoute('GET','/organizaciones/crear',['App\Controller\OrganizacionController', 'crearOrganizacion']);
    $r->addRoute('POST','/organizaciones/crear',['App\Controller\OrganizacionController', 'insertarOrganizacion']);
    $r->addRoute('PUT','/organizaciones/modificar',['App\Controller\OrganizacionController', 'modificarOrganizacion']);
    $r->addRoute('GET','/organizaciones/{id:\d+}/eliminar',['App\Controller\OrganizacionController', 'eliminarOrganizacion']);

});
?>