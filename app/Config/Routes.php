<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::login');
$routes->get('/signup', 'Home::Signup');
$routes->post('/signup', 'Home::createUser');
$routes->get('/home', 'Home::Home');
$routes->get('/admin', 'Home::Admin');
$routes->get('/add', 'Home::AddBook');
$routes->post('/add', 'Home::createBook');
$routes->get('delete/(:num)','Home::deleteBook/$1');
$routes->get('borrowing/(:num)','Home::borrowBook/$1');
$routes->get('deliver/(:num)','Home::deliverBook/$1');
$routes->get('/update', 'Home::Update');
$routes->get('/loginError', 'Home::loginError');
$routes->get('/signupError', 'Home::signupError');
$routes->get('update/(:num)','Home::update/$1');
$routes->post('update/(:num)','Home::updateBook/$1');
