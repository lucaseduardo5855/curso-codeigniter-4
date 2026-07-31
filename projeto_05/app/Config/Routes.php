<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Main::index');
// $routes->get('/falar/(:any)', 'Main::falar/$1');
$routes->get('teste1/(:any)', 'Main::ph_any/$1/$2');

$routes->get('teste2/(:segment)', 'Main::ph_segment/$1');

$routes->get('teste3/(:num)/(:num)/(:num)', 'Main::ph_num/$1/$2/$3');

$routes->get('teste4/(:alpha)/(:alpha)', 'Main::ph_alpha/$1/$2');
                                     
$routes->get('teste5/(:alphanum)/(:alphanum)', 'Main::ph_alphanum/$1/$2'); 

$routes->get('user/(:num)/posts/(:num)', 'Main::users_post/$1/$2');