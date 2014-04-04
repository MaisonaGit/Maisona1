<?php /* Smarty version Smarty-3.1.14, created on 2014-03-12 01:29:27
         compiled from "/homez.742/maisona/www/maisona/modules/bskfacebookbox/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68472614531faa679ba6d6-78234425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fffa7f22c1e9a5f691feb7586900aac27f4f67cd' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/bskfacebookbox/settings.tpl',
      1 => 1388801788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68472614531faa679ba6d6-78234425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'fbpage' => 0,
    'width' => 0,
    'height' => 0,
    'colorscheme' => 0,
    'show_header' => 0,
    'show_stream' => 0,
    'show_faces' => 0,
    'show_border' => 0,
    'appId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531faa67b778c3_04257973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531faa67b778c3_04257973')) {function content_531faa67b778c3_04257973($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<form method="post" enctype="multipart/form-data">
    <fieldset>
        <legend><?php echo smartyTranslate(array('s'=>'Facebook Box'),$_smarty_tpl);?>
</legend>

        <div class="opt clearfix">
            <label for="fbpage"><?php echo smartyTranslate(array('s'=>'Page'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <input id="fbpage" type="text" name="fbpage" value="<?php echo $_smarty_tpl->tpl_vars['fbpage']->value;?>
" style="width:250px" required>
            </div>
        </div>
        <div class="opt clearfix">
            <label for="width"><?php echo smartyTranslate(array('s'=>'Width'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <input id="width" type="text" name="width" value="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" style="width:250px" required>
            </div>
        </div>
        <div class="opt clearfix">
            <label for="height"><?php echo smartyTranslate(array('s'=>'Height'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <input id="height" type="text" name="height" value="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" style="width:250px">
            </div>
        </div>
        <div class="opt clearfix">
            <label for="colorscheme"><?php echo smartyTranslate(array('s'=>'Color scheme'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <select id="colorscheme" name="colorscheme">
                    <option value="light" <?php if ($_smarty_tpl->tpl_vars['colorscheme']->value=='light'){?>selected<?php }?>>light</option>
                    <option value="dark" <?php if ($_smarty_tpl->tpl_vars['colorscheme']->value=='dark'){?>selected<?php }?>>dark</option>
                </select>
            </div>
        </div>
        <div class="opt clearfix">
            <label for="show_header"><?php echo smartyTranslate(array('s'=>'Show Header'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <input id="show_header" type="checkbox" name="show_header" <?php if ($_smarty_tpl->tpl_vars['show_header']->value=='on'){?>checked<?php }?>>
            </div>
        </div>
        <div class="opt clearfix">
            <label for="show_stream"><?php echo smartyTranslate(array('s'=>'Show Stream'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <input id="show_stream" type="checkbox" name="show_stream" <?php if ($_smarty_tpl->tpl_vars['show_stream']->value=='on'){?>checked<?php }?>>
            </div>
        </div>
        <div class="opt clearfix">
            <label for="show_faces"><?php echo smartyTranslate(array('s'=>'Show Faces'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <input id="show_faces" type="checkbox" name="show_faces" <?php if ($_smarty_tpl->tpl_vars['show_faces']->value=='on'){?>checked<?php }?>>
            </div>
        </div>
        <div class="opt clearfix">
            <label for="show_show_border"><?php echo smartyTranslate(array('s'=>'Show Border'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <input id="show_border" type="checkbox" name="show_border" <?php if ($_smarty_tpl->tpl_vars['show_border']->value=='on'){?>checked<?php }?>>
            </div>
        </div>
        <div class="opt clearfix">
            <label for="appId"><?php echo smartyTranslate(array('s'=>'App ID'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <input id="appId" type="text" name="appId" value="<?php echo $_smarty_tpl->tpl_vars['appId']->value;?>
" style="width:250px">
            </div>
        </div>

        <div class="margin-form">
            <input class="button" type="submit" name="saveBtn" value="Save">
        </div>
    </fieldset>
</form><?php }} ?>