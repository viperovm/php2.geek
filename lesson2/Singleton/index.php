<h1>Singleton</h1>

<?php

require 'TraitSingleton.php';
require 'Singleton.php';

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if($singleton1 === $singleton2){
    echo "It's working!";
} else {
    echo 'Something wrong...';
}
