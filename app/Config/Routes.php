<?php

use App\Controllers\Landing\LandingController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');s
$routes->get('/landing', 'landing\LandingController::index');
$routes->get('/product', 'landing\LandingController::product');
$routes->get('/article', 'landing\LandingController::article');
$routes->get('/activity', 'landing\LandingController::activity');
// $routes->get('/landing', return view('landing/landing'));
