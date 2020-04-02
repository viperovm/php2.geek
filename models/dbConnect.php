<?php

require_once '../config/db_config.php';

class dbConnect
{
    private $db;

    private $connect_str = DB_DRIVER . ':host='. DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;

    public function getConnection()
    {
        $this->db = new PDO($this->connect_str,DB_USER,DB_PASS);
        return $this->db;
    }

}

