<?php
/**
 * Подключение к БД
 */

$dblocation = "localhost";
$dbname = "myshop";
$dbuser = "myshop";
$dbpasswd = "1q3ew2";

//сединение с БД

    $db = mysql_connect($dblocation, $dbuser, $dbpasswd);

    if (!$db){
        echo "Ошибка доступа к MySQL";
        exit();
    }

//Установим кодировку по умолчанию для текущего соединения
    mysql_set_charset('utf8');

    if (! mysql_select_db($dbname, $db) ){
        echo "Ошибка доступа к БД: {$dbname}";
        exit();
    }