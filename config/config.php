<?php
/*
 * Файл настроек
 *
 * */


//Константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

//> Шаблон
$template = 'default';
//пути к файлам шаблона
define('TemplatePrefix', "../views/$template/");
define('TemplatePostfix', '.tpl');
//пути к файлам шаблона в вебпространстве в папке www
define('TemplateWebPath', "/templates/$template/");
//<

//> Smarty
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
//<