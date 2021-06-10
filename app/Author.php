<?php


namespace App;


class Author
{
    public string $name;
    public mixed $yearOfBirth;
    public int $numberOfBooks;
    public string $nationality;
    public string $linkWiki;
    public int $id;

    public function __construct($data){
        $this->name = $data['name'];
        $this->yearOfBirth = $data['yearOfBirth'];
        $this->numberOfBooks = $data['numberOfBooks'];
        $this->nationality = $data['nationality'];
        $this->linkWiki = $data['linkWiki'];
    }
    public function setId($id){
        $this->id = $id;
    }

}