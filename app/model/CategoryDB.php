<?php

namespace App\Model;

use App\Category;
use App\Model\Model;
use PDO;

class CategoryDB extends Model
{
    public string $table = 'categories';
    public string $field = 'name,quantity';

    public function __construct()
    {
        parent::__construct($this->table, $this->field);
    }

    public function add(object $category): bool
    {
        $sql = "INSERT INTO $this->table(`name`,`quantity`)VALUES(?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $category->name);
        $stmt->bindParam(2, $category->quantity);
        return $stmt->execute();
    }

    public function delByID($id)
    {
        $this->delete($id);
    }

    public function searchByName($name): array
    {
        $sql = "SELECT $this->field FROM $this->table WHERE `name` LIKE :text";
        $stmt = $this->connection->prepare($sql);
        $txt = '%' . $name . '%';
        $stmt->bindParam(':text', $txt);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function editByID($id, object $category): bool
    {
        $sql = "UPDATE $this->table SET name = ?, quantity = ?
                WHERE id = ?";
        /*var_dump($id);
        die();*/
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $category->name);
        $stmt->bindParam(2, $category->quantity);
        $stmt->bindParam(3, $id);
        return $stmt->execute();
    }

    public function getDetailByID($id): array
    {
        $result = $this->getIdData($id);
        $categories = [];
        foreach ($result as $item) {
            $category = new Category($item);
            $category->id = $id;
            $categories[] = $category;
        }
        return $categories;
    }

    public function getBookByCateID($id): array
    {
        $sql = "SELECT `books`.`id`, `image` , `books` . `name` , `publish` , `republish` ,  `publisher` , count(`books`.`name`)
          FROM books JOIN categories ON books.categoryID = categories.id 
          WHERE categories.id = ?
          GROUP BY `books`.`id` ";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllData(): array
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->connection->query($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getIdByName($text)
    {
        $sql = "SELECT `id` FROM $this->table WHERE `name` = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$text);
        $stmt->execute();
        return  $stmt->fetch(PDO::FETCH_ASSOC);
    }
}