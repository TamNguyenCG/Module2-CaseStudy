<?php

namespace App\Model;

use App\Author;

class AuthorDB
{
    public mixed $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function getAll(): array
    {
        $sql = 'SELECT * FROM `authors`';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchALl();
        $authors = [];
        foreach ($result as $item){
            $author = new Author($item['name'],$item['year_of_birth'],$item['number_of_books'],$item['nationality'],$item['link_wiki']);
            $author->setId($item['id']);
            $authors[] = $author;
        }
        return $authors;
    }
    public function create(object $author)
    {
        $sql = 'INSERT INTO `authors`(name,year_of_birth,number_of_books,nationality,link_wiki) VALUES (?,?,?,?,?)';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$author->name);
        $stmt->bindParam(2,$author->yearOfBirth);
        $stmt->bindParam(3,$author->numberOfBooks);
        $stmt->bindParam(4,$author->nationality);
        $stmt->bindParam(5,$author->linkWiki);
        return $stmt->execute();

    }
}