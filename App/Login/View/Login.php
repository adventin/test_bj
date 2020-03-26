<?php

namespace App\Login\View;

use App\Core\View;

class Login extends View
{
    public function view()
    {
        $this->setTemplate(['login.tpl']);
        $this->render();
    }
}