<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Front\App::nogo');

// FRONT 360 ROUTES
$routes->group('360', static function($routes)
{
    # Page Route
    $routes->get('(:alphanum)', 'Front\App::index/$1', ['filter' => 'usercheck']);

    # Ajax Routes
    $routes->get('setPick20', 'Front\AppAjax::pick_twenty');
    $routes->get('setPick10',  'Front\AppAjax::pick_ten');
    $routes->get('finalize', 'Front\AppAjax::final');
});

// ADMIN ROUTES
$routes->group('admin', static function($routes)
{
    $routes->get('home', 'AdminIndexPage::index');
    $routes->get('login', 'AdminLoginPage::index');
    $routes->get('logout', 'AdminLoginPage::logout');
});