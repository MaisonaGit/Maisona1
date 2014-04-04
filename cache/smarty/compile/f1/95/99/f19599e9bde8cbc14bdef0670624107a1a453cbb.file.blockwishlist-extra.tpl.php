<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 21:27:04
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:962038149530a599870a564-82277068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f19599e9bde8cbc14bdef0670624107a1a453cbb' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1393177459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '962038149530a599870a564-82277068',
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
  'unifunc' => 'content_530a599874ea76_59090629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a599874ea76_59090629')) {function content_530a599874ea76_59090629($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
<a href="#" id="wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
<?php }?><?php }} ?>