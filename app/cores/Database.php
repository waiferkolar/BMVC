<?php

namespace App\Cores;


class Database
{
    private const DB_HOST = "localhost";
    private const DB_NAME = "bmvc";
    private const DB_USER = "root";
    private const DB_PASS = "";

    private $dbh;
    private static $instnace;

    private function __construct()
    {
        $dsn = "mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME;
        $options = [
            \PDO::ATTR_PERSISTENT => true,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new \PDO($dsn, self::DB_USER, self::DB_PASS, $options);
        } catch (\Exception $e) {
            echo $e->getMessage() . "<br>";
        }
    }


    public static function getInstance()
    {
        if (self::$instnace == null || empty(self::$instnace)) {
            self::$instnace = new Database();
        }
        return self::$instnace;
    }

    public function getDBHandler()
    {
        return $this->dbh;
    }
}