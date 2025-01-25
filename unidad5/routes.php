<?php
namespace rutas;
use FastRoute\RouteCollector;

return(function (RouteCollector $r) {

    //Con addroute voy añadiendo rutas url por get o por post a las que responderemos
    //Las que no esten aquí darán fallo
    //Listado de organizacion
    $r->addRoute('GET', '/', ['App\Controller\OrganizacionController', 'mostrarOrganizaciones']);
    $r->addRoute('GET', '/listaOrganizaciones/{pagina:\d+}', ['App\Controller\OrganizacionController', 'mostrarOrganizaciones']);
    $r->addRoute('POST', '/', ['App\Controller\OrganizacionController', 'mostrarOrganizacionesFiltrado']);
    $r->addRoute('GET', '/organizaciones/{id:\d+}', ['App\Controller\OrganizacionController', 'mostrarOrganizacion']);
    
    //Cambiar datos en una organizacion
    $r->addRoute('GET','/organizaciones/crear',['App\Controller\OrganizacionController', 'crearOrganizacion']);
    $r->addRoute('POST','/organizaciones/crear',['App\Controller\OrganizacionController', 'insertarOrganizacion']);
    $r->addRoute('GET','/organizaciones/{id:\d+}/modificar',['App\Controller\OrganizacionController', 'editarOrganizacion']);
    $r->addRoute('POST','/organizaciones/modificar',['App\Controller\OrganizacionController', 'modificarOrganizacion']);
    $r->addRoute('GET','/organizaciones/{id:\d+}/eliminar',['App\Controller\OrganizacionController', 'eliminarOrganizacion']);


    //Listado de unidades
    $r->addRoute('GET', '/unidades', ['App\Controller\UnidadController', 'mostrarUnidades']);
    $r->addRoute('GET', '/listaUnidades/{pagina:\d+}', ['App\Controller\UnidadController', 'mostrarUnidades']);
    $r->addRoute('POST', '/unidades', ['App\Controller\UnidadController', 'mostrarUnidadesFiltrado']);
    $r->addRoute('GET', '/unidades/{id:\d+}', ['App\Controller\UnidadController', 'mostrarUnidad']);
    
    //Cambiar datos en una unidad
    $r->addRoute('GET','/unidades/crear',['App\Controller\UnidadController', 'crearUnidad']);
    $r->addRoute('POST','/unidades/crear',['App\Controller\UnidadController', 'insertarUnidad']);
    $r->addRoute('GET','/unidades/{id:\d+}/modificar',['App\Controller\UnidadController', 'editarUnidad']);
    $r->addRoute('POST','/unidades/modificar',['App\Controller\UnidadController', 'modificarUnidad']);
    $r->addRoute('GET','/unidades/{id:\d+}/eliminar',['App\Controller\UnidadController', 'eliminarUnidad']);


    //Listado de locales
    $r->addRoute('GET', '/', ['App\Controller\OrganizacionController', 'mostrarOrganizaciones']);
    $r->addRoute('GET', '/listaOrganizaciones/{pagina:\d+}', ['App\Controller\OrganizacionController', 'mostrarOrganizaciones']);
    $r->addRoute('POST', '/', ['App\Controller\OrganizacionController', 'mostrarOrganizacionesFiltrado']);
    $r->addRoute('GET', '/organizaciones/{id:\d+}', ['App\Controller\OrganizacionController', 'mostrarOrganizacion']);
    
    //Cambiar datos en un local
    $r->addRoute('GET','/locales/crear',['App\Controller\LocalController', 'crearLocal']);
    $r->addRoute('POST','/locales/crear',['App\Controller\LocalController', 'insertarLocal']);
    $r->addRoute('GET','/locales/{id:\d+}/modificar',['App\Controller\LocalController', 'editarLocal']);
    $r->addRoute('POST','/locales/modificar',['App\Controller\LocalController', 'modificarLocal']);
    $r->addRoute('GET','/locales/{id:\d+}/eliminar',['App\Controller\LocalController', 'eliminarLocal']);
});
?>