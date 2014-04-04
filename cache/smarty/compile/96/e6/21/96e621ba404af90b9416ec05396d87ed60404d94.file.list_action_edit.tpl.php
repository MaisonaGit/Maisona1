<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:17:50
         compiled from "/homez.742/maisona/www/maisona/admin5327/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93610266752ccc35e257839-87597548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e621ba404af90b9416ec05396d87ed60404d94' => 
    array (
      0 => '/homez.742/maisona/www/maisona/admin5327/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93610266752ccc35e257839-87597548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc35e26d2f3_87500309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc35e26d2f3_87500309')) {function content_52ccc35e26d2f3_87500309($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>