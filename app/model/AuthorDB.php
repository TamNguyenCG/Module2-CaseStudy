<?php


namespace App\Model;

use App\Author;
class AuthorDB extends Model
{

    public string $table = 'authors';
    public string $field = 'id,image,name,year,published,nationality,wikipedia';

    public function __construct()
    {
        parent::__construct($this->table, $this->field);
    }
    public function getAll() : array
    {
        $result = $this->getAllData();
        $authors = [];
        foreach ($result as $item){
            $author = new Author($item);
            $author->setId($item['id']);
            $authors[] = $author;
        }
        return $authors;
    }
    public function del($id){
        $this->delete($id);
    }
    public function create(object $author): bool
    {
        $sql = "INSERT INTO `$this->table` (image,name,year,published,nationality,wikipedia) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $author->image);
        $stmt->bindParam(2,$author->name);
        $stmt->bindParam(3,$author->dateOfBirth);
        $stmt->bindParam(4,$author->numberOfBooks);
        $stmt->bindParam(5,$author->nationality);
        $stmt->bindParam(6,$author->linkWiki);
       return  $stmt->execute();
    }
    public function update($id,$author)
    {
        $sql = "UPDATE `$this->table` SET image=?, name = ?,year = ?,published = ?,nationality = ?,wikipedia = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$author->image);
        $stmt->bindParam(2,$author->name);
        $stmt->bindParam(3,$author->dateOfBirth);
        $stmt->bindParam(4,$author->numberOfBooks);
        $stmt->bindParam(5,$author->nationality);
        $stmt->bindParam(6,$author->linkWiki);
        $stmt->bindParam(7,$id);
        $stmt->execute();
    }
    public function getId($id): array
    {
        $sql = "SELECT * FROM `$this->table`WHERE id=?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $authors = [];
        foreach ($result as $item){
            $author = new  Author($item);
            $author->setId($item['id']);
            $authors[] = $author;
        }
        return $authors;
    }
    public function check($value): array
    {
        $sql = "SELECT * FROM `$this->table` WHERE `name` LIKE "."'%".$value."%"."'; ";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        $authors = [];
        foreach ($result as $item){
            $author = new Author($item);
            $author->setId($item['id']);
            $authors[] = $author;
        }
        return $authors;
    }


}