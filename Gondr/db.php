<?php
namespace Gondr;

class DB {
    private static $db = null;

    //싱글톤
    public static function getDB() {
        if(self::$db == null) {
            self::$db = new \PDO("mysql:host=gondr.asuscomm.com; dbname=yy_30220; charset=utf8mb4;", "yy_30220", "1234");
        }
        return self::$db;
    }

    public static function fetchAll($sql, $data = []) {
        $q = self::getDB()->prepare($sql);
        $q->execute($data);

        return $q->fetchAll(\PDO::FETCH_OBJ); //int형 / 옵션(숫자)을 반환한다.
    }
}