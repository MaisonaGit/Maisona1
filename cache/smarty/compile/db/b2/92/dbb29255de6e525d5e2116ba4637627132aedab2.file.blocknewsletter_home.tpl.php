<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 18:48:24
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blocknewsletter/blocknewsletter_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1062142656530a1cb63eb283-90977913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbb29255de6e525d5e2116ba4637627132aedab2' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blocknewsletter/blocknewsletter_home.tpl',
      1 => 1393177453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1062142656530a1cb63eb283-90977913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb641ab09_43783613',
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb641ab09_43783613')) {function content_530a1cb641ab09_43783613($_smarty_tpl) {?>

<!-- Block Newsletter module-->
<div id="newsletter_blue_block" class="col-xs-12 col-lg-4">
    <p class="title_block"><?php echo smartyTranslate(array('s'=>'Subscribe to our Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</p>
    <div class="block_content">
    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
        <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>alert-danger<?php }else{ ?>alert-success<?php }?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        </div>
    <?php }?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
#newsletter_blue_block" method="post">
            <div class="clearfix">
                <div class="col-lg-10 col-lg-offset-0 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                    <input class="form-control" type="text" name="email" size="18" placeholder="<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
" />
                </div>
                <input type="submit" value="ok" class="button_mini" name="submitNewsletter" />
                <input type="hidden" name="action" value="0" />
            </div>
        </form>
    </div>
</div>
<!-- /Block Newsletter module-->
<?php }} ?>