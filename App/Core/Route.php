<?php

namespace App\Core;

use FastRoute;
use FastRoute\RouteCollector;
use App\Core\Controller;

class Route
{
    private $dispatcher;
    private $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }

    public function init($routes)
    {
        $this->dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) use ($routes)
        {
            foreach ($routes as $url => $route) {

                if (isset($route['group']) && !empty($route['group'])) {
                    $r->addGroup($url, function (RouteCollector $r) use ($route)
                    {
                        foreach ($route['group'] as $groupRoute) {
                            $r->addRoute($route['method'], $groupRoute, $this->controller->loadController($route['controller']));
                        }
                    });
                } else {
                    $r->addRoute($route['method'], $url, $this->controller->loadController($route['controller']));
                }
            }
        });
    }

    public function setRoute($httpMethod, $uri)
    {
        $routeInfo = $this->dispatcher->dispatch($httpMethod, $uri);

        switch ($routeInfo[0]) {
            case FastRoute\Dispatcher::NOT_FOUND:
                echo 'Page Error';
                break;
            case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                break;
            case FastRoute\Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $getParams = $routeInfo[2];
                $handler->setParams($getParams);
                $handler->execute();
                break;
        }
    }
}