<?php

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

echo 'Проверка русского текста ' . $controllerName . '<br />';

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

echo 'Action = ' . $actionName;

//подключение контроллера
include_once '../controllers' . $controllerName . 'Controller.php';