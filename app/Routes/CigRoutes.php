<?php

namespace App\Routes;

use Config\Services;

$routes =  Services::routes();

//Main
$routes->get('/', 'Main::index');

//login e logout
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/login_submit', 'Auth::login_submit');
$routes->get('auth/logout', 'Auth::logout');
