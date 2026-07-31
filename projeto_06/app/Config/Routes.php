<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('adicao/(:num)/(:num)', 'Math::add/$1/$2');
$routes->get('subtracao/(:num)/(:num)', 'Math::sub/$1/$2');
$routes->get('multiplicacao/(:num)/(:num)', 'Math::multi/$1/$2');
$routes->get('divisao/(:num)/(:num)', 'Math::divide/$1/$2');

$routes->get('palavra/(:alpha)', 'Talk::word/$1');
$routes->get('palavras/(:alpha)/(:alpha)', 'Talk::words/$1/$2');
$routes->get('outro/(:alpha)', 'Talk::other/$1');
$routes->get('outro', 'Talk::other');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      