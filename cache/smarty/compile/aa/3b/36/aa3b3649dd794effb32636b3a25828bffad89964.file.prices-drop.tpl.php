<?php /* Smarty version Smarty-3.1.14, created on 2014-03-10 08:59:50
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/prices-drop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:980878870531d70f66fc537-89410248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa3b3649dd794effb32636b3a25828bffad89964' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/prices-drop.tpl',
      1 => 1393177390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '980878870531d70f66fc537-89410248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531d70f6793137_56530181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d70f6793137_56530181')) {function content_531d70f6793137_56530181($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title"><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
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
<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


	<?php }else{ ?>
	<div class="alert alert-warning">
            <strong>Warning!</strong>
            <?php echo smartyTranslate(array('s'=>'No price drop'),$_smarty_tpl);?>

        </div>
<?php }?>
</div><?php }} ?>