<?php


namespace App\Controller;


use App\Author;
use App\Model\AuthorDB;
use JetBrains\PhpStorm\Pure;

class AuthorController
{
public AuthorDB $authorDB;

public function __construct(){
    $this->authorDB = new AuthorDB();
}
public function authorList(){
    $authors= $this->authorDB->getAll();
    include_once "resource/views/author/author.php";

}
public function deleteAuthor(){
    $id = $_REQUEST['id'];
    $this->authorDB->del($id);
    header('Location: index.php?page=author');
}
    public function error(): array
    {
        $errors = [];
        $fields = ['name', 'year', 'published','nationality','wikipedia'];
        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = 'Must fill in blank spot';
            }
        }
        return $errors;
    }
    public function authorObj(): Author
    {
        $name = $_POST['name'];
        $dateOfBirth = $_POST['year'];
        $numberOfBook = $_POST['published'];
        $nationality = $_POST['nationality'];
        $linkWiki = $_POST['wikipedia'];
        $data = [
            'name' => $name,
            'year' => $dateOfBirth,
            'published' => $numberOfBook,
            'nationality' => $nationality,
            'wikipedia' => $linkWiki,
        ];

        return new Author($data);
    }
    public function create(){

      if($_SERVER['REQUEST_METHOD']=='GET'){
            include_once "resource/views/author/add.php";
        } else {
          $errors = $this->error();
          if(empty($errors)){
              $author = $this->authorObj();
              $this->authorDB->create($author);
              header('Location: index.php?page=author');
          } else {
              include_once "resource/views/author/add.php";
          }
      }

    }
    public function edit(){
    $id = $_REQUEST['id'];
    if($_SERVER['REQUEST_METHOD']=='GET') {

        $authors = $this->authorDB->getId($id);
        include_once "resource/views/author/edit.php";
    } else {
        $errors = $this->error();
        if(empty($errors)){
            $author = $this->authorObj();
            $this->authorDB->update($id,$author);
            header('Location: index.php?page=author');
        } else {
            include_once "resource/views/author/edit.php";
        }
    }
    }



}