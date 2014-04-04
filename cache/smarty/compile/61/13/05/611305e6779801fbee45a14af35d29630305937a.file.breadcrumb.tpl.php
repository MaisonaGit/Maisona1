<?php /* Smarty version Smarty-3.1.14, created on 2014-02-24 00:23:10
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:567411155530a36ba2ea3c3-59644284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '611305e6779801fbee45a14af35d29630305937a' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/breadcrumb.tpl',
      1 => 1393197777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567411155530a36ba2ea3c3-59644284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a36ba389f50_96344063',
  'variables' => 
  array (
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a36ba389f50_96344063')) {function content_530a36ba389f50_96344063($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])){?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div id="navBreadcrumb">
	<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a>
	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value){?>
		<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1){?>style="display:none;"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['navigationPipe']->value, 'html', 'UTF-8');?>
</span>
		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')){?>
			<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
		<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>
</div>
<!-- /Breadcrumb --><?php }} ?>