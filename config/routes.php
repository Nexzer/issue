<?php
/* @var $routes RouteBuilder */
$routes->connect('/test/1', [
    'plugin'     => 'Issue',
    'controller' => 'Issues',
    'action'     => 'test1',
]);

$routes->connect('/test/2', [
    'plugin'     => 'Issue',
    'controller' => 'Issues',
    'action'     => 'test2',
]);

$routes->connect('/test/3', [
    'plugin'     => 'Issue',
    'controller' => 'Issues',
    'action'     => 'test3',
]);

$routes->connect('/test/4', [
    'plugin'     => 'Issue',
    'controller' => 'Issues',
    'action'     => 'test3',
]);
