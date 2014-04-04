<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 18:48:26
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2001975691530a1cb7298503-71909246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c09a7399e1cc252dc4ecb2d422a1d8cdaf022785' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockadvertising/blockadvertising.tpl',
      1 => 1393177447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2001975691530a1cb7298503-71909246',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb72b2d74_19442824',
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb72b2d74_19442824')) {function content_530a1cb72b2d74_19442824($_smarty_tpl) {?>

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