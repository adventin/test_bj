<?php

namespace App\Core;

use App\Core\Route;

class Controller
{
    private $route;
    private $params;

    function loadController($handler)
    {
        if (!empty($handler)) {
            return $handler;
        }
    }

    public function setParams($getParams)
    {
        $this->params = $getParams;
    }

    public function getParams()
    {
        return $this->params;
    }

}