<?php 
class Db{
    protected static $pdo;
    function __construct()
    {
        self::$pdo = new PDO('mysql:host='. HOST .';dbname='. DATABASE_NAME, USER , PASSWORD);
        self::$pdo->query('set names utf8');
    }

    public function selectQuery($sql, $arr=[])
    {
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //insert, delete, update
    public function updateQuery($sql, $arr=[])
    {
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }
}

