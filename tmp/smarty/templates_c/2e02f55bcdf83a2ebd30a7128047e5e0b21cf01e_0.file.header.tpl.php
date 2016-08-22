<?php
/* Smarty version 3.1.29, created on 2016-08-22 08:37:49
  from "/Volumes/data/SITES/php.loc/views/default/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ba8fad854c33_08275069',
  'file_dependency' => 
  array (
    '2e02f55bcdf83a2ebd30a7128047e5e0b21cf01e' => 
    array (
      0 => '/Volumes/data/SITES/php.loc/views/default/header.tpl',
      1 => 1471844269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_57ba8fad854c33_08275069 ($_smarty_tpl) {
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/main.css" type="text/css">
</head>
<body>
<div id="header">
    <h1>My Shop - интернет магазин</h1>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="centerColumn">
<?php }
}
