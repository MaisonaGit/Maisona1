<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 18:59:57
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1601956060530a371d993e94-15473977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5d0abef7f3276680d63292ed00277cf6c473827' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/category-count.tpl',
      1 => 1393177385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1601956060530a371d993e94-15473977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a371da1bbf5_65912198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a371da1bbf5_65912198')) {function content_530a371da1bbf5_65912198($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>