<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/plants', 'Home::plants');

$routes->get('/gallery', 'Home::gallery');

$routes->get('/about', 'Home::about');

$routes->get('/tropical-plants', 'Home::tropicalPlants');

$routes->get('/tanaman-obat', 'Home::tanamanobat');

$routes->get('/tanaman-langka', 'Home::tanamanlangka');