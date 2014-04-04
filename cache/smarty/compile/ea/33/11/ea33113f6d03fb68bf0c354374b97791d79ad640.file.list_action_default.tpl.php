<?php /* Smarty version Smarty-3.1.14, created on 2014-01-10 10:07:18
         compiled from "/homez.742/maisona/www/maisona/admin5327/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91966191752cfb846cdc2e5-30034490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea33113f6d03fb68bf0c354374b97791d79ad640' => 
    array (
      0 => '/homez.742/maisona/www/maisona/admin5327/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91966191752cfb846cdc2e5-30034490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cfb846d21d80_75788989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cfb846d21d80_75788989')) {function content_52cfb846d21d80_75788989($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>