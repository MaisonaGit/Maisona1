<?php /* Smarty version Smarty-3.1.14, created on 2014-03-17 00:50:54
         compiled from "/homez.742/maisona/www/maisona/modules/yotpo/tpl/widgetDiv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1489027405532638dec19d88-78499605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf2851def54d1854a7facc5923191f2ac08a88a' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/yotpo/tpl/widgetDiv.tpl',
      1 => 1395013591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1489027405532638dec19d88-78499605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yotpoAppkey' => 0,
    'yotpoDomain' => 0,
    'yotpoProductId' => 0,
    'yotpoProductModel' => 0,
    'yotpoProductName' => 0,
    'yotpoProductLink' => 0,
    'yotpoProductImageUrl' => 0,
    'yotpoProductDescription' => 0,
    'yotpoProductBreadCrumbs' => 0,
    'yotpoLanguage' => 0,
    'richSnippetsCode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_532638ded1c622_93947328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532638ded1c622_93947328')) {function content_532638ded1c622_93947328($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><div class="yotpo reviews" 
   data-appkey="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpoAppkey']->value, 'htmlall', 'UTF-8');?>
"
   data-domain="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpoDomain']->value, 'htmlall', 'UTF-8');?>
"
   data-product-id="<?php echo intval($_smarty_tpl->tpl_vars['yotpoProductId']->value);?>
"
   data-product-models="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpoProductModel']->value, 'htmlall', 'UTF-8');?>
" 
   data-name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpoProductName']->value, 'htmlall', 'UTF-8');?>
" 
   data-url="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpoProductLink']->value, 'htmlall', 'UTF-8');?>
" 
   data-image-url="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpoProductImageUrl']->value, 'htmlall', 'UTF-8');?>
" 
   data-description="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpoProductDescription']->value, 'htmlall', 'UTF-8');?>
" 
   data-bread-crumbs="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpoProductBreadCrumbs']->value, 'htmlall', 'UTF-8');?>
"
   data-lang="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpoLanguage']->value, 'htmlall', 'UTF-8');?>
">
   <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['richSnippetsCode']->value, 'UTF-8');?>

   </div>
<?php }} ?>