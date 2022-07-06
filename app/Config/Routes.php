<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Auth::index');
$routes->get('/auth', 'Auth::index');
$routes->post('/auth/signin', 'Auth::signin');
$routes->get('/auth/logout', 'Auth::logout', ['filter' => 'CEK']);
$routes->get('/home', 'Home::index', ['filter' => 'CEK']);

$routes->get('/jabatan', 'jabatan::index', ['filter' => 'CEK']);
$routes->post('/jabatan/save', 'jabatan::save', ['filter' => 'CEK']);
$routes->get('/jabatan/delete/(:num)', 'jabatan::delete/$1', ['filter' => 'CEK']);


$routes->get('/pegawai', 'pegawai::index', ['filter' => 'CEK']);
$routes->get('/pegawai/insert', 'pegawai::insert', ['filter' => 'CEK']);
$routes->get('/pegawai/detail/(:num)', 'pegawai::detail/$1', ['filter' => 'CEK']);
$routes->get('/pegawai/update/(:num)', 'pegawai::update/$1', ['filter' => 'CEK']);
$routes->post('/pegawai/update_data/(:num)', 'pegawai::update/$1', ['filter' => 'CEK']);
$routes->post('/pegawai/save', 'pegawai::save', ['filter' => 'CEK']);
$routes->get('/pegawai/insert_pasangan/(:num)', 'pegawai::insert_pasangan/$1', ['filter' => 'CEK']);
$routes->post('/pegawai/save_pasangan/(:num)', 'pegawai::save_pasangan/$1', ['filter' => 'CEK']);
$routes->get('/pegawai/update_pasangan/(:num)', 'pegawai::update_pasangan/$1', ['filter' => 'CEK']);
$routes->post('/pegawai/update_datapasangan/(:num)', 'pegawai::update_datapasangan/$1', ['filter' => 'CEK']);
$routes->post('/pegawai/save_anak/(:num)', 'pegawai::save_anak/$1', ['filter' => 'CEK']);
$routes->post('/pegawai/update_anak/(:num)', 'pegawai::update_anak/$1', ['filter' => 'CEK']);
$routes->get('/pegawai/delete/(:num)', 'pegawai::delete/$1', ['filter' => 'CEK']);

$routes->get('/mutasi', 'mutasi::index', ['filter' => 'CEK']);
$routes->get('/mutasi/create', 'mutasi::create', ['filter' => 'CEK']);
$routes->post('/mutasi/save', 'mutasi::save', ['filter' => 'CEK']);
$routes->get('/mutasi/update/(:num)', 'mutasi::update/$1', ['filter' => 'CEK']);
$routes->post('/mutasi/updatemutasi/(:num)', 'mutasi::updatemutasi/$1', ['filter' => 'CEK']);
$routes->get('/mutasi/delete/(:num)', 'mutasi::delete/$1', ['filter' => 'CEK']);

$routes->get('/pensiun', 'pensiun::index', ['filter' => 'CEK']);
$routes->post('/pensiun/save', 'pensiun::save', ['filter' => 'CEK']);
$routes->post('/pensiun/update/(:num)', 'pensiun::update/$1', ['filter' => 'CEK']);
$routes->get('/pensiun/delete/(:num)', 'pensiun::delete/$1', ['filter' => 'CEK']);



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
