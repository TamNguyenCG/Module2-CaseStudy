<?php
namespace App\Model;

use PDO;

class AuthDB extends Model
{

    public string $table = 'user';
    public string $userInfo = 'id, name, email, password, role, phone, address';
    public function __construct()
    {
        parent::__construct($this->table, $this->userInfo);
    }

    function findByEmailPassword($request) {
        $sql = "SELECT $this->userInfo FROM $this->table  WHERE email = ? AND password = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $request['email']);
        $stmt->bindParam(2, $request['password']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}