<?php

include_once '../models/CategoriesModel.php';

function testAction() {
    echo 'IndexController.php > testAction';
}

/**
 * @param $smarty шаблонизатор
 */

function indexAction($smarty) {

    $rsCategories = getAllMainCatsWithChildren();


    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}