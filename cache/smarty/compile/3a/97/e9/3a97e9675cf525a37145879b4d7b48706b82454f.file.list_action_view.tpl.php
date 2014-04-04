<?php /* Smarty version Smarty-3.1.14, created on 2014-01-10 09:52:56
         compiled from "/homez.742/maisona/www/maisona/admin5327/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136823222852cfb4e88b2e74-79648881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a97e9675cf525a37145879b4d7b48706b82454f' => 
    array (
      0 => '/homez.742/maisona/www/maisona/admin5327/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136823222852cfb4e88b2e74-79648881',
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
  'unifunc' => 'content_52cfb4e899b576_13976480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cfb4e899b576_13976480')) {function content_52cfb4e899b576_13976480($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>