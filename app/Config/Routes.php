<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('about',function($routes){
    $routes->get('history', 'Home::history');
    $routes->get('about-institute', 'Home::about_institute');
    $routes->get('vision-mission-and-po', 'Home::vision_mission_and_POs');
    $routes->get('about-the-principal','Home::about_the_principal');
    $routes->get('principal_message', 'Home::principal_message');
    $routes->get('administration-and-nodal-officers','Home::administration_and_nodal_officers');
});

$routes->get('admission', 'Home::admission');
$routes->get('rules_and_regulations', 'Home::rules_and_regulations');
$routes->get('/examination', 'Home::examination');
$routes->get('/academic_outrich', 'Home::academic_outrich');
$routes->get('/aicte', 'Home::aicte');
$routes->get('/eoa', 'Home::eoa');
$routes->get('/rti', 'Home::rti');
$routes->get('/rule_book', 'Home::rule_book');
$routes->get('/anti_ragging', 'Home::anti_ragging');
$routes->get('/training_and_placement', 'Home::training_and_placement');
$routes->get('/media-gallery', 'Home::media_gallery');
$routes->get('/photo-gallery', 'Home::photo_gallery');
$routes->get('/video-gallery', 'Home::video_gallery');
$routes->get('/faculty', 'Home::faculty');

$routes->group('department', function($routes) {
    $routes->get('mechanical-engineering', 'Home::mechanical_engineering');
    $routes->get('electrical-engineering', 'Home::electrical_engineering');
    $routes->get('electronics-engineering', 'Home::electronics_engineering');
    $routes->get('civil-engineering', 'Home::civil_engineering');
    $routes->get('computer-science-and-engineering', 'Home::cse_engineering');

});

