<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('head_view', 'Home::head_view');
$routes->get('navbar_view', 'Home::navbar_view');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('registro', 'Home::registro');
$routes->get('footer_view', 'Home::footer_view');

?>
