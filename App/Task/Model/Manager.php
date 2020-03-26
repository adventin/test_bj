<?php

namespace App\Task\Model;

use App\Task\Model\Task;

class Manager
{
    private $model;

    public function __construct()
    {
        $this->model = new Task();
    }

    public function addTask()
    {
        $this->model->addTask();
        setcookie("taskPost", 1, time() + 5);
    }
}