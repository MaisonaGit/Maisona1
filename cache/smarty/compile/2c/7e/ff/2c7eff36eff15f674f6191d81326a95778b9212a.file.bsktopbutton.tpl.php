<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:45
         compiled from "/homez.742/maisona/www/maisona/modules/bsktopbutton/bsktopbutton.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186296092752ccc31d90a359-24388347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7eff36eff15f674f6191d81326a95778b9212a' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/bsktopbutton/bsktopbutton.tpl',
      1 => 1388801786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186296092752ccc31d90a359-24388347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31d961b28_43796422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31d961b28_43796422')) {function content_52ccc31d961b28_43796422($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['style']->value==1){?>
<div id="bsktopbutton" class="text"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['style']->value==2){?>
<div id="bsktopbutton" class="image"></div>
<?php }?><?php }} ?>