<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 18:59:57
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:417759302530a371d7a7865-81586136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cf16154a0ff97cfbcf2b14e8b57c3249a5f6091' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/errors.tpl',
      1 => 1393177386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417759302530a371d7a7865-81586136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a371d8809f1_36643758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a371d8809f1_36643758')) {function content_530a371d8809f1_36643758($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value){?>
	<div class="alert alert-danger">
		<p><?php if (count($_smarty_tpl->tpl_vars['errors']->value)>1){?><?php echo smartyTranslate(array('s'=>'There are %d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There is %d error','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }?></p>
		<ol>
		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
		<?php } ?>
		</ol>
		<?php if (isset($_SERVER['HTTP_REFERER'])&&!strstr($_smarty_tpl->tpl_vars['request_uri']->value,'authentication')&&preg_replace('#^https?://[^/]+/#','/',$_SERVER['HTTP_REFERER'])!=$_smarty_tpl->tpl_vars['request_uri']->value){?>
			<p class="lnk"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(smarty_modifier_escape($_SERVER['HTTP_REFERER'], 'htmlall', 'UTF-8'));?>
" title="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
">&laquo; <?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</a></p>
		<?php }?>
	</div>
<?php }?><?php }} ?>