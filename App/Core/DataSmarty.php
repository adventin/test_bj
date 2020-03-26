<?php

namespace App\Core;

class DataSmarty
{
    private static $instances = [];
    private $data = [];
    private $templates = [
        'header'  => 'header.tpl',
        'content' => [],
        'footer'  => 'footer.tpl'
    ];

    protected function __construct()
    {
    }

    public static function getInstance()
    {
        $cls = static::class;
        if (!isset(static::$instances[$cls])) {
            static::$instances[$cls] = new static;
        }

        return static::$instances[$cls];
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getTemplate()
    {
        return $this->templates;
    }

    public function setTemplate($template)
    {
        $this->templates['content'] = $template;
    }
}