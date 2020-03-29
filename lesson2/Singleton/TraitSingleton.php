<?php


trait TraitSingleton
{
    final private function __construct() {}

    final public static function getInstance() {
        if ( empty(self::$instance) ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}
