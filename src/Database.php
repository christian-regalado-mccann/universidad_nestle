<?php
/*
*
* Class Databse
*
*/

include_once("utils/env_decoder.php");
define("DB_HOST", getenv("DB_HOST"));
define("DB_DATABASE", getenv("DB_DATABASE"));
define("DB_USER", getenv("DB_USER"));
define("DB_PASS", getenv("DB_PASS"));
define("DB_PORT", getenv("DB_PORT"));


class Database{

    private static $CONN_STR = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_DATABASE;
    private static $instances = [];

    protected function __construct(){}

    public static function getInstance() {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }

    protected function getConn() {
        try {
            $con = new PDO(self::$CONN_STR, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $con;
        } catch (\Throwable $th) {
            return null;
        }
    }

    public static function getDB(){
        $database = self::getInstance();
        return $database->getConn();      
    }

}