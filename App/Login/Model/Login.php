<?php

namespace App\Login\Model;

use App\Core\Model;

class Login extends Model
{
    public $salt = 'beejee';

    public function getUserByLogin(){
        $login = $_REQUEST['login'];
        $pwd = $_REQUEST['pwd'];
        $pwd = md5($pwd.$this->salt);
        $query = "
            SELECT users.id AS id, users.login AS login, roles.name AS role
            FROM `users` AS `users`
            LEFT JOIN `roles` AS roles
                ON users.role_id = roles.id
            WHERE login = :login AND pwd = :pwd
        ";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->execute();
        return $stmt->fetch($this->db::FETCH_ASSOC);
    }
}