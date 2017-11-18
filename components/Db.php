<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 18.11.2017
 * Time: 15:13
 */

class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT.'config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }
}