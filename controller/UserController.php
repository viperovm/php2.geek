<?php


require_once('../models/UserModel.php');

class UserController extends SiteController
{
    private $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function action_info() {

        $user_info = $this->user->get($_SESSION['user_id']);
        $this->title = 'Добро пожаловать, ' . $user_info['name'];
        $this->content = $this->Template('views/userAccaunt.php', array('username' => $user_info['name'], 'userlogin' => $user_info['login']));
    }

    public function action_reg() {

        $this->title = 'Регистрация';
        $this->content = $this->Template('views/userCreate.php', array());

        if($this->isPost()) {
            $result = $this->user->createUser($_POST['name'], $_POST['login'], $_POST['password']);
            if ($result) {
                $this->content = $this->Template('views/userCreate.php', array('text' => $result));
            } else {
                $this->content = $this->Template('views/userCreate.php', array('text' => $result));
            }
        }
    }

    public function action_login() {
        $this->title = 'Вход';
        $this->content = $this->Template('views/userLogin.php', array());

        if($this->isPost()) {
            $result = $this->user->login($_POST['login'], $_POST['password']);
            $this->content = $this->Template('views/userLogin.php', array('text' => $result));

        }
    }

    public function action_logout() {
        $this->user->logout();
        header('location: /');

    }

}
