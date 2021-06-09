<?php


namespace App\Model;


class Model
{
    public mixed $connection;
    public string $table;
    public string $field;

    public function __construct(string $table, string $field)
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=bookstore","root","@Tambeo91");
        $this->connection = $connection->connect();
        $this->table = $table;
        $this->field = $field;
    }

    public function getAllData(): array
    {
        $sql = "select `$this->field` from `$this->table`";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll();
    }

}