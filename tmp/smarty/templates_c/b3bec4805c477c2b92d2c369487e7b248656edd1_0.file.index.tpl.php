<?php
/* Smarty version 3.1.29, created on 2016-08-22 15:56:15
  from "/Volumes/data/SITES/php.loc/views/default/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57baf66fc1a620_57986656',
  'file_dependency' => 
  array (
    'b3bec4805c477c2b92d2c369487e7b248656edd1' => 
    array (
      0 => '/Volumes/data/SITES/php.loc/views/default/index.tpl',
      1 => 1471870543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57baf66fc1a620_57986656 ($_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_products_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_products_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
    <div style="float: left; padding: 0px 30px 40px 0px;">
        <a href="/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" />
        </a><br />
        <a href="/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_local_item;
}
if ($__foreach_products_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_item;
}
}
}
