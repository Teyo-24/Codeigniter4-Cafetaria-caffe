<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');s
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/product', 'Home::product');
$routes->get('/article', 'Home::article');
$routes->get('/activity', 'Home::activity');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/detail-product', 'Home::detail_product');
$routes->get('/detail-article', 'Home::detail_article');
$routes->get('/detail-activity', 'Home::detail_activity');

// $routes->get('/landing', return view('landing/landing'));
