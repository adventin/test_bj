<?php

namespace App\Core;

use App\Core\ViewSmarty;

class View
{
    private $templateEngine;

    public function __construct()
    {
        $this->templateEngine = new ViewSmarty();
    }

    public function render()
    {

        $this->templateEngine->render();
    }

    public function getData()
    {
        return $this->templateEngine->getData();
    }

    public function setData($data)
    {
        $this->templateEngine->setData($data);
    }

    public function getTemplate()
    {
        return $this->templateEngine->template;
    }

    public function setTemplate($template)
    {
        $this->templateEngine->setTemplate($template);
    }
}
