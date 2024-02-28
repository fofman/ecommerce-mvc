<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Homepage::page');
$routes->get('prodotto/(:any)', 'Prodotto::page/$1');
$routes->get('cover/(:any)', 'Immagini::cover/$1');
$routes->get('carrello', 'Carrello::page');
$routes->get('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');
$routes->get('register', 'Auth::register');
$routes->post('authLogin', 'Auth::authLogin');
$routes->post('authRegister', 'Auth::authRegister');
$routes->get('account', 'Auth::account');
$routes->get('ordini', 'Ordini::page');
$routes->post('aggiungiAlCarrello', 'Carrello::add');
$routes->post('rimuoviDaCarrello', 'Carrello::remove');
$routes->get('checkout', 'Carrello::checkout');
