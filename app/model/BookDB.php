<?php


namespace App\Model;

use App\Book;

class BookDB extends Model
{
    public string $table = 'books';
    public string $files = 'id , name, year, republish, summary, producer, license, sold, amount';

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

}