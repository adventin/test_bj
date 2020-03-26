<?php

namespace App\Login\Controller;

use App\Core\Controller;
use App\Login\View\Login as ViewLogin;

class Login extends Controller
{
    private $view;

    public function __construct()
    {
        $this->view = new ViewLogin();
    }

    public function execute()
    {
        $this->view->view();
    }
}