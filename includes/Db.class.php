<?php

class Db {

    static private $db;

    private function __construct() {
        
    }

    /**
     * 
     * @return MyMysqli
     */
    static function get() {
        if (self::$db === null) {
            self::$db = new MyMysqli("localhost", "root", "", "shop_project");
            self::$db->query("SET NAMES 'utf8'");
        }

        return self::$db;
    }

}
