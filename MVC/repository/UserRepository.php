<?php

require_once "./../MVC/repository/Repository.php";
require_once "./../MVC/model/User.php";

class UserRepository extends Repository
{

    private const USER_TABLE = "CREATE TABLE IF NOT EXISTS user ( 
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username TEXT NOT NULL,
        password VARCHAR(255)
    );";

    private const USER_INSERT = "INSERT INTO user(username, password) VALUES(
        'admin',
        '$2y$10\$B7e9Vf30Su7dMDrrKn8.TuUPLI2XJtPkvPLllbPaORN2hzYMQPQp.'
    );";

    /**
     * @var string $table
     */
    private string $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }


    public function findOneByUsername(string $username): ?User
    {
        $user =  null;

        $sql = "SELECT * FROM $this->table WHERE username = :username LIMIT 1 ;";
        $params = [
            ":username" => $username
        ];
        $result = $this->executeSQL($sql, $params);
        if (count($result = ($this->executeSQL($sql, $params))->fetchAll(PDO::FETCH_CLASS, "user")) > 0) {
            $user = $result[0];
        }
        return $user;
    }
}
