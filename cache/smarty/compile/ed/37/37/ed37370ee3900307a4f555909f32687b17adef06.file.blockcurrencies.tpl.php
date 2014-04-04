<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:42
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41036668352ccc31a4d4ad8-44337790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed37370ee3900307a4f555909f32687b17adef06' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41036668352ccc31a4d4ad8-44337790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
    'currency' => 0,
    'currencies' => 0,
    'cookie' => 0,
    'f_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31a516a92_74850898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31a516a92_74850898')) {function content_52ccc31a516a92_74850898($_smarty_tpl) {?><!-- Block currencies module -->
<div id="currencies_block_top">
	<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
		<div class="currency_top_wrapper">
			<input type="hidden" name="id_currency" id="id_currency" value="" />
			<input type="hidden" name="SubmitCurrency" value="" />
			 <!-- : --> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>

                        <div class="arrow_down"></div>
		</div>
		<ul id="first-currencies" class="currencies_ul currency_bottom_wrapper">
			<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value){
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
                            
                            <li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?>class="selected"<?php }?>>
                                <a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
 <?php echo $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'];?>
</a				</li>
			<?php } ?>
		</ul>
	</form>
</div>
<!-- /Block currencies module -->
<?php }} ?>