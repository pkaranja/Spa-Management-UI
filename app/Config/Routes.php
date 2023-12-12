<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Config;
use Config\Services;

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
$routes->setDefaultController('Auth\LoginController');
$routes->setDefaultMethod('login');
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
$routes->get('/', 'Auth\LoginController::login');

$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
   // Registration
  	$routes->get('register', 'Auth\RegistrationController::register', ['as' => 'register']);
   $routes->post('register', 'Auth\RegistrationController::attemptRegister');
  
   // Activation
  	$routes->get('activate-account', 'Auth\RegistrationController::activateAccount', ['as' => 'activate-account']);
  
   // Login-out
  	$routes->get('login', 'Auth\LoginController::login', ['as' => 'login']);
   $routes->post('login', 'Auth\LoginController::attemptLogin');
   $routes->get('logout', 'Auth\LoginController::logout');
  
   // Forgotten password
  	$routes->get('forgot-password', 'Auth\PasswordController::forgotPassword', ['as' => 'forgot-password']);
   $routes->post('forgot-password', 'Auth\PasswordController::attemptForgotPassword');
  
 // Reset password
    $routes->get('reset-password', 'Auth\PasswordController::resetPassword', ['as' => 'reset-password']);
    $routes->post('reset-password', 'Auth\PasswordController::attemptResetPassword');
  
    // Account settings
    $routes->get('account', 'Auth\AccountController::account', ['as' => 'account']);
    $routes->post('account', 'Auth\AccountController::updateAccount');
    $routes->post('change-email', 'Auth\AccountController::changeEmail'); // not used
    $routes->get('confirm-email', 'Auth\AccountController::confirmNewEmail'); // not used
    $routes->post('change-password', 'Auth\AccountController::changePassword');
    $routes->post('delete-account', 'Auth\AccountController::deleteAccount');

    // Profile
    $routes->get('profile', 'Auth\AccountController::profile', ['as' => 'profile']); 
    $routes->post('update-profile', 'Auth\AccountController::updateProfile');

    // Users
    $routes->get('users', 'Auth\UsersController::users', ['as' => 'users']);
    $routes->get('users/enable/(:num)', 'Auth\UsersController::enable');
    $routes->get('users/edit/(:num)', 'Auth\UsersController::edit');
    $routes->post('users/update-user', 'Auth\UsersController::update');
    $routes->get('users/delete/(:num)', 'Auth\UsersController::delete');
    $routes->post('users/create-user', 'Auth\UsersController::createUser');
    $routes->get('users/logs', 'Auth\UsersController::userLogs', ['as' => 'userlogs']);

    // Settings
    $routes->get('business-settings', 'SettingsController::index', ['as' => 'business-settings']);
    $routes->get('settings', 'Auth\SettingsController::settings', ['as' => 'settings']);
    $routes->post('settings-update-system', 'Auth\SettingsController::updateSystem');
    $routes->post('settings-update-email', 'Auth\SettingsController::updateEmail');
    
    // Customers
    $routes->get('customers', 'CustomersController::index', ['as' => 'customers']);
    $routes->get('customer/new', 'CustomersController::new', ['as' => 'new-customer']);
    $routes->get('customer/enable/(:string)', 'CustomersController::enable', ['as' => 'enable-customer']);
    $routes->get('customer/edit/(:string)', 'CustomersController::editCustomer', ['as' => 'edit-customer']);
    $routes->get('customer/edit-customer/(:string)', 'CustomersController::editCustomer', ['as' => 'editCustomer']);
    $routes->post('customer/update', 'CustomersController::update', ['as' => 'update-customer']);
    $routes->get('customer/delete/(:string)', 'CustomersController::delete', ['as' => 'delete-customer']);
    $routes->post('customer/create', 'CustomersController::create', ['as' => 'create-customer']);
    
    
   // Attendants
    $routes->get('staff', 'StaffController::index', ['as' => 'staff']);
    $routes->get('staff/new', 'StaffController::new', ['as' => 'new-staff']);
    $routes->get('staff/enable/(:string)', 'StaffController::enable', ['as' => 'enable-staff']);
    $routes->get('staff/edit/(:string)', 'StaffController::edit', ['as' => 'edit-staff']);
    $routes->post('staff/update', 'StaffController::update', ['as' => 'update-staff']);
    $routes->get('staff/delete/(:string)', 'StaffController::delete', ['as' => 'delete-staff']);
    $routes->post('staff/create', 'StaffController::create', ['as' => 'create-staff']);
    
    // Bookings
    $routes->get('bookings', 'AppointmentsModel::index', ['as' => 'bookings']);
    
    // Sales
    $routes->get('sales', 'SalesController::index', ['as' => 'sales']);
    
    // Services
    $routes->get('services', 'ServicesController::index', ['as' => 'services']);
    $routes->get('service/new', 'ServicesController::new', ['as' => 'new-service']);
    $routes->get('service/enable/(:any)', 'ServicesController::enable/$1', ['as' => 'enable-service']);
    $routes->get('service/edit/(:any)', 'ServicesController::edit/$1', ['as' => 'edit-service']);
    $routes->post('service/update/(:any)', 'ServicesController::update/$1', ['as' => 'update-service']);
    $routes->get('service/delete/(:any)', 'ServicesController::delete/$1', ['as' => 'delete-service']);
    $routes->post('service/create', 'ServicesController::create', ['as' => 'create-service']);
    
    // Vendors
    $routes->get('vendors', 'VendorsController::index', ['as' => 'vendors']);
    $routes->get('vendor/new', 'VendorsController::new', ['as' => 'new-vendor']);
    $routes->get('vendor/enable/(:any)', 'VendorsController::enable/$1', ['as' => 'enable-vendor']);
    $routes->get('vendor/edit/(:any)', 'VendorsController::edit/$1', ['as' => 'edit-vendor']);
    $routes->post('vendor/update/(:any)', 'VendorsController::update/$1', ['as' => 'update-vendor']);
    $routes->get('vendor/delete/(:any)', 'VendorsController::delete/$1', ['as' => 'delete-vendor']);
    $routes->post('vendor/create-vendor', 'VendorsController::create', ['as' => 'create-vendor']);
    
    // Products
    $routes->get('products', 'ProductsController::index', ['as' => 'products']);
    $routes->get('product/new', 'ProductsController::new', ['as' => 'new-product']);
    $routes->get('product/enable/(:any)', 'ProductsController::enable/$1', ['as' => 'enable-product']);
    $routes->get('product/edit/(:any)', 'ProductsController::edit/$1', ['as' => 'edit-product']);
    $routes->post('product/update/(:any)', 'ProductsController::update/$1', ['as' => 'update-product']);
    $routes->get('product/delete/(:any)', 'ProductsController::delete/$1', ['as' => 'delete-product']);
    $routes->post('product/create-product', 'ProductsController::create', ['as' => 'create-product']);
    
    // Packages
    $routes->get('packages', 'PackagesController::index', ['as' => 'packages']);
    $routes->get('package/new', 'PackagesController::new', ['as' => 'new-package']);
    $routes->get('package/enable/(:any)', 'PackagesController::enable/$1', ['as' => 'enable-package']);
    $routes->get('package/edit/(:any)', 'PackagesController::edit/$1', ['as' => 'edit-package']);
    $routes->post('package/update/(:any)', 'PackagesController::update/$1', ['as' => 'update-package']);
    $routes->get('package/delete/(:any)', 'PackagesController::delete/$1', ['as' => 'delete-package']);
    $routes->post('package/create', 'PackagesController::create', ['as' => 'create-package']);
});

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