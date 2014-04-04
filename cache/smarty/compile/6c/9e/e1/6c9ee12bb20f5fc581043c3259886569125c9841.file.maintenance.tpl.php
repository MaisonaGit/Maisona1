<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 20:36:49
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1165100675530a23a1416500-44182267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c9ee12bb20f5fc581043c3259886569125c9841' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/maintenance.tpl',
      1 => 1393177387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1165100675530a23a1416500-44182267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a23a15cf9d1_85078780',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a23a15cf9d1_85078780')) {function content_530a23a15cf9d1_85078780($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
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