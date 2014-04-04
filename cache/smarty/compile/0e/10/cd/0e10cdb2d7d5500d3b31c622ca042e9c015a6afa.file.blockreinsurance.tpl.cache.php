<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:43
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blockreinsurance/blockreinsurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130398750152ccc31b68bc25-36961395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e10cdb2d7d5500d3b31c622ca042e9c015a6afa' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blockreinsurance/blockreinsurance.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130398750152ccc31b68bc25-36961395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'module_dir' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31b6bf829_87360555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31b6bf829_87360555')) {function content_52ccc31b6bf829_87360555($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0){?>
<!-- MODULE Block reinsurance -->
<div id="reinsurance_block" class="col-lg-8 col-xs-12">
    <ul class="clearfix">	
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
        <li class="col-lg-4 col-sm-4 col-xs-12">
            <img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['info']->value['file_name'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
" />
            <div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
</div>
        </li>
        <?php } ?>
    </ul>
</div>
<!-- /MODULE Block reinsurance -->
<?php }?><?php }} ?>