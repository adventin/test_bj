<?php

use App\Core\Model;
use App\Core\View;
use App\Core\Controller;
use App\Core\Route;

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routes = [
    '/login'         => [
        'method'     => 'GET',
        'controller' => new \App\Login\Controller\Login(),
        'group'      => [
            '/',
            ''
        ]
    ],
    '/login/auth/'   => [
        'method'     => 'POST',
        'controller' => new \App\Login\Controller\LoginAuth()
    ],
    '/login/out/'   => [
        'method'     => 'GET',
        'controller' => new \App\Login\Controller\LoginOut()
    ],
    '/'              => [
        'method'     => 'GET',
        'controller' => new \App\Task\Controller\TaskPage(),
        'group'      => [
            '{page:\d+}/{order}/{sort}',
            '{order}/{sort}',
            '{page:\d+}',
            '{_:}'
        ]
    ],
    '/api/task/sort' => [
        'method'     => 'GET',
        'controller' => new \App\Task\Api\Sort(),
        'group'      => [
            '/{order}/{sort}/{page:\d+}',
            '/{order}/{sort}',
            '/{page:\d+}'
        ]
    ],
    '/api/task/put/' => [
        'method'     => 'POST',
        'controller' => new \App\Task\Api\Put()
    ],
    '/task/post/'    => [
        'method'     => 'POST',
        'controller' => new \App\Task\Controller\TaskPost()
    ]
];

$route = new Route();
$route->init($routes);

$route->setRoute($httpMethod, $uri);