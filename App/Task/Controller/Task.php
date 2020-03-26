<?php

namespace App\Task\Controller;

use App\Core\Controller;
use App\Core\DataSmarty;
use App\Task\View\Task as ViewTask;
use App\Task\Model\Task as ModelTask;

class Task extends Controller
{
    private $model;
    private $view;
    private $data;

    public function __construct()
    {
        $this->model = new ModelTask();
        $this->view = new ViewTask();
        $this->data = DataSmarty::getInstance();
    }

    public function execute()
    {
        $this->getTasks();
        $this->view->view();
    }

    public function getTasks()
    {
        $this->data->setData(['tasks' => $this->model->getTasks()]);
    }
}