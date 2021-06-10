<?php


namespace App\Model;


class Model
{
    public mixed $connection;
    public string $table;
    public string $field;

    public function __construct(string $table, string $field)
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=bookstore","root","Hai.01111999");
        $this->connection = $connection->connect();
        $this->table = $table;
        $this->field = $field;
    }

    public function getAllData(): array
    {
        $sql = "SELECT $this->field FROM $this->table";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll();
    }

}