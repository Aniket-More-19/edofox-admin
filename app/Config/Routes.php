<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');

$routes->get('login', 'Home::login');

$routes->get('signup', 'Home::signup');
