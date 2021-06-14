<?php

namespace App\Model;
use App\Category;
use PDO;

class CategoryDB extends Model
{
    public string $table = "books";
    public string $field = "categories_id";

    public function __construct()
    {
        parent::__construct($this->table, $this->field);
    }

    public function getCategoryById($id): array
    {
        $sql = "SELECT * FROM $this->table WHERE $this->field = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $categories = [];
        foreach ($result as $item) {
            $category = new Category($item);
            $category->id = $item['id'];
            $categories[] = $category;
        }
        return $categories;
    }
}