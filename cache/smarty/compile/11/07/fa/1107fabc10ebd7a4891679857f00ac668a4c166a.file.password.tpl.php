<?php /* Smarty version Smarty-3.1.14, created on 2014-03-31 14:47:45
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1368086657533963f1e4d172-00244569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1107fabc10ebd7a4891679857f00ac668a4c166a' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/password.tpl',
      1 => 1393177389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1368086657533963f1e4d172-00244569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'confirmation' => 0,
    'customer_email' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_533963f2142957_04940317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533963f2142957_04940317')) {function content_533963f2142957_04940317($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Forgot your password'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title"><?php echo smartyTranslate(array('s'=>'Forgot your password?'),$_smarty_tpl);?>
</div>
</div>
<div class="frame_wrap frame_wrap_content clearfix">

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==1){?>
<div class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Your password has been successfully reset and a confirmation has been sent to your email address:'),$_smarty_tpl);?>
 <?php if (isset($_smarty_tpl->tpl_vars['customer_email']->value)){?><?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['customer_email']->value, 'htmlall', 'UTF-8'));?>
<?php }?></div>
<?php }elseif(isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==2){?>
<div class="alert alert-success"><?php echo smartyTranslate(array('s'=>'A confirmation email has been sent to your address:'),$_smarty_tpl);?>
 <?php if (isset($_smarty_tpl->tpl_vars['customer_email']->value)){?><?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['customer_email']->value, 'htmlall', 'UTF-8'));?>
<?php }?></div>
<?php }else{ ?>
<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Please enter the email address you used to register. We will then send you a new password. '),$_smarty_tpl);?>
</div>
<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['request_uri']->value, 'htmlall', 'UTF-8');?>
" method="post" class="std" id="form_forgotpassword">
	<fieldset>
            <div class="col-lg-8 col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">Email:</span>
                    <input class="form-control" type="text" id="email" name="email" value="<?php if (isset($_POST['email'])){?><?php echo stripslashes(smarty_modifier_escape($_POST['email'], 'htmlall', 'UTF-8'));?>
<?php }?>" />
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit"><?php echo smartyTranslate(array('s'=>'Retrieve Password'),$_smarty_tpl);?>
</button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication');?>
" class="btn button" title="<?php echo smartyTranslate(array('s'=>'Back to Login'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Back to Login'),$_smarty_tpl);?>
</a>
	</fieldset>
</form>
<?php }?>
</div>
<?php }} ?>