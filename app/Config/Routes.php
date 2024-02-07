<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Front\App::nogo');
$routes->get('/(:alphanum)', 'Front\App::index/$1');

// ADMIN ROUTES
$routes->group('admin', static function($routes)
{
    $routes->get('home', 'AdminIndexPage::index');
    $routes->get('login', 'AdminLoginPage::index');
    $routes->get('logout', 'AdminLoginPage::logout');
});