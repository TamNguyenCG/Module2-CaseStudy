<?php


namespace App;


class Author
{
    public string $name;
    public int $yearOfBirth;
    public int $numberOfBooks;
    public string $nationality;
    public string $linkWiki;
    public int $id;

    public function __construct($data){
        $this->name = $data['name'];
        $this->yearOfBirth = $data['year'];
        $this->numberOfBooks = $data['published'];
        $this->nationality = $data['nationality'];
        $this->linkWiki = $data['wikipedia'];
    }
    public function setId($id){
        $this->id = $id;
    }

}