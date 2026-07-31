<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Main::index');
$routes->get('pagina_1', 'Main::pagina_1');
$routes->get('login', 'Main::formulario_login');
$routes->post('login_post', 'Main::formulario_submit');
$routes->match(['get', 'post'], 'pagina_1', 'Main::pagina_1');

$routes->get('user/id', 'Main::ver_user/10');