<?php


namespace App\Model;


use PDO;

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
        $sql = "SELECT $this->field FROM $this->table";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id): bool
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    public function getIdData($id): array
    {
        $sql = "SELECT $this->field FROM $this->table WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategoryIdData($action): array
    {
        $sql = "SELECT * FROM $this->table WHERE categories_id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$action);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function recommend(): array
    {
        $sql = "SELECT * FROM $this->table WHERE recommend = 'yes'";
        $stmt = $this->connection->query($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function bestSelling(): array
    {
        $sql = "SELECT * FROM $this->table WHERE selling = 'yes'";
        $stmt = $this->connection->query($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}