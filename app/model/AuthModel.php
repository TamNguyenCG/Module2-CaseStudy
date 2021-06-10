<?php
namespace App\Model;

use PDO;

class AuthModel
{
    protected PDO $connect;
    public function __construct()
    {
        $database = new DBConnection("mysql:host=localhost;dbname=bookstore","root","Hai.01111999");
        $this->connect = $database->connect();
    }

    function getAll(): array
    {
        $sql = "SELECT `id`, `name`, `email`, `role`, `phone`, `address` FROM `users`";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll();
    }

    function destroy($id): bool
    {
        $sql = "DELETE FROM `user` WHERE id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    function findByEmailPassword($request) {
        $sql = 'SELECT `id`, `name`, `email`, `role`, `phone`, `address`  FROM user WHERE email = ? AND password = ?';
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $request['email']);
        $stmt->bindParam(2, $request['password']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}