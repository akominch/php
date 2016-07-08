<?php

/**
 * @param $controllerName
 * @param string $actionName
 */

function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * @param $smarty
 * @param $templateName
 */

function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки
 *
 * @param null $value
 * @param int $die
 */
function debug($value = null, $die = 1){
    echo 'Debug: <br/><pre>';
    print_r($value);
    echo '</pre>';

    if($die) die;
}

/**
 * Преобразование результата ф-ции выборки в ассоциативный массив
 *
 * @param $rs набор строк - результат работы SELECT
 * @return array|bool
 */
function createSmartyRsArray($rs){

    if (! $rs) return false;

    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }

    return $smartyRs;
}