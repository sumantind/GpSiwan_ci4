<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/history', 'Home::history');
$routes->get('/principal_message', 'Home::principal_message');
$routes->get('/vision_and_mission', 'Home::vision_and_mission');
$routes->get('/academic_outrich', 'Home::academic_outrich');
$routes->get('/rules_and_regulations', 'Home::rules_and_regulations');
$routes->get('/examination', 'Home::examination');
$routes->get('/aicte', 'Home::aicte');
$routes->get('/rti', 'Home::rti');
$routes->get('/rule_book', 'Home::rule_book');
$routes->get('/anti_ragging', 'Home::anti_ragging');
$routes->get('/training_and_placement', 'Home::training_and_placement');


