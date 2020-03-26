<?php

namespace App\Task\Controller;

use App\Core\Controller;
use App\Task\Model\Manager;
use App\Task\View\Task as ViewTask;

class TaskPost extends Controller
{
    private $manager;
    private $view;

    public function __construct()
    {
        $this->manager = new Manager();
        $this->view = new ViewTask();
    }

    public function execute()
    {
        $this->addTask();
        $this->view->view();
    }

    public function addTask()
    {
        $this->manager->addTask();
    }

}