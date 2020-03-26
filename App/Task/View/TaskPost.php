<?php

namespace App\Task\View;

use App\Core\View;
use App\Task\Model;

class TaskPost extends View
{
    public function view()
    {
        $this->setTemplate(['task.tpl']);
        $this->render();
    }
}