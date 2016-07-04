<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbClass
 *
 * @author MINA
 */
class DbClass extends mysqli {

    private $db;

    private function __construct() {

        parent::__construct("localhost", "root", "", "shop_project");
    }

    static function get() {
        if (self::$db === null) {
            self::$db = new DbClass();
        }
        return self::$db;
    }

}
