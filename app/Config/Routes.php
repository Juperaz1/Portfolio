<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
*/
$routes->get('/', 'PagesController::index');
$routes->get('/accueil', 'PagesController::index');
$routes->get('/projets', 'PagesController::projets');
$routes->get('/certifications', 'PagesController::certifications');
$routes->get('/veille', 'PagesController::veille');
$routes->get('/contact', 'PagesController::contact');
