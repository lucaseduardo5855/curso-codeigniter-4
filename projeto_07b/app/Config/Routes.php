<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
// $routes->view('/', 'pagina');
// $routes->view('/pagina', 'pagina');
// $routes->view('/pagina/(:any)', 'pagina');
$routes->get('/', 'Main::index');
$routes->get('/about', 'Main::about');
$routes->get('/services', 'Main::services');