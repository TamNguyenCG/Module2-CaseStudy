<?php


namespace App\Model;

use PDO;
use PDOException;

class DBConnection
{
    public string $dsn;
    public string $user;
    public string $password;

    public function __construct(string $dsn,
                                string $user,
                                string $password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect(): PDO
    {
        try{
            return new PDO($this->dsn,$this->user,$this->password);
        }catch(PDOException $PDOException){
            echo $PDOException->getMessage();
        }
    }
}