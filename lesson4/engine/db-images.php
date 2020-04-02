<?php

try {
    $db_img_connect = new PDO('mysql:dbname=gallery;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    echo "Error: Could not connect. " . $e->getMessage();
}

$db_img_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $sql = "select name from `images`";
    $getImages = $db_img_connect->query($sql);
    while ($row = $getImages->fetchColumn()) {
        $data[] = $row;
    }
    unset($db_img_connect);
} catch (Exception $e) {
    'Error: ' . $e->getMessage();
}

// Добавить проверку папки на наличие новых картинок и добавить их в бд


/*$data = scandir('img/big');

foreach ($data as $key => $img) {

    if ($img[0] == '.') {
        unset($data[$key]);
        continue;
    }
}*/
