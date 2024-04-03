<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',  'Main::index');
$routes->get('/complaint',  'Main::complaint_frm');
$routes->post('/submit',  'Main::submit');
