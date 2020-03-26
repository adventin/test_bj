<?php

namespace App\Task\View;

use App\Core\View;

class Task extends View
{
    public function view()
    {
        $this->setTemplate(['task.tpl']);
        $this->render();
    }
}