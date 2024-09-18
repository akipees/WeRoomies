<?php

namespace Config;
use App\Controllers\FlatController;
// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/loginadmin', 'Home::alogin');
$routes->get('/loginowner', 'Home::ologin');
$routes->get('/clogin', 'Home::clogin');
$routes->post('oregister','Home::oregister');
$routes->post('register','Home::register');
$routes->post('login','Home::login');
$routes->post('/ownerlogin', 'Home::ownerlogin');
$routes->post('/adminlogin', 'Home::adminlogin');
$routes->get('/ahome', 'Home::ahome');
$routes->get('/ohome', 'Home::ohome');

$routes->get('/oregistration', 'Home::reg');

use App\Controllers\AdminController;
$routes->get('/admin', 'AdminController::home');
$routes->get('/header', 'AdminController::header');
$routes->get('/index', 'AdminController::index');
$routes->get('admin', [AdminController::class, 'home']);
// $routes->get('(:segment)', [AdminController::class, 'view']);


$routes->get('flat','FlatController::index');
$routes->get('create-flat','FlatController::create');
$routes->post('add-flat','FlatController::save');

$routes->get('edit-flat/(:num)', 'FlatController::edit/$1');
$routes->post('update-flat', 'FlatController::update');

$routes->get('delete-flat/(:num)', 'FlatController::delete/$1');



$routes->get('oflat','OFlatController::index');
$routes->get('ocreate-flat','OFlatController::create');
$routes->post('oadd-flat','OFlatController::save');

$routes->get('oedit-flat/(:num)', 'OFlatController::edit/$1');
$routes->post('oupdate-flat', 'OFlatController::update');

$routes->get('odelete-flat/(:num)', 'OFlatController::delete/$1');




$routes->get('room','RoomController::index');
$routes->get('create-room','RoomController::create');
$routes->post('add-room','RoomController::save');

$routes->get('edit-room/(:num)', 'RoomController::edit/$1');
$routes->post('update-room', 'RoomController::update');

$routes->get('delete-room/(:num)', 'RoomController::delete/$1');




$routes->get('oroom','ORoomController::index');
$routes->get('ocreate-room','ORoomController::create');
$routes->post('oadd-room','ORoomController::save');

$routes->get('oedit-room/(:num)', 'ORoomController::edit/$1');
$routes->post('oupdate-room', 'ORoomController::update');

$routes->get('odelete-room/(:num)', 'ORoomController::delete/$1');




$routes->get('owner','OwnerController::index');

$routes->get('create-owner','OwnerController::create');
$routes->post('add-owner','OwnerController::save');

$routes->get('edit-owner/(:num)', 'OwnerController::edit/$1');
$routes->post('update-owner', 'OwnerController::update');

$routes->get('delete-owner/(:num)', 'OwnerController::delete/$1');



$routes->get('customer','CustomerController::index');
$routes->get('create-customer','CustomerController::create');
$routes->post('add-customer','CustomerController::save');

$routes->get('edit-customer/(:num)', 'CustomerController::edit/$1');
$routes->post('update-customer', 'CustomerController::update');

$routes->get('delete-customer/(:num)', 'CustomerController::delete/$1');

$routes->get('customer-login', 'CustomerController::clogin');



use App\Controllers\PagesController;
$routes->get('rooms','PagesController::room');
$routes->get('flats','PagesController::flat');
$routes->get('/registration', 'PagesController::reg');
$routes->get('/pages/home', 'PagesController::home');
$routes->post('/login', 'PagesController::login');
//$routes->get('/pages/dashboard_view.php', 'Pages::dash');
$routes->get('pages', [PagesController::class, 'index']);
$routes->get('(:segment)', [PagesController::class, 'view']);

// use App\Controllers\AdminController;
$routes->get('admin-owner','AdminController::index');



service('auth')->routes($routes);



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
