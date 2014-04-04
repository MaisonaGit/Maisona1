<?php /* Smarty version Smarty-3.1.14, created on 2014-01-10 00:51:40
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16419149452cf360cb2dc56-04060652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce86b835db26fc1ff1de94bd4344af89e34fe06' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/mobile/index.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16419149452cf360cb2dc56-04060652',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cf360ccaae61_09158456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cf360ccaae61_09158456')) {function content_52cf360ccaae61_09158456($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>