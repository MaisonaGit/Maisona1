<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:45
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174318912952ccc31d13d333-87892405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea4698029f0a2dffa41af55929dccc53fbfcdd90' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blockadvertising/blockadvertising.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174318912952ccc31d13d333-87892405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31d15c459_88961312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31d15c459_88961312')) {function content_52ccc31d15c459_88961312($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
    <a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img class="img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>