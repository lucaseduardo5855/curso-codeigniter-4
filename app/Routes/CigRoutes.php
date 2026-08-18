<?php 

namespace App\Routes;

use Config\Services;

$routes =  Services::routes();

//cigBurguer bo routes
$routes->get('/', 'Auth::index');