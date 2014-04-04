<?php /* Smarty version Smarty-3.1.14, created on 2014-01-27 08:50:48
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200547556052e60fd86f9e42-99172581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dc3a197403371563f3a9c81bb8242c00408f96b' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/maintenance.tpl',
      1 => 1388801682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200547556052e60fd86f9e42-99172581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'favicon_url' => 0,
    'css_dir' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_MAINTENANCE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e60fd8a21310_04592435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e60fd8a21310_04592435')) {function content_52e60fd8a21310_04592435($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
    <title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)){?>
    <meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'htmlall', 'UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)){?>
    <meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'htmlall', 'UTF-8');?>
" />
<?php }?>
    <meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,follow" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
/webtools/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
global.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="maintenance">
        <div class="frame_wrap frame_wrap_header clearfix">
            <div class="fwh-title">
                <?php echo smartyTranslate(array('s'=>'Maintanance mode'),$_smarty_tpl);?>

            </div>
        </div>
        <div class="frame_wrap frame_wrap_content">
            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value){?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value){?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="logo" />
            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value)){?>
            <div class="clearfix">
            <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

            </div>
            <?php }?>
            <div class="alert alert-info">
               <p><strong><?php echo smartyTranslate(array('s'=>'In order to perform website maintenance, our online store will be temporarily offline.'),$_smarty_tpl);?>
</strong></p>
               <p><?php echo smartyTranslate(array('s'=>'We apologize for the inconvenience and ask that you please try again later.'),$_smarty_tpl);?>
</p>
            </div>
        </div>
    </div>
</body>
</html>
<?php }} ?>