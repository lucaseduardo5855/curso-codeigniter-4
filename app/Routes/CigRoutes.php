<?php

namespace App\Routes;

use Config\Services;

$routes =  Services::routes();

//cigBurguer bo routes
$routes->get('/', 'Auth::index');
$routes->get('/teste', 'Auth::teste');
$routes->get('/teste_db', 'Auth::teste_db');
