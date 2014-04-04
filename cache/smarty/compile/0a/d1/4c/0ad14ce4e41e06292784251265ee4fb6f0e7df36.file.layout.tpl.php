<?php /* Smarty version Smarty-3.1.14, created on 2014-01-10 00:51:41
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/mobile/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110554846152cf360d515c10-19633740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad14ce4e41e06292784251265ee4fb6f0e7df36' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/mobile/layout.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110554846152cf360d515c10-19633740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_header' => 0,
    'header_file' => 0,
    'template' => 0,
    'display_footer' => 0,
    'footer_file' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cf360d5939a4_95942074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cf360d5939a4_95942074')) {function content_52cf360d5939a4_95942074($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['header_file'] = new Smarty_variable('./header.tpl', null, 0);?>
<?php $_smarty_tpl->tpl_vars['footer_file'] = new Smarty_variable('./footer.tpl', null, 0);?>

<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['template']->value;?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>

<?php }?>
<?php }} ?>