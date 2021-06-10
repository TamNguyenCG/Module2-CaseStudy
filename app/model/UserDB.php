<?php


namespace App\Model;


class UserDB extends Model
{
    public string $table = 'user';
    public string $field = 'name,email,password,phone';

    public function __construct()
    {
        parent::__construct($this->table,$this->field);
    }
    function addUser(object $user): void
    {
        $sql= "INSERT INTO $this->table(`name`,`email` `password`,`phone`) VALUES (?,?,?,?)";
        $stmt= $this->connection->prepare($sql);
        $stmt->bindParam(1,$user->name);
        $stmt->bindParam(2,$user->email);
        $stmt->bindParam(3,$user->password);
        $stmt->bindParam(4,$user->phone);
        $stmt->execute();
        header('resource/pages/login.php');
    }
}