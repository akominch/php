<?php
include_once '../config/config.php';        //настройка проекта
include_once '../config/db.php';            //подключение к БД
include_once '../library/mainFunctions.php'; //основные функции

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $controllerName, $actionName);