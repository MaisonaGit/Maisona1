<?php /* Smarty version Smarty-3.1.14, created on 2014-03-10 09:00:37
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1729652313531d71256108e3-78327150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba169c84621e0e05a098654d4b8b17c4cb94ef9' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/manufacturer.tpl',
      1 => 1393177387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1729652313531d71256108e3-78327150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531d71256f2e18_22269474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d71256f2e18_22269474')) {function content_531d71256f2e18_22269474($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)){?>
    <div class="frame_wrap frame_wrap_header clearfix">
	<div class="fwh-title">
            <?php echo smartyTranslate(array('s'=>'Products by'),$_smarty_tpl);?>
&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['manufacturer']->value->name, 'htmlall', 'UTF-8');?>

        </div>
        <div class="frame_secondary clearfix">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-views.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="sortPagiBar clearfix">
                <?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
        </div>
    </div>
    <div class="frame_wrap frame_wrap_content">
	<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)||!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
		<div class="description_box">
			<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
				<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->short_description;?>
</p>
				<p class="hide_desc"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>
				<a href="#" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide(); return false;"><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
</a>
			<?php }else{ ?>
				<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>
			<?php }?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

        
	<?php }else{ ?>
	<div class="alert alert-warning">
            <strong>Warning!</strong>
            <?php echo smartyTranslate(array('s'=>'No products for this manufacturer.'),$_smarty_tpl);?>

        </div>
	<?php }?> 
    </div>
    <!--pagination-->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--/pagination-->
<?php }?>
<?php }} ?>