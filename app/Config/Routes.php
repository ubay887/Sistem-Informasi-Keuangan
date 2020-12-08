<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', function ()
{
	return redirect()->to('/login');
});
$routes->get('/login','Login::form', ["filter"=>"guest"]);
$routes->post('/login','Login::login', ["filter"=>"guest"]);
$routes->get('/logout','Login::logout');
$routes->get('/dashboard','Home::dashboard',["filter"=>"auth"]);

// User
$routes->get('/user','User::index',["filter"=>"auth"]);
$routes->post('/user/add','User::add',["filter"=>"auth"]);
$routes->get('/user/del/(:num)','User::delete/$1',["filter"=>"auth"]);
$routes->post('/user/edit/(:num)','User::edit/$1',["filter"=>"auth"]);

// Akun
$routes->get('/akun','Akun::index',["filter"=>"auth"]);
$routes->post('/akun/add','Akun::add',["filter"=>"auth"]);
$routes->get('/akun/del/(:num)','Akun::delete/$1',["filter"=>"auth"]);
$routes->post('/akun/edit/(:num)','Akun::edit/$1',["filter"=>"auth"]);

// Jurnal Umum
$routes->get('/jurnal_umum','JurnalUmum::index',["filter"=>"auth"]);
$routes->post('/jurnal_umum/add','JurnalUmum::add',["filter"=>"auth"]);
$routes->get('/jurnal_umum/del/(:num)','JurnalUmum::delete/$1',["filter"=>"auth"]);
$routes->post('/jurnal_umum/edit/(:num)','JurnalUmum::edit/$1',["filter"=>"auth"]);

// Jurnal Penyesuaian
$routes->get('/jurnal_penyesuaian','JurnalPenyesuaian::index',["filter"=>"auth"]);
$routes->post('/jurnal_penyesuaian/add','JurnalPenyesuaian::add',["filter"=>"auth"]);
$routes->get('/jurnal_penyesuaian/del/(:num)','JurnalPenyesuaian::delete/$1',["filter"=>"auth"]);
$routes->post('/jurnal_penyesuaian/edit/(:num)','JurnalPenyesuaian::edit/$1',["filter"=>"auth"]);

// Profile
$routes->get('/profile','User::profile',["filter"=>"auth"]);
$routes->post('/profile/update','User::updateProfile',["filter"=>"auth"]);
$routes->post('/profile/changePass','User::changePassword',["filter"=>"auth"]);

// Laporan
$routes->get('/laporan','Laporan::index',["filter"=>"auth"]);

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
