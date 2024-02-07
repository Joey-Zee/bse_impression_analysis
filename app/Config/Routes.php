<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Front\App::index');

// ADMIN ROUTES
$routes->group('admin', static function($routes)
{
    $routes->get('home', 'AdminIndexPage::index');
    $routes->get('login', 'AdminLoginPage::index');
    $routes->get('logout', 'AdminLoginPage::logout');
});