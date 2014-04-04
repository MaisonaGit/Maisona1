<?php /* Smarty version Smarty-3.1.14, created on 2014-03-14 12:23:25
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:638927018530a1cb54a96b2-40118514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7798420fab5a0071283fa6d70ca32079e73a7dd' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1394795951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '638927018530a1cb54a96b2-40118514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb550f694_14301479',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb550f694_14301479')) {function content_530a1cb550f694_14301479($_smarty_tpl) {?><!-- Block permanent links module -->
<div id="permanent_links">
	<!-- Home -->

	<!-- Contact -->
	<div class="contact">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
	</div>
</div>
<!-- /Block permanent links module --><?php }} ?>