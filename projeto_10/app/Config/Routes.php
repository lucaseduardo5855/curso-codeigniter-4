<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Home::login_frm');
$routes->get('/login_frm', 'Home::login_frm_new');