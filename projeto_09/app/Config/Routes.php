<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/metodo_um', 'Home::metodo_um');
$routes->get('/metodo_dois', 'Home::metodo_dois');

$routes->get('/metodo_tres/(:num)', 'Home::metodo_tres/$1');
$routes->get('/metodo_quatro/(:num)/(:alpha)', 'Home::metodo_quatro/$1/$2');

//Route com valor facultativo (p. opcional)
$routes->get('/metodo_cinco', 'Home::metodo_cinco');
$routes->get('/metodo_cinco/(:num)', 'Home::metodo_cinco/$1');

$routes->get('/metodo_seis', 'Home::metodo_seis');
$routes->get('/metodo_sete', 'Home::metodo_sete');