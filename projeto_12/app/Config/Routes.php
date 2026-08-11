<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Main::index');
$routes->get('products', 'Main::products');
$routes->get('where_we_are', 'Main::where_we_are');