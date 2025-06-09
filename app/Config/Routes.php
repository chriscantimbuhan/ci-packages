<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/user-roles', 'UserRole::index');
$routes->get('/user-roles/options', 'UserRole::options');
