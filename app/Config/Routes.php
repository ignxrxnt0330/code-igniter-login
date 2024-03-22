<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::homePage');
$routes->post('/login', 'Home::login');
$routes->get('/exit', 'Home::exit');
$routes->get('/signup', 'Home::signup');
$routes->post('/dosignup', 'Home::dosignup');

//$routes->get('/$route', 'Home::$method'); method refers to the method in Home.php
