<?php /* Smarty version Smarty-3.1.14, created on 2014-03-17 00:49:14
         compiled from "/homez.742/maisona/www/maisona/modules/yotpo/tpl/registrationForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9689990425326387ae8d6f0-99923793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '187390cb17a5bf7dde3d153394d386dc9a042794' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/yotpo/tpl/registrationForm.tpl',
      1 => 1395013591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9689990425326387ae8d6f0-99923793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yotpo_action' => 0,
    'yotpo_email' => 0,
    'yotpo_userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5326387b055317_92251456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326387b055317_92251456')) {function content_5326387b055317_92251456($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><div class="y-wrapper">
	<div class="y-side-box">
		<div class="y-side-header"><?php echo smartyTranslate(array('s'=>'Yotpo makes it easy to generate beautiful reviews for your products. These in turn lead to higher sales and happier customers.','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
		<hr />
		<div class="row-fluid y-features-list text-shadow">
			<ul>
				<li><i class="y-side-icon conversation-rate"></i><?php echo smartyTranslate(array('s'=>'Increase conversion rate','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon multi-languages"></i><?php echo smartyTranslate(array('s'=>'Multi languages','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon forever-free"></i><?php echo smartyTranslate(array('s'=>'Forever free','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon social-engagement"></i><?php echo smartyTranslate(array('s'=>'Increase social engagement','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon plug-play"></i><?php echo smartyTranslate(array('s'=>'Plug &amp; play installation','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon full-customization"></i><?php echo smartyTranslate(array('s'=>'Full customization','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon analytics"></i><?php echo smartyTranslate(array('s'=>'Advanced analytics','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon seo"></i><?php echo smartyTranslate(array('s'=>'SEO capabilities','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
			</ul>
		</div>
	</div>
	<div class="y-white-box">
		<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpo_action']->value, 'htmlall', 'UTF-8');?>
" method="post">
			<div class="y-page-header"><i class="y-logo"></i><?php echo smartyTranslate(array('s'=>'Create your Yotpo account','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
			<fieldset id="y-fieldset">
				<div class="y-header"><?php echo smartyTranslate(array('s'=>'Generate more reviews, more engagement, and more sales.','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-label"><?php echo smartyTranslate(array('s'=>'Email address:','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-input"><input type="text" name="yotpo_user_email" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpo_email']->value, 'htmlall', 'UTF-8');?>
" /></div>
				<div class="y-label"><?php echo smartyTranslate(array('s'=>'Name','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-input"><input type="text" name="yotpo_user_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpo_userName']->value, 'htmlall', 'UTF-8');?>
" /></div>
				<div class="y-label"><?php echo smartyTranslate(array('s'=>'Password','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-input"><input type="password" name="yotpo_user_password" /></div>
				<div class="y-label"><?php echo smartyTranslate(array('s'=>'Confirm password','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-input"><input type="password" name="yotpo_user_confirm_password" /></div>
			</fieldset>
			<div class="y-footer"><input type="submit" name="yotpo_register" value="<?php echo smartyTranslate(array('s'=>'Register','mod'=>'yotpo'),$_smarty_tpl);?>
" class="y-submit-btn" /></div>
		</form>
		<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yotpo_action']->value, 'htmlall', 'UTF-8');?>
" method="post">
			<div class="y-footer"><?php echo smartyTranslate(array('s'=>'Already using Yotpo?','mod'=>'yotpo'),$_smarty_tpl);?>
 <input type="submit" name="log_in_button" value="click here" class="y-already-logged-in" /></div>
		</form>
	</div>
</div><?php }} ?>