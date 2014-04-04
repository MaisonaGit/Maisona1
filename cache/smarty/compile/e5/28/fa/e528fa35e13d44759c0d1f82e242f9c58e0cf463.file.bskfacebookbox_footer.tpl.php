<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:45
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/bskfacebookbox/bskfacebookbox_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203502321652ccc31d3128a9-04879209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e528fa35e13d44759c0d1f82e242f9c58e0cf463' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/bskfacebookbox/bskfacebookbox_footer.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203502321652ccc31d3128a9-04879209',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31d34ea33_64393480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31d34ea33_64393480')) {function content_52ccc31d34ea33_64393480($_smarty_tpl) {?><div id="bskfacebookbox" class="footer_block col-lg-3 col-md-3 col-sm-6 col-xs-12">
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