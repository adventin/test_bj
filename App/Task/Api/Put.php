<?php

namespace App\Task\Api;

use App\Core\Controller;
use App\Task\Model\Task as ModelTask;

class Put extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new ModelTask();
    }

    public function execute()
    {
        $this->putTasks();
    }

    public function putTasks()
    {
        $this->model->putTasks($_POST['taskId'], $_POST['taskText'], $_POST['taskStatus']);
    }

}