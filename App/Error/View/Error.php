<?php

namespace App\Error\View;

use App\Core\View;

class Error extends View
{
    public function view()
    {
        $this->setTemplate(['404.tpl']);
        $this->render();
    }
}