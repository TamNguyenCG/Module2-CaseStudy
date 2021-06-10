<?php


namespace App\Model;

use App\Book;
use PDO;

class BookDB extends Model
{
    public string $table = 'books';
    public string $files = 'id ,image, name, publish, republish, summary, publisher, license, sold, amount';

    public function __construct()
    {
        parent::__construct($this->table, $this->files);
    }

    public function getAll(): array
    {
        $result = $this->getAllData();
        $books = [];
        foreach ($result as $item) {
            $book = new Book($item);
            $book->id = $item['id'];
            $books[] = $book;
        }
        return $books;
    }

    public function create(object $book): bool
    {
        $sql = "INSERT INTO $this->table (image ,name, publish, republish, summary, publisher, license, sold, amount) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $book->image);
        $stmt->bindParam(2, $book->name);
        $stmt->bindParam(3, $book->publish);
        $stmt->bindParam(4, $book->republish);
        $stmt->bindParam(5, $book->summary);
        $stmt->bindParam(6, $book->publisher);
        $stmt->bindParam(7, $book->license);
        $stmt->bindParam(8, $book->sold);
        $stmt->bindParam(9, $book->amount);

        return $stmt->execute();
    }

    public function getImgNameById($id)
    {
        $sql = "SELECT image FROM books WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function del($id)
    {
        $this->delete($id);
    }

    public function searchByName($text): array
    {
        $sql = "select $this->files from $this->table where `name` like :text";
        $stmt = $this->connection->prepare($sql);
        $txt = '%' . $text . '%';
        $stmt->bindParam(':text', $txt);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $products = [];
        foreach ($result as $item) {
            $product = new Book($item);
            $product->id = $item['id'];
            $products[] = $product;
        }
        return $products;
    }

    public function getByID($id): array
    {
        $result = $this->getIdData($id);
        $products = [];
        foreach ($result as $item) {
            $product = new Book($item);
            $product->id = $item['id'];
            $products[] = $product;
        }
        return $products;
    }
}