<?php
include_once '../config/db_config.php';

class UserModel {

    public $user_id;
    public $user_login;
    public $user_name;
    public $user_password;
    private $connect;

    public function __construct () {
        $this->connect = $this->connecting();
    }

    public function pass ($name, $password) {
        return strrev(md5($name)) . md5($password);
    }

    public function connecting () {
        return new PDO(DB_DRIVER . ':host='. DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }

    public function get ($id) {
        return $this->connect->query("select * from users where id = '" . $id . "'")->fetch();
    }

    public function createUser ($name, $login, $password) {
        $user = $this->connect->query("select * from users where login = '" . $login . "'")->fetch();
        if (!$user) {
            $this->connect->exec("insert into users values (null, '" . $name . "', '" . $login . "', '" . $this->pass($name, $password) . "')");
            return true;
        } else {
            return false;
        }
    }

    public function login ($login, $password) {
        $user = $this->connect->query("select * from users where login = '" . $login . "'")->fetch();
        if ($user) {
            if ($user['password'] == $this->pass($user['name'], strip_tags($password))) {
                $_SESSION['user_id'] = $user['id'];
                return 'Добро пожаловать в систему, ' . $user['name'] . '!';
            } else {
                return 'Пароль не верный!';
            }
        } else {
            return 'Пользователь с таким логином не зарегистрирован!';
        }
    }

    public function logout () {
        if (isset($_SESSION["user_id"])) {
            session_destroy();
            return true;
        }
        return false;

    }
}
