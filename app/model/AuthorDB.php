<?php


namespace App\Model;

use App\Author;
class AuthorDB extends Model
{

    public string $table = 'authors';
    public string $field = 'id,name,year,published,nationality,wikipedia';

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
        $sql = "INSERT INTO `$this->table` (name,year,published,nationality,wikipedia) VALUES (?,?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$author->name);
        $stmt->bindParam(2,$author->dateOfBirth);
        $stmt->bindParam(3,$author->numberOfBooks);
        $stmt->bindParam(4,$author->nationality);
        $stmt->bindParam(5,$author->linkWiki);
       return  $stmt->execute();
    }


}