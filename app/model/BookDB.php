<?php


namespace App\Model;

use App\Book;
use PDO;

class BookDB extends Model
{
    public string $table = 'books';
    public string $files = 'id, image, name, publish, republish, ISBN, summary, publisher, license, sold, amount, recommend, selling';

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

    public function bookCreate(object $book): bool
    {
        $sql = "INSERT INTO $this->table (image ,name, publish, republish, summary, publisher, license, sold, amount, recommend, selling) 
                                        VALUES (?,?,?,?,?,?,?,?,?,?,?)";
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
        $stmt->bindParam(10, $book->recommend);
        $stmt->bindParam(11, $book->selling);
        return $stmt->execute();
    }

    public function del($id)
    {
        $this->delete($id);
    }

    public function getImgNameById($id)
    {
        $sql = "SELECT image FROM $this->table WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function searchByName($text): array
    {
        $sql = "SELECT $this->files FROM $this->table WHERE `name` LIKE :text";
        $stmt = $this->connection->prepare($sql);
        $txt = '%' . $text . '%';
        $stmt->bindParam(':text', $txt);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $books = [];
        foreach ($result as $item) {
            $book = new Book($item);
            $book->id = $item['id'];
            $books[] = $book;
        }
        return $books;
    }

    public function getDetailByID($id): array
    {
        $result = $this->getIdData($id);
        $books = [];
        foreach ($result as $item) {
            $book = new Book($item);
            $book->id = $item['id'];
            $books[] = $book;
        }
        return $books;
    }

    public function edit($id,$book): bool
    {
        $sql = "UPDATE $this->table SET image = ?, name=?, publish=?, republish=?, ISBN=?,
                                        summary=?, publisher=?, license=?, sold=?, amount = ?,
                                        recommend = ?, selling = ?
                                    WHERE id =?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$book->image);
        $stmt->bindParam(2,$book->name);
        $stmt->bindParam(3,$book->publish);
        $stmt->bindParam(4,$book->republish);
        $stmt->bindParam(5,$book->ISBN);
        $stmt->bindParam(6,$book->summary);
        $stmt->bindParam(7,$book->publisher);
        $stmt->bindParam(8,$book->license);
        $stmt->bindParam(9,$book->sold);
        $stmt->bindParam(10,$book->amount);
        $stmt->bindParam(11,$book->recommend);
        $stmt->bindParam(12,$book->selling);
        $stmt->bindParam(13,$id);
        return $stmt->execute();
    }

    public function recommendBook(): array
    {
        $result = $this->recommend();
        $books = [];
        foreach ($result as $item) {
            $book = new Book($item);
            $book->id = $item['id'];
            $books[] = $book;
        }
        return $books;
    }

    public function bestSellingBook(): array
    {
        $result = $this->bestSelling();
        $books = [];
        foreach ($result as $item) {
            $book = new Book($item);
            $book->id = $item['id'];
            $books[] = $book;
        }
        return $books;
    }
}