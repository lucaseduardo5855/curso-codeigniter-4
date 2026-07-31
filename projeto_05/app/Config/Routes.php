<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Main::index');
// $routes->get('/falar/(:any)', 'Main::falar/$1');
$routes->get('teste1/(:any)', 'Main::ph_any/$1/$2');

$routes->get('teste2/(:segment)', 'Main::ph_segment/$1');

$routes->get('teste3/(:num)/(:num)/(:num)', 'Main::ph_num/$1/$2/$3');