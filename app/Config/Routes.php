<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/profilku', 'Mahasiswa::index');

$routes->get('/nilai', 'Mahasiswa::nilai');

$routes->setAutoRoute(true);

