<?php
require_once '../config/main.php';

try {
    if (empty($_GET)) {
        $src = [
            'title' => 'Главная страница',
            'content' => 'Главная страница'
        ];
        $template = $twig->render('index.tmpl', $src);
    } elseif (isset($_GET['gallery'])) {
        $src = [
            'title' => 'Галерея',
            'img_big' => 'img/big/',
            'img_small' => 'img/small/',
            'content' => $data
        ];
        $template = $twig->render('galleryAll.tmpl', $src);
    }  elseif (isset($_GET['img'])) {
        $src = [
            'title' => 'Галерея',
            'img_big' => 'img/big/',
            'img_small' => 'img/small/',
            'content' => $_GET['img']
        ];
        $template = $twig->render('galleryOne.tmpl', $src);
    }
    echo $template;
} catch (Exception $e) {
    'Error: ' . $e->getMessage();
}