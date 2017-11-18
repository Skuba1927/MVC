<?php

//Общие настройки
ini_set('display_errors',1);
error_reporting('E_All');

//Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

//Установки соединения с БД

//Вызов Router
$router = new Router();
$router->run();
