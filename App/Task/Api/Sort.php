<?php

namespace App\Task\Api;

use App\Core\Controller;
use App\Task\Model\Task as ModelTask;

class Sort extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new ModelTask();
    }

    public function execute()
    {
        echo json_encode($this->getTasks());
    }

    public function getTasks()
    {
        $params = $this->getParams();
        return $this->model->getTasksByPage($params['status'], $params['task']);
    }

}