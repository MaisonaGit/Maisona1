<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:42
         compiled from "/homez.742/maisona/www/maisona/modules/bskblockadvertising/bskblockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150310799352ccc31a813f70-08375142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c08f23b98c8082649172f18b4c204646c2f9d0c' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/bskblockadvertising/bskblockadvertising.tpl',
      1 => 1388801784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150310799352ccc31a813f70-08375142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img1_link' => 0,
    'img1_title' => 0,
    'img1_path' => 0,
    'img2_link' => 0,
    'img2_title' => 0,
    'img2_path' => 0,
    'img3_link' => 0,
    'img3_title' => 0,
    'img3_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31a89f993_33530686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31a89f993_33530686')) {function content_52ccc31a89f993_33530686($_smarty_tpl) {?><!-- MODULE Block advertising -->
<div id="bsk_advertising_block" class="row">
    <div class="adv col-lg-4 col-lg-offset-0 col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
	<a href="<?php echo $_smarty_tpl->tpl_vars['img1_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['img1_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img1_path']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['img1_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['img1_title']->value;?>
"/></a>
    </div>
    <div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'xs'),$_smarty_tpl);?>
"></div>
    <div class="adv col-lg-4 col-lg-offset-0 col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
        <a href="<?php echo $_smarty_tpl->tpl_vars['img2_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['img2_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img2_path']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['img2_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['img2_title']->value;?>
"/></a>
    </div>
    <div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'sm'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'xs'),$_smarty_tpl);?>
"></div>
    <div class="adv col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <a href="<?php echo $_smarty_tpl->tpl_vars['img3_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['img3_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img3_path']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['img3_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['img3_title']->value;?>
"/></a>
    </div>
    <div class="clearfix clearRow"></div>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>