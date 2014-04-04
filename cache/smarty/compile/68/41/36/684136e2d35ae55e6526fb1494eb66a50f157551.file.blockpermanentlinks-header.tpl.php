<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:42
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134755963852ccc31a0b00e8-47048430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684136e2d35ae55e6526fb1494eb66a50f157551' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134755963852ccc31a0b00e8-47048430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31a0ea783_26515953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31a0ea783_26515953')) {function content_52ccc31a0ea783_26515953($_smarty_tpl) {?><!-- Block permanent links module -->
<div id="permanent_links">
	<!-- Home -->
	<div class="home">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
"><?php echo smartyTranslate(array('s'=>'Home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
	</div>
	<!-- Contact -->
	<div class="contact">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
	</div>
</div>
<!-- /Block permanent links module --><?php }} ?>