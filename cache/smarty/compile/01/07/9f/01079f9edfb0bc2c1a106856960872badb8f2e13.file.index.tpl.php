<?php /* Smarty version Smarty-3.1.14, created on 2014-03-16 22:36:23
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236198463530a1cb7857206-08750409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01079f9edfb0bc2c1a106856960872badb8f2e13' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/index.tpl',
      1 => 1395005773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236198463530a1cb7857206-08750409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb78a1f00_86303568',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb78a1f00_86303568')) {function content_530a1cb78a1f00_86303568($_smarty_tpl) {?>

<div id="sloganbox">
<div class="divider">

<hr class="left"/>Les meubles qui s'adaptent à vos envies<hr class="right" />

</div>
</div>


</div>
<?php if (isset($_smarty_tpl->tpl_vars['hnfs_tabs']->value)){?>
<ul class="nav nav-tabs frame_wrap_header2">
    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hnfs_tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
       
        <?php if ($_smarty_tpl->tpl_vars['tab']->value=='blocknewproducts'){?>
        <li>
	<a href="#newproducts_home" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Nouveautés'),$_smarty_tpl);?>
</a>
        </li>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['tab']->value=='blockspecials'&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
        <li>
            <a href="#special_home" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Specials'),$_smarty_tpl);?>
</a>
        </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['tab']->value=='homefeatured'){?>
        <li class="active">
            <a href="#featuredproducts_home" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Meilleures ventes'),$_smarty_tpl);?>
</a>
        </li>
        <?php }?>
    <?php } ?>
</ul>
<div class="tab-content frame_wrap_content">
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