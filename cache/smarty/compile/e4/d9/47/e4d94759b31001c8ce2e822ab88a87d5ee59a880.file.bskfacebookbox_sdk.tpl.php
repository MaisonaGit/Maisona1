<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:43
         compiled from "/homez.742/maisona/www/maisona/modules/bskfacebookbox/bskfacebookbox_sdk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194604541252ccc31b938a65-40318363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d94759b31001c8ce2e822ab88a87d5ee59a880' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/bskfacebookbox/bskfacebookbox_sdk.tpl',
      1 => 1388801788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194604541252ccc31b938a65-40318363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sdkLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31b95b168_82124317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31b95b168_82124317')) {function content_52ccc31b95b168_82124317($_smarty_tpl) {?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "<?php echo $_smarty_tpl->tpl_vars['sdkLink']->value;?>
";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><?php }} ?>