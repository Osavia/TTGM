<?php

abstract class Repository
{
    // Quand je passe par MAMP :
    // private const DATABASE_NAME = "mysql:host=localhost;dbname=TTGM;charset=utf8";
    // private const DATABASE_USERNAME = "root";
    // private const DATABASE_PASSWORD = "root";

    // Quand je passe par le terminal :
    private const DATABASE_NAME = "mysql:host=localhost:8889;dbname=TTGM;charset=utf8";
    private const DATABASE_USERNAME = "root";
    private const DATABASE_PASSWORD = "root";

    public function __construct()
    {
    }

    protected function executeSQL(string $sql, array $params = [])
    {
        $db = new PDO(self::DATABASE_NAME, self::DATABASE_USERNAME, self::DATABASE_PASSWORD);
        $result = $db->prepare($sql);
        foreach ($params as $key => $param) $result->bindValue($key, $param);
        $result->execute();
        $db = null;
        return $result ;
    }

}
