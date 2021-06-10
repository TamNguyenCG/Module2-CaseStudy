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


}