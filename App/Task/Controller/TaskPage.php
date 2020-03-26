<?php

namespace App\Task\Controller;

use App\Core\Controller;
use App\Core\DataSmarty;
use App\Task\Model\Task as ModelTask;
use App\Task\View\Task as ViewTask;
use App\Error\View\Error as ViewError;

class TaskPage extends Controller
{
    private $model;
    private $view;
    private $error;
    private $data;

    public function __construct()
    {
        $this->model = new ModelTask();
        $this->view = new ViewTask();
        $this->error = new ViewError();
        $this->data = DataSmarty::getInstance();
    }

    public function execute()
    {
        $this->getTasksByPage();

        if ($this->isEmpty()) {
            $this->view->view();
        } else {
            $this->error->view();
        }
    }

    public function getTasksByPage()
    {
        $params = $this->getParams();

        $page = !empty($this->getParams()['page']) ? $this->getParams()['page'] - 1 : 0;
        $pagination = ceil(count($this->model->getTasks()) / $this->model->getStep());
        $url = !empty($params['order']) ? '/' . $params['order'] : '';
        $url .= $params['sort'] ? '/' . $params['sort'] : '';

        $tasksByPage = $this->model->getTasksByPage($page, $params['order'], $params['sort']);
        $this->data->setData([
            'tasks'        => $tasksByPage,
            'pagination'   => [
                'count'   => $pagination,
                'current' => $page + 1
            ],
            'urlGetParams' => $url,
            'isAdmin'      => $_SESSION['isAdmin'],
            'login'        => $_SESSION['login']
        ]);
    }

    public function isEmpty()
    {
        if (!empty($this->data->getData()['tasks'])) {
            return true;
        }
        return false;
    }
}