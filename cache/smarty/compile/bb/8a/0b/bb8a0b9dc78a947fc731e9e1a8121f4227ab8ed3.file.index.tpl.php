<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:45
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75716045252ccc31d9efe28-96134193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8a0b9dc78a947fc731e9e1a8121f4227ab8ed3' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/index.tpl',
      1 => 1388801682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75716045252ccc31d9efe28-96134193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hnfs_tabs' => 0,
    'tab' => 0,
    'PS_CATALOG_MODE' => 0,
    'HOOK_HOME_NFS' => 0,
    'HOOK_HOME' => 0,
    'HOOK_BLUE_BLOCK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31da51349_98188583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31da51349_98188583')) {function content_52ccc31da51349_98188583($_smarty_tpl) {?>


<?php if (isset($_smarty_tpl->tpl_vars['hnfs_tabs']->value)){?>
<ul class="nav nav-tabs frame_wrap frame_wrap_header">
    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hnfs_tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value=='homefeatured'){?>
        <li class="active">
            <a href="#featuredproducts_home" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Featured products'),$_smarty_tpl);?>
</a>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value=='blocknewproducts'){?>
        <li>
            <a href="#newproducts_home" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'New products'),$_smarty_tpl);?>
</a>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value=='blockspecials'&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
        <li>
            <a href="#special_home" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Specials'),$_smarty_tpl);?>
</a>
        </li>
        <?php }?>
    <?php } ?>
</ul>
<div class="tab-content frame_wrap frame_wrap_content">
<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_NFS']->value;?>

</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['HOOK_BLUE_BLOCK']->value)){?>
<div class="blue_block clearfix">
<?php echo $_smarty_tpl->tpl_vars['HOOK_BLUE_BLOCK']->value;?>

</div>
<?php }?>
<?php }} ?>