<?php

require_once '../models/dbConnect.php';


class GoodsController extends SiteController
{

    protected $s_button;

    public function getContent(){

        $connection = new dbConnect();
        $get_connection = $connection->getConnection();
        $htmlstr='';


        if(!empty($_GET['id']))
        {
            $id = $_GET['id'];

            $result = $get_connection->query("select * from `goods` where id=$id");

            $error_array = $get_connection->errorInfo();

            if($get_connection->errorCode() != 0000)

                echo "SQL ошибка: " . $error_array[2] . '<br /><br />';

            $row = $result->fetch(PDO::FETCH_ASSOC);

                $htmlstr .= '<div class="good"><img src="../public/img/small/';
                $htmlstr .= $row['img'] . '" title="';
                $htmlstr .= $row['name'] . '"/><h3>';
                $htmlstr .= $row['name'] . '</h3><p>';
                $htmlstr .= $row['description'] . '</p><p>Цена: <b>';
                $htmlstr .= $row['price'] . '</b>р.</p></div>';

        } elseif (!isset($_GET['id']) || empty($_GET['id']))
        {

            $result = $get_connection->query("select * from `goods` where id>0 limit 25");

            $error_array = $get_connection->errorInfo();

            if($get_connection->errorCode() != 0000)

                echo "SQL ошибка: " . $error_array[2] . '<br /><br />';

            $goods = [];

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $goods[] = $row;
            }

            foreach ($goods as $good)
            {
            $htmlstr .= '<div class="goods" data-id="';
            $htmlstr .= $good['id'] . '"><a href="?controller=goods&action=one&id=';
            $htmlstr .= $good['id'] . '"><img src="../public/img/small/';
            $htmlstr .= $good['img'] . '" title="';
            $htmlstr .= $good['name'] . '"/><h3>';
            $htmlstr .= $good['name'] . '</h3><p>';
            $htmlstr .= $good['description'] . '</p><p>Цена: <b>';
            $htmlstr .= $good['price'] . '</b>р.</p></a></div>';
            }

        }

        return $htmlstr;
    }

    public function action_ajax(){

        $connection = new dbConnect();
        $get_connection = $connection->getConnection();
        $htmlstr='';
        $i = $_POST['goods'];


            $result = $get_connection->query("select * from `goods` where id>$i limit 25");

            $error_array = $get_connection->errorInfo();

            if($get_connection->errorCode() != 0000)

                echo "SQL ошибка: " . $error_array[2] . '<br /><br />';

            $goods = [];

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $goods[] = $row;
            }

            foreach ($goods as $good)
            {
                $htmlstr .= '<div class="goods" data-id="';
                $htmlstr .= $good['id'] . '"><a href="?controller=goods&action=one&id=';
                $htmlstr .= $good['id'] . '"><img src="../public/img/small/';
                $htmlstr .= $good['img'] . '" title="';
                $htmlstr .= $good['name'] . '"/><h3>';
                $htmlstr .= $good['name'] . '</h3><p>';
                $htmlstr .= $good['description'] . '</p><p>Цена: <b>';
                $htmlstr .= $good['price'] . '</b>р.</p></a></div>';
            }

        echo $htmlstr;
    }

    public function action_index(){
        $this->title = 'Каталог товаров';
        $this->name = 'Каталог товаров';
        $this->content = $this->getContent();
        $this->s_button = '<a id="showmore" href="">Загрузить еще</a>';
    }

    public function action_one(){
        $this->title = 'Карточка товара';
        $this->name = '<a href="?controller=goods"><<< Обратно к каталогу</a>   |   Карточка товара';
        $this->content = $this->getContent();

    }

}