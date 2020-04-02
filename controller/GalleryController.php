<?php

require_once '../models/dbConnect.php';


class GalleryController extends SiteController
{

    protected $title;
    protected $content;
    protected $name;


    public function getContent()
    {

        $connection = new dbConnect();
        $get_connection = $connection->getConnection();
        $htmlstr = '';

        if (empty($_GET['name']) || !isset($_GET['name'])) {

            $result = $get_connection->query("select name from `images`");

            $error_array = $get_connection->errorInfo();

            if ($get_connection->errorCode() != 0000)

                echo "SQL ошибка: " . $error_array[2] . '<br /><br />';

            $images = [];

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $images[] = $row;
            }

            $htmlstr = '<div class="galery">';

            foreach ($images as $image) {

                $htmlstr .= '<a rel="gallery" class="photo" href="?controller=gallery&name=';
                $htmlstr .= $image['name'] . '"><img src="../public/img/small/';
                $htmlstr .= $image['name'] . '" title="';
                $htmlstr .= $image['name'] . '"/></a>';

            }

            $htmlstr .= '</div>';

        } elseif (isset($_GET['name']) || !empty($_GET['name'])) {
            $this->name = '<a href="?controller=gallery"><<< Вернуться в галерею</a>   |   ' . $_GET['name'];
            $htmlstr = '<img src="../public/img/big/' . $_GET['name'] . '" title="' . $_GET['name'] . '"/>';
        }

        return $htmlstr;

    }


    public function action_index(){

        if (empty($_GET['name']) || !isset($_GET['name'])) {

            $this->title = 'Галерея';
            $this->name = 'Галерея изображений';

        } elseif (isset($_GET['name']) || !empty($_GET['name'])) {
            $this->title = 'Галерея | ' . $_GET['name'];
            $this->name = '<a href="?controller=gallery"><<< Вернуться в галерею</a>   |   ' . $_GET['name'];
        }

        $this->content = $this->getContent();
    }




}