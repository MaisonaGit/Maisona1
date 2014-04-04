<?php /* Smarty version Smarty-3.1.14, created on 2014-01-12 12:59:29
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44080277952d283a18c3b22-07437454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b7dc55e216dc1d46fe9620172f975e4b5c2c1a8' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44080277952d283a18c3b22-07437454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d283a1a8be98_68515098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d283a1a8be98_68515098')) {function content_52d283a1a8be98_68515098($_smarty_tpl) {?><div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy ">
        <h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<div class="checkbox required">
            <label for="customer_privacy">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />
                <?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>

            </label>
	</div>
</fieldset><?php }} ?>