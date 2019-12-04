<?php

namespace App\models;

use App\models\Connection;

class Model 
{

    protected $connect;
    protected $table;


    public function __construct()
    {
        $this->connect = Connection::connect();
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $all = $this->connect->query($sql);
        $all->execute();

        return $all->fetchAll();
    }

    public function find(string $field, string $value)
    {
        $sql = "SELECT {$field} FROM {$this->table} WHERE {$field} = :{$field}";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindValue(":{$field}", $value);
        $stmt->execute();

        return $stmt->fetch();
    }
}