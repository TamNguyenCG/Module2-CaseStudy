<?php


namespace App\Model;

use App\Book;

class BookDB extends Model
{
    public string $table = 'books';
    public string $field = 'id,name,year,republish,summary,producer,license,sold,amount';

    public function __construct()
    {
        parent::__construct($this->table, $this->field);
    }

    public function getAll(): array
    {
        $sql = "select * from `books`";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        $books = [];
        foreach ($result as $item) {
            $book = new Book($item);
            $book->id = $item['id'];
            $books[] = $book;
        }
        return $books;
    }

}