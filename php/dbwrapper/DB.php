<?php
namespace DB;

use PDO;
use PDOException;

class DB
{
    private static $instance = null;
    private $pdo;
    private $query;
    private $error = false;
    private $results;
    private $count = 0;
    private $lastInsertID = '';

    private function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new DB();
        }

        return self::$instance;
    }

    public function query($sql, $params = [])
    {
        $this->error = false;
        if ($this->query = $this->pdo->prepare($sql)) {
            $x = 1;
            if (count($params)) {
                foreach ($params as $param) {
                    $this->query->bindValue($x, $param);
                    $x++;
                }
            }
        }
        return $this;
    }
}
