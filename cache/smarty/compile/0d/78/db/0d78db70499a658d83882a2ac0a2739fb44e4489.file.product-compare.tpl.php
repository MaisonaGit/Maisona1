<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 18:59:57
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1995556487530a371dc72a14-33568099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d78db70499a658d83882a2ac0a2739fb44e4489' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/product-compare.tpl',
      1 => 1393177390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1995556487530a371dc72a14-33568099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a371dca0ee8_58906545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a371dca0ee8_58906545')) {function content_530a371dca0ee8_58906545($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
//]]>
</script>

    <form id="compare_form" class="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>false,'media'=>'xs'),$_smarty_tpl);?>
" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison');?>
" onsubmit="true">
        <p>
        <input type="submit" id="bt_compare" class="btn button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
        <input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
        </p>
    </form>
<?php }?>

<?php }} ?>