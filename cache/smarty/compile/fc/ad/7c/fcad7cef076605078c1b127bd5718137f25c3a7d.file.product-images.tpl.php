<?php /* Smarty version Smarty-3.1.14, created on 2014-03-17 03:06:13
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/mobile/product-images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91225631653265895dcd5f7-09474805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcad7cef076605078c1b127bd5718137f25c3a7d' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/mobile/product-images.tpl',
      1 => 1393177419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91225631653265895dcd5f7-09474805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'product' => 0,
    'image_cover' => 0,
    'imageIds' => 0,
    'link' => 0,
    'image' => 0,
    'mediumSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53265895eb64f8_04696405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53265895eb64f8_04696405')) {function content_53265895eb64f8_04696405($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?>

<div class="view_product">
	<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>0){?>
	<!-- thumbnails -->
	<div data-role="header" class="ui-bar-a list_view">
		<?php $_smarty_tpl->tpl_vars['image_cover'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getCover($_smarty_tpl->tpl_vars['product']->value->id), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image_cover']->value['id_image']), null, 0);?>
		<img id="bigpic" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8');?>
" />
		<div class="thumbs_list">
			<ul id="gallery" class="thumbs_list_frame clearfix">
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
				<li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
">
					<img id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'medium_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend']);?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" data-large="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
" />
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>
	<?php }?>
</div>
<?php }} ?>