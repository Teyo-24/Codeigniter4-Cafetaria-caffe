<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');s
// $routes->get('/', 'Home::index');

$routes->get('landing', 'LadingController::index');

$routes->get('/', 'Home::index');
// $routes->get('/layouts', 'Home::app');
$routes->get('/product', 'Home::product');
$routes->get('/article', 'Home::article');
$routes->get('/activity', 'Home::activity');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/detail-product', 'Home::detail_product');

$routes->get('/article/detail/(:segment)', 'Home::detail_article/$1');
// $routes->get('/article/(:num)', 'ArticleController::detail_article/$1');

$routes->get('/activity/detail/(:segment)', 'Home::detail_activity/$1');
// $routes->get('/landing', return view('landing/landing'));
