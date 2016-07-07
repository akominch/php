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