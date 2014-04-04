<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 19:05:43
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1571591398530a3877a7d962-88933382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '412f453bd48fea34cffe16de13291b72e160e100' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1393177450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1571591398530a3877a7d962-88933382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a3877b0f190_76218587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a3877b0f190_76218587')) {function content_530a3877b0f190_76218587($_smarty_tpl) {?><div class="error_customerprivacy" style="color:red;"></div>
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