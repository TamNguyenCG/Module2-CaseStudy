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

    public function __construct(string $name,int $yearOfBirth,int $numberOfBooks,string $nationality,string $linkWiki){
        $this->name = $name;
        $this->yearOfBirth = $yearOfBirth;
        $this->numberOfBooks = $numberOfBooks;
        $this->nationality = $nationality;
        $this->linkWiki = $linkWiki;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
}
