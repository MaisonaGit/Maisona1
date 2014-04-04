<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:41
         compiled from "/homez.742/maisona/www/maisona/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164366035952ccc319d38c31-13087039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea81348db27ce74e523d043101ed77bc0bfc8c80' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/feeder/feederHeader.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164366035952ccc319d38c31-13087039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc319d99345_94232940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc319d99345_94232940')) {function content_52ccc319d99345_94232940($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>