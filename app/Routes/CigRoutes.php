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

//Products
$routes->get('/products', 'Products::index');
$routes->get('/products/new', 'Products::new_Product');
$routes->post('/products_new_submit', 'Products::new_submit');

// edit product
$routes->get('/products/edit/(:alphanum)', 'Products::edit_product/$1');
$routes->post('/products/edit_submit', 'Products::edit_submit');

// delete product
$routes->get('/products/delete/(:alphanum)', 'Products::delete_product/$1');
$routes->get('/products/delete_confirm/(:alphanum)', 'Products::delete_product_confirm/$1');

// stock product
$routes->get('/stocks/product/(:alphanum)', 'Products::product_stock/$1');
