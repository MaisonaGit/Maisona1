<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:42
         compiled from "/homez.742/maisona/www/maisona/modules/bskcameraslider/bskcameraslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208247095452ccc31a6a1529-11656345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47ba5c9fd880d1f6d62572655875d019d77ecf27' => 
    array (
      0 => '/homez.742/maisona/www/maisona/modules/bskcameraslider/bskcameraslider.tpl',
      1 => 1388801788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208247095452ccc31a6a1529-11656345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bskslider' => 0,
    'bskslider_slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31a774a14_32517582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31a774a14_32517582')) {function content_52ccc31a774a14_32517582($_smarty_tpl) {?><!-- Module bskSlider -->
<?php if (isset($_smarty_tpl->tpl_vars['bskslider']->value)){?>
<script type="text/javascript">
var bskslider_transition        = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['transition'];?>
';
var bskslider_thumb             = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['thumb'];?>
';
var bskslider_height            = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['height'];?>
';
var bskslider_autoadvance       = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['autoadvance'];?>
';
var bskslider_loader            = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['loader'];?>
';
var bskslider_navigation        = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['navigation'];?>
';
var bskslider_navigationHover   = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['navigationhover'];?>
';
var bskslider_playpause         = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['playpause'];?>
';
var bskslider_piediameter       = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['piediameter'];?>
';
var bskslider_pieposition       = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['pieposition'];?>
';
var bskslider_barposition       = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['barposition'];?>
';
var bskslider_bardirection      = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['bardirection'];?>
';
var bskslider_loaderopacity     = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['loaderopacity'];?>
';
var bskslider_pauseonclick      = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['pauseonclick'];?>
';
var bskslider_time              = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['time'];?>
';
var bskslider_transperiod       = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['transperiod'];?>
';
var bskslider_portrait          = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['portrait'];?>
';
var bskslider_loaderbgcolor     = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['loaderbgcolor'];?>
';
var bskslider_loadercolor       = '<?php echo $_smarty_tpl->tpl_vars['bskslider']->value['loadercolor'];?>
';
</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['bskslider_slides']->value)){?>
<div class="camera_wrap <?php echo $_smarty_tpl->tpl_vars['bskslider']->value['skin'];?>
" id="camera_wrap_1">
<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bskslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']){?>
    <div <?php if ($_smarty_tpl->tpl_vars['slide']->value['url']){?>data-link="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
"<?php }?> data-thumb="<?php echo @constant('_MODULE_DIR_');?>
/bskcameraslider/images/<?php echo $_smarty_tpl->tpl_vars['slide']->value['thumb'];?>
" data-src="<?php echo @constant('_MODULE_DIR_');?>
/bskcameraslider/images/<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['slide']->value['description']){?>
        <div class="camera_caption fadeFromBottom">
            <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

        </div>
        <?php }?>
    </div>
	<?php }?>
<?php } ?>
</div><!-- #camera_wrap_1 -->
<?php }?>
<!-- /Module bskSlider --><?php }} ?>