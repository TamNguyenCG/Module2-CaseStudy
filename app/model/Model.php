<?php


namespace App\Model;


class Model
{
    public mixed $connection;
    public string $table;
    public string $field;

    public function __construct(string $table, string $field)
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=bookstore","root","Cubi@2712");
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

    public function delete($id): bool
    {
        $sql = "delete from $this->table where id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

}