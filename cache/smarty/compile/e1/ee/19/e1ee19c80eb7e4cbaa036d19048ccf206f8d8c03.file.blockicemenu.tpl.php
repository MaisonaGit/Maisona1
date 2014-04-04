<?php /* Smarty version Smarty-3.1.14, created on 2014-03-13 23:51:27
         compiled from "/homez.742/maisona/www/maisona/modules/blockicemenu/blockicemenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:847114115531f8a8fd96cf2-73293688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1ee19c80eb7e4cbaa036d19048ccf206f8d8c03' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/blockicemenu/blockicemenu.tpl',
      1 => 1394751084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '847114115531f8a8fd96cf2-73293688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531f8a8fdb49f1_06983484',
  'variables' => 
  array (
    'modules_dir' => 0,
    'menu_items' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531f8a8fdb49f1_06983484')) {function content_531f8a8fdb49f1_06983484($_smarty_tpl) {?><!-- Block ice menu -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
blockicemenu/css/style.css"/>
<div class="icemenu">
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['menu_items']->value;?>

	</ul>
</div>
<!-- Fin de block ice menu --><?php }} ?>