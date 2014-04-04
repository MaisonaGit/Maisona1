<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 18:48:27
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/bskfacebookbox/bskfacebookbox_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14020623530a1cb7395563-36150565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aae5b3b39a8f458bd4e0cc9e466b21e02589e45' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/bskfacebookbox/bskfacebookbox_footer.tpl',
      1 => 1393177460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14020623530a1cb7395563-36150565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb73d1cb9_07717537',
  'variables' => 
  array (
    'fbpage' => 0,
    'width' => 0,
    'height' => 0,
    'colorscheme' => 0,
    'show_faces' => 0,
    'show_stream' => 0,
    'show_border' => 0,
    'show_header' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb73d1cb9_07717537')) {function content_530a1cb73d1cb9_07717537($_smarty_tpl) {?><div id="bskfacebookbox" class="footer_block col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <?php if ($_smarty_tpl->tpl_vars['fbpage']->value){?>
    <div class="fb-like-box" 
         data-href="https://www.facebook.com/<?php echo $_smarty_tpl->tpl_vars['fbpage']->value;?>
" 
         data-width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" 
         data-height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" 
         data-colorscheme="<?php echo $_smarty_tpl->tpl_vars['colorscheme']->value;?>
"
         data-show-faces="<?php if ($_smarty_tpl->tpl_vars['show_faces']->value=='on'){?>true<?php }else{ ?>false<?php }?>" 
         data-stream="<?php if ($_smarty_tpl->tpl_vars['show_stream']->value=='on'){?>true<?php }else{ ?>false<?php }?>" 
         data-show-border="<?php if ($_smarty_tpl->tpl_vars['show_border']->value=='on'){?>true<?php }else{ ?>false<?php }?>" 
         data-header="<?php if ($_smarty_tpl->tpl_vars['show_header']->value=='on'){?>true<?php }else{ ?>false<?php }?>"></div>
    <?php }else{ ?>
    <div class="alert alert-warning">There is no page name set for the facebook box!</div>    
    <?php }?>
</div><?php }} ?>