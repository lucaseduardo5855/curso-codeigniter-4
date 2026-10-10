<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/login_submit', 'Auth::login_submit');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('products', 'Products::index');
$routes->get('products/new', 'Products::new_Product');
$routes->post('products_new_submit', 'Products::new_submit');
$routes->get('products/edit/(:alphanum)', 'Products::edit/$1');
$routes->post('products/edit_submit', 'Products::edit_submit');
$routes->get('products/delete/(:alphanum)', 'Products::delete/$1');
$routes->get('products/delete_confirm/(:alphanum)', 'Products::delete_confirm/$1');
$routes->get('stocks', 'Stocks::index');
