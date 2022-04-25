<?php

abstract class Repository
{
    // Quand je passe par le serveur MAMP :
    // private const DATABASE_NAME = "mysql:host=localhost:8889;dbname=TTGM;charset=utf8";
    // private const DATABASE_USERNAME = "root";
    // private const DATABASE_PASSWORD = "root";

    // Quand je passe par le serveur PHPmyAdmin 3WA :
    private const DATABASE_NAME = "mysql:host=db.3wa.io;port=3306;dbname=alexispiquer_TTGM;charset=utf8";
    private const DATABASE_USERNAME = "alexispiquer";
    private const DATABASE_PASSWORD = "1391e5ef58eba90d2600267ed4d26b84";

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
        return $result;
    }
}
