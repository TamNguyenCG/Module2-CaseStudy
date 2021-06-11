<?php


namespace App;


class Author
{
    public string $name;
    public int $dateOfBirth;
    public int $numberOfBooks;
    public string $nationality;
    public string $linkWiki;
    public int $id;
    public mixed $image;

    public function __construct($data){
        $this->name = $data['name'];
        $this->dateOfBirth = $data['year'];
        $this->numberOfBooks = $data['published'];
        $this->nationality = $data['nationality'];
        $this->linkWiki = $data['wikipedia'];
        $this->image = $data['image'];
    }
    public function setId($id){
        $this->id = $id;
    }

}