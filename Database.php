<?php

class Database
{
    private $connection = null;

    public function getConnection()
    {
        if ($this->connection === null) {
            $config = require_once(__DIR__ . '/config.php');
            $dbConfig = $config['database'];
            $dsn = "mysql:host={$dbConfig['server']};dbname={$dbConfig['database']};charset={$dbConfig['charset']}";

            $this->connection = new PDO($dsn, $dbConfig['user'], $dbConfig['password']);
        }

        return $this->connection;
    }

    public function get($tableName)
    {
        $query = $this->getConnection()->prepare('SELECT * FROM '.$tableName);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}