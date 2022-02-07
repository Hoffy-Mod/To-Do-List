<?php

namespace Src\Database;

use PDO;
use PDOException;

class Database
{
    private $server = "localhost";
    private $username = "phpmyadmin";
    private $password = "NotAdminPass12#";
    private $database = "task";

    public function pdo()
    {

        try {
            $dsn = "mysql:host" . $this->server . ";dbname=" . $this->database;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $msg) {
            echo "Connection faild: " . $msg->getMessage();
        }
    }
}
