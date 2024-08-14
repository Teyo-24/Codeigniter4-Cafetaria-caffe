<?php

use App\Controllers\Landing\LandingController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');s
// $routes->get('/', 'landing\LandingController::index');
$routes->get('/', 'landing\LandingController::index');
$routes->get('/product', 'landing\LandingController::product');
$routes->get('/article', 'landing\LandingController::article');
$routes->get('/activity', 'landing\LandingController::activity');
$routes->get('/about', 'landing\LandingController::about');
$routes->get('/contact', 'landing\LandingController::contact');
$routes->get('/detail-product', 'landing\LandingController::detail_product');
$routes->get('/detail-article', 'landing\LandingController::detail_article');
$routes->get('/detail-activity', 'landing\LandingController::detail_activity');

// $routes->get('/landing', return view('landing/landing'));
