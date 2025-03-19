<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
*/
$routes->get('/', 'PagesController::index');
$routes->get('/accueil', 'PagesController::index');