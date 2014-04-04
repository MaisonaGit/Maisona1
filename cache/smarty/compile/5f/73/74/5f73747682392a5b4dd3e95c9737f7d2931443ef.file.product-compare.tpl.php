<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 07:17:09
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102265603752cced65c699e3-35091939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f73747682392a5b4dd3e95c9737f7d2931443ef' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/product-compare.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102265603752cced65c699e3-35091939',
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
  'unifunc' => 'content_52cced65ca6972_27756080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cced65ca6972_27756080')) {function content_52cced65ca6972_27756080($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
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