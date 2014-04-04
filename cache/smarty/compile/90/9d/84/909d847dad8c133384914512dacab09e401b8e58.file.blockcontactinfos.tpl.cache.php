<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 18:48:27
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243271723530a1cb76e3241-37925363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909d847dad8c133384914512dacab09e401b8e58' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1393177449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243271723530a1cb76e3241-37925363',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb7775be9_66552588',
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb7775be9_66552588')) {function content_530a1cb7775be9_66552588($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_mailto')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<div id="block_contact_infos" class="footer_block col-lg-3 col-md-3 col-sm-6 col-xs-12">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</p>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!=''){?><li><strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, 'htmlall', 'UTF-8');?>
</strong></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!=''){?><li><pre><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, 'htmlall', 'UTF-8');?>
</pre></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Tel:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, 'htmlall', 'UTF-8');?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo smarty_function_mailto(array('address'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, 'htmlall', 'UTF-8'),'encode'=>"hex"),$_smarty_tpl);?>
</li><?php }?>
	</ul>
</div>
<!-- /MODULE Block contact infos -->
<?php }} ?>