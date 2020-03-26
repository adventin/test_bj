<?php

namespace App\Core;

use Smarty;
use App\Core\DataSmarty;

class ViewSmarty extends Smarty
{
    private $dataSmarty;

    public function __construct()
    {
        parent::__construct();
        $this->template_dir = 'App/views';
        $this->compile_dir = 'App/views_c';
        $this->loadFilter('output', 'trimwhitespace');
        $this->dataSmarty = DataSmarty::getInstance();
    }

    public function render()
    {
        if (!empty($this->getData()) && is_array($this->getData())) {
            foreach ($this->getData() AS $varName => $value) {
                $this->assign($varName, $value);
            }
        }

        foreach ($this->getTemplate() as $k => $page) {
            if (is_array($page)) {
                foreach ($page as $tpl) {
                    $this->display($tpl);
                }
            } else {
                $this->display($page);
            }
        }
    }


    public function getData()
    {
        return $this->dataSmarty->getData();
    }

    public function setData($data)
    {
        $this->dataSmarty->setData($data);
    }

    public function getTemplate()
    {
        return $this->dataSmarty->getTemplate();
    }

    public function setTemplate($template)
    {
        $this->dataSmarty->setTemplate($template);
    }
}