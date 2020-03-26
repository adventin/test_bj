<?php

namespace App\Core;

use PDO;

class Model
{
    protected $db;
    private $configDb = [
        'driver' => 'mysql',
        'host'   => 'localhost',
        'user'   => 'root',//testbjdb
        'dbname' => 'test_bj',
        'pwd'    => ''//Parol123
    ];

    public function __construct()
    {
        $this->db = new PDO("{$this->configDb['driver']}:host={$this->configDb['host']};dbname={$this->configDb['dbname']}", $this->configDb['user'], $this->configDb['pwd']);
    }
}