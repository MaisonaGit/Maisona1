<?php /* Smarty version Smarty-3.1.14, created on 2014-01-09 17:18:35
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/cms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25737098552cecbdbc01d24-09260577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad129aee61da7938873cfac46a8969d957af29e' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/cms.tpl',
      1 => 1388801682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25737098552cecbdbc01d24-09260577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms' => 0,
    'cms_category' => 0,
    'base_dir' => 0,
    'content_only' => 0,
    'link' => 0,
    'sub_category' => 0,
    'subcategory' => 0,
    'cms_pages' => 0,
    'cmspages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cecbdc0243d2_82041217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cecbdc0243d2_82041217')) {function content_52cecbdc0243d2_82041217($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><?php if (isset($_smarty_tpl->tpl_vars['cms']->value)&&!isset($_smarty_tpl->tpl_vars['cms_category']->value)){?>
	<?php if (!$_smarty_tpl->tpl_vars['cms']->value->active){?>
		<br />
		<div id="admin-action-cms">
			<p><?php echo smartyTranslate(array('s'=>'This CMS page is not visible to your customers.'),$_smarty_tpl);?>

			<input type="hidden" id="admin-action-cms-id" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value->id;?>
" />
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishCMS('<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php echo smarty_modifier_escape($_GET['ad'], 'htmlall', 'UTF-8');?>
', 0, '<?php echo smarty_modifier_escape($_GET['adtoken'], 'htmlall', 'UTF-8');?>
')"/>
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishCMS('<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php echo smarty_modifier_escape($_GET['ad'], 'htmlall', 'UTF-8');?>
', 1, '<?php echo smarty_modifier_escape($_GET['adtoken'], 'htmlall', 'UTF-8');?>
')"/>
			</p>
			<div class="clear" ></div>
			<p id="admin-action-result"></p>
			</p>
		</div>
	<?php }?>
	<div class="rte<?php if ($_smarty_tpl->tpl_vars['content_only']->value){?> content_only<?php }?> frame_wrap">
		<?php echo $_smarty_tpl->tpl_vars['cms']->value->content;?>

	</div>
<?php }elseif(isset($_smarty_tpl->tpl_vars['cms_category']->value)){?>
	<div class="block-cms">
            <div class="frame_wrap frame_wrap_header clearfix">
		<div class="fwh-title"><a href="<?php if ($_smarty_tpl->tpl_vars['cms_category']->value->id==1){?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['cms_category']->value->id,$_smarty_tpl->tpl_vars['cms_category']->value->link_rewrite);?>
<?php }?>"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_category']->value->name, 'htmlall', 'UTF-8');?>
</a></div>
            </div>
            <div class="frame_wrap frame_wrap_content">
		<?php if (isset($_smarty_tpl->tpl_vars['sub_category']->value)&!empty($_smarty_tpl->tpl_vars['sub_category']->value)){?>	
			<p class="title_block"><?php echo smartyTranslate(array('s'=>'List of sub categories in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</p>
			<ul class="bullet">
				<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value){
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
					<li>
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_cms_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['subcategory']->value['name'], 'htmlall', 'UTF-8');?>
</a>
					</li>
				<?php } ?>
			</ul>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['cms_pages']->value)&&!empty($_smarty_tpl->tpl_vars['cms_pages']->value)){?>
		<p class="title_block"><?php echo smartyTranslate(array('s'=>'List of pages in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</p>
			<ul class="bullet">
				<?php  $_smarty_tpl->tpl_vars['cmspages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmspages']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmspages']->key => $_smarty_tpl->tpl_vars['cmspages']->value){
$_smarty_tpl->tpl_vars['cmspages']->_loop = true;
?>
					<li>
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['cmspages']->value['id_cms'],$_smarty_tpl->tpl_vars['cmspages']->value['link_rewrite']), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmspages']->value['meta_title'], 'htmlall', 'UTF-8');?>
</a>
					</li>
				<?php } ?>
			</ul>
		<?php }?>
            </div>
	</div>
<?php }else{ ?>
	<div class="alert alert-warning">
            <strong>Warning!</strong>
		<?php echo smartyTranslate(array('s'=>'This page does not exist.'),$_smarty_tpl);?>

	</div>
<?php }?>
<br /><?php }} ?>