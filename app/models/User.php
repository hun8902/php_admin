<?php

namespace App\Models;

class User
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function findByEmail($email)
    {
        $query = "SELECT * FROM user WHERE user_email = ?";
        $statement = $this->pdo->prepare($query);
        $statement->execute([$email]);
        return $statement->fetch(\PDO::FETCH_ASSOC);
    }
}
?>