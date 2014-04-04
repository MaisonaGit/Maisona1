<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 07:17:19
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115703472352cced6f519005-68017556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce208b195693362e5a76846930e22173d2e2d415' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115703472352cced6f519005-68017556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cced6f56c672_71794718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cced6f56c672_71794718')) {function content_52cced6f56c672_71794718($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
<a href="#" id="wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
<?php }?><?php }} ?>