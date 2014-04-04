<?php /* Smarty version Smarty-3.1.14, created on 2014-03-14 00:58:59
         compiled from "/homez.742/maisona/www/maisona/modules/bsktopbutton/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:912944723532246437e06a0-77920419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f526e2bcb90b71aa850c6ac397f787792a057e1a' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/bsktopbutton/settings.tpl',
      1 => 1388801788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '912944723532246437e06a0-77920419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'text' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53224643821450_95934439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53224643821450_95934439')) {function content_53224643821450_95934439($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<form method="post" enctype="multipart/form-data">
    <fieldset>
        <legend><?php echo smartyTranslate(array('s'=>'BitSHOK Go Top Button'),$_smarty_tpl);?>
</legend>

        <div class="opt clearfix">
            <label for="text"><?php echo smartyTranslate(array('s'=>'Text'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <input id="text" type="text" name="text" value="<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
" style="width: 80px">
                <span class="desc">The text which will be displayed on the button.</span>
            </div>
        </div>
        <div class="opt clearfix">
            <label for="style"><?php echo smartyTranslate(array('s'=>'Style:'),$_smarty_tpl);?>
</label>
            <div class="margin-form">
                <select id="style" name="style">
                    <?php if ($_smarty_tpl->tpl_vars['style']->value==1){?>
                    <option value="1">Text</option>
                    <option value="2">Image</option>
                    <?php }elseif($_smarty_tpl->tpl_vars['style']->value==2){?> 
                    <option value="2">Image</option>
                    <option value="1">Text</option>
                    <?php }?>
                </select>
            </div>
        </div>

        <div class="margin-form">
            <input class="button" type="submit" name="saveBtn" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
">
        </div>
    </fieldset>
</form><?php }} ?>