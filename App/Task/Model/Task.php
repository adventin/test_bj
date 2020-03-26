<?php

namespace App\Task\Model;

use App\Core\Model;

class Task extends Model
{

    private $step = 3;

    public function getTasks()
    {
        $query = "SELECT `id`, `name`, `mail`, `task`, `status` FROM `tasks`";
        return $this->db->query($query)->fetchAll();
    }

    public function getTasksByPage($page = 0, $order = 'sort_order', $sort = 'asc')
    {

        $order = !empty($order) ? $order : 'sort_order';
        $sort = !empty($sort) ? $sort : 'asc';
        $offset = $this->step * $page;
        $query = "
            SELECT `id`, `name`, `mail`, `task`, `status` , `moderation` 
            FROM `tasks`
            ORDER BY `{$order}` {$sort}
            LIMIT {$offset}, {$this->step}
        ";
        return $this->db->query($query)->fetchAll($this->db::FETCH_ASSOC);
    }

    public function getById($id)
    {
        return $this->db->query("SELECT * FROM `tasks` WHERE id = {$id}")->fetch();
    }

    public function getStep()
    {
        return $this->step;
    }

    public function addTask()
    {
        $query = "INSERT INTO `tasks` (`name`, `mail`, `task`, `sort_order`) VALUES (:name, :mail, :task, :sort_order)";
        $maxOrderQuery = "SELECT MAX(`sort_order`) AS `sort_order` FROM `tasks`";
        $maxOrder = $this->db->query($maxOrderQuery)->fetch($this->db::FETCH_ASSOC)['sort_order'] + 1;
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $_REQUEST['name']);
        $stmt->bindParam(':mail', $_REQUEST['mail']);
        $stmt->bindParam(':task', $_REQUEST['task'], $this->db::PARAM_STR);
        $stmt->bindParam(':sort_order', $maxOrder);
        $stmt->execute();
    }

    public function putTasks($taskId, $task, $status)
    {
        
        if ($_SESSION['isAdmin'] == true) {
            $moderation = 0;
            $currentTaskQuery = "
                SELECT `task`
                FROM `tasks`
                WHERE `id` = :id
            ";
            $stmt = $this->db->prepare($currentTaskQuery);
            $stmt->bindParam(':id', $taskId);
            $stmt->execute();
            $currentTask = $stmt->fetch($this->db::FETCH_ASSOC)['task'];

            if ($currentTask != $task) {
                $moderation = 1;
            }

            $updateQuery = "UPDATE `tasks` SET `task` = :task, `status` = :status, `moderation` = :moderations WHERE `id` = :id";
            $stmt = $this->db->prepare($updateQuery);
            $stmt->bindParam(':task', $task, $this->db::PARAM_STR);
            $stmt->bindParam(':status', $status, $this->db::PARAM_INT);
            $stmt->bindParam(':moderations', $moderation, $this->db::PARAM_INT);
            $stmt->bindParam(':id', $taskId, $this->db::PARAM_INT);
            $stmt->execute();
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}