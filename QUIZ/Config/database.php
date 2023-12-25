<?php

require_once 'config.php';

class database {
    private $pdo;
    private $stmt;
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME , DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur de " . $e->getMessage();
        }
    }
    public function query($sql)
    {
        $this->stmt = $this->pdo->prepare($sql);
    }

    public function bind($param, $value, $type = null)
    {

        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = pdo::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = pdo::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = pdo::PARAM_NULL;
                    break;
                default:
                    $type = pdo::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() : bool
    {
        return $this->stmt->execute();
    }

    //fetch data

    public function fetchAll()
    {
        $this->stmt->execute();
        $results = $this->stmt->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function fetch()
    {
        $this->stmt->execute();
        $result = $this->stmt->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    //row Count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}