<?php

namespace App\Login\Controller;

use App\Core\Controller;
use App\Core\DataSmarty;
use App\Error\View\Error as ViewError;
use App\Login\Model\Login as ModelLogin;
use App\Login\View\Login as ViewLogin;

class LoginAuth extends Controller
{
    private $model;
    private $view;
    private $error;
    private $data;

    public function __construct()
    {
        $this->model = new ModelLogin();
        $this->view = new ViewLogin();
        $this->error = new ViewError();
        $this->data = DataSmarty::getInstance();
    }

    public function execute()
    {

        $this->auth();
        //        $this->view->view();
    }

    public function auth()
    {

        $user = $this->model->getUserByLogin();

        if ($user !== false) {

            $_SESSION['isAdmin'] = true;
            $_SESSION['login'] = $user['login'];
            setcookie("session_id", md5(session_id() . $this->model->salt), time() + 3600 * 24 * 3, '/');
            $this->data->setData([
                'message' => 'Успешная авторизация.',
                'isAdmin' => $_SESSION['isAdmin'],
                'login' => $_SESSION['login']
            ]);
        } else {
            $_SESSION['isAdmin'] = false;
            $_SESSION['login'] = false;
            $this->data->setData([
                'message' => 'Ошибка авторизации. Неправильная пара login/password.',
                'isAdmin' => $_SESSION['isAdmin'],
                'login'   => ''
            ]);
        }
        $this->view->view();

    }
}