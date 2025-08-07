<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('layanan', 'LayananController::index');

$routes->get('tarif', 'TarifController::index');

$routes->get('tracking', 'TrackingController::index');

$routes->get('testimoni', 'TestimoniController::index');

$routes->get('kontak', 'KontakController::index');
$routes->post('kontak/simpan', 'KontakController::simpan');

$routes->get('checkout', 'CheckoutController::index', ['filter' => 'auth']);
$routes->get('get-location', 'CheckoutController::getLocation');
$routes->get('get-cost', 'CheckoutController::getCost');
$routes->post('checkout/save', 'CheckoutController::save');


$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('register', 'RegisterController::index');
$routes->post('register', 'RegisterController::store');

$routes->get('history', 'UserOrderController::index');

$routes->get('dashboard', 'DashboardController::index', ['filter' => 'adminfilter']);

$routes->get('/admin/order', 'AdminOrderController::index');
$routes->post('/admin/order/delete/(:num)', 'AdminOrderController::delete/$1');
$routes->post('admin/order/confirm/(:num)', 'AdminOrderController::confirm/$1');

$routes->get('admin/pesan', 'AdminKelolaPesanController::index');
$routes->post('admin/pesan/delete/(:num)', 'AdminKelolaPesanController::delete/$1');

