<?php

namespace App\Login\Controller;

use App\Core\Controller;
use App\Login\Model\Login;
use App\Task\View\Task as ViewTask;

class LoginOut extends Controller
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->view = new ViewTask();

    }

    public function execute()
    {
        $_SESSION['isAdmin'] = 0;
        $_SESSION['login'] = '';
        $this->view->view();
    }

}