<?php
namespace App\Model;

use PDO;

class UserModel extends Model
{
    function getAll()
    {
        $sql = "SELECT `id`, `name`, `email`, `role`, `phone`, `address` FROM `users`";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    function destroy($id) {
        $sql = "DELETE FROM `users` WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    function findByEmailPassword($request) {
        $sql = 'SELECT `id`, `name`, `email`, `role`, `phone`, `address`  FROM users WHERE email = ? AND password = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $request['email']);
        $stmt->bindParam(2, $request['password']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}